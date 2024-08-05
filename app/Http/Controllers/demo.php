
for  update 


Route::get('role/update/{id}','RoleController@updateview');

Route::post('role/update/{id}','RoleController@update');


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


for delete 

public function destroy($id)  
    {  
        $crud=Crud::find($id);  
        $crud->delete();  

    }  