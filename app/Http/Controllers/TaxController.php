<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Datatables;
use App\Tax;
class TaxController extends Controller
{
//Show Tax data
public function getTaxIndex(){
$tax = Tax::all();
return Datatables($tax)->make(true);
}
public function getTaxShow(){
return view('admin/tax/all');
}
//Add Tax Data
public function getTaxAdd(Request $request){
return view('admin/tax/add');
}
public function postTaxAdd(Request $request){
$tax = new Tax;
$request ->validate([
'tax_name'=>'required',
'tax_percentage'=>'required'
]);
$tax->tax_name = $request->tax_name;
$tax->tax_percentage = $request->tax_percentage;
$tax->save();
return redirect('admin/tax/all');
}
//Update Tax Data
public function getTaxUpdate($id){
$tax = Tax::find($id);
return view('admin.tax.update')->with('tax',$tax);
}
public function postTaxUpdate(Request $request){
$tax = Tax::find($request->id);
$request->validate([
'tax_name'=>'required',
'tax_percentage'=>'required'
]);
$tax->tax_name = $request->tax_name;
$tax->tax_percentage = $request->tax_percentage;
$tax->save();
return redirect('admin/tax/all');
}
//Delete Tax Data
public function getTaxInactive(Request $request){
$deactive = Tax::find($request->id);

if($deactive!=""){
$deactive->is_active = 0;
}
$deactive->save();
return redirect('admin/tax/all');
}
public function getTaxActive(Request $request){
$active = Tax::find($request->id);

if($active!=""){
$active->is_active=1;
}
$active->save();
return redirect('admin/tax/all');
}
}
