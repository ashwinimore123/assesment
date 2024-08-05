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
use App\Category;
use App\ProductCategory;
use App\Product;
use App\Cart;
use App\Home;
use App\BranchUser;
use App\User;
use App\Branch;
use App\Table;
use App\ModifierCategory;
use View;
use DB;
use Session;
use App\Modifier;
use App\CartModifier; 
use App\GlobalOrder;
use App\Order;
use App\PaymentMode;
use App\PaymentHistory;

class HomeController extends Controller{

    public function __construct()
  {
     $this->middleware('auth'); 
  }
      // main home page
     public function homepage()
  {

     return view('welcome'); 
  }


/*for split by sprice checkout*/
  public function Split_by_sprice( Request $request)
   {
    
    $table_id_session = $this->getTableSession();
    $branch_session = $this->BranchSession();
    $business_session = $this->putBusinessSession();
    $user_id=Auth::user()->id;
    $global_order_id=$this->getGlobalOrderSession();


  $carts= Cart::where("created_by",$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->with('globalorder')->first();


 if($carts!="" && $carts->global_order_id!=0||$carts->global_order_id!="")
  {

    $globalOrder=GlobalOrder::find($carts->global_order_id);  
    $globalOrder->order_amount=$request->split_amt+$carts->globalorder->order_amount;
    $globalOrder->branch_id=$branch_session;
    $globalOrder->business_id=$business_session;
    $globalOrder->created_by=$user_id;
    $globalOrder->table_id=$table_id_session;
    $globalOrder->save();

  }

  else
  {

    $globalOrder= new GlobalOrder;
    $globalOrder->order_amount=$request->split_amt;
    $globalOrder->branch_id=$branch_session;
    $globalOrder->business_id=$business_session;
    $globalOrder->created_by=$user_id;
    $globalOrder->table_id=$table_id_session;
    $globalOrder->save();

  $carts= Cart::where("created_by",$user_id)->where("order_id",0)->where("business_id",$business_session)->where("global_order_id",0)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->update(['global_order_id'=>$globalOrder->global_order_id]);

  }   

    Session::put('global_order_id_Session',$globalOrder->global_order_id);
    $global_order_id=$this->getGlobalOrderSession();
   
  $payment_mode_id=$request->payment_mode_id;

  if ($payment_mode_id=="") {
    $payment_mode_id=1;
  }

    $payment_mode=PaymentMode::where('id',$payment_mode_id)->first();

    $PaymentHistory= new PaymentHistory;
    $PaymentHistory->transaction_amount=$request->split_amt;
    $PaymentHistory->change_amount=0;
    $PaymentHistory->transaction_type="credit";
    $PaymentHistory->global_order_id=$globalOrder->global_order_id;
    $PaymentHistory->user_id=$user_id;
    $PaymentHistory->created_by=$globalOrder->created_by;
    $PaymentHistory->payment_mode_id=$payment_mode->id;
    $PaymentHistory->business_id=$globalOrder->business_id;
    $PaymentHistory->branch_id=$globalOrder->branch_id;
    $PaymentHistory->save();


   if($globalOrder->order_amount==$request->total_amt)
     
     {

     $Order= new Order;
     $Order->comment=$globalOrder->comment;
     $Order->created_by=$globalOrder->created_by;
     $Order->table_id=$globalOrder->table_id;
     $Order->global_order_id=$globalOrder->global_order_id;
     $Order->business_id=$globalOrder->business_id;
     $Order->branch_id=$globalOrder->branch_id;
     $Order->save();

     $carts= Cart::where("created_by",$user_id)->where("order_id",0)->where("business_id",$business_session)->where("global_order_id",$global_order_id)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->update(['order_id'=>$Order->order_id,'global_order_id'=>$Order->global_order_id]);
      
       Session::put('global_order_id_Session',0);
       Session::save(); 
       $global_order_id=$this->getGlobalOrderSession();

     $carts=Cart::where("created_by",$user_id)->where("global_order_id",0)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();

   $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",0)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();

   $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');


      $Orders=Cart::where('created_by',$user_id)->where("order_id",0)->where("global_order_id",'!=',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->select('global_order_id')->groupBy('global_order_id')->get();

      $order_count=count($Orders);


   $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);
      $sections = $view->renderSections();
      // return $sections['totalammount'];
       
      $data=array("sections"=>$sections['totalammount'],"paid_transaction_sum"=>$paid_transaction_sum,"order_count"=>$order_count);
      return $data;
    }


  $paid_transactions=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$PaymentHistory->global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->get();


  $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$PaymentHistory->global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');

  $view = View::make('paid_items')->with('paid_transactions',$paid_transactions);
  $sections1=$view->renderSections();

  /*return $sections['PAID_ITEMS'];*/

 
  $carts=Cart::where("created_by",$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();


 $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  

  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);
  $sections= $view->renderSections();

  $data=array("sections"=>$sections['totalammount'],"sections1"=>$sections1['PAID_ITEMS'],"paid_transaction_sum"=>$paid_transaction_sum);
   return $data;

  }


  
/*for global order session 0 when window load*/
  public function global_order_id( Request $request)
    {  

        Session::put("global_order_id_Session",0);
        Session::save(); 
    }


/*for when we click on send order*/
  public function Send_order( Request $request)
  {

    $table_id_session = $this->getTableSession();
    $branch_session = $this->BranchSession();
    $business_session = $this->putBusinessSession();
    $user_id=Auth::user()->id;
    $global_order_id=$this->getGlobalOrderSession();

     Session::put('global_order_id_Session',0);

  $carts=Cart::where("created_by",$user_id)->where("global_order_id",0)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();


  $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",0)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();


  $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');
  
 
  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);

  $sections = $view->renderSections();
/*  return $sections['totalammount'];*/ 

     $Orders=Cart::where('created_by',$user_id)->where("order_id",0)->where("global_order_id",'!=',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->select('global_order_id')->groupBy('global_order_id')->get();

      $order_count=count($Orders);

  $data=array("sections"=>$sections['totalammount'],"order_count"=>$order_count);
  return $data;

}



/*for when we click on new order*/
  public function  Add_new_order( Request $request)
  {

    $table_id_session = $this->getTableSession();
    $branch_session = $this->BranchSession();
    $business_session = $this->putBusinessSession();
    $global_order_id=$this->getGlobalOrderSession();
    $user_id=Auth::user()->id;
    

     Session::put('global_order_id_Session',0);

  $carts=Cart::where("created_by",$user_id)->where("global_order_id",0)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();


  $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",0)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  
  $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');

  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);
  $sections = $view->renderSections();
  return $sections['totalammount']; 

}


/*for when we click on existing order*/
 public function Existing_Order(Request $request)
  {
    $table_id_session = $this->getTableSession();
    $branch_session = $this->BranchSession();
    $business_session = $this->putBusinessSession();
    $user_id=Auth::user()->id;
    $global_order_id=$request->global_order_id;

    $global_order_id=$global_order_id;
    Session::put('global_order_id_Session',$global_order_id);

    $global_order_id=$this->getGlobalOrderSession();

  
 $carts=Cart::where("created_by",$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();


   $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  
  $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');

  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);

  $sections = $view->renderSections();
  return $sections['totalammount']; 
     
  }
 


/*for all existing orders show in order table*/
 public function ALLExisting_Orders(Request $request)
  {
    $table_id_session = $this->getTableSession();
    $branch_session = $this->BranchSession();
    $business_session = $this->putBusinessSession();
    $user_id=Auth::user()->id;
    $global_order_id=$this->getGlobalOrderSession();


      $globalOrder=Cart::where('created_by',$user_id)->where("order_id",0)->where("global_order_id",'!=',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->select('global_order_id')->groupBy('global_order_id')->get();


      $Orders=Cart::where('created_by',$user_id)->where("order_id",0)->where("global_order_id",'!=',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->select('global_order_id')->groupBy('global_order_id')->get();

     $order_count=count($Orders);

    $view = View::make('all_existing_orders')->with('globalOrder',$globalOrder)->with('order_count',$order_count);
    $sections = $view->renderSections();

    /*return $sections['ExistingOrders'];  */

    $data=array("sections"=>$sections['ExistingOrders'],"order_count"=>$order_count);
    return $data;

 }
  

/*for when we click on send order*/
  public function  Add_new_globalorder( Request $request)
  {

    $table_id_session = $this->getTableSession();
    $branch_session = $this->BranchSession();
    $business_session = $this->putBusinessSession();
    $user_id=Auth::user()->id;
    


    $globalOrder= new GlobalOrder;
    $globalOrder->comment=$request->comment;
    $globalOrder->branch_id=$branch_session;
    $globalOrder->business_id=$business_session;
    $globalOrder->created_by=$user_id;
    $globalOrder->table_id=$table_id_session;
    $globalOrder->save();
  

  $globalOrder1=Cart::where('created_by',$user_id)->where("order_id",0)->where("global_order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->update(['global_order_id'=>$globalOrder->global_order_id]);

    Session::put('global_order_id_Session',$globalOrder->global_order_id);
    $global_order_id=$this->getGlobalOrderSession();

  $carts=Cart::where("created_by",$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();


  $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  

  $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');

 
  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);
  $sections = $view->renderSections();
/*  return $sections['totalammount']; */


$Orders=Cart::where('created_by',$user_id)->where("order_id",0)->where("global_order_id",'!=',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->select('global_order_id')->groupBy('global_order_id')->get();

$order_count=count($Orders);

$data=array("sections"=>$sections['totalammount'],"order_count"=>$order_count);
return $data;

}

/*for when we click on order*/
 public function check_global_order_id(Request $request)
  {
    $table_id_session = $this->getTableSession();
    $branch_session = $this->BranchSession();
    $business_session = $this->putBusinessSession();
    $user_id=Auth::user()->id;
    $global_order_id=$this->getGlobalOrderSession();


  $globalOrder=Cart::where('created_by',$user_id)->where("order_id",0)->where("global_order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();

   return $globalOrder;

}



/*for discount */ 
public function Discount(Request $request)
  {
     
    $table_id_session = $this->getTableSession();
    $branch_session = $this->BranchSession();
    $business_session = $this->putBusinessSession();
    $user_id=Auth::user()->id;
    $global_order_id=$this->getGlobalOrderSession();



     $carts= Cart::where("created_by",$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->first();


     if($carts->global_order_id!=0||$carts->global_order_id!="")
     {
        $globalOrder=GlobalOrder::find($carts->global_order_id);

        $globalOrder->order_amount=$request->order_amount;
        $globalOrder->discount=$request->discount;
        $globalOrder->surcharge=0;
        $globalOrder->service_charge=$request->service_charge;
        $globalOrder->discount_amount=$request->discount_amount;
        $globalOrder->surcharge_amount=0;
        $globalOrder->service_charge_amount=$request->service_charge_amount;
        $globalOrder->net_amount=$request->net_amount;
        $globalOrder->unpaid_amount=$request->unpaid_amount;
        $globalOrder->delivery_charges=$request->delivery_charges;
        $globalOrder->name=$request->name;
        $globalOrder->comment=$request->comment;
        $globalOrder->payment_type=$request->payment_type;
        $globalOrder->branch_id=$branch_session;
        $globalOrder->business_id=$business_session;
        $globalOrder->created_by=$user_id;
        $globalOrder->table_id=$table_id_session;
        $globalOrder->is_paid=$request->is_paid;
        $globalOrder->source_id=$request->source_id;
        $globalOrder->status=$request->status;
        $globalOrder->order_type=$request->order_type;
        $globalOrder->is_delete=$request->is_delete;
        $globalOrder->save();
     }

    else
     {

    $globalOrder= new GlobalOrder;
    $globalOrder->order_amount=$request->order_amount;
    $globalOrder->discount=$request->discount;
    $globalOrder->surcharge=0;
    $globalOrder->service_charge=$request->service_charge;
    $globalOrder->discount_amount=$request->discount_amount;
    $globalOrder->surcharge_amount=0;
    $globalOrder->service_charge_amount=$request->service_charge_amount;
    $globalOrder->net_amount=$request->net_amount;
    $globalOrder->unpaid_amount=$request->unpaid_amount;
    $globalOrder->delivery_charges=$request->delivery_charges;
    $globalOrder->name=$request->name;
    $globalOrder->comment=$request->comment;
    $globalOrder->payment_type=$request->payment_type;
    $globalOrder->branch_id=$branch_session;
    $globalOrder->business_id=$business_session;
    $globalOrder->created_by=$user_id;
    $globalOrder->table_id=$table_id_session;
    $globalOrder->is_paid=$request->is_paid;
    $globalOrder->source_id=$request->source_id;
    $globalOrder->status=$request->status;
    $globalOrder->order_type=$request->order_type;
    $globalOrder->is_delete=$request->is_delete;
    $globalOrder->save();


    $carts= Cart::where("created_by",$user_id)->where("order_id",0)->where("global_order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->update(['global_order_id'=>$globalOrder->global_order_id]);


}
  
  
    Session::put('global_order_id_Session',$globalOrder->global_order_id);
    $global_order_id=$this->getGlobalOrderSession();


    $carts=Cart::where("created_by",$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();


   $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();


$paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');

  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);
  $sections = $view->renderSections();
  return $sections['totalammount']; 
   
  }



/*surcharg*/
public function Surcharge(Request $request)
  {
    

    $table_id_session = $this->getTableSession();
    $branch_session = $this->BranchSession();
    $business_session = $this->putBusinessSession();
    $user_id=Auth::user()->id;
    $global_order_id=$this->getGlobalOrderSession();

     $carts= Cart::where("created_by",$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->first();

     if($carts->global_order_id!=0||$carts->global_order_id!="")
   {

    $globalOrder=GlobalOrder::find($carts->global_order_id);  
    $globalOrder->order_amount=$request->order_amount;
    $globalOrder->discount=0;
    $globalOrder->surcharge=$request->discount;
    $globalOrder->service_charge=$request->service_charge;
    $globalOrder->discount_amount=0;
    $globalOrder->surcharge_amount=$request->discount_amount;
    $globalOrder->service_charge_amount=$request->service_charge_amount;
    $globalOrder->net_amount=$request->net_amount;
    $globalOrder->unpaid_amount=$request->unpaid_amount;
    $globalOrder->delivery_charges=$request->delivery_charges;
    $globalOrder->name=$request->name;
    $globalOrder->comment=$request->comment;
    $globalOrder->payment_type=$request->payment_type;
    $globalOrder->branch_id=$branch_session;
    $globalOrder->business_id=$business_session;
    $globalOrder->created_by=$user_id;
    $globalOrder->table_id=$table_id_session;
    $globalOrder->is_paid=$request->is_paid;
    $globalOrder->source_id=$request->source_id;
    $globalOrder->status=$request->status;
    $globalOrder->order_type=$request->order_type;
    $globalOrder->is_delete=$request->is_delete;
    $globalOrder->save();
  }

  else

  {

    $globalOrder= new GlobalOrder;
    $globalOrder->order_amount=$request->order_amount;
    $globalOrder->discount=0;
    $globalOrder->surcharge=$request->discount;
    $globalOrder->service_charge=$request->service_charge;
    $globalOrder->discount_amount=0;
    $globalOrder->surcharge_amount=$request->discount_amount;
    $globalOrder->service_charge_amount=$request->service_charge_amount;
    $globalOrder->net_amount=$request->net_amount;
    $globalOrder->unpaid_amount=$request->unpaid_amount;
    $globalOrder->delivery_charges=$request->delivery_charges;
    $globalOrder->name=$request->name;
    $globalOrder->comment=$request->comment;
    $globalOrder->payment_type=$request->payment_type;
    $globalOrder->branch_id=$branch_session;
    $globalOrder->business_id=$business_session;
    $globalOrder->created_by=$user_id;
    $globalOrder->table_id=$table_id_session;
    $globalOrder->is_paid=$request->is_paid;
    $globalOrder->source_id=$request->source_id;
    $globalOrder->status=$request->status;
    $globalOrder->order_type=$request->order_type;
    $globalOrder->is_delete=$request->is_delete;
    $globalOrder->save();


    $carts= Cart::where("created_by",$user_id)->where("order_id",0)->where("global_order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->update(['global_order_id'=>$globalOrder->global_order_id]);
    
  }


     Session::put('global_order_id_Session',$globalOrder->global_order_id);
     $global_order_id=$this->getGlobalOrderSession();

   
    $carts=Cart::where("created_by",$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();




  
   $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  
  $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');
 

  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);
  $sections = $view->renderSections();
  return $sections['totalammount']; 


  }



  //for when we click on ExitSplit
  public function ExitSplit( Request $request)
  {
    

          $table_id_session = $this->getTableSession();
          $branch_session = $this->BranchSession();
          $business_session = $this->putBusinessSession();
          $user_id=Auth::user()->id;
          $global_order_id=$this->getGlobalOrderSession();

      Cart::where("global_order_id",$global_order_id)->where("order_id",0)->where("created_by",$user_id)->where('is_split', 1)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->update(['is_split' => DB::raw(0)]);

         $carts=Cart::where("global_order_id",$global_order_id)->where("order_id",0)->where('is_split',0)->where("created_by",$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->with('product')->with('cartmodifier')->with('globalorder')->get();



       $globalOrder=Cart::where("global_order_id",$global_order_id)->where('created_by',$user_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  
 $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');

    $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);
      $sections = $view->renderSections();
      return $sections['totalammount']; 

  }




    public function Post_globalorder_splitproduct (Request $request)
  {
     
  
    $table_id_session = $this->getTableSession();
    $branch_session = $this->BranchSession();
    $business_session = $this->putBusinessSession();
    $user_id=Auth::user()->id;
    $global_order_id=$this->getGlobalOrderSession();

    $globalOrder= new GlobalOrder;
    $globalOrder->order_amount=$request->order_amount;
    $globalOrder->discount=$request->discount;
    $globalOrder->service_charge=$request->service_charge;
    $globalOrder->discount_amount=$request->discount_amount;
    $globalOrder->service_charge_amount=$request->service_charge_amount;
    $globalOrder->net_amount=$request->net_amount;
    $globalOrder->unpaid_amount=$request->unpaid_amount;
    $globalOrder->delivery_charges=$request->delivery_charges;
    $globalOrder->name=$request->name;
    $globalOrder->comment=$request->comment;
    $globalOrder->payment_type=$request->payment_type;
    $globalOrder->branch_id=$branch_session;
    $globalOrder->business_id=$business_session;
    $globalOrder->created_by=$user_id;
    $globalOrder->table_id=$table_id_session;
    $globalOrder->is_paid=$request->is_paid;
    $globalOrder->source_id=$request->source_id;
    $globalOrder->status=$request->status;
    $globalOrder->order_type=$request->order_type;
    $globalOrder->is_delete=$request->is_delete;
    $globalOrder->save();


     $Order= new Order;
     $Order->comment=$globalOrder->comment;
     $Order->created_by=$globalOrder->created_by;
     $Order->table_id=$globalOrder->table_id;
     $Order->global_order_id=$globalOrder->global_order_id;
     $Order->business_id=$globalOrder->business_id;
     $Order->branch_id=$globalOrder->branch_id;
     $Order->save();


     $carts= Cart::where('is_split',1)->where("created_by",$user_id)->where("order_id",0)->where("business_id",$business_session)->where("global_order_id",$global_order_id)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->update(['order_id'=>$Order->order_id,'global_order_id'=>$Order->global_order_id]);

   
  $carts=Cart::where("created_by",$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();



   $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  

  $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');
 

  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);

  $sections = $view->renderSections();
  return $sections['totalammount']; 

  
}



  public function Post_global_order (Request $request)
  {
     
    $table_id_session = $this->getTableSession();
    $branch_session = $this->BranchSession();
    $business_session = $this->putBusinessSession();
    $global_order_id=$this->getGlobalOrderSession();
    $user_id=Auth::user()->id;

    $carts= Cart::where("created_by",$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->first();

         
     if($carts!="" && $carts->global_order_id!=0||$carts->global_order_id!="")
     {

    $globalOrder=GlobalOrder::find($carts->global_order_id);  
    $globalOrder->order_amount=$request->order_amount;
    $globalOrder->discount=$request->discount;
    $globalOrder->service_charge=$request->service_charge;
    $globalOrder->discount_amount=$request->discount_amount;
    $globalOrder->service_charge_amount=$request->service_charge_amount;
    $globalOrder->net_amount=$request->net_amount;
    $globalOrder->unpaid_amount=$request->unpaid_amount;
    $globalOrder->delivery_charges=$request->delivery_charges;
    $globalOrder->name=$request->name;
    $globalOrder->comment=$request->comment;
    $globalOrder->payment_type=$request->payment_type;
    $globalOrder->branch_id=$branch_session;
    $globalOrder->business_id=$business_session;
    $globalOrder->created_by=$user_id;
    $globalOrder->table_id=$table_id_session;
    $globalOrder->is_paid=$request->is_paid;
    $globalOrder->source_id=$request->source_id;
    $globalOrder->status=$request->status;
    $globalOrder->order_type=$request->order_type;
    $globalOrder->is_delete=$request->is_delete;
    $globalOrder->save();

  }

  else
  {

    $globalOrder= new GlobalOrder;
    $globalOrder->order_amount=$request->order_amount;
    $globalOrder->discount=$request->discount;
    $globalOrder->service_charge=$request->service_charge;
    $globalOrder->discount_amount=$request->discount_amount;
    $globalOrder->service_charge_amount=$request->service_charge_amount;
    $globalOrder->net_amount=$request->net_amount;
    $globalOrder->unpaid_amount=$request->unpaid_amount;
    $globalOrder->delivery_charges=$request->delivery_charges;
    $globalOrder->name=$request->name;
    $globalOrder->comment=$request->comment;
    $globalOrder->payment_type=$request->payment_type;
    $globalOrder->branch_id=$branch_session;
    $globalOrder->business_id=$business_session;
    $globalOrder->created_by=$user_id;
    $globalOrder->table_id=$table_id_session;
    $globalOrder->is_paid=$request->is_paid;
    $globalOrder->source_id=$request->source_id;
    $globalOrder->status=$request->status;
    $globalOrder->order_type=$request->order_type;
    $globalOrder->is_delete=$request->is_delete;
    $globalOrder->save();

  }

     $Order= new Order;
     $Order->comment=$globalOrder->comment;
     $Order->created_by=$globalOrder->created_by;
     $Order->table_id=$globalOrder->table_id;
     $Order->global_order_id=$globalOrder->global_order_id;
     $Order->business_id=$globalOrder->business_id;
     $Order->branch_id=$globalOrder->branch_id;
     $Order->save();

   
     $carts= Cart::where("created_by",$user_id)->where("order_id",0)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->update(['order_id'=>$Order->order_id]);



    $carts=Cart::where("created_by",$user_id)->where("order_id",0)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();

    

   $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();


     $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');


  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);
  $sections = $view->renderSections();
  return $sections['totalammount']; 

  
}



//save modifier data 
   public function modifier_save(Request $request)
  {
        $count=$request->count;
        $cart_id=$request->cart_id;

        $isExist = CartModifier::where('cart_id',$cart_id)->first();

        if ($isExist!="") 
         {

            $cart_modifiers=CartModifier::where('cart_id',$cart_id);
            $cart_modifiers->delete();

            for ($i=0; $i<$count; $i++) { 
                $cart_modifiers= new CartModifier;
                $cart_modifiers->modifier_id=$request->modifier_id;
                $cart_modifiers->cart_id=$request->cart_id;
                $cart_modifiers->modifier_category_id=$request->modifier_category_id;
                $cart_modifiers->modifier_price=$request->modifier_price;
                $cart_modifiers->tax_amount=$request->tax_ammount;
                $cart_modifiers->base_price=$request->base_price;
                $cart_modifiers->save();
          }  

    }
     
     else
      {
        for ($i=0; $i<$count; $i++) { 
        $cart_modifiers= new CartModifier;
        $cart_modifiers->modifier_id=$request->modifier_id;
        $cart_modifiers->cart_id=$request->cart_id;
        $cart_modifiers->modifier_category_id=$request->modifier_category_id;
        $cart_modifiers->modifier_price=$request->modifier_price;
        $cart_modifiers->tax_amount=$request->tax_ammount;
        $cart_modifiers->base_price=$request->base_price;
        $cart_modifiers->save();
        }
    }

       
  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();
  $table_id_session = $this->getTableSession();
  $user_id=Auth::user()->id;
  $global_order_id=$this->getGlobalOrderSession();



  $carts=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->with('product')->with('cartmodifier')->with('globalorder')->get();



   $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  
 
 $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');


  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);

  $sections = $view->renderSections();
  return $sections['totalammount']; 

}
  

  public function getmodifier_Details(Request $request)
  {

    $modifier_category_id=$request->modifier_category_id;
    
     $modifiers_details=Modifier::where('modifier_category_id',$modifier_category_id)->where('is_active',1)->with('modifier_categories')->with('product')->get();

      $view = View::make('modifier_details')->with('modifiers_details',$modifiers_details);
      $sections =$view->renderSections();
      return $sections['modifier_details'];

  }
  
  /*for default modifier product in left panel*/
  public function default_product_Modifier(Request $request)
{
         $business_session = $this->putBusinessSession();
         $branch_session = $this->BranchSession();
         $table_id_session = $this->getTableSession();
         $global_order_id=$this->getGlobalOrderSession();

    $product_id=$request->product_id;
    $cart_id=$request->cart_id;
    $user_id=Auth::user()->id;

    
$carts=Cart::where('cart_id',$cart_id)->where('created_by',$user_id)->where('product_id',$product_id)->where('business_id',$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where("order_id",0)->where("global_order_id",$global_order_id)->with('product')->with('cartmodifier')->with('globalorder')->get();


  $view = View::make('modifierproduct')->with('carts',$carts);
  $sections=$view->renderSections();
  return $sections['modifierproduct']; 

}





/*for modifier categoery to modofier*/
  public function getModifiers( Request $request)
  {

    $modifier_category_id=$request->modifier_category_id;
     $modifiers=Modifier::where('modifier_category_id',$modifier_category_id)->where('is_active',1)->with('modifier_categories')->with('product')->get();

         $view = View::make('modifier_list')->with('modifiers',$modifiers);
         $sections =$view->renderSections();
         return $sections['modifier'];

  }
  

/*for default modifier*/ 
 public function Default_Modifier( Request $request)
  {
        $product_id=$request->product_id;
        $modifier_categories=ModifierCategory::where('product_id',$product_id)->where('is_active',1)->get();

         $view = View::make('modifiercategory')->with('modifier_categories', $modifier_categories);
         $sections =$view->renderSections();
         return $sections['modifiercategory'];

  }






public function Modifier_product(Request $request)
{
     $product_id= $request->product_id;
     $cart_id= $request->cart_id;

   $product_modifier=Modifier::where('product_id',$request->product_id)->where('is_active',1)->first();
   if($product_modifier!=""){
   return "true";
   }
   else
   {
   return "false";
   }

}





/*for after unlink return all customers  data */
public function customer(Request $request)
    { 
   
     $business_session = $this->putBusinessSession();
     $branch_session = $this->BranchSession();
     $Customer_Info=User::where('is_active',1)->where("business_id",$business_session)->where("role_id",5)->get();
    $view = View::make('customer')->with('Customer_Info', $Customer_Info);
    $sections =$view->renderSections();
    return $sections['customersearch'];

}


//for search customer  in search bar  
public function CustomerSearch(Request $request)
{ 

  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();
  $search=$request->text;

   $Customer_Info=User::where('name', 'like', '%' . $search . '%')->where("business_id",$business_session)->where('role_id',5)->where('is_active',1)->get();
   $view = View::make('customer')->with('Customer_Info', $Customer_Info);
   $sections =$view->renderSections();
   return $sections['customersearch'];

}


/*for   when click on customer in cart */
public function curruent_Customer_Data_nwe (Request $request)
 {
  
   $business_session = $this->putBusinessSession();
   $branch_session = $this->BranchSession(); 
   $table_id_session= $this->getTableSession(); 
   $user_id=$request->id; 

  $user=User::where("id",$user_id)->where("business_id",$business_session)->where('role_id',5)->where('is_active',1)->first();

   return  $user;

}


/*for   when click on customer in cart */
public function curruent_Customer_Data(Request $request)
 {
  
   $business_session = $this->putBusinessSession();
   $branch_session = $this->BranchSession(); 
   $table_id_session= $this->getTableSession(); 
   $user_id=$request->id; 

  $user=User::where("id",$user_id)->where("business_id",$business_session)->where('role_id',5)->where('is_active',1)->first();

   return  $user;

}

/*for customer add in cart  when click on customer*/
public function Customer_Id_Cart_Zero(Request $request)
 {
  
   $business_session = $this->putBusinessSession();
   $branch_session = $this->BranchSession(); 
   $table_id_session= $this->getTableSession(); 
   $user_id=$request->id; 
   $global_order_id=$this->getGlobalOrderSession();

   /*code for userid save all  */
     $Cart= Cart::where('global_order_id',$global_order_id)->where('order_id',0)->where("user_id",$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->update(['user_id' =>0]);

     return $Cart;

}


/*for customer add in cart  when click on customer*/
public function Customer_Id_Cart(Request $request)
 {
   $business_session = $this->putBusinessSession();
   $branch_session = $this->BranchSession(); 
   $table_id_session= $this->getTableSession(); 
   $user_id=$request->id; 
    $global_order_id=$this->getGlobalOrderSession();
   /*code for userid save all  */
     $Cart= Cart::where('global_order_id',$global_order_id)->where('order_id',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->update(['user_id' => DB::raw($user_id)]);

 }

/*for couster id when click on customer*/

 public function Customer_id(Request $request)
 { 

   $business_session = $this->putBusinessSession();
   $branch_session = $this->BranchSession(); 
   $table_id_session= $this->getTableSession(); 
   $user_id=$request->id; 
   $user=User::where("business_id",$business_session)->where('id',$request->id)->where('role_id',5)->where('is_active',1)->first();

  return $user;

 }


 public function Customer_Info(Request $request)
 {
     $business_session = $this->putBusinessSession();
      $user_id=$request->user_id;
      
     $isExist = User::where('id',$user_id)->where('business_id',$business_session)->where('role_id',5)->where('is_active',1)->get();

      if ($isExist!="") 
      {

      $user=User::find($user_id);
      $user->name=$request->customer_name; 
      $user->password=123456;
      $user->email=$request->customer_email;
      $user->contact_number=$request->customer_contact;
      $user->address=$request->customer_address;
      $user->postcode=$request->customer_postcode;
      $user->tag=$request->customer_tags;
      $user->business_id=$business_session;
      $user->role_id=5;

      $user->save();

      return $user;

    }
      else
    {
      $user=new User;
      $user->name=$request->customer_name; 
      $user->password=123456;
      $user->email=$request->customer_email;
      $user->contact_number=$request->customer_contact;
      $user->address=$request->customer_address;
      $user->postcode=$request->customer_postcode;
      $user->tag=$request->customer_tags;
      $user->business_id=$business_session;
      $user->role_id=5;
      $user->save();
      return $user;
    }
  

 }

  /*product is_split 0 when cancle split */
  public function is_split(Request $request)
  {
    $business_session = $this->putBusinessSession();
    $branch_session = $this->BranchSession(); 
    $table_id_session= $this->getTableSession();
    $global_order_id=$this->getGlobalOrderSession();
    $cart_id= $request->id;
    $user_id=Auth::user()->id; 

    $cart = Cart::find($cart_id);
    if ($cart!=""){
      $cart->is_split=0;
      $cart->save();
    }


  $carts=Cart::where('created_by',$user_id)->where('global_order_id',$global_order_id)->where('order_id',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',1)->with('product')->with('cartmodifier')->with('globalorder')->get();


    $new_view = View::make('totalproduct')->with('carts',$carts);

    $new_sections=$new_view->renderSections();
  
    $sum_split_product=Cart::where("created_by",$user_id)->where('global_order_id',$global_order_id)->where('is_split',1)->where('order_id',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->select(DB::raw('sum(base_price * quantity) as total'))->get();

      
      $modifier_total=CartModifier::with('cart')->whereHas('cart',function($query) use($business_session,$branch_session,$table_id_session,$global_order_id){
      $query->where('is_split',1)->where('global_order_id',$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session);
       })->sum('modifier_price');  

    
     $carts=Cart::where('created_by',$user_id)->where('global_order_id',$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();

      $globalOrder=Cart::where('created_by',$user_id)->where('global_order_id',$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  
  
  $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');


$view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);

     $sections=$view->renderSections();
  
  $data=array("split_product"=>$new_sections['totalproduct'],"ammount"=>$sections['totalammount'],"sum_split_product"=>$sum_split_product,"modifier_total"=>$modifier_total);
 
     return $data;

    
  }


  /*product add in cart */
  public function Show_product(Request $request)
  {
    $table_id_session= $this->getTableSession();
    $business_session = $this->putBusinessSession();
    $branch_session = $this->BranchSession();
    $global_order_id=$this->getGlobalOrderSession(); 

    $cart_id= $request->cart_id;
    $user_id=Auth::user()->id; 
    $carts=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where("order_id",0)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('cart_id',$cart_id)->with('product')->with('cartmodifier')->with('globalorder')->get();

    $cart = Cart::find($cart_id);
    if ($cart!=""){
      $cart->is_split=1;
      $cart->save();
    }

    $new_view = View::make('totalproduct')->with('carts',$carts);
    $new_sections=$new_view->renderSections();
  
    $sum_split_product=Cart::where('created_by',$user_id)->where("order_id",0)->where("global_order_id",$global_order_id)->where('is_split',1)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->select(DB::raw('sum(base_price * quantity) as total'))->get();
   

    
    $modifier_total=CartModifier::with('cart')->whereHas('cart',function($query) use($business_session,$branch_session,$table_id_session,$global_order_id){
      $query->where('is_split',1)->where('global_order_id',$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session);
       })->sum('modifier_price');

   
     $carts=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();

      $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  
 $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');


  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);
     $sections=$view->renderSections();
       
  $data=array("split_product"=>$new_sections['totalproduct'],"ammount"=>$sections['totalammount'],"sum_split_product"=>$sum_split_product,"modifier_total"=>$modifier_total);

    return $data;

  }


  /*for default categoery*/
  public function default_categoery()
  {
   $business_session = $this->putBusinessSession();
   $branch_session = $this->BranchSession();

   $categories_default=Category::where('is_active',1)->where("business_id",$business_session)
   ->where('branch_id',$branch_session)->first();  

   $category_id=$categories_default->category_id;

   $product_categories=ProductCategory::where('category_id', $category_id)->pluck('product_id');
   $products=Product::whereIn('product_id', $product_categories)->where('business_id',$business_session)->where('branch_id',$branch_session)->with('modifier_categories')->get();

   /*$modifier_categories_Product=ModifierCategory::pluck('product_id');*/

   $view = View::make('product')->with('products', $products);
   $sections =$view->renderSections();
   return $sections['product']; 
 }


 Public function TableSession(Request $request)
 {
  $table_id= $request->table_id;
  $table=Table::where('table_id',$table_id)->first();
  $merge_table_id=$table->mergetable_id;
  if($merge_table_id!=0 && $merge_table_id!=""){
    $table_id=$table->mergetable_id;
  }
  Session::put('table_id_session',$table_id);
}


/*for show data in cart on window load  */
public function showcartdata(Request $request)
{  

  $table_id= $request->table_id;

  $table=Table::where('table_id',$table_id)->first();

  $merge_table_id=$table->mergetable_id;

  if($merge_table_id!=0 && $merge_table_id!=""){
    $table_id=$table->mergetable_id;
  }

  Session::put('table_id_session',$table_id);
  $table_id = Session::get('table_id_session');
  
 
  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();
  $table_id_session = $this->getTableSession();
  $global_order_id=$this->getGlobalOrderSession();
  $user_id=Auth::user()->id; 

$carts=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();


  
   $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();

 $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');
 


  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);
  $sections = $view->renderSections();
 /* return $sections['totalammount'];*/ 

   $Orders=Cart::where('created_by',$user_id)->where("order_id",0)->where("global_order_id",'!=',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->select('global_order_id')->groupBy('global_order_id')->get();    
$order_count=count($Orders);

$data=array("sections"=>$sections['totalammount'],"order_count"=>$order_count);

return $data;


}

/*for merg more than one  tables */
public function getmergnowtables ( Request $request)
{
  $tables_ids=$request->data;

  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();
  $table_id_session = $this->getTableSession();
  $global_order_id=$this->getGlobalOrderSession();

  $carts = Cart::whereIn('table_id',$tables_ids)->get();

  foreach($carts as $cart) {
    $cart->table_id =$tables_ids[0];
    $cart->save();
  } 

  $merge_table = Table::whereIn('table_id',$tables_ids)->get();
  foreach($merge_table as $mergetable_id) {
    $mergetable_id->mergetable_id =$tables_ids[0];
    $mergetable_id->status=2;
    $mergetable_id->save();
  }
  Session::put('table_id_session',$tables_ids[0]);

  $carts=Cart::where("order_id",0)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();

   $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();


$paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');

$view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);

  $sections = $view->renderSections();
  return $sections['totalammount']; 

}


/*for pos table in table panel */
public function postableno( Request $request)
{

  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();
  $table_id_session = $this->getTableSession();

  $tables=Table::where('is_active',1)->where("business_id",$business_session)->where("branch_id",$branch_session)->get();

  $table_cart=Cart::where("business_id",$business_session)->where('order_id',0)->where("branch_id",$branch_session)->get();

  $view = View::make('tablepos')->with('tables', $tables)->with('table_cart',$table_cart);
  $sections = $view->renderSections();
  return $sections['tablepos'];

}


/*for pos table in table panel for tableposmerg*/
public function tableposmerg( Request $request)
{
  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();
  $table_id_session = $this->getTableSession();

  $tables=Table::where('is_active',1)->where("business_id",$business_session)->where("branch_id",$branch_session)->get();
  $table_cart=Cart::where("business_id",$business_session)->where('order_id',0)->where("branch_id",$branch_session)->get();
  $view = View::make('tableposmerg')->with('tables', $tables)->with('table_cart',$table_cart);
  $sections = $view->renderSections();
  return $sections['tableposmerg'];

}


//for acess pos panel user verification 
public function posuserverify(Request $request)
{
  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();

  $user_id=Auth::user()->id;
  $pin=$request->text;
  $user=User::where('id',$user_id)->where('pin',$pin)->where('is_active',1)->where("business_id",$business_session)->first();

  if($user!=""){
   return "true";
 }else{
   return "false";
 }

}


//for add categorey to left panel
public function posindex(Request $request)
{
  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();
  $table_id_session = $this->getTableSession();
  $user_id=Auth::user()->id;
  /*code for auto is_split zero*/
  Cart::where('created_by',$user_id)->where('is_split', 1)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->update(['is_split' => DB::raw(0)]);

/* $Customer_Info=User::where('is_active',1)->where("business_id",$business_session)->where("role_id",5)->get();*/

  $categories=Category::where('is_active',1)->where("business_id",$business_session)
  ->where('branch_id',$branch_session)->get();

  $cart_user=Cart::where('created_by',$user_id)->where('order_id',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->with('customer')->first();
 

 if ($cart_user!="") {
  if ($cart_user->user_id==0) {
    $cart_user="";
  }
 }else{
  $cart_user="";
 }
  /* ->with('Customer_Info',$Customer_Info)*/ 

     $Orders=Cart::where('created_by',$user_id)->where("order_id",0)->where("global_order_id",'!=',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->select('global_order_id')->groupBy('global_order_id')->get();

      $order_count=count($Orders);

 return view('pos-home')->with('categories',$categories)->with('cart_user',$cart_user)->with('order_count',$order_count);

}



//for products to categoery  and show in cards 
public function getcategory(Request $request)
{ 
  $business_session =$this->putBusinessSession();
  $branch_session = $this->BranchSession();
  $category_id=$request->category_id;

  $product_categories=ProductCategory::where('category_id', $category_id)->pluck('product_id');

  $products=Product::whereIn('product_id', $product_categories)->with('modifier_categories')->where('business_id',$business_session)->where('branch_id',$branch_session)->get();

  $view = View::make('product')->with('products', $products);
  $sections =$view->renderSections();
  return $sections['product'];
}



//for cards product search in search bar pos 
public function possearch(Request $request)
{ 

  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();
ew::  $search=$request->text;
  $products=Product::where('product_name', 'like', '%' . $search . '%')->where("business_id",$business_session)->where('branch_id',$branch_session)->get();
  $view = Vimake('product')->with('products', $products);
  $sections = $view->renderSections();
  return $sections['product'];
}


public function getproductprice(Request $request)
{  
  $product_id=$request->product_id;
  $products=Product::where('product_id', $product_id)->first();
  return $products;
}


/*add recrord into cart when click on carts*/
public function postproductcart(Request $request){ 

  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();
  $table_id_session = $this->getTableSession();
  $global_order_id=$this->getGlobalOrderSession();
  $product_id=$request->product_id;
  $user_id=Auth::user()->id;

  $products=Product::where('product_id',$product_id)->where('is_active',1)->where("business_id",$business_session)->where('branch_id',$branch_session)->first();



  $cart=Cart::where('created_by',$user_id)->where('global_order_id',$global_order_id)->where('order_id',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('product_id',$product_id)->where('table_id',$table_id_session)->orderBy('cart_id','desc')->first();
  
  $created_user= Auth::user();
  $created_by=$created_user->id;

  if($cart!="")
  {
        
    $recent_cart=Cart::where('created_by',$user_id)->where('global_order_id',$global_order_id)->where("business_id",$business_session)->where('order_id',0)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->orderBy('cart_id','desc')->first();
    $recent_product_id=$recent_cart->product_id;
    
    if($product_id==$recent_product_id){
      $quantity=$cart->quantity+1;
      $cart->global_order_id=$global_order_id;
      $cart->quantity=$quantity;
      $cart->save();
    }else{
      $cart=new Cart;
      $cart->table_id=$table_id_session;
      $cart->global_order_id=$global_order_id;
      $cart->product_id=$product_id;
      $cart->branch_id=$products->branch_id;   
      $cart->business_id=$products->business_id;
      $cart->user_id=$created_by;  
      $cart->created_by=$created_by;
      $cart->quantity=1;
      $cart->product_price=$products->price;
      $cart->base_price=$products->price; 
      $cart->save();
    }
  }
  else{
    $cart=new Cart;
    $cart->table_id=$table_id_session;
    $cart->global_order_id=$global_order_id;
    $cart->product_id=$product_id;
    $cart->branch_id=$products->branch_id;   
    $cart->business_id=$products->business_id;
    $cart->user_id=$created_by;  
    $cart->created_by=$created_by;
    $cart->quantity=1;
    $cart->product_price=$products->price; 
    $cart->base_price=$products->price;                
    $cart->save();
  }

  

  $user_id=Auth::user()->id;

  $carts=Cart::where('order_id',0)->where('global_order_id',$global_order_id)->where('business_id',$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->where('created_by',$user_id)->with('product')->with('cartmodifier')->with('globalorder')->get();

   $globalOrder=Cart::where('created_by',$user_id)->where('global_order_id',$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  
  $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');

  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);

  $sections=$view->renderSections();
  return $sections['totalammount'];


} 


/*for delete all orders*/
public function delete_order(Request $request){ 

  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();
  $table_id_session = $this->getTableSession();
  $global_order_id=$this->getGlobalOrderSession();
  $user_id=$request->user_id;

  $carts=Cart::where('global_order_id',$global_order_id)->where('order_id',0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session);
  $carts->delete();

    Session::put('global_order_id_Session',0);
    $global_order_id=$this->getGlobalOrderSession();

 $carts=Cart::where("created_by",$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();


  $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  
  $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');

 
  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);
  $sections = $view->renderSections();
/*  return $sections['totalammount']; */


$Orders=Cart::where('created_by',$user_id)->where("order_id",0)->where("global_order_id",'!=',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->select('global_order_id')->groupBy('global_order_id')->get();

$order_count=count($Orders);

$data=array("sections"=>$sections['totalammount'],"order_count"=>$order_count);
return $data;


}

/*for update quantity when we click on remove*/
public function update_quantity(Request $request){ 
  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();
  $table_id_session = $this->getTableSession();
  $user_id=Auth::user()->id;
  $cart_id=$request->cart_id;
  $global_order_id=$this->getGlobalOrderSession();

  $carts=Cart::where('created_by',$user_id)->where('global_order_id',$global_order_id)->where('order_id',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('cart_id',$cart_id)->first();
  $quantity=$carts->quantity;
  if($quantity==1)
  {  
    $carts->delete();
    $carts=Cart::where('created_by',$user_id)->where('global_order_id',$global_order_id)->where('order_id',0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();

     $globalOrder=Cart::where('created_by',$user_id)->where('global_order_id',$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  
    $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');

  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);

    $sections = $view->renderSections();
    return $sections['totalammount'];

  }

  else
  {
    $cart=Cart::find($request->cart_id);
    $quantity=$carts->quantity;
    $cart->quantity=$quantity-1;
    $cart->save();

    $carts=Cart::where('created_by',$user_id)->where('global_order_id',$global_order_id)->where("order_id",0)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();

     $globalOrder=Cart::where('created_by',$user_id)->where('global_order_id',$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  
  $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');  
   

  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);

    $sections = $view->renderSections();
    return $sections['totalammount'];  

  } 
} 


/*for update quantity when we click on apply changes*/
public function add_update_quantity(Request $request){ 
  $business_session = $this->putBusinessSession();
  $branch_session = $this->BranchSession();
  $table_id_session = $this->getTableSession();
  $global_order_id=$this->getGlobalOrderSession();
  $user_id=Auth::user()->id;
  $cart_id=$request->cart_id;
  $quantity=$request->quantity;
  $base_price=$request->base_price;

  $cart=Cart::find($request->cart_id);
  $cart->quantity=$quantity;
  $cart->base_price=$base_price;
  $cart->save();



  $carts=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where('table_id',$table_id_session)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->get();

   $globalOrder=Cart::where('created_by',$user_id)->where("global_order_id",$global_order_id)->where("order_id",0)->where('created_by',$user_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->where('table_id',$table_id_session)->where('is_split',0)->with('product')->with('cartmodifier')->with('globalorder')->first();
  
 $paid_transaction_sum=PaymentHistory::where("created_by",$user_id)->where("user_id",$user_id)->where("global_order_id",$global_order_id)->where("business_id",$business_session)->where('branch_id',$branch_session)->sum('transaction_amount');


  $view = View::make('totalammount')->with('carts',$carts)->with('globalOrder',$globalOrder)->with('paid_transaction_sum',$paid_transaction_sum);
  $sections = $view->renderSections();
  return $sections['totalammount'];
} 

}





