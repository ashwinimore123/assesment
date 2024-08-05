<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{User,Business,Branch,Role,BranchUser};
use Datatables;
use Hash;
use session;
class UserController extends Controller
{
//Show User Data
public function getUserIndex(){
      $business_session = $this->putBusinessSession();
      $branch_session = $this->BranchSession();

      $user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1 ) {
             if($role!=2)
             {
				return redirect('/home');
			 }	
			}
		}


if($role==1){
	$user=User::with('business')->with('role')->get();
}else{
	$user=User::with('business')->where('business_id',$business_session)->where('role_id','!=',1)->with('role')->get();
}

return Datatables($user)->make(true);
}
public function getUserShow(){

      $user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
		     if($role!=2)
		     {		
			 $notification = array(
            'message'=>'You Can not Access this page....',
            'alert-type'=>'success'
             );
			return redirect('/home')->with($notification);
			}
		} 
	}

return view('admin/user/all');
}
//Add User Data
public function getUserAdd(){
$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 

$business = Business::where('is_active',1)->get();
$branches = Branch::where('is_active',1)->get();
//$role = Role::where('is_active',1)->whereIn('role_id',[2,3,4])->get();
$role =Role::where('is_active',1)->where('role_id','!=',1)->get();
return view('admin/user/add')->with('business',$business)
->with('branches',$branches)
->with('role',$role);
}
public function postUserAdd(Request $request){	
	$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 
$user = new User;
$request->validate([
'business_id'=>'required',
'role_id'=>'required',
'name'=>'required',
'email'=>'required',
'password'=>'required',
'pin'=>'required',
'contact_number'=> 'required',
'branch_id'=>'required'
]);
$user->business_id = $request->business_id;
$user->role_id = $request->role_id;
$user->name = $request->name;
$user->email = $request->email;
$user->password = Hash::make($request->password);
$user->pin = $request->pin;
$user->contact_number = $request->contact_number;
$user->save();
$branch_ids = $request->branch_id;
foreach ($branch_ids as $branch_id)
{ 
$branchUser= new BranchUser;
$branchUser->user_id = $user->id;
$branchUser->branch_id = $branch_id;
$branchUser->save();
}   		
return redirect('admin/user/all');
}
//Update User Data
public function getUserUpdate($id){
$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 	
$user = User::find($id);
$businesses = Business::where('is_active',1)->get();
$roles = Role::where('is_active',1)->get();
$branches = Branch::where('is_active',1)->get();
$branch_users = BranchUser::where('user_id',$id)->get();
return view('admin/user/update')->with('user',$user)
->with('businesses',$businesses)
->with('roles',$roles)
->with('branches',$branches)
->with('branch_users',$branch_users);
}
public function postUserUpdate(Request $request){
$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 	
$user = User::find($request->id);
$request->validate([
'business_id'=>'required',
'role_id'=>'required',
'name'=>'required',
'email'=>'required',
'pin'=>'required',
'contact_number'=> 'required',
'branch_id'=>'required'
]);
if ($request->password!="") {
$user->password=Hash::make($request->password);
}
$user->business_id = $request->business_id;
$user->role_id = $request->role_id;
$user->name = $request->name;
$user->email = $request->email;
$user->pin = $request->pin;
$user->contact_number = $request->contact_number;
$user->save();
$branch_ids = $request->branch_id;
//Deleting the data first of branch user
$branch_users=BranchUser::where('user_id',$user->id)->delete();
foreach ($branch_ids as $branch_id){ 
$branch_user = new BranchUser();
$branch_user->user_id = $user->id;
$branch_user->branch_id=$branch_id;
$branch_user->save();
}   	    		
return redirect('admin/user/all');
}
//ChageStatus Inactive/Active User
public function getUserChangeStatus(Request $request){
$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 	
$status =User::find($request->id);
if($status!=""){
if($status->is_active==0){
$status->is_active=1;
}else{
$status->is_active=0;
}
$status->save();
return redirect('admin/user/all');
}
}
}
