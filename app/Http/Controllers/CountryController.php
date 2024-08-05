<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Country;
use Datatables;
class CountryController extends Controller
{
//Show Country Data
function getCountryIndex(){
$country = Country::all();
return Datatables($country)->make(true);
}
function getCountryShow(){
return view('admin/country/all');
}
//Add Country Data
function getCountryAdd(Request $request){
return view('admin/country/add');
}
function postCountryAdd(Request $request){
$country = new Country;
$request->validate([
'country_name' => 'required'
]);
$country->country_name = $request->country_name;
$country->save();
return redirect('admin/country/all');
}
//Update Country Data
function getCountryUpdate($id){
$country = Country::find($id);
return view('admin.country.update')->with('country',$country);
}
function postCountryUpdate(Request $request){
$country = Country::find($request->id);
$request->validate([
'country_name' => 'required'
]);
$country->country_name = $request->country_name;
$country->save();
return redirect('admin/country/all');
}
//Delete Country Data
public function getCountryInactive(Request $request){
$deactive =Country::find($request->id);
if($deactive!=""){
$deactive->is_active=0;
}
$deactive->save();
return redirect('admin/country/all');
}
public function getCountryActive(Request $request){
$active=Country::find($request->id);
if($active!=""){
$active->is_active=1;
}
$active->save();
return redirect('admin/country/all');
}
}
