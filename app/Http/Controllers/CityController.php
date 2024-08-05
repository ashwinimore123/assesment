<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{Country,State,City};
use Datatables;
class CityController extends Controller
{
//Show the State Data ============================
public function getCityIndex(){
$city = City::all();
return Datatables($city)->make(true);
}
public function getCityShow(){
return view('admin/city/all');
}
//Add City Data
public function getCityAdd(Request $request){
$states = State::where('is_active',1)->get();
return view('admin/city/add')->with('states',$states);
}
public function  postCityAdd(Request $request){
$city = new City;
$request->validate([
'city_name'=>'required',
'state_id'=>'required'
]);
$city->state_id = $request->state_id;
$city->city_name = $request->city_name;
$city->save();
return redirect('admin/city/all');
}
//Update City Data
public function getCityUpdate($id){
$city = City::find($id);
$states = State::where('is_active',1)->get();
return view('admin/city/update')->with('states',$states)->with('city',$city);
}

public function postCityUpdate(Request $request){
$city = City::find($request->id);
$request->validate([
'state_id'=>'required',
'city_name'=>'required'  
]);
$city->state_id = $request->state_id;
$city->city_name = $request->city_name;
$city->save();
return redirect('admin/city/all');
}
//Delete City Data
public function getCityInactive(Request $request){
$deactive = City::find($request->id);
if ($deactive!="") {
$deactive->is_active=0;
}
$deactive -> save();
return redirect('admin/city/all');
}
public function getCityActive(Request $request){
$active = City::find($request->id);
if ($active!="") {
$active->is_active=1;
}
$active->save();
return redirect('admin/city/all');
}
}