<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Printer;
use App\Business;
use App\Branch;
use Session;
use Datatables;
class PrinterController extends Controller
{
//Show Printer Data========================================================
public function getPrinterIndex(){
$business_session =$this->putBusinessSession();
$branch_session =$this->BranchSession();
//$printer = Printer::where('business_id',$business_session)->where('branch_id',$branch_session);
$printer = Printer::with('business')->with('branch')->where('business_id',$business_session)->where('branch_id',$branch_session)->get();
return Datatables($printer)->make(true);
}
public function getPrinterShow(){
return view('printer/all');
}
//Add Printer Data=========================================================
public function getPrinterAdd(){
return view('printer/add');
}

public function postPrinterAdd(Request $request){
$request->validate([
'printer_ip'=>'required',
]);
$business_session = $this->putBusinessSession();
$branch_session = $this->BranchSession();
$printer = new Printer;
$printer->printer_ip =$request->printer_ip;
$printer->business_id = $business_session;
$printer->branch_id = $branch_session;
$printer->save();
return redirect('admin/printer/all');
}
//Update Printer Data===============================================================
public function getPrinterUpdate($id){
$printer = Printer::find($id);
return view('printer/update')->with('printer',$printer);
}
public function postPrinterUpdate(Request $request){
$request->validate([
'printer_ip'=>'required',
]);
$business_session = $this->putBusinessSession();
$branch_session = $this->BranchSession();
$printer = Printer::find($request->id);
$printer->printer_ip = $request->printer_ip;
$printer->business_id = $business_session;
$printer->branch_id = $branch_session;
$printer->save();
return redirect('admin/printer/all');
}
//Active and Inactive Printer Data
public function getPrinterChangeStatus(Request $request){
$status = Printer::find($request->id);
if ($status!="") {
if ($status->is_active==0) {
$status->is_active=1;
}else{
$status->is_active=0;
}
}
$status->save();
return redirect('admin/printer/all');
}
}
