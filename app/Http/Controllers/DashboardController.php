<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
public function getDashboardShow(){
return view('admin/dashboard/dashboard');
}

//Dashboard Session
public function dashboard($id){
$branch_id = $id;
Session::put('branch_id_session',$branch_id);
return redirect('dashboard');
}

public function getdashboard(){
$branch_id =$this->BranchSession();
return view('admin/dashboard/dashboard');
}

}
