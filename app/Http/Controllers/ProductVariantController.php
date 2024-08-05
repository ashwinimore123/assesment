<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ProductVariant;
use App\Variant;
use Datatables;
class ProductVariantController extends Controller
{
//Show Product Variant Data
public function getProductVariantIndex(){
$product_variant = ProductVariant::with('variant')->get();
return Datatables($product_variant)->make(true);
}
public function getProductVariantShow(){
return view('product-variant/all');
}
//Add Product Variant Data
public function getProductVariantAdd(){
$variant = Variant::where('is_active',1)->where('variant_id','!=',1)->get();
return view('product-variant/add')->with('variant',$variant);
}

public function postProductVariantAdd(Request $request){
$request->validate([
'product_variant_name'=>'required',
'variant_id'=>'required',
]);
$product_variant = new ProductVariant;
$product_variant->product_variant_name = $request->product_variant_name;
$product_variant->variant_id = $request->variant_id;
$product_variant->save();
return redirect('admin/product-variant/all');
}
//Update Product Variant Data
public function getProductVariantUpdate($id){
$variant = Variant::where('is_active',1)->where('variant_id','!=',1)->get();
$product_variant = ProductVariant::find($id);
return view('product-variant/update')->with('variant',$variant)->with('product_variant',$product_variant);
}
public function postProductVariantUpdate(Request $request){
$request->validate([
'product_variant_name'=>'required',
'variant_id'=>'required',
]);
$product_variant = ProductVariant::find($request->id);
$product_variant->product_variant_name = $request->product_variant_name;
$product_variant->variant_id = $request->variant_id;
$product_variant->save();
return redirect('admin/product-variant/all');
}
//Change Status Active/Inactive
public function getProductVariantStatus(Request $request){
$status = ProductVariant::find($request->id);
if ($status!="") {
if($status->is_active==0){
$status->is_active=1;
}else{
$status->is_active=0;
}
}
$status->save();
return redirect('admin/product-variant/all');
}
}
