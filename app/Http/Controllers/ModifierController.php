<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Modifier;
use App\ModifierCategory;
use App\Product;
use App\User;
use DataTables;
use Session;
class ModifierController extends Controller
{
    

public function getDataModifier(Request $request)
{

return view('admin/modifiers/modifierall');    

}
    
public function getallDataModifier(Request $request)
{
        $data=Modifier::with('product')->with('modifier_categories')->get();

        return Datatables::of($data)->make(true);
  
        /* $data=Modifier::all();
         return Datatables::of($data)->make(true);*/

}



public function addModifier()
{   
    
     $modifier_categories=ModifierCategory::where('is_active',1)->get();



    /* print($modifier_categories);die;*/
     return view('admin/modifiers/modifieradd')->with('modifier_categories',$modifier_categories);

}


public function StoreModifier(Request $request)
{

$request->validate([
'modfier_category_name' => ['required'],
'price' => ['required'],
'take_away_price' => ['required'],
],

[
'modfier_category_name.required' => 'modifier category Name is required',
'price.required' => 'product Name is required',
'take_away_price.required' => 'is_multiple is required',
]);


$product_id=ModifierCategory::where('modifier_category_id',$request->modfier_category_name)->first();
$modifier= new Modifier();
$modifier->modifier_category_id=$request->modfier_category_name;
$modifier->product_id=$product_id->product_id;
$modifier->price=$request->price;
$modifier->take_away_price=$request->take_away_price;    
$modifier->save();

$notification = array(
'message' => 'modifier_category Added successfuly', 
'alert-type' => 'success'
);

return redirect('admin/addmodifierallData')->with($notification);
}  


public function getupdateModifier(Request $request){
$modifier_categories=ModifierCategory::where('is_active',1)->get();
$modifier=Modifier::find($request->modifier_id);
return view('admin/modifiers/modifierupdate')->with('modifier_categories',$modifier_categories)->with('modifier',$modifier);
}


public function updateModifier(Request $request){ 
$product_id=ModifierCategory::where('modifier_category_id',$request->modfier_category_name)->first();

$modifier=Modifier::find($request->modifier_id);
$modifier->product_id=$product_id->produc_id;
$modifier->modifier_category_id=$request->modfier_category_name;
$modifier->price=$request->price;
$modifier->take_away_price=$request->take_away_price;
$modifier->save();

$notification = array(
'message' => 'modifier updated successfully', 
'alert-type' => 'success'                    
);
return redirect('admin/addmodifierallData')->with($notification);
}



public function status(Request $request){   
$modifier_id=$request->modifier_id;
$modifier=Modifier::find($modifier_id);
if($modifier!=""){
if ($modifier->is_active==0) 
{
$modifier->is_active=1;
}
else
{
$modifier->is_active=0;
}
$modifier->save();
}
return redirect('admin/addmodifierallData');
}


}
