<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Business;
use App\Branch;
use App\User;
use App\Table;

class Controller extends BaseController
{
//Session user wise acess using bisiness id and branch id 
Public function putBusinessSession(){
$user = Auth::user();
$business_session = Session::get('business_id');
if($business_session==""){
Session::put('business_id',$user->business_id);
}
return $business_session;
}

public function BranchSession(){
$branch_id = Session::get('branch_id_session');
return $branch_id;
}

public function getTableSession(){
$table_id = Session::get('table_id_session');
return $table_id;
}

public function getGlobalOrderSession(){
$global_order_id= Session::get('global_order_id_Session');
return $global_order_id;
}

}


