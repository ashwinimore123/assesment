<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\ModifierCategory;
use App\Product;
use App\User;
use DataTables;
use Session;

class Modifier_categoriesController extends Controller
{
    
public function getDataModifier_categories(Request $request)
{

return view('admin/modifier_categories/modifier_categories_all');    

}
    
public function getallDataModifier_categories(Request $request)
{

/*$data=ModifierCategory::with('section')->get();*/
$data=ModifierCategory::all();
return Datatables::of($data)->make(true);

}

public function addModifier_categories()
{   
     $business_session = $this->putBusinessSession();
     $branch_session = $this->BranchSession();
     $product =Product::where('business_id',$business_session)->where('branch_id',$branch_session)->where('is_active',1)->get();
     return view('admin/modifier_categories/modifier_categories_add')->with('product',$product);
}


public function StoreModifier_categories(Request $request)
{

$request->validate([
'modifier_category_name' => ['required'],
'produc_id' => ['required'],
'is_multiple' => ['required'],
],

[
'modifier_category_name.required' => 'modifier category Name is required',
'produc_id.required' => 'product Name is required',
'is_multiple.required' => 'is_multiple is required',
]);

$modifier_category= new ModifierCategory();
$modifier_category->modifier_category_name=$request->modifier_category_name;
$modifier_category->product_id=$request->produc_id;
$modifier_category->is_multiple=$request->is_multiple;  
$modifier_category->save();

$notification = array(
'message' => 'modifier_category Added successfuly', 
'alert-type' => 'success'
);

return redirect('admin/addmodifier_categoriesallData')->with($notification);
}  


public function getupdateModifier_categories(Request $request){
 $business_session = $this->putBusinessSession();
 $branch_session = $this->BranchSession();
 $product =Product::where('business_id',$business_session)->where('branch_id',$branch_session)->where('is_active',1)->get();
$modifier_category=ModifierCategory::find($request->modifier_category_id);
return view('admin/modifier_categories/modifier_categories_update')->with('modifier_category',$modifier_category)->with('product',$product);
}

public function updateModifier_categories(Request $request){ 

$modifier_category=ModifierCategory::find($request->modifier_category_id);
$modifier_category->modifier_category_name=$request->modifier_category_name;
$modifier_category->product_id=$request->produc_id;
$modifier_category->is_multiple=$request->is_multiple;
$modifier_category->save();

$notification = array(
'message' => 'modifier_category updated successfully', 
'alert-type' => 'success'
);

return redirect('admin/addmodifier_categoriesallData')->with($notification);
}


public function status(Request $request){   
$modifier_category_id=$request->modifier_category_id;
$modifier_category=ModifierCategory::find($modifier_category_id);
if($modifier_category!=""){
if ($modifier_category->is_active==0) 
{
$modifier_category->is_active=1;
}
else
{
$modifier_category->is_active=0;
}
$modifier_category->save();
}
return redirect('admin/addmodifier_categoriesallData');
}

}
