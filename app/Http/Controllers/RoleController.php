<?php
namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Role;
use App\Permissions;
use App\Rolepermissions;
use DataTables;
use DB;

class RoleController extends Controller
{         
public function insert (){

return view('admin.role.add');
}

public function store(request $request){  
$request->validate([
'role_name' => ['required'],
],[
'role_name.required' => 'Name is required',
]);
$role=new Role;
$role->role_name=$request->role_name;
$role->save();
$notification = array(
'message' => 'Role Added successfuly', 
'alert-type' => 'success'
);
return redirect('admin/role/all')->with($notification);
}   



public function updateview(Request $request){
$role=Role::find($request->id);
return view('admin.role.update')->with('role',$role);
}

public function update(Request $request){	
$role=Role::find($request->id);
$role->role_name=$request->role_name;
$role->save();
$notification = array(
'message' => 'Role updated successfully', 
'alert-type' => 'success'
);
return redirect('admin/role/all')->with($notification);
}



public function getData(Request $request){
return view('admin.role.all');						           
}

public function getallData(Request $request){
$data=Role::all();
return Datatables::of($data)->make(true);
}	

public function logout(Request $request){
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
$notification = array(
'message' => 'logout successfully', 
'alert-type' => 'success'
);
return redirect('home')->with($notification);
}

public function status(Request $request){
$role_id=$request->id;
$role=Role::find($role_id);
if($role!=""){
if ($role->is_active==0) 
{
$role->is_active=1;
}
else
{
$role->is_active=0;
}
$role->save();
}
return redirect('admin/role/all');
}



//permissin part start 
public function permission()
{  
return view('admin.permission.addpermission');
}
public function addpermission(request $request)
{  
$request->validate([
'permission_name' => ['required'],
],[
'permission_name.required' => 'permissionName is required',
]);
$permission=new Permissions;
$permission->permission_name=$request->permission_name;
$permission->save();

$notification = array(
'message' => 'permission name Added successfuly', 
'alert-type' => 'success'
);
return redirect('admin/permission/permission')->with($notification);
}   


//fetch all permission data into datatable
public function getpermissoin(Request $request)
{
return view('admin.permission.allpermission');                       
} 
public function getallpermissoin(Request $request){
$data=Permissions::all();
return Datatables::of($data)->make(true);
}  
//active in active permission 
public function permissoinstatus(Request $request){  
$permission_id=$request->id;
$permission=Permissions::find($permission_id);
if($permission!="")
{
if($permission->is_active==0) 
{
$permission->is_active=1;
}
else
{
$permission->is_active=0;
}
$permission->save();
}
return redirect('admin/permission/permission');
}


//update permission 
public function updateallpermissions(Request $request)
{
$permission=Permissions::find($request->id);
return view('admin.permission.updatepermission')->with('permissions',$permission);
}
public function updatepermission(Request $request){ 
$permission=Permissions::find($request->id);
$permission->permission_name=$request->permission_name;
$permission->save();
$notification = array(  
'message' => 'permission updated successfully', 
'alert-type' => 'success'
);
return redirect('admin/permission/permission')->with($notification);
}
//acess permission and assign to role with checkbox in datatable
public function roleacess(Request $request){
$role_id=$request->id;
$role_name=Role::find($role_id);
return view('admin.rolepermission.roleacess')->with('role_id',$role_id)->with('role_name',$role_name);                       
}
 
public function allroleacess(Request $request)
{
// WITH AND WHERE CONDITION  FOR CHECKBOX
$role_id=1;
$data=Permissions::with(["rolepermissions" => function($query) use ($role_id){
$query->where('role_id',$role_id);
}])->get();
return Datatables::of($data)->make(true);
}  

public function GrantPermission(Request $request)
{  
$role_id=$request->role_id;       
$permission_id=$request->permission_id;
$isExist = Rolepermissions::where('role_id',$role_id)->where('permission_id',$permission_id)->get();
if ($isExist!="[]") 
{
//delete data if checkbox is uncheck 
DB::table('rolepermissions')->where('role_id',$role_id)->where('permission_id',$permission_id)->delete();
}
else
{      //data save if check box is checked 
$rolepermissions = new Rolepermissions;
$rolepermissions->role_id= $role_id;
$rolepermissions->permission_id = $permission_id;
$rolepermissions->save();
}
}
}