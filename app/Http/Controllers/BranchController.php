<?php
namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Branch;
use DataTables;
use DB;
use App\Business;
use App\User;
use App\Role;
use App\BranchUser;
use Session;

class BranchController extends Controller
{
public function insertbranch(){ 

$business_session= $this->putBusinessSession();
$branch_session = $this->BranchSession();

$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 


$business=Business::where("is_active",1)->get();
return view('admin/branch/addbranch')->with("business",$business)
->with('business_session',$business_session)
->with('branch_session',$branch_session);
}

public function storebranch(Request $request)
{
   
	$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 


$request->validate([
'branch_name' => ['required'],
'address' => ['required'],
'map_url' => ['required'],
'image' => ['required'],
'latitude' => ['required'],
'longitude' => ['required'],
'promo_line' => ['required'],
'phone' => ['required'],
'billing_printer' => ['required'],
'website' => ['required'],
'area' => ['required'],
'postcode' => ['required'],
'cashback_percentage' => ['required'],
'delivery_charges' => ['required'],
'delivery_area' => ['required'],
],
[
'branch_name.required' => 'Name is required',
'address.required' => 'Address is required',
'map_url.required' => 'MapUrl is required',
'image.required' => 'Image is required',
'latitude.required' => 'Latitude is required',
'longitude.required' => 'Longitude is required',
'promo_line.required' => 'PromoLine is required',
'phone.required' => 'Phone required',
'billing_printer.required' => 'BillingPrinterName is required',
'website.required' => ' Website Name is required',
'area.required' => 'Area Name is required',
'postcode.required' => 'postcode is required',
'cashback_percentage.required' => 'Cashback Percentage is required',
'delivery_charges.required' => 'DeliveryCharges is required',
'delivery_area.required' => 'Delivery Area is required',
]);
$branch=new Branch;
//check box default values 
if ($request->merge_table!="") {
$merge_table=1;
}else{
$merge_table=0;
}
if ($request->take_away_order!="") {
$take_away_order=1;
}else{
$take_away_order=0;
}

if ($request->app_order!="") {
$app_order=1;
}else{
$app_order=0;
}

if ($request->show_hidden!="") {
$show_hidden=1;
}else{
$show_hidden=0;
}

if ($request->is_online!="") {
$is_online=1;
}else{
$is_online=0;
}

if ($request->is_active!="") {
$is_active=0;
}else{
$is_active=1;
}

// image 

if($request->hasfile('image')){
$image = $request->file('image');
$image_path = $image->store('image');
$branch->image=$image_path;
}
else{
$branch->image="";
return $request;
}

$branch->business_id=$request->business_id;
$branch->branch_name=$request->branch_name;
$branch->address=$request->address;
$branch->map_url=$request->map_url;
$branch->latitude=$request->latitude;
$branch->longitude=$request->longitude;
$branch->promo_line=$request->promo_line;
$branch->phone=$request->phone;
$branch->billing_printer=$request->billing_printer;
$branch->website=$request->website;
$branch->area=$request->area;
$branch->postcode=$request->postcode;
$branch->cashback_percentage=$request->cashback_percentage;
$branch->delivery_charges=$request->delivery_charges;
$branch->delivery_area=$request->delivery_area;
$branch->merge_table=$merge_table;
$branch->take_away_order=$take_away_order;
$branch->app_order=$app_order;
$branch->is_active=$is_active;
$branch->show_hidden=$show_hidden;
$branch->is_online=$is_online;
$branch->save();
$notification = array(
'message' => 'Branch Added successfully', 
'alert-type' => 'success'
);

return redirect('admin/branch/all')->with($notification);

}

// fetch all data in data table 
public function branchData(Request $request)
{


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
return view('admin.branch.allbranch');                       
} 

public function allbranchData(Request $request)
{
$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 

$business_session= $this->putBusinessSession();
$branch_session = $this->BranchSession();

$data= Branch::where("business_id",$business_session)->where('branch_id',$branch_session)->get();
return Datatables::of($data)->make(true);
}
//active in active branch 
public function branchstatus(Request $request)
{

  $user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 


$branch_id=$request->id;
$branch=Branch::find($branch_id);
if($branch!="")
{
if ($branch->is_active=1) 
{
    $branch->is_active=0;
}
else
{
$branch->is_active=1;
}
$branch->save();
}


return redirect('admin/branch/all');
}
//update branch data 
public function updatebranch(Request $request)
{ 

$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 


if ($request->merge_table!="") {
$merge_table=1;
}else{
$merge_table=0;
}

if ($request->take_away_order!="") {
$take_away_order=1;
}else{
$take_away_order=0;
}

if ($request->app_order!="") {
$app_order=1;
}else{
$app_order=0;
}

if ($request->show_hidden!="") {
$show_hidden=1;
}else{
$show_hidden=0;
}

if ($request->is_online!="") {
$is_online=1;
}else{
$is_online=0;
}

if ($request->is_active!="") {
$is_active=0;
}else{
$is_active=1;
}
$branch=Branch::find($request->id);
$branch->branch_name=$request->branch_name;
$branch->address=$request->address;
$branch->map_url=$request->map_url;
$branch->latitude=$request->latitude;
$branch->longitude=$request->longitude;
$branch->promo_line=$request->promo_line;
$branch->phone=$request->phone;
$branch->billing_printer=$request->billing_printer;
$branch->website=$request->website;
$branch->area=$request->area;
$branch->postcode=$request->postcode;
$branch->cashback_percentage=$request->cashback_percentage;
$branch->delivery_charges=$request->delivery_charges;
$branch->delivery_area=$request->delivery_area;
$branch->merge_table=$merge_table;
$branch->take_away_order=$take_away_order;
$branch->app_order=$app_order;
$branch->is_active=$is_active;
$branch->show_hidden=$show_hidden;
$branch->is_online=$is_online;

if($request->hasfile('image')){
$image= $request->file('image');
$image_path=$image->store('image');
$branch->image=$image_path;
}

$branch->save();
$notification = array(
'message' => 'branch updated successfully', 
'alert-type' => 'success'
);
return redirect('admin/branch/all')->with($notification);
}

public function updateallbranch(Request $request)
{
	$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 

$branch=Branch::find($request->id);
return view('admin.branch.updatebranch')->with('branch',$branch);
}

//Branch User Data
public function getBranchList(Request $request){
$user=Auth::user();
/*$rolename=Role::where('role_id',$user->role_id)->pluck('role_name')->first();*/

$branch_users=BranchUser::where('user_id',$user->id)->with('branch')->with('user')->get();
return view('branch')->with('branch_users',$branch_users);
}

/*public function getrolename(Request $request){
$user=Auth::user();
$rolename=Role::where('role_id',$user->role_id)->pluck('role_name')->first();
return view('layouts/header')->with('role_name',$rolename);

}*/

}
