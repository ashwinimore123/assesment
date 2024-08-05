<?php
Auth::routes();
// home page route lolo
Route::get('/home','BranchController@getBranchList')->middleware('auth');
//for role name header 
/*Route::get('/','BranchController@getrolename')->middleware('auth');*/
//logout route
Route::get('logout','RoleController@logout');
/*main home page*/
Route::get('/welcome','HomeController@homepage')->middleware('auth');
//logout route;
//Dashboard Route id=================================================================
Route::get('dashboard/{id}','DashboardController@dashboard')->middleware('auth');
Route::get('dashboard','DashboardController@getdashboard')->middleware('auth');
//akshay 
Route::get('product/getSkuVal/{id}','ProductController@findSkuVal');
/*Route::get('/branch','BranchController@getBranchList')->middleware('auth');*/

Route::get('admin/user/show','UserController@getUserIndex');
Route::get('admin/user/all','UserController@getUserShow');
/*for table_id sess*/
Route::post('admin/session_tableid','HomeController@TableSession');
/*admin routes*/
Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
/*branch session*/
Route::get('/home','Controller@putBusinessSession');

/*modifier_categories routes */
Route::get('addmodifier_categories','Modifier_categoriesController@addModifier_categories');
//for store in db
Route::post('addmodifier_categories','Modifier_categoriesController@StoreModifier_categories');

//update modifire 
Route::get('modifier_categories_update/{modifier_category_id}','Modifier_categoriesController@getupdateModifier_categories');
Route::post('modifier_categories_update/{modifier_category_id}','Modifier_categoriesController@updateModifier_categories');
/*activ inactive*/
Route::get('modifier_categories_status/{modifier_category_id}','Modifier_categoriesController@status'); 

/*datatable*/
Route::get('addmodifier_categoriesallData','Modifier_categoriesController@getDataModifier_categories');
Route::get('addmodifier_categoriesGetallData','Modifier_categoriesController@getallDataModifier_categories');

/*modifiers datatables */
Route::get('addmodifierallData','ModifierController@getDataModifier');
Route::get('addmodifierGetallData','ModifierController@getallDataModifier');

/*add modifires */
Route::get('addmodifier','ModifierController@addModifier');
//for store in db
Route::post('addmodifier','ModifierController@StoreModifier');

/*UPDATE modifires */
Route::get('modifier_update/{modifier_id}','ModifierController@getupdateModifier');
Route::post('modifier_update/{modifier_id}','ModifierController@updateModifier');

/*activ inactive*/
Route::get('modifier_status/{modifier_id}','ModifierController@status'); 

/*table routes */
Route::get('table/addtable','TableController@addtable');
//store the form data
Route::post('table/addtable','TableController@sotre_table');

//show data in data table
Route::get('table/all','TableController@getData');
//fetch data in data table
Route::get('table/alltabledata','TableController@getallData');

// update data 
Route::get('table/updatetable/{table_id}','TableController@updateview');
Route::post('table/updatetable/{table_id}','TableController@update');


// active inactive 
Route::get('tablestatus/{table_id}','TableController@status'); 




//add.blade route
Route::get('role/add','RoleController@insert');

//store the form data
Route::post('role/add','RoleController@store');

//show data in data table
Route::get('role/all','RoleController@getData');

//fetch data in data table
Route::get('role/allData','RoleController@getallData');



// update data 
Route::get('role/update/{id}','RoleController@updateview');

Route::post('role/update/{id}','RoleController@update');


// active inactive 
Route::get('rolestatus/{id}','RoleController@status'); 




//add curruncy 
Route::get('currency/add','CurrencyController@insert'); 
//store the form data
Route::post('currency/add','CurrencyController@store');
//show all data in data table and edit and active inactive
Route::get('currency/all','CurrencyController@getData'); 
//fetch data in data table
Route::get('currency/allData','CurrencyController@getallData');
//active in active curuncy route 
Route::get('status/{id}','CurrencyController@activity'); 
//update currency 
Route::get('currency/update/{id}','CurrencyController@updateview'); 
Route::post('currency/update/{id}','CurrencyController@update'); 
//add new permission
Route::get('permission/addpermission','RoleController@permission'); 
//store the form data
Route::post('permission/addpermission','RoleController@addpermission'); 
//show permission and active inactive permission data 
Route::get('permission/permission','RoleController@getpermissoin'); 
//fetch data in data table
Route::get('permission/allpermission','RoleController@getallpermissoin'); 
//active in active permission  route 
Route::get('permissionstatus/{id}','RoleController@permissoinstatus'); 
//update permission 
Route::get('permission/updatepermission/{id}','RoleController@updateallpermissions'); 
Route::post('permission/updatepermission/{id}','RoleController@updatepermission'); 
// rolepermission route
Route::get('rolepermission/roleacess/{id}','RoleController@roleacess'); 
Route::get('rolepermission/allroleacess','RoleController@allroleacess'); 
// allow and disallow rolpermission 
Route::post('rolepermission','RoleController@GrantPermission'); 
//addbranch.blade route 
Route::get('branch/addbranch','BranchController@insertbranch'); 
Route::post('branch/addbranch','BranchController@storebranch'); 
//show data in data table 
Route::get('branch/all','BranchController@branchData'); 
//fetch data in data table
Route::get('branch/allbranch','BranchController@allbranchData'); 
// branch active inactive status 
Route::get('branch/branchstatus/{id}','BranchController@branchstatus'); 
// update branch
Route::get('branch/updatebranch/{id}','BranchController@updateallbranch'); 
Route::post('branch/updatebranch/{id}','BranchController@updatebranch'); 

//=====================================Business Start============================
//Show Business Data
Route::get('/business/show','BusinessController@getBusinessIndex');
Route::get('/business/all','BusinessController@getBusinessShow');
//Add Business Data
Route::get('/business/add','BusinessController@getBusinessAdd');
Route::post('/business/add','BusinessController@postBusinessAdd');								
//Update Business Data				
Route::get('/business/update/{id}','BusinessController@getBusinessUpdate');
Route::post('/business/update/{id}','BusinessController@postBusinessUpdate');
//Delete Record Business Data
Route::get('/business/inactive/{id}','BusinessController@getBusinessInactive');
Route::get('/business/active/{id}','BusinessController@getBusinessActive');
//==============================================Business End======================

//Show Category Data
Route::get('category/show','CategoryController@getCategoryIndex');
//store the form data
Route::get('category/all','CategoryController@getCategoryShow');
//store the form data
//Add Category Data
Route::get('category/add','CategoryController@getCategoryAdd');
//store the form data
Route::post('category/add','CategoryController@postCategoryAdd');
//store the form data
//Update Category Data
Route::get('category/update/{id}','CategoryController@getCategoryUpdate');
//store the form data
Route::post('category/update/{id}','CategoryController@postCategoryUpdate');
//store the form data
//ChangeStatus Category Data
Route::get('category/status/{id}','CategoryController@getCategoryChangeStatus');
//store the form data

//show Printer Data
Route::get('printer/show','PrinterController@getPrinterIndex');
Route::get('printer/all','PrinterController@getPrinterShow');

//Add Printer Data
Route::get('printer/add','PrinterController@getPrinterAdd');
Route::post('printer/add','PrinterController@postPrinterAdd');

//Update Printer Data
Route::get('printer/update/{id}','PrinterController@getPrinterUpdate');
Route::post('printer/update/{id}','PrinterController@postPrinterUpdate');

//Active/Inactive Printer Data
Route::get('printer/status/{id}','PrinterController@getPrinterChangeStatus');
//=====================================Product Data End===========================

//Kitchen Data Show
Route::get('kitchen-section/show','KitchenSectionController@getKitchenSectionIndex');
Route::get('kitchen-section/all','KitchenSectionController@getKitchenSectionShow');
//Kitchen Section Add
Route::get('kitchen-section/add','KitchenSectionController@getKitchenSectionAdd');
Route::post('kitchen-section/add','KitchenSectionController@postKitchenSectionAdd');

//Kitchen Section Update
Route::get('kitchen-section/update/{id}','KitchenSectionController@getKitchenSectionUpdate');
Route::post('kitchen-section/update/{id}','KitchenSectionController@postKitchenSectionUpdate');
//Kitchen Section Active/Inactive
Route::get('kitchen-section/status/{id}','KitchenSectionController@getKitchenSectionStatus');
//=================================Kitchen Data End===================================

//Show Variant Data
Route::get('variant/show','VariantController@getVariantIndex');
Route::get('variant/all','VariantController@getVariantShow');
//Add Variant Data
Route::get('variant/add','VariantController@getVariantAdd');
Route::post('variant/add','VariantController@postVariantAdd');

//Update Variant Data
Route::get('variant/update/{id}','VariantController@getVariantUpdate');
Route::post('variant/update/{id}','VariantController@postVariantUpdate');

//Change Status Active/Inactive 
Route::get('variant/status/{id}','VariantController@getVariantStatus');
//================================Varient Data End========================================
//================================Product Varaiant Data Start==============================
//Show Product Variant data
Route::get('product-variant/show','ProductVariantController@getProductVariantIndex');
Route::get('product-variant/all','ProductVariantController@getProductVariantShow');

//Add Product Variant Data
Route::get('product-variant/add','ProductVariantController@getProductVariantAdd');
Route::post('product-variant/add','ProductVariantController@postProductVariantAdd');

//Update Product Variant Data
Route::get('product-variant/update/{id}','ProductVariantController@getProductVariantUpdate');
Route::post('product-variant/update/{id}','ProductVariantController@postProductVariantUpdate');

//Change Status Active/Inactive 
Route::get('product-variant/status/{id}','ProductVariantController@getProductVariantStatus');

//===============================Product Variant Data End====================================

//Product Show Data
Route::get('product/show','ProductController@getProductIndex');
Route::get('product/all','ProductController@getProductShow');

//Product Add Data
Route::get('product/add','ProductController@getProductAdd');
Route::post('product/add','ProductController@postProductAdd');

//Product Update Data
Route::get('product/update/{id}','ProductController@getProductUpdate');
Route::post('product/update/{id}','ProductController@postProductUpdate');

//Product Change Status Active/Inactive
Route::get('product/status/{id}','ProductController@getProductStatus');

//=================================Product Data End===========================================
//Show User Data
/*Route::get('/user/show','UserController@getUserIndex');
Route::get('/user/all','UserController@getUserShow');*/

//Add User Data
Route::get('/user/add','UserController@getUserAdd');
Route::post('/user/add','UserController@postUserAdd');

//Update User Data
Route::get('/user/update/{id}','UserController@getUserUpdate');
Route::post('/user/update/{id}','UserController@postUserUpdate');
//ChangeStatus Active/Inactive
Route::get('/user/status/{id}','UserController@getUserChangeStatus');
//====================================User Data End========================================
//====================================Dashboard Start===========================

Route::get('/dashboard','DashboardController@getDashboardShow');
//====================================Dashboard End=============================
//==============================================Country Start======================
//Show Country Data
Route::get('/country/show','CountryController@getCountryIndex');
Route::get('/country/all','CountryController@getCountryShow');

//Add Country Data
Route::get('/country/add','CountryController@getCountryAdd');
Route::post('/country/add','CountryController@postCountryAdd');

//Update Country Data
Route::get('/country/update/{id}','CountryController@getCountryUpdate');
Route::post('/country/update/{id}','CountryController@postCountryUpdate');

//Delete Country Data
Route::get('/country/inactive/{id}','CountryController@getCountryInactive');
Route::get('/country/active/{id}','CountryController@getCountryActive');

//===============================================Country End=========================

//===============================================State Start=========================

//Show State Data
Route::get('/state/show','StateController@getStateIndex');
Route::get('/state/all','StateController@getStateShow');

//Add State Data
Route::get('/state/add','StateController@getStateAdd');
Route::post('/state/add','StateController@postStateAdd');

//Update State Data
Route::get('/state/update/{id}','StateController@getStateUpdate');
Route::post('/state/update/{id}','StateController@postStateUpdate');

//Delete State Data
Route::get('/state/inactive/{id}','StateController@getStateInactive');
Route::get('/state/active/{id}','StateController@getStateActive');
//=======================================State End===========================================

//=================================================City Start================================

//Show city data
Route::get('/city/show','CityController@getCityIndex');
Route::get('/city/all','CityController@getCityShow');

//Add City Data
Route::get('/city/add','CityController@getCityAdd');
Route::post('/city/add','CityController@postCityAdd');

//Update City Data
Route::get('/city/update/{id}','CityController@getCityUpdate');
Route::post('/city/update/{id}','CityController@postCityUpdate');

//Delete City Data

Route::get('/city/inactive/{id}','CityController@getCityInactive');
Route::get('/city/active/{id}','CityController@getCityActive');

//======================================City End===========================================

//=====================================Tax Start===========================================
//Show Tax Data
Route::get('/tax/show','TaxController@getTaxIndex');
Route::get('/tax/all','TaxController@getTaxShow');

//Add Tax Data
Route::get('/tax/add','TaxController@getTaxAdd');
Route::post('/tax/add','TaxController@postTaxAdd');

//Update Tax Data
Route::get('/tax/update/{id}','TaxController@getTaxUpdate');
Route::post('/tax/update/{id}','TaxController@postTaxUpdate');

//Delete tax Data
Route::get('/tax/inactive/{id}','TaxController@getTaxInactive');
Route::get('/tax/active/{id}','TaxController@getTaxActive');

//==============================End Tax====================================================

//=================================Time Zone===============================================
//Show Time Zone

Route::get('/timezone/show','TimezoneController@getTimezoneIndex');
Route::get('/timezone/all','TimezoneController@getTimezoneShow');

//Add Time Zone
Route::get('/timezone/add','TimezoneController@getTimezoneAdd');
Route::post('/timezone/add','TimezoneController@postTimezoneAdd');

//Update Time Zone

Route::get('/timezone/update/{id}','TimezoneController@getTimezoneUpdate');
Route::post('/timezone/update/{id}','TimezoneController@postTimezoneUpdate');

//Delete Time Zone
Route::get('/timezone/inactive/{id}','TimezoneController@getTimezoneInactive');
Route::get('/timezone/active/{id}','TimezoneController@getTimezoneActive');

Route::get('admin/timezone/status/{id}','TimezoneController@getTimezoneChangeStatus');

//===========================End Timzone==================================================
});

//pos part start
Route::get('poshome','HomeController@posindex')->middleware('auth');

Route::post('admin/postable','HomeController@postableno')->middleware('auth');

Route::post('admin/tableposmerg','HomeController@tableposmerg')->middleware('auth');

Route::post('admin/mergnowtables','HomeController@getmergnowtables')->middleware('auth'); 

Route::post('admin/showcartdata','HomeController@showcartdata')->middleware('auth');

Route::post('admin/default_categoery','HomeController@default_categoery')->middleware('auth');

Route::post('admin/showproductintopay','HomeController@Show_product')->middleware('auth');


Route::post('admin/is_splitzero','HomeController@is_split')->middleware('auth');

Route::post('admin/Customer_Info','HomeController@Customer_Info')->middleware('auth');

Route::post('/admin/Customer_id','HomeController@Customer_id')->middleware('auth');

Route::post('/admin/Customer_Id_Cart','HomeController@Customer_Id_Cart')->middleware('auth');

Route::post('/admin/Customer_Id_Cart_Zero','HomeController@Customer_Id_Cart_Zero')->middleware('auth');

Route::post('/admin/curruent_Customer_Data','HomeController@curruent_Customer_Data')->middleware('auth');

Route::post('admin/CustomerSearch','HomeController@CustomerSearch')->middleware('auth');

Route::post('admin/customer','HomeController@customer')->middleware('auth');

/*for modifier chacke */
Route::post('admin/modifier_product','HomeController@Modifier_product'); 

Route::post('admin/default_modifier','HomeController@Default_Modifier');  

Route::post('admin/Getmodifier','HomeController@getModifiers'); 
Route::post('admin/postmodifier_productcart','HomeController@default_product_Modifier'); 

Route::post('admin/getmodifier_details','HomeController@getmodifier_Details'); 

Route::post('admin/cart_modifier_data','HomeController@modifier_save');

Route::post('admin/global_order_data','HomeController@Post_global_order'); 

Route::post('admin/global_order_data_splitwise_product','HomeController@Post_globalorder_splitproduct'); 

Route::post('admin/ExitSplit','HomeController@ExitSplit'); 

Route::post('/admin/Surcharge','HomeController@Surcharge'); 

Route::post('/admin/Discount','HomeController@Discount');

Route::post('/admin/global_order_id_session','HomeController@global_order_id');

Route::post('/admin/check_global_order_id','HomeController@check_global_order_id');

Route::post('/admin/Add_new_globalorder','HomeController@Add_new_globalorder');

Route::post('/admin/All_Existing_Order','HomeController@ALLExisting_Orders');

Route::post('/admin/Existing_Order','HomeController@Existing_Order');

Route::post('/admin/Add_new_order','HomeController@Add_new_order');

Route::post('/admin/SendOrder','HomeController@Send_order');  

Route::post('/admin/Split_by_sprice','HomeController@Split_by_sprice');

/*for tables show in table panel*/
//for username 
Route::post('admin/pospin','HomeController@posuserverify')->middleware('auth');
/*Route::post('admin/pospin','HomeController@posusersucess')->middleware('auth');*/

// for acess product to card 
Route::post('admin/getcategory','HomeController@getcategory')->middleware('auth');
// for access product Price to order  to card 
Route::post('admin/getproductprice','HomeController@getproductprice')->middleware('auth');
Route::post('admin/postproductcart','HomeController@postproductcart')->middleware('auth');
Route::post('admin/delete_order','HomeController@delete_order')->middleware('auth');

Route::post('admin/update_quantity','HomeController@update_quantity')->middleware('auth');
Route::post('admin/add_update_quantity','HomeController@add_update_quantity')
->middleware('auth');
Route::post('admin/searchbarpos','HomeController@possearch')->middleware('auth');




