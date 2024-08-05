<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Timezone;
use Datatables;
class TimezoneController extends Controller
{
//Show Time Zone Data
public function getTimezoneIndex(){
$timezone = Timezone::all();
return Datatables($timezone)->make(true);
}
public function getTimezoneShow(){
return view('admin/timezone/all');
}
//Add Timezone Data
public function getTimezoneAdd(Request $request){
return view('admin/timezone/add');
}
public function postTimezoneAdd(Request $request){
$timezone = new Timezone;
$request->validate([
'timezone'=>'required',
'timezonedetails'=>'required'
]);
$timezone->timezone = $request->timezone;
$timezone->timezonedetails = $request->timezonedetails;
$timezone->save();
return redirect('admin/timezone/all');
}	
//Update Timezone Data
public function getTimezoneUpdate($id){
$timezone = Timezone::find($id);
return view('admin/timezone/update')->with('timezone',$timezone);
}
public function postTimezoneUpdate(Request $request){
$timezone = Timezone::find($request->id);
$request->validate([
'timezone' => 'required',
'timezonedetails' => 'required'
]);
$timezone->timezone = $request->timezone;
$timezone->timezonedetails = $request->timezonedetails;
$timezone->save();
return redirect('admin/timezone/all');
}
//Delete Timezone data
public function getTimezoneInactive(Request $request){
$deactive = Timezone::find($request->id);
if($deactive!=""){
$deactive->is_active=0;
}
$deactive->save();
return redirect('admin/timezone/all');
}
public function getTimezoneActive(Request $request){
$active = Timezone::find($request->id);
if($active != ""){
$active->is_active=1;
}
$active->save();
return redirect('admin/timezone/all');
}
}
