    
    
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\KitchenSection;
use App\Tax;
use App\Variant;
use App\Business;
use App\Category;
use App\ProductVariant;
use App\ProductCategory;
use App\SKU;
use Illuminate\Support\Facades\Input;
use Datatables;
use Session;
class ProductController extends Controller
{
    
    //Show Product Data
    public function getProductIndex(){
      $business_session = $this->putBusinessSession();
      $branch_session = $this->BranchSession();

      $product = Product::with('tax')->with('business')->with('branch')->where('business_id',$business_session)->where('branch_id',$branch_session)->get();
      
      return Datatables($product)->make(true);
    }

    public function getProductShow(){
      return view('product/all');
    }


    //Add Product Data
    public function getProductAdd(){
      $business_session = $this->putBusinessSession();
      $branch_session = $this->BranchSession();
      $kitchen = KitchenSection::where('is_active',1)->where('kitchen_section_id','!=',4)->get();
      $taxes = Tax::where('is_active',1)->get();
      $parent_variant = Variant::where('is_active',1)->where('variant_id','!=',1)->get();
      
      $child_variant = Variant::where('is_active',1)->where('variant_id','!=',1)->get();
      $parent_product_variant = ProductVariant::where('is_active',1)->where('product_variant_id','!=',1)->get();
      $child_product_variant = ProductVariant::where('is_active',1)->where('product_variant_id','!=',1)->get();
      $business = Business::where('business_id',$business_session)->first();


      $category = Category::where('is_active',1)->where('business_id',$business_session)->where('branch_id',$branch_session)->get();
      
        
      return view('product/add')->with('kitchen',$kitchen)
                                  ->with('taxes',$taxes)
                                  ->with('parent_variant',$parent_variant)
                                  ->with('child_variant',$child_variant)
                                  ->with('business',$business)
                                  ->with('category',$category)
                                  ->with('parent_product_variant',$parent_product_variant)
                                  ->with('child_product_variant',$child_product_variant); 
    }




    public function postProductAdd(Request $request){
      $business_session = $this->putBusinessSession();
        $branch_session = $this->BranchSession();
        $business = Business::where('business_id',$business_session)->first();


      if ($business->is_restaurant==0) {
          $request->validate([
                            'product_name'=>'required',
                            'color'=>'required',
                            
                            'price'=>'required',
                            'take_away_price'=>'required',
                            'tax_id'=>'required',
                            'tax_setting'=>'required',
                            'category_id'=>'required',

                            ]);
             }else{
              $request->validate([
                            'product_name'=>'required',
                            'color'=>'required',
                            'price'=>'required',
                            'take_away_price'=>'required',
                            'tax_id'=>'required',
                            'tax_setting'=>'required',
                            'category_id'=>'required',
                            'kitchen_section_id',
                            ]);
              }
        

          //Sku Data


          $parent_variant_id = $request->parent_variant_id;
          $child_variant_id = $request->child_variant_id;

          $parent_variant_values = $request->parent_variant_values;
          $child_variant_values = $request->child_variant_values;
          // echo "<pre>";
          // print_r($request->all());
          // echo "</pre>";die;

          $sku_price = $request->sku_price;
           $discount = $request->discount;
           $product_weight = $request->product_weight;
           $product_unit = $request->product_unit;
           $quantity = $request->quantity;
           $sku_name = $request->sku_name;
           $barcode = $request->barcode;

           if($parent_variant_id==""){
            $parent_variant_id=1;
            }
            if($child_variant_id==""){
              $child_variant_id=1;
            }

          
           // $parent_product_variant_ids = $request->parent_product_variant_id;
           // $child_product_variant_ids = $request->child_product_variant_id;

          

         if($business->is_restaurant==0){
           $kitchen_section_id=4;
        }else{

            $kitchen_section_id = $request->kitchen_section_id; 
        }

       
//=================================================Add Product Data=======================
         if($request->is_stock !=""){
          $is_stock = 1;
        }else{
          $is_stock = 0;
        }
      $product = new Product();

      


        $product->product_name = $request->product_name;
        $product->color = $request->color;
        $product->price = $request->price;
        $product->take_away_price = $request->take_away_price;
        $product->tax_id = $request->tax_id;
        $product->tax_setting = $request->tax_setting;
        $product->business_id = $business_session;
        $product->branch_id = $branch_session;

        $product->kitchen_section_id = $kitchen_section_id;
        $product->parent_variant_id = $parent_variant_id;
        $product->child_variant_id = $child_variant_id;
        $product->is_stock = $is_stock;
        $product->is_restaurant = $business->is_restaurant;
        $product->save();



///================================= Add Product Data End===============================
       
//==================================Add Product Category Data Start====================
        //Product Category data
        $category_ids = $request->category_id;

        foreach ($category_ids as $category_id) {
        $product_id=$product->product_id;
        $product_category = new ProductCategory();
        $product_category->product_id = $product_id;
        $product_category->category_id = $category_id;
        $product_category->save();  
        }
        
//======================================Add Product Category Data End======================

//====================================Sku Data==================================
        //==========================sku data is_restaurant is 0==================
                
          if(!empty($parent_variant_values)){
            // echo "<pre>";
            //   print_r($child_variant_values);
            //   echo "</pre>";die;
            for($i=0; $i<count($parent_variant_values);$i++){
              $parent_product_variant_name = $parent_variant_values[$i];

              if($parent_product_variant_name!=""){

                  $variant = ProductVariant::where('product_variant_name',$parent_product_variant_name)->where('product_variant_id','!=',1)->first();

                  if ($variant=="") {
                    
                    $product_variant = new ProductVariant();
                    $product_variant->product_variant_name=$parent_product_variant_name;
                    $product_variant->variant_id=$parent_variant_id; 
                    $product_variant->save();

                    $parent_product_variant_id = $product_variant->product_variant_id;
                    

                  }else{
                    $parent_product_variant_id = $variant->product_variant_id;
                  }

                }
              }
            }
            

            if(!empty($child_variant_values)){
              // echo "<pre>";
              // print_r($child_variant_values);
              // echo "</pre>";die;
              for($i=0;$i<count($child_variant_values);$i++){
                $child_product_variant_name = $child_variant_values[$i];

                // echo $child_product_variant_name;die;
                if ($child_product_variant_name!="") {
                  $variant = ProductVariant::where('product_variant_name',$child_product_variant_name)->where('product_variant_id','!=',1)->first();

                  
                  if ($variant=="") {
                    $product_variant = new ProductVariant();
                    $product_variant->product_variant_name=$child_product_variant_name;
                    $product_variant->variant_id=$child_variant_id; 
                    $product_variant->save();

                    $child_product_variant_id = $product_variant->product_variant_id;


                   }  else{
                     $child_product_variant_id = $variant->product_variant_id;
                   }
                }
              }
            }


        
        //==========================sku data is_restaurant is 0 End==================

        //==========================sku data is_restaurant is 1==================
         

          
          if($sku_price==""){
            $sku_price=0;
          }

          if($discount==""){
            $discount=0;
          }

          if($product_weight==""){
            $product_weight=0;
          }

          if($product_unit==""){
            $product_unit=0;
          }

          if($quantity==""){
            $quantity=0;
          }

          if ($sku_name=="") {
            $sku_name="";
          }
          if ($barcode=="") {
            $barcode="";
          }

         
                        
                        $parent_variant_id=1;
                        $child_variant_id=1;
                        if(!empty($parent_variant_values)){

                          for($i=0;$i<count($parent_variant_values);$i++) {

                            
                            $parent_variant_id=1;
                            $child_variant_id=1;

                            if (isset($parent_variant_values[$i])) {
                              $parent_variant_name=$parent_variant_values[$i];
                            }
                            if (isset($child_variant_values[$i])) {
                              $child_variant_name=$child_variant_values[$i];
                            }
                            if (isset($variant_my_prices[$i])) {
                              $variant_my_price=$variant_my_prices[$i];
                            }
                            
                            if (isset($variant_skues[$i])) {
                              $variant_sku=$variant_skues[$i];
                            }
                            if (isset($variant_barcodes[$i])) {
                              $variant_barcode=$variant_barcodes[$i];
                            }

                            if($quantity==""){
                              $quantity=0;
                            }

                            if($product_weight==""){
                              $product_weight=0;
                            }
                            if($parent_variant_name!=""){
                              $parent_variant = ProductVariant::where('product_variant_name',$parent_variant_name)->where('product_variant_id','!=',1)->first();
                              $parent_variant_id=$parent_variant->product_variant_id;
                              
                            }else{
                              $parent_variant_id=1;
                            }

                            if($child_variant_name!=""){
                              $child_variant = ProductVariant::where('product_variant_name',$child_variant_name)->where('product_variant_id','!=',1)->first();
                              
                              $child_variant_id=$child_variant->product_variant_id;
                              
                            }else{
                              $child_variant_id=1;
                            }

                            $sku = new SKU();
                            $sku->product_id = $product->product_id;
                            $sku->business_id = $business_session;
                            $sku->branch_id  = $branch_session;
                            $sku->sku_price = $sku_price;
                            $sku->discount =$discount;
                            $sku->product_weight = $product_weight;
                            $sku->product_unit = $product_unit;
                            $sku->quantity = $quantity;
                            $sku->sku_name = $sku_name;
                            $sku->barcode = $barcode;
                            $sku->parent_product_variant_id = $parent_variant_id;
                            $sku->child_product_variant_id = $child_variant_id;
                            $sku->save();


                          }
                        }else{
   
                          $sku = new SKU();
                            $sku->product_id = $product->product_id;
                            $sku->business_id = $business_session;
                            $sku->branch_id  = $branch_session;
                            $sku->sku_price = $sku_price;
                            $sku->discount =$discount;
                            $sku->product_weight = $product_weight;
                            $sku->product_unit = $product_unit;
                            $sku->quantity = $quantity;
                            $sku->sku_name = $sku_name;
                            $sku->barcode = $barcode;

                            $sku->parent_product_variant_id = $parent_variant_id;
                            $sku->child_product_variant_id = $child_variant_id;

                            $sku->save();
                        }

            
        return redirect('admin/product/all');
    }


    //Update product Data
    public function getProductUpdate($id){
        $business_session = $this->putBusinessSession();
        $branch_session = $this->BranchSession();

        $product = Product::find($id);
        $product_category = ProductCategory::where('product_id',$id)->get();


        

        $sku=SKU::where('product_id',$id)->where('parent_product_variant_id','!=',1)->where('child_product_variant_id','!=',1)->with('parent_product_variant')->with('child_product_variant')->get();

        
    
        
        $kitchen = KitchenSection::where('is_active',1)->where('kitchen_section_name','!=',4)->get();
        $taxes = Tax::where('is_active',1)->get();
        $parent_variant = Variant::where('is_active',1)->where('variant_id','!=',1)->get();
        $child_variant = Variant::where('is_active',1)->where('variant_id','!=',1)->get();
        $parent_product_variant = ProductVariant::where('is_active',1)->where('product_variant_id','!=',1)->get();
        $child_product_variant = ProductVariant::where('is_active',1)->where('product_variant_id','!=',1)->get();
        $business = Business::where('business_id',$business_session)->first();
        
        $category = Category::where('is_active',1)->where('business_id',$business_session)->where('branch_id',$branch_session)->get();
        

      return view('product/update')->with('product',$product)
                                  ->with('kitchen',$kitchen)
                                  ->with('taxes',$taxes)
                                  ->with('parent_variant',$parent_variant)
                                  ->with('child_variant',$child_variant)
                                  ->with('business',$business)
                                  ->with('category',$category)
                                  ->with('parent_product_variant',$parent_product_variant)
                                  ->with('child_product_variant',$child_product_variant)
                                  ->with('product_category',$product_category)
                                  ->with('sku',$sku);
    }




    public function postProductUpdate(Request $request){
          $business_session = $this->putBusinessSession();
        $branch_session = $this->BranchSession();
        $business = Business::where('business_id',$business_session)->first();
       
      if ($business->is_restaurant==0) {
          $request->validate([
                            'product_name'=>'required',
                            'color'=>'required',

                            'price'=>'required',
                            'take_away_price'=>'required',
                            'tax_id'=>'required',
                            'tax_setting'=>'required',
                            'category_id'=>'required',
                            
                            
                            

                            ]);
             }else{
              $request->validate([
                            'product_name'=>'required',
                            'color'=>'required',
                            
                            'price'=>'required',
                            'take_away_price'=>'required',
                            'tax_id'=>'required',
                            'tax_setting'=>'required',
                            'category_id'=>'required',
                            'kitchen_section_id',
                            ]);
              }
        

          //Sku Data


          $parent_variant_id = $request->parent_variant_id;
          $child_variant_id = $request->child_variant_id;

          $parent_variant_values = $request->parent_variant_values;
          $child_variant_values = $request->child_variant_values;
          
          $sku_price = $request->sku_price;
           $discount = $request->discount;
           $product_weight = $request->product_weight;
           $product_unit = $request->product_unit;
           $quantity = $request->quantity;
           $sku_name = $request->sku_name;
           $barcode = $request->barcode;

           if($parent_variant_id==""){
            $parent_variant_id=1;
            }
            if($child_variant_id==""){
              $child_variant_id=1;
            }

          
           // $parent_product_variant_ids = $request->parent_product_variant_id;
           // $child_product_variant_ids = $request->child_product_variant_id;

          

         if($business->is_restaurant==0){
           $kitchen_section_id=4;
        }else{

            $kitchen_section_id = $request->kitchen_section_id; 
        }

       





//=================================================Update Product Data=======================
         if($request->is_stock !=""){
          $is_stock = 1;
        }else{
          $is_stock = 0;
        }
      $product = Product::find($request->id);

      


        $product->product_name = $request->product_name;
        $product->color = $request->color;
        $product->price = $request->price;
        $product->take_away_price = $request->take_away_price;
        $product->tax_id = $request->tax_id;
        $product->tax_setting = $request->tax_setting;
        $product->business_id = $business_session;
        $product->branch_id = $branch_session;

        $product->kitchen_section_id = $kitchen_section_id;
        $product->parent_variant_id = $parent_variant_id;
        $product->child_variant_id = $child_variant_id;
        $product->is_stock = $is_stock;
        $product->is_restaurant = $business->is_restaurant;
        $product->save();
        $product_id = $product->product_id;



///================================= Update Product Data End===============================
       
//==================================Update Product Category Data Start====================
        
        //Product Category data
        $category_ids = $request->category_id;

        $product_categories = ProductCategory::where('product_id',$product_id)->delete();

        foreach ($category_ids as $category_id) {
        $product_id=$product->product_id;
        $product_category = new ProductCategory();
        $product_category->product_id = $product_id;
        $product_category->category_id = $category_id;
        $product_category->save();  
        }
        
//======================================Update Product Category Data End======================

//====================================Sku Data==================================
        //==========================sku data is_restaurant is 0==================
                if(!empty($parent_variant_values)){
            // echo "<pre>";
            //   print_r($child_variant_values);
            //   echo "</pre>";die;
            for($i=0; $i<count($parent_variant_values);$i++){
              $parent_product_variant_name = $parent_variant_values[$i];

              if($parent_product_variant_name!=""){

                  $variant = ProductVariant::where('product_variant_name',$parent_product_variant_name)->where('product_variant_id','!=',1)->first();

                  if ($variant=="") {
                    
                    $product_variant = new ProductVariant();
                    $product_variant->product_variant_name=$parent_product_variant_name;
                    $product_variant->variant_id=$parent_variant_id; 
                    $product_variant->save();

                    $parent_product_variant_id = $product_variant->product_variant_id;
                    

                  }else{
                    $parent_product_variant_id = $variant->product_variant_id;
                  }

                }
              }
            }
            

            if(!empty($child_variant_values)){
              // echo "<pre>";
              // print_r($child_variant_values);
              // echo "</pre>";die;
              for($i=0;$i<count($child_variant_values);$i++){
                $child_product_variant_name = $child_variant_values[$i];

                // echo $child_product_variant_name;die;
                if ($child_product_variant_name!="") {
                  $variant = ProductVariant::where('product_variant_name',$child_product_variant_name)->where('product_variant_id','!=',1)->first();

                  
                  if ($variant=="") {
                    $product_variant = new ProductVariant();
                    $product_variant->product_variant_name=$child_product_variant_name;
                    $product_variant->variant_id=$child_variant_id; 
                    $product_variant->save();

                    $child_product_variant_id = $product_variant->product_variant_id;


                   }  else{
                     $child_product_variant_id = $variant->product_variant_id;
                   }
                }
              }
            }

                

        
        //==========================sku data is_restaurant is 0 End==================

        //==========================sku data is_restaurant is 1==================
         

          
          if($sku_price==""){
            $sku_price=0;
          }

          if($discount==""){
            $discount=0;
          }

          if($product_weight==""){
            $product_weight=0;
          }

          if($product_unit==""){
            $product_unit=0;
          }

          if($quantity==""){
            $quantity=0;
          }

          if ($sku_name=="") {
            $sku_name="";
          }
          if ($barcode=="") {
            $barcode="";
          }

         
                        
                        $parent_variant_id=1;
                        $child_variant_id=1;
                        if(!empty($parent_variant_values)){

                          for($i=0;$i<count($parent_variant_values);$i++) {

                            
                            $parent_variant_id=1;
                            $child_variant_id=1;

                            if (isset($parent_variant_values[$i])) {
                              $parent_variant_name=$parent_variant_values[$i];
                            }
                            if (isset($child_variant_values[$i])) {
                              $child_variant_name=$child_variant_values[$i];
                            }
                            if (isset($variant_my_prices[$i])) {
                              $variant_my_price=$variant_my_prices[$i];
                            }
                            
                            if (isset($variant_skues[$i])) {
                              $variant_sku=$variant_skues[$i];
                            }
                            if (isset($variant_barcodes[$i])) {
                              $variant_barcode=$variant_barcodes[$i];
                            }

                            if($quantity==""){
                              $quantity=0;
                            }

                            if($product_weight==""){
                              $product_weight=0;
                            }
                            if($parent_variant_name!=""){
                              $parent_variant = ProductVariant::where('product_variant_name',$parent_variant_name)->where('product_variant_id','!=',1)->first();
                              $parent_variant_id=$parent_variant->product_variant_id;
                              
                            }else{
                              $parent_variant_id=1;
                            }

                            if($child_variant_name!=""){
                              $child_variant = ProductVariant::where('product_variant_name',$child_variant_name)->where('product_variant_id','!=',1)->first();
                              
                              $child_variant_id=$child_variant->product_variant_id;
                              
                            }else{
                              $child_variant_id=1;
                            }

                            $sku = new SKU();
                            $sku->product_id = $product->product_id;
                            $sku->business_id = $business_session;
                            $sku->branch_id  = $branch_session;
                            $sku->sku_price = $sku_price;
                            $sku->discount =$discount;
                            $sku->product_weight = $product_weight;
                            $sku->product_unit = $product_unit;
                            $sku->quantity = $quantity;
                            $sku->sku_name = $sku_name;
                            $sku->barcode = $barcode;
                            $sku->parent_product_variant_id = $parent_variant_id;
                            $sku->child_product_variant_id = $child_variant_id;
                            $sku->save();


                          }
                        }else{
   
                          $sku = new SKU();
                            $sku->product_id = $product->product_id;
                            $sku->business_id = $business_session;
                            $sku->branch_id  = $branch_session;
                            $sku->sku_price = $sku_price;
                            $sku->discount =$discount;
                            $sku->product_weight = $product_weight;
                            $sku->product_unit = $product_unit;
                            $sku->quantity = $quantity;
                            $sku->sku_name = $sku_name;
                            $sku->barcode = $barcode;

                            $sku->parent_product_variant_id = $parent_variant_id;
                            $sku->child_product_variant_id = $child_variant_id;

                            $sku->save();
                        }
          


            
        return redirect('admin/product/all');

          
    }








    public function getProductStatus(Request $request){
      $status = Product::find($request->id);

      if($status!=""){
        if($status->is_active==0){
          $status->is_active=1;
        }else{
          $status->is_active=0;
        }
      }
      $status->save();
      return redirect('admin/product/all');

    }





    public function findSkuVal(Request $request){
        $sku_val =  $request->id;
          $sku_count= SKU::where('sku_id',$sku_val)->count();
       if ($sku_count>1) {
        $sku_del = SKU::where('sku_id',$sku_val)->delete();
       }
        
                
        return redirect()->back();
    }



}
