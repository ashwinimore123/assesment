<?php
use Illuminate\Support\Facades\Route;

//akshay routes
//=====================================Business Start============================
//Show Business Data

Route::get('/business/show','BusinessController@getBusinessIndex')->middleware('auth');
Route::get('/business/all','BusinessController@getBusinessShow')->middleware('auth');

//Add Business Data
Route::get('/business/add','BusinessController@getBusinessAdd')->middleware('auth');
Route::post('/business/add','BusinessController@postBusinessAdd')->middleware('auth');									
//Update Business Data				
Route::get('/business/update/{id}','BusinessController@getBusinessUpdate')->middleware('auth');
Route::post('/business/update/{id}','BusinessController@postBusinessUpdate')->middleware('auth');

//Delete Record Business Data
Route::get('/business/inactive/{id}','BusinessController@getBusinessInactive')->middleware('auth');
Route::get('/business/active/{id}','BusinessController@getBusinessActive')->middleware('auth');

//==============================================Business End=======================

//==================================Category Data Start====================================
//Show Category Data
Route::get('category/show','CategoryController@getCategoryIndex')->middleware('auth');
//store the form data;
Route::get('category/all','CategoryController@getCategoryShow')->middleware('auth');
//store the form data;

//Add Category Data
Route::get('category/add','CategoryController@getCategoryAdd')->middleware('auth');
//store the form data;
Route::post('category/add','CategoryController@postCategoryAdd')->middleware('auth');
//store the form data;

//Update Category Data
Route::get('category/update/{id}','CategoryController@getCategoryUpdate')->middleware('auth');
//store the form data;
Route::post('category/update/{id}','CategoryController@postCategoryUpdate')->middleware('auth');
//store the form data;

//ChangeStatus Category Data

Route::get('category/status/{id}','CategoryController@getCategoryChangeStatus')->middleware('auth');
//store the form data;

//==================================Category Data End=======================================
Route::get('product/getSkuVal/{id}','ProductController@findSkuVal')->middleware('auth');

Route::get('/branch','BranchController@getBranchList')->middleware('auth');
//Route::get('/home','BranchController@getBranchList');


//==============================================================================
//Route::get('/branchs/{id}','BranchController@getSessionvalue');
//Route::post('/branchs/{id}','BranchController@postSessionvalue');

//===============================================================================

//=====================================Product Data Start========================
//show Printer Data
Route::get('printer/show','PrinterController@getPrinterIndex')->middleware('auth');
Route::get('printer/all','PrinterController@getPrinterShow')->middleware('auth');

//Add Printer Data
Route::get('printer/add','PrinterController@getPrinterAdd')->middleware('auth');
Route::post('printer/add','PrinterController@postPrinterAdd')->middleware('auth');

//Update Printer Data
Route::get('printer/update/{id}','PrinterController@getPrinterUpdate')->middleware('auth');
Route::post('printer/update/{id}','PrinterController@postPrinterUpdate')->middleware('auth');

//Active/Inactive Printer Data
Route::get('printer/status/{id}','PrinterController@getPrinterChangeStatus')->middleware('auth');
//=====================================Product Data End===========================

//Dashboard Route id=================================================================
Route::get('dashboard/{id}','DashboardController@dashboard')->middleware('auth');
Route::get('dashboard','DashboardController@getdashboard')->middleware('auth');
//==================================================================================


//==================================Kitchen Data Start===============================
//Kitchen Data Show

Route::get('kitchen-section/show','KitchenSectionController@getKitchenSectionIndex')->middleware('auth');

Route::get('kitchen-section/all','KitchenSectionController@getKitchenSectionShow')->middleware('auth');



//Kitchen Section Add


Route::get('kitchen-section/add','KitchenSectionController@getKitchenSectionAdd')->middleware('auth');

Route::post('kitchen-section/add','KitchenSectionController@postKitchenSectionAdd')->middleware('auth');

//Kitchen Section Update
Route::get('kitchen-section/update/{id}','KitchenSectionController@getKitchenSectionUpdate')->middleware('auth');
Route::post('kitchen-section/update/{id}','KitchenSectionController@postKitchenSectionUpdate')->middleware('auth');

//Kitchen Section Active/Inactive
Route::get('kitchen-section/status/{id}','KitchenSectionController@getKitchenSectionStatus')->middleware('auth');
//=================================Kitchen Data End===================================

//=================================Varient Data Start=============================
//Show Variant Data
Route::get('variant/show','VariantController@getVariantIndex')->middleware('auth');
Route::get('variant/all','VariantController@getVariantShow')->middleware('auth');

//Add Variant Data
Route::get('variant/add','VariantController@getVariantAdd')->middleware('auth');
Route::post('variant/add','VariantController@postVariantAdd')->middleware('auth');

//Update Variant Data
Route::get('variant/update/{id}','VariantController@getVariantUpdate')->middleware('auth');
Route::post('variant/update/{id}','VariantController@postVariantUpdate')->middleware('auth');

//Change Status Active/Inactive 
Route::get('variant/status/{id}','VariantController@getVariantStatus')->middleware('auth');
//================================Varient Data End========================================

//================================Product Varaiant Data Start==============================
//Show Product Variant data
Route::get('product-variant/show','ProductVariantController@getProductVariantIndex')->middleware('auth');
Route::get('product-variant/all','ProductVariantController@getProductVariantShow')->middleware('auth');

//Add Product Variant Data
Route::get('product-variant/add','ProductVariantController@getProductVariantAdd')->middleware('auth');
Route::post('product-variant/add','ProductVariantController@postProductVariantAdd')->middleware('auth');

//Update Product Variant Data
Route::get('product-variant/update/{id}','ProductVariantController@getProductVariantUpdate')->middleware('auth');
Route::post('product-variant/update/{id}','ProductVariantController@postProductVariantUpdate')->middleware('auth');

//Change Status Active/Inactive 
Route::get('product-variant/status/{id}','ProductVariantController@getProductVariantStatus')->middleware('auth');

//===============================Product Variant Data End====================================
//===============================Product Data ==============================================
//Product Show Data
Route::get('product/show','ProductController@getProductIndex')->middleware('auth');
Route::get('product/all','ProductController@getProductShow')->middleware('auth');

//Product Add Data
Route::get('product/add','ProductController@getProductAdd')->middleware('auth');
Route::post('product/add','ProductController@postProductAdd')->middleware('auth');

//Product Update Data
Route::get('product/update/{id}','ProductController@getProductUpdate')->middleware('auth');
Route::post('product/update/{id}','ProductController@postProductUpdate')->middleware('auth');

//Product Change Status Active/Inactive
Route::get('product/status/{id}','ProductController@getProductStatus')->middleware('auth');

//=================================Product Data End===========================================
//=================================User Data Start==========================================

//Show User Data
Route::get('/user/show','UserController@getUserIndex')->middleware('auth');
Route::get('/user/all','UserController@getUserShow')->middleware('auth');

//Add User Data
Route::get('/user/add','UserController@getUserAdd')->middleware('auth');
Route::post('/user/add','UserController@postUserAdd')->middleware('auth');

//Update User Data
Route::get('/user/update/{id}','UserController@getUserUpdate')->middleware('auth');
Route::post('/user/update/{id}','UserController@postUserUpdate')->middleware('auth');

//ChangeStatus Active/Inactive
Route::get('/user/status/{id}','UserController@getUserChangeStatus')->middleware('auth');

//====================================User Data End========================================


//====================================Dashboard Start===========================
Route::get('/dashboard','DashboardController@getDashboardShow')->middleware('auth');
//====================================Dashboard End=============================


//==============================================Country Start======================

//Show Country Data
Route::get('/country/show','CountryController@getCountryIndex')->middleware('auth');
Route::get('/country/all','CountryController@getCountryShow')->middleware('auth');

//Add Country Data
Route::get('/country/add','CountryController@getCountryAdd')->middleware('auth');
Route::post('/country/add','CountryController@postCountryAdd')->middleware('auth');

//Update Country Data
Route::get('/country/update/{id}','CountryController@getCountryUpdate')->middleware('auth');
Route::post('/country/update/{id}','CountryController@postCountryUpdate')->middleware('auth');

//Delete Country Data
Route::get('/country/inactive/{id}','CountryController@getCountryInactive')->middleware('auth');
Route::get('/country/active/{id}','CountryController@getCountryActive')->middleware('auth');

//===============================================Country End=========================

//===============================================State Start=========================

//Show State Data
Route::get('/state/show','StateController@getStateIndex')->middleware('auth');
Route::get('/state/all','StateController@getStateShow')->middleware('auth');

//Add State Data
Route::get('/state/add','StateController@getStateAdd')->middleware('auth');
Route::post('/state/add','StateController@postStateAdd')->middleware('auth');

//Update State Data
Route::get('/state/update/{id}','StateController@getStateUpdate')->middleware('auth');
Route::post('/state/update/{id}','StateController@postStateUpdate')->middleware('auth');

//Delete State Data
Route::get('/state/inactive/{id}','StateController@getStateInactive')->middleware('auth');
Route::get('/state/active/{id}','StateController@getStateActive')->middleware('auth');
//=======================================State End===========================================

//=================================================City Start================================

//Show city data
Route::get('/city/show','CityController@getCityIndex')->middleware('auth')->middleware('auth');
Route::get('/city/all','CityController@getCityShow')->middleware('auth');

//Add City Data
Route::get('/city/add','CityController@getCityAdd')->middleware('auth');
Route::post('/city/add','CityController@postCityAdd')->middleware('auth');

//Update City Data
Route::get('/city/update/{id}','CityController@getCityUpdate')->middleware('auth');
Route::post('/city/update/{id}','CityController@postCityUpdate')->middleware('auth');

//Delete City Data

Route::get('/city/inactive/{id}','CityController@getCityInactive')->middleware('auth');
Route::get('/city/active/{id}','CityController@getCityActive')->middleware('auth');

//======================================City End===========================================

//=====================================Tax Start===========================================
//Show Tax Data
Route::get('/tax/show','TaxController@getTaxIndex')->middleware('auth');
Route::get('/tax/all','TaxController@getTaxShow')->middleware('auth');

//Add Tax Data
Route::get('/tax/add','TaxController@getTaxAdd')->middleware('auth');
Route::post('/tax/add','TaxController@postTaxAdd')->middleware('auth');

//Update Tax Data
Route::get('/tax/update/{id}','TaxController@getTaxUpdate')->middleware('auth');
Route::post('/tax/update/{id}','TaxController@postTaxUpdate')->middleware('auth');

//Delete tax Data
Route::get('/tax/inactive/{id}','TaxController@getTaxInactive')->middleware('auth');
Route::get('/tax/active/{id}','TaxController@getTaxActive')->middleware('auth');

//==============================End Tax====================================================

//=================================Time Zone===============================================
//Show Time Zone

Route::get('/timezone/show','TimezoneController@getTimezoneIndex')->middleware('auth');
Route::get('/timezone/all','TimezoneController@getTimezoneShow')->middleware('auth');

//Add Time Zone
Route::get('/timezone/add','TimezoneController@getTimezoneAdd')->middleware('auth');
Route::post('/timezone/add','TimezoneController@postTimezoneAdd')->middleware('auth');

//Update Time Zone

Route::get('/timezone/update/{id}','TimezoneController@getTimezoneUpdate')->middleware('auth');
Route::post('/timezone/update/{id}','TimezoneController@postTimezoneUpdate')->middleware('auth');

//Delete Time Zone
Route::get('/timezone/inactive/{id}','TimezoneController@getTimezoneInactive')->middleware('auth');
Route::get('/timezone/active/{id}','TimezoneController@getTimezoneActive')->middleware('auth');

Route::get('admin/timezone/status/{id}','TimezoneController@getTimezoneChangeStatus')->middleware('auth');


//===========================End Timzone==================================================

/*//================================Reastaurant Data Start==============================
//Show Restaurant Data
Route::get('admin/restaurant/show','RestaurantController@getRestaurantIndex');
Route::get('admin/restaurant/all','RestaurantController@getRestaurantShow')->middleware('auth');

//Add Restaurant data
Route::get('admin/restaurant/add',"RestaurantController@getRestaurantAdd")->middleware('auth');
Route::post('admin/restaurant/add','RestaurantController@postRestaurantAdd')->middleware('auth');

//Update Restaurant Data
Route::get('admin/restaurant/update/{id}','RestaurantController@getRestaurantUpdate')->middleware('auth');
Route::post('admin/restaurant/update/{id}','RestaurantController@postRestaurantUpdate')->middleware('auth');

//Active and Inactive Restaurant Data
Route::get('admin/restaurant/status/{id}','RestaurantController@getRestaurantChangeStatus');

//==================================Restaurant data End====================================*/

//==========================================================================================
// Session Business
	/*Route::get('/','Controller@BranchSession')->middleware('auth');*/
//==========================================================================================

/*akshay routes end*/