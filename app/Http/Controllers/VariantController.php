<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Variant;
class VariantController extends Controller
{
//Show Variant Data
public function getVariantIndex(){
$variant = Variant::all();
return Datatables($variant)->make(true);
}
public function getVariantShow(){
return view('variant/all');
}
//Add Variant Data
public function getVariantAdd(){
return view('variant/add');
}
public function postVariantAdd(Request $request){
$request->validate([
'variant_name'=>'required',
]);
$variant = new Variant;
$variant->variant_name = $request->variant_name;
$variant->save();
return redirect('admin/variant/all');
}
//Update Variant Data
public function getVariantUpdate($id){
$variant = Variant::find($id);
return view('variant/update')->with('variant',$variant);
}
public function postVariantUpdate(Request $request){
$request->validate([
'variant_name'=>'required',
]);
$variant = Variant::find($request->id);
$variant->variant_name = $request->variant_name;
$variant->save();
return redirect('/admin/variant/all');
}

//Active-Inactive Variant Data
public function getVariantStatus(Request $request){
$status = Variant::find($request->id);
if($status!=""){
if ($status->is_active==0) {
$status->is_active=1;
}else{
$status->is_active=0;
}
}
$status->save();
return redirect('admin/variant/all');
}
}
