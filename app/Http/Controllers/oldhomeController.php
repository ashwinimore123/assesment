<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\ProductCategory;
use App\Product;
use App\Cart;
use App\Home;
use App\BranchUser;
use View;
use DB;
use Auth;
class HomeController extends Controller
{
public function __construct()
{
$this->middleware('auth');
}
public function index()
{

/*return view('oldhome');
$user=Auth::user();
$branch_users=BranchUser::where('user_id',$user->id)->with('branch')->with('user')->get();
return view('branch')->with('branch_users',$branch_users);*/
/*return view('oldhome');*/

}
// main home page
public function homepage()
{
return view('welcome');
}

//for add categorey to left panel
public function posindex()
{

$categories=Category::where('is_active',1)->get();
return view('pos-home')->with('categories',$categories);
}

//for products to categoery  and show in cards 
public function getcategory(Request $request)
{ 
$category_id=$request->category_id;
$product_categories=ProductCategory::where('category_id', $category_id)->pluck('product_id');
$products=Product::whereIn('product_id', $product_categories)->get();
$view = View::make('product')->with('products', $products);
$sections = $view->renderSections();
return $sections['product'];
}

//for cards product search in search bar pos 
public function possearch(Request $request)
{ 

$search=$request->text;
$products=Product::where('product_name', 'like', '%' . $search . '%')->get();
$view = View::make('product')->with('products', $products);
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
$product_id=$request->product_id;
$products=Product::where('product_id', $product_id)->first();  
$cart=Cart::where('product_id',$product_id)->where('table_id',1)->orderBy('cart_id','desc')->first();     
$created_user= Auth::user();
$created_by=$created_user->id;

if($cart!="")
{
$recent_cart=Cart::where('table_id',1)->orderBy('cart_id','desc')->first();
$recent_product_id=$recent_cart->product_id;

if($product_id==$recent_product_id){

$quantity=$cart->quantity+1;
$cart->quantity=$quantity;
$cart->save();
}else{
$cart=new Cart;
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
$carts=Cart::where('table_id',1)->with('product')->get();
$view = View::make('totalammount')->with('carts',$carts);
$sections = $view->renderSections();
return $sections['totalammount'];
} 

/*for delete all orders*/
public function delete_order(Request $request){ 
$user_id=$request->user_id;
$carts=Cart::where('user_id',$user_id);
$carts->delete();

$carts=Cart::where('table_id',1)->with('product')->get();
$view = View::make('totalammount')->with('carts',$carts);
$sections = $view->renderSections();
return $sections['totalammount'];   
}

/*for update quantity when we click on remove*/
public function update_quantity(Request $request){ 
$cart_id=$request->cart_id;
$carts=Cart::where('cart_id',$cart_id)->first();
$quantity=$carts->quantity;
if($quantity==1)
{ 
$carts->delete();

$carts=Cart::where('table_id',1)->with('product')->get();
$view = View::make('totalammount')->with('carts',$carts);
$sections = $view->renderSections();
return $sections['totalammount'];

}
else
{
$cart=Cart::find($request->cart_id);
$quantity=$carts->quantity;
$cart->quantity=$quantity-1;
$cart->save();

$carts=Cart::where('table_id',1)->with('product')->get();
$view = View::make('totalammount')->with('carts',$carts);
$sections = $view->renderSections();
return $sections['totalammount'];       
} 
} 
/*for update quantity when we click on apply changes*/
public function add_update_quantity(Request $request){ 
$cart_id=$request->cart_id;
$quantity=$request->quantity;
$base_price=$request->base_price;

$cart=Cart::find($request->cart_id);
$cart->quantity=$quantity;
$cart->base_price=$base_price;
$cart->save();
$carts=Cart::where('table_id',1)->with('product')->get();
$view = View::make('totalammount')->with('carts',$carts);
$sections = $view->renderSections();
return $sections['totalammount'];
} 
}





