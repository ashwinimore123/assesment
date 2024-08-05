<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{Country,State,City,Timezone,Currencies,Restaurant};
use Datatables;
class RestaurantController extends Controller
{
//Show Restaurant Data
public function getRestaurantIndex(){
$restaurant = Restaurant::all();
return Datatables($restaurant)->make(true);
}

public function getRestaurantShow(){
return view('admin/restaurant/all');
}

//Add restaurant Data

public function getRestaurantAdd(Request $request){
$countries = Country::where('is_active',1)->get();
$states = State::where('is_active',1)->get();
$cities = City::where('is_active',1)->get();
$timezones = Timezone::where('is_active',1)->get();
$currencies = Currencies::where('is_active',1)->get();
return view('admin/restaurant/add')->with('countries',$countries)
->with('states',$states)
->with('cities',$cities)
->with('timezones',$timezones)
->with('currencies',$currencies);
}

public function postRestaurantAdd(Request $request){
$restaurant = new Restaurant;
$request->validate([

'tag_line'=>'required',
'logo'=>'required',
'splash_screen'=>'required',
'login_screen'=>'required',
'registration_screen'=>'required',
'otp_screen'=>'required',
'text_color'=>'required',
'background_color'=>'required',
'package_name'=>'required',
'policy_title'=>'required',
'policy_image'=>'required',
'policy_description'=>'required',
'about_title'=>'required',
'about_image'=>'required',
'about_description'=>'required',                          
'company_name'=>'required',
'business_number'=>'required',
'website'=>'required',
'address'=>'required',
'country_id'=>'required',
'state_id'=>'required',
'city_id'=>'required',
'post_code'=>'required',
'contact_number'=>'required',
'email'=>'required',
'facebook'=>'required',
'instagram'=>'required',
'timezone_id'=>'required',
'currency_id'=>'required',
'taxsettings'=>'required'

]);
$is_app = $request->is_app;
if($request->is_app==""){
$is_app=0;
} 

//File Logo Image
if($request->hasfile('logo')){
$logo_image = $request->file('logo');
$logo_path = $logo_image->store('logo');
$restaurant->logo=$logo_path;
}
else{
$restaurant->logo="";
}
//File Splash Screen Image
if($request->hasfile('splash_screen')){
$splash_screen_image = $request->file('splash_screen');
$splash_screen_path = $splash_screen_image->store('Splash_Screen_Image');
$restaurant->splash_screen = $splash_screen_path;
}else{
$restaurant->splash_screen = "";
}
// File Login Screen Image
if($request->hasfile('login_screen')){
$login_screen_image = $request->file('login_screen');
$login_screen_path = $login_screen_image->store('Login_Screen_Image');
$restaurant->login_screen=$login_screen_path;
}else{
$restaurant->login_screen = "";
}
//File Registration Screen Image
if($request->hasfile('registration_screen')){
$registration_screen_image = $request->file('registration_screen');
$registration_screen_path = $registration_screen_image->store('Registration_Screen_Image');
$restaurant->registration_screen = $registration_screen_path;
}else{
$restaurant->registration_screen = "";
}
//Policy Image
if($request->hasfile('policy_image')){
$policy_image = $request->file('policy_image');
$policy_path = $policy_image->store('Policy_Image');
$restaurant->policy_image = $policy_path;
}else{
$restaurant->policy_image = "";
}
//About Image
if($request->hasfile("about_image")){
$about_image = $request->file('about_image');
$about_path = $about_image->store('About_Image');
$restaurant->about_image = $about_path;            
}else{
$restaurant->about_image = "";

}
$restaurant->restaurant_name = $request->restaurant_name;
$restaurant->tag_line = $request->tag_line;
$restaurant->otp_screen = $request->otp_screen;
$restaurant->text_color = $request->text_color;
$restaurant->background_color = $request->background_color;
$restaurant->package_name = $request->package_name;
$restaurant->policy_title = $request->policy_title;
$restaurant->policy_description = $request->policy_description;
$restaurant->about_title = $request->about_title;
$restaurant->about_description = $request->about_description;
$restaurant->company_name = $request->company_name;
$restaurant->business_number = $request->business_number;
$restaurant->website = $request->website;
$restaurant->address = $request->address;
$restaurant->country_id = $request->country_id;
$restaurant->state_id = $request->state_id;
$restaurant->city_id = $request->city_id;
$restaurant->post_code = $request->post_code;
$restaurant->contact_number = $request->contact_number;
$restaurant->email = $request->email;
$restaurant->facebook = $request->facebook;
$restaurant->instagram = $request->instagram;
$restaurant->timezone_id = $request->timezone_id;
$restaurant->currency_id = $request->currency_id;
$restaurant->taxsettings = $request->taxsettings;
$restaurant->is_app = $is_app;
$restaurant->save();
return redirect('admin/restaurant/all');
}
//Update the Restaurant Data
public function getRestaurantUpdate($id){
// $restaurant=$request->all();
$restaurant = Restaurant::find($id);
$countries=Country::where('is_active',1)->get();
$states=State::where('is_active',1)->get();
$cities=City::where('is_active',1)->get();
$timezones=Timezone::where('is_active',1)->get();
$currencies=Currencies::where('is_active',1)->get();
return view('admin/restaurant/update')->with('restaurant',$restaurant)
->with('countries',$countries)
->with('states',$states)
->with('cities',$cities)
->with('timezones',$timezones)
->with('currencies',$currencies);
}

public function postRestaurantUpdate(Request $request){
$restaurant = Restaurant::find($request->id);
$request->validate([
'restaurant_name'=>'required',
'tag_line'=>'required',
'otp_screen'=>'required',
'text_color'=>'required',
'background_color'=>'required',
'package_name'=>'required',
'policy_title'=>'required',
'policy_description'=>'required',
'about_title'=>'required',
'about_description'=>'required',                          
'company_name'=>'required',
'business_number'=>'required',
'website'=>'required',
'address'=>'required',
'country_id'=>'required',
'state_id'=>'required',
'city_id'=>'required',
'post_code'=>'required',
'contact_number'=>'required',
'email'=>'required',
'facebook'=>'required',
'instagram'=>'required',
'timezone_id'=>'required',
'currency_id'=>'required',
'taxsettings'=>'required',

]);

if ($request->is_app!="") {
$is_app=1;
}else{
$is_app=0;
}
//File Logo Image
if($request->hasfile('logo')){
$logo_image = $request->file('logo');
$logo_path = $logo_image->store('logo');
$restaurant->logo=$logo_path;
}
//File Splash Screen Image
if($request->hasfile('splash_screen')){
$splash_screen_image = $request->file('splash_screen');
$splash_screen_path = $splash_screen_image->store('Splash_Screen_Image');
$restaurant->splash_screen = $splash_screen_path;
}
// File Login Screen Image
if($request->hasfile('login_screen')){
$login_screen_image = $request->file('login_screen');
$login_screen_path = $login_screen_image->store('Login_Screen_Image');
$restaurant->login_screen=$login_screen_path;
}
//File Registration Screen Image
if($request->hasfile('registration_screen')){
$registration_screen_image = $request->file('registration_screen');
$registration_screen_path = $registration_screen_image->store('Registration_Screen_Image');
$restaurant->registration_screen = $registration_screen_path;
}
//Policy Image
if($request->hasfile('policy_image')){
$policy_image = $request->file('policy_image');
$policy_path = $policy_image->store('Policy_Image');
$restaurant->policy_image = $policy_path;
}
//About Image
if($request->hasfile("about_image")){
$about_image = $request->file('about_image');
$about_path = $about_image->store('About_Image');
$restaurant->about_image = $about_path;            
}


$restaurant->restaurant_name = $request->restaurant_name;
$restaurant->tag_line = $request->tag_line;
$restaurant->otp_screen = $request->otp_screen;
$restaurant->text_color = $request->text_color;
$restaurant->background_color = $request->background_color;
$restaurant->package_name = $request->package_name;
$restaurant->policy_description = $request->policy_description;
$restaurant->about_title = $request->about_title;
$restaurant->about_description = $request->about_description;
$restaurant->company_name = $request->company_name;
$restaurant->business_number = $request->business_number;
$restaurant->website = $request->website;
$restaurant->address = $request->address;
$restaurant->country_id = $request->country_id;
$restaurant->state_id = $request->state_id;
$restaurant->city_id = $request->city_id;
$restaurant->post_code = $request->post_code;
$restaurant->contact_number = $request->contact_number;
$restaurant->email = $request->email;
$restaurant->facebook = $request->facebook;
$restaurant->instagram = $request->instagram;
$restaurant->timezone_id = $request->timezone_id;
$restaurant->currency_id = $request->currency_id;
$restaurant->taxsettings = $request->taxsettings;
$restaurant->is_app = $is_app;
$restaurant->save();
return redirect('admin/restaurant/all');
}
//Restaurant Active - Inactive Restaurant Data
public function getRestaurantChangeStatus(Request $request){
$status =Restaurant::find($request->id);
if($status!=""){
if($status->is_active==0){
$status->is_active=1;
}else{
$status->is_active=0;
}
$status->save();
return redirect('admin/restaurant/all');
}
}
}

