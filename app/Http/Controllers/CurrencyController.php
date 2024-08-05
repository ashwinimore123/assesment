<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Currencies;
use DataTables;
use DB;
class CurrencyController extends Controller
{
public function insert ()
{	
return view('admin.currency.add');
}
public function store(request $request)
{  
$request->validate([
'currency_name' => ['required'],
'currency_symbol' => ['required'],
],
[
'currency_name' => 'currency_name is required',
'currency_symbol.required' => 'currency_symbol is required',
]);
$currency=new Currencies;
$currency->currency_name=$request->currency_name;
$currency->currency_symbol=$request->currency_symbol;
$currency->save();
$notification = array(
'message' => 'currency Added successfuly', 
'alert-type' => 'success'
);
return redirect('admin/currency/all')->with($notification);
}  
public function getData(Request $request)
{
return view('admin.currency.all');						           
}	
public function getallData(Request $request)
{
$data=Currencies::all();
return Datatables::of($data)->make(true);
}
public function update(Request $request)
{	
$currency=Currencies::find($request->id);
$currency->currency_name=$request->currency_name;
$currency->currency_symbol=$request->currency_symbol;
$currency->save();
$notification = array(
'message' => 'currency updated successfully', 
'alert-type' => 'success'
);
return redirect('admin/currency/all')->with($notification);
}
public function updateview(Request $request)
{
$currency=Currencies::find($request->id);
return view('admin.currency.update')->with('currency', $currency);
}
public function activity(Request $request)
{
$currency_id=$request->id;
$currency=Currencies::find($currency_id);
if($currency!="")
{
if ($currency->is_active==0) 
{
$currency->is_active=1;
}
else
{
$currency->is_active=0;
}
$currency->save();
}
return redirect('admin/currency/all');
}
}
