<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\KitchenSection;
use App\Printer;
use App\session;
use DataTables;
class KitchenSectionController extends Controller
{
//Show Kitchen Section Data
public function getKitchenSectionIndex(){
$business_session = $this->putBusinessSession();
$branch_session = $this->BranchSession();
$kitchen = KitchenSection::with('printer')->with('business')->with('branch')
->where("business_id",$business_session)->where('branch_id',$branch_session)->get();
return Datatables($kitchen)->make(true);
}
public function getKitchenSectionShow(){

return view('kitchen-section/all');
}
//Add Kitchen Section Data
public function getKitchenSectionAdd(){
$business_session = $this->putBusinessSession();
$branch_session = $this->BranchSession();
$printer = Printer::where("is_active",1)->where('business_id',$business_session)->where('branch_id',$branch_session)->get();

return view('kitchen-section/add')->with('printer',$printer);
}
public function postKitchenSectionAdd(Request $request){
$request->validate([
'kitchen_section_name'=>'required',
'printer_id' =>'required',
]);
$business_session = $this->putBusinessSession();
$branch_session = $this->BranchSession();

$kitchen = new KitchenSection;
$kitchen->kitchen_section_name = $request->kitchen_section_name;
$kitchen->business_id = $business_session;
$kitchen->branch_id = $branch_session;
$kitchen->printer_id = $request->printer_id;
$kitchen->save();
return redirect('admin/kitchen-section/all');
}
// Update Kitchen Section Data
public function getKitchenSectionUpdate($id){
$business_session = $this->putBusinessSession();
$branch_session = $this->BranchSession();
$kitchen = KitchenSection::find($id);
$printer = Printer::where("is_active",1)->where('business_id',$business_session)->where('branch_id',$branch_session)->get();
return view('kitchen-section/update')->with('kitchen',$kitchen)->with('printer',$printer);
}

public function postKitchenSectionUpdate(Request $request){
$business_session = $this->putBusinessSession();
$branch_session = $this->BranchSession();
$request->validate([
'kitchen_section_name'=>'required',
'printer_id'=>'required',
]);
$kitchen = KitchenSection::find($request->id);
$kitchen->kitchen_section_name = $request->kitchen_section_name;
$kitchen->business_id = $business_session;
$kitchen->branch_id = $branch_session;
$kitchen->printer_id = $request->printer_id;
$kitchen->save();
return redirect('admin/kitchen-section/all');
}

//Change Status Active/Inactive Kitchen Section Data
public function getKitchenSectionStatus(Request $request){
$status = KitchenSection::find($request->id);
if ($status!="") {
if($status->is_active==0){
$status->is_active=1;
}else{
$status->is_active=0;
}
}
$status->save();
return redirect('admin/kitchen-section/all');
}
}
