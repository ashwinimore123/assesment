<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Category,Business,Branch};
use Datatables;
class CategoryController extends Controller
{
//Show Category Data
public function getCategoryIndex(){
$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 

$category = Category::with('business')->with('branch')->get();
return Datatables($category)->make(true);
}

public function getCategoryShow(){
			$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
		    $notification = array(
            'message'=>'You Can not Acess this page....',
            'alert-type'=>'success'
             );
			return redirect('/home')->with($notification);
			
			}
		} 

return view('admin/category/all');
}

//Add Category Data
public function getCategoryAdd(Request $request){

	$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 

$business = Business::where('is_active',1)->get();
$branch = Branch::where('is_active',1)->get();
return view('admin/category/add')->with('business',$business)
->with("branch",$branch);
}
public function postCategoryAdd(Request $request){
	$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 

$business_session = $this->putBusinessSession();
$branch_session = $this->BranchSession();

$category = new Category;
$request->validate([
'category_name'=>'required',
'color'=>'required',
'priority'=>'required' 
]);
$category->category_name = $request->category_name;
$category->business_id= $business_session;
$category->color = $request->color;
$category->priority = $request->priority;
$category->branch_id=$branch_session;
$category->save();

$notification = array(
'message'=>'Category Data Addede Successfully',
'alert-type'=>'success'
);

return redirect('admin/category/all')->with($notification);
}


//Update Category Data

public function getCategoryUpdate($id){
	$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 

$category = Category::find($id);
return view('admin/category/update')->with('category',$category);
}

public function postCategoryUpdate(Request $request){
	$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 

$business_session = $this->putBusinessSession();
$branch_session = $this->BranchSession();
$request->validate([
'category_name'=>'required',
'color'=>'required',
'priority'=>'required' 
]);
$category = Category::find($request->id);
$category->category_name = $request->category_name;
$category->business_id = $business_session;
$category->color = $request->color;
$category->priority = $request->priority;
$category->branch_id = $branch_session;
$category->save();

$notification = array(
'message' => 'Category Updated successfully', 
'alert-type' => 'success'
);


return redirect('admin/category/all')->with($notification);
}

//Chage Staus Active/Inactive

public function getCategoryChangeStatus(Request $request){
	$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 

$status =Category::find($request->id);
if($status!=""){
if($status->is_active==0){
$status->is_active=1;
}else{
$status->is_active=0;
}

}
$status->save();
return redirect('admin/category/all');
}

}
