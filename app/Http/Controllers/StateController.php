<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{Country,State,City};
use Datatables;
class StateController extends Controller
{
//Show the State Data ============================
public function getStateIndex(){
$state = State::all();
return Datatables($state)->make(true);
}
public function getStateShow(){
return view('admin/state/all');
}
//Add State Data=================================
public function getStateAdd(Request $request){
$countries = Country::where('is_active',1)->get();
return view('admin/state/add')->with('countries',$countries);
}
public function postStateAdd(Request $request){
$state = new State;
$request -> validate([
'country_id'=>'required',
'state_name'=>'required'
]);
$state->country_id = $request->country_id;
$state->state_name = $request->state_name;
$state->save();
return redirect('admin/state/all');
}

//Update State Data
public function getStateUpdate($id){
$state = State::find($id);
$countries = Country::where('is_active',1)->get();
return view('admin.state.update')->with('state',$state)
->with('countries',$countries);
}
public function postStateUpdate(Request $request){
$state = State::find($request->id);
$request -> validate([
'country_id'=>'required',
'state_name'=>'required'
]);
$state->country_id = $request->country_id;
$state->state_name = $request->state_name;
$state->save();
return redirect('admin/state/all');
}
//Delete State Data
public function getStateInactive(Request $request){
$deactive =State::find($request->id);
if($deactive!=""){
$deactive->is_active=0;
}
$deactive->save();
return redirect('admin/state/all');
}
public function getStateActive(Request $request){
$active=State::find($request->id);
if($active!=""){
$active->is_active=1;
}
$active->save();
return redirect('admin/state/all');
}
}

