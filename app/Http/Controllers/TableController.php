<?php
namespace App\Http\Controllers;
use App\Table;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use DataTables;


class TableController extends Controller
{

public function getData(Request $request)
{

return view('admin/table/tableall');                                 
}
    
public function getallData(Request $request)
{
$data=Table::with('section')->get();
return Datatables::of($data)->make(true);
}

public function addtable()
{   
     $business_session = $this->putBusinessSession();
     $branch_session = $this->BranchSession();

      $section =Section::where('is_active',1)->get();

    return view('admin/table/addtable')->with('section',$section);
}


public function sotre_table(Request $request)
{

$request->validate([
'table_section' => ['required'],
'table_name' => ['required'],
'table_type' => ['required'],
'table_capacity' => ['required'],
'merg_color' => ['required'],
],

[
'table_section.required' => 'TableName is required',
'table_name.required' => 'TableName is required',
'table_type.required' => 'TableName is required',
'table_capacity.required' => 'TableName is required',
'merg_color.required' => 'TableName is required',
]);

$business_session = $this->putBusinessSession();
$branch_session = $this->BranchSession();

$table=new Table();

$table->section_id=$request->table_section;
$table->table_name=$request->table_name;
$table->table_type=$request->table_type;
$table->table_capacity=$request->table_capacity;
$table->merg_color=$request->merg_color;
$table->business_id =$business_session;
$table->branch_id = $branch_session;      
$table->save();
$notification = array(
'message' => 'Table Added successfuly', 
'alert-type' => 'success'
);
return redirect('admin/table/all')->with($notification);
}  



public function status(Request $request){
$table_id=$request->table_id;
$table=Table::find($table_id);
if($table!=""){
if ($table->is_active==0) 
{
$table->is_active=1;
}
else
{
$table->is_active=0;
}
$table->save();
}
return redirect('admin/table/all');
}

public function updateview(Request $request){
$table=Table::find($request->table_id);
$section =Section::where('is_active',1)->get();
return view('admin/table/updatetable')->with('table',$table)->with('section',$section);
}

public function update(Request $request){  
$table=Table::find($request->table_id);
$table->section_id=$request->table_section;
$table->table_name=$request->table_name;
$table->table_type=$request->table_type;
$table->table_capacity=$request->table_capacity;
$table->merg_color=$request->merg_color;
$table->save();

$notification = array(
'message' => 'Table updated successfully', 
'alert-type' => 'success'
);
return redirect('admin/table/all')->with($notification);
}

}