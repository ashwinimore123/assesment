	<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	class PracticeController extends Controller
	{
	if($request->market_price==""){
	$request->merge(['market_price'=>0]);
	}

	if($request->quantity==""){
	$request->merge(['quantity'=>0]);
	}

	if($request->product_weight==""){
	$request->merge(['product_weights'=>0]);
	}

	$business_id=$this->getBusinessId();
	$language_id=$this->getLanguageId();

	$business=Business::find($business_id);
	$product_count=$business->product_count;
	$total_product=Product::where('business_id',$business_id)->where('status_id',1)->count();

	if ($product_count<=$total_product) {

	if($this->checkPermission(Config::get('permissions.PRODUCT_ALL'))){
	flash('Product Limit Exceeded');
	return redirect("admin/product/all");
	}else if($this->checkPermission(Config::get('permissions.PRODUCT_SELLER'))){
	flash('Product Limit Exceeded');
	return redirect("admin/product/my");
	}else{
	flash('Product Limit Exceeded');
	return redirect("admin/product/all");
	}
	}





	$allow_customer_stock_out=$request->allow_customer_stock_out;

	$is_product_shipping=$request->is_product_shipping;


	if($allow_customer_stock_out==""){
	$allow_customer_stock_out=0;
	}

	if($is_product_shipping==""){
	$is_product_shipping=0;
	}

	$product_url=str_slug($request->product_url);
	$request->merge(['product_url' => $product_url]);
	$this->validate($request,['product_url' => 'unique:products,product_url,NULL,id,business_id,' . $business_id]);

	$this->validate($request,Product::$rules);

	$parent_variant_id=1;
	$child_variant_id=1;

	if($request->parent_variant!=""){
	$parent_variant_id=$request->parent_variant;
	}


	if($request->child_variant!=""){
	$child_variant_id=$request->child_variant;
	}



	$product_minimum_quantity=$request->product_minimum_quantity;




	if ($product_minimum_quantity=="") {
	$product_minimum_quantity=1;
	}

	$product=new Product();
	$product->business_id=$business_id;

	$product->allow_customer_stock_out=$allow_customer_stock_out;
	$product->is_product_shipping=$is_product_shipping;
	$product->product_minimum_quantity=$product_minimum_quantity;

	//product main image
	/*if(isset($request->product_image)){

	$source=$request->product_image;
	$image=$this->addCompressImage($source);
	$i=uniqid();

	$source="storage/app/".$business_id."/product-image/product_image_".$i.".jpg";
	imagejpeg($image, $source, 70);
	$product_image=substr($source, strlen("storage/app/".$business_id)+1);   
	$product->product_image=$product_image;
	}*/


	if(isset($request->product_image)){
	$source=$request->product_image;
	$image_name=$this->addCompressImage($source,"product-image",$business_id);
	$product->product_image=$image_name;
	}





	//brand
	$brand_id=1;
	if($request->brand_id!=""){
	$brand_id=$request->brand_id;
	}
	$product->brand_id=$brand_id;


	// return policy
	$return_policy_id=1;

	if($request->return_policy_id!=""){
	$return_policy_id=$request->return_policy_id;
	}
	$product->return_policy_id=$return_policy_id;


	//Gst
	$gst_id=1;
	if($request->gst_id!=""){
	$gst_id=$request->gst_id;	
	}
	$product->gst_id=$gst_id;

	//seller id
	$seller_id=Auth::user()->seller_id;
	$product->seller_id=$seller_id;


	if($request->track_inventory!=""){
	$product->track_inventory=$request->track_inventory;
	}

	//Parent Variant
	$product->parent_variant_id=$parent_variant_id;


	//Child Variant
	$product->child_variant_id=$child_variant_id;
	$product->product_url=str_slug($request->product_url);

	$product->save();

	$product_translation=new ProductTranslation();
	$product_translation->business_id=$business_id;
	$product_translation->language_id=1;
	$product_translation->product_id=$product->product_id;

	$description=$request->description;

	$product_translation->product_name=$request->product_name;

	$product_translation->description= $description;


	if ($request->meta_title!="") {
	$product_translation->meta_title=$request->meta_title;
	}

	if ($request->meta_keywords!="") {
	$product_translation->meta_keywords=$request->meta_keywords;
	}

	if ($request->meta_description!="") {
	$product_translation->meta_description=$request->meta_description;
	}

	if ($request->delivery_message!="") {
	$product_translation->delivery_message=$request->delivery_message;
	}

	$product_translation->save();
	$product->product_translation_id=$product_translation->product_translation_id;
	$product->save();

	//category
	if($request->category_id!=""){


	$categories=$request->category_id;



	for($i=0;$i<count($categories);$i++){
	$category=new CategoryProduct();
	$category->category_id=$categories[$i];
	$category->product_id=$product->product_id;
	$category->save();
	}
	}
	$category_product=new CategoryProduct();
	$category_product->category_id=1;
	$category_product->product_id=$product->product_id;
	$category_product->save();

	//parent_variant_values 
	$parent_variant_values=$request->parent_variant_values;
	$child_variant_values=$request->child_variant_values;


	if(!empty($parent_variant_values)){
	for($i=0;$i<count($parent_variant_values);$i++) {

	$parent_variant_name=$parent_variant_values[$i];

	if($parent_variant_name!=""){

	$variant_option=VariantOptionTranslation::where('variant_option_translation_id','!=',1)->where('business_id',$business_id)->where('variant_option_name',$parent_variant_name)->first();
	if ($variant_option=="") {
	$variant_option=new VariantOption();
	$variant_option->variant_id=$parent_variant_id;
	$variant_option->business_id=$business_id;
	$variant_option->variant_option_translation_id=1;
	$variant_option->save();

	$variant_option_translation=new VariantOptionTranslation();
	$variant_option_translation->variant_option_name=$parent_variant_name;
	$variant_option_translation->business_id=$business_id;
	$variant_option_translation->language_id=$language_id;
	$variant_option_translation->variant_option_id=$variant_option->variant_option_id;
	$variant_option_translation->save();

	$variant_option_translation_id=$variant_option_translation->variant_option_translation_id;
	$variant_option->variant_option_translation_id=$variant_option_translation_id;
	$variant_option->save();


	}

	}
	}
	}

	if(!empty($child_variant_values)){
	for($i=0;$i<count($child_variant_values);$i++) {

	$child_variant_name=$child_variant_values[$i];
	if($child_variant_name!=""){
	$variant_option=VariantOptionTranslation::where('variant_option_translation_id','!=',1)->where('business_id',$business_id)->where('variant_option_name',$child_variant_name)->first();
	if ($variant_option=="") {
	$variant_option=new VariantOption();
	$variant_option->variant_id=$child_variant_id;
	$variant_option->business_id=$business_id;
	$variant_option->variant_option_translation_id=1;
	$variant_option->save();

	$variant_option_translation=new VariantOptionTranslation();
	$variant_option_translation->variant_option_name=$child_variant_name;
	$variant_option_translation->business_id=$business_id;
	$variant_option_translation->language_id=$language_id;
	$variant_option_translation->variant_option_id=$variant_option->variant_option_id;
	$variant_option_translation->save();

	$variant_option_translation_id=$variant_option_translation->variant_option_translation_id;
	$variant_option->variant_option_translation_id=$variant_option_translation_id;
	$variant_option->save();

	}	

	}

	}
	}

















	$parent_variant_values=$request->parent_variant_values;
	$child_variant_values=$request->child_variant_values;
	$variant_my_prices=$request->variant_my_prices;
	$variant_market_prices=$request->variant_market_prices;
	$variant_quantities=$request->variant_quantities;
	$variant_skues=$request->variant_skues;
	$variant_barcodes=$request->variant_barcodes;
	$variant_weights=$request->variant_weights;
	$variant_weight_units=$request->variant_weight_units;

	$variant_my_price=$request->my_price;
	$variant_market_price=$request->market_price;

	$variant_quantity=$request->quantity;
	$variant_sku=$request->sku;
	$variant_barcode=$request->barcode;
	$variant_weight=$request->product_weight;
	$variant_weight_unit=$request->weight_unit;

	if($variant_quantity==""){
	$variant_quantity=0;
	}

	if($variant_weight==""){
	$variant_weight=0;
	}

	if($variant_weight_unit==""){
	$variant_weight_unit=0;
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
	if (isset($variant_market_prices[$i])) {
	$variant_market_price=$variant_market_prices[$i];
	}
	if (isset($variant_weights[$i])) {
	$variant_weight=$variant_weights[$i];
	}
	if (isset($variant_weight_units[$i])) {
	$variant_weight_unit=$variant_weight_units[$i];
	}
	if (isset($variant_quantities[$i])) {
	$variant_quantity=$variant_quantities[$i];
	}
	if (isset($variant_skues[$i])) {
	$variant_sku=$variant_skues[$i];
	}
	if (isset($variant_barcodes[$i])) {
	$variant_barcode=$variant_barcodes[$i];
	}

	if($variant_quantity==""){
	$variant_quantity=0;
	}

	if($variant_weight==""){
	$variant_weight=0;
	}
	if($parent_variant_name!=""){
	$parent_variant=VariantOptionTranslation::where('business_id',$business_id)->where('variant_option_name',$parent_variant_name)->first();
	$parent_variant_id=$parent_variant->variant_option_id;

	}else{
	$parent_variant_id=1;
	}

	if($child_variant_name!=""){
	$child_variant=VariantOptionTranslation::where('business_id',$business_id)->where('variant_option_name',$child_variant_name)->first();

	$child_variant_id=$child_variant->variant_option_id;

	}else{
	$child_variant_id=1;
	}

	$sku=new Sku();
	$sku->business_id=$business_id;
	$sku->product_id=$product->product_id;
	$sku->parent_variant_id=$parent_variant_id;
	$sku->child_variant_id=$child_variant_id;
	$sku->my_price=$variant_my_price;
	$sku->market_price=$variant_market_price;
	$sku->product_weight=$variant_weight;
	$sku->weight_unit=$variant_weight_unit;
	$sku->quantity=$variant_quantity;
	$sku->sku_name=$variant_sku;
	$sku->barcode=$variant_barcode;
	$sku->save();
	}
	}else{
	$sku=new Sku();
	$sku->business_id=$business_id;
	$sku->product_id=$product->product_id;
	$sku->parent_variant_id=$parent_variant_id;
	$sku->child_variant_id=$child_variant_id;
	$sku->my_price=$variant_my_price;
	$sku->market_price=$variant_market_price;
	$sku->product_weight=$variant_weight;
	$sku->weight_unit=$variant_weight_unit;

	$sku->quantity=$variant_quantity;
	$sku->sku_name=$variant_sku;
	$sku->barcode=$variant_barcode;
	$sku->save();
	}
	}
