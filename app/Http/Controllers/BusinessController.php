<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Business,Country,State,City,Timezone,Currencies};
use Datatables;
class BusinessController extends Controller
{

//Show Data
function getBusinessIndex(){
$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 


$business = Business::all();
return Datatables($business)->make(true);
}

function getBusinessShow(){
		$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
		    $notification = array(
            'message'=>'You Can not Acess this page....',
            'alert-type'=>'success'
             );
			return redirect('/home')->with($notification);
			}
		} 

return view('admin/business/all');
}

//Add Data
function getBusinessAdd(Request $request){

$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 




$countries = Country::where('is_active',1)->get();
$states = State::where('is_active',1)->get();
$cities = City::where('is_active',1)->get();
$timezones = Timezone::where('is_active',1)->get();
$currencies = Currencies::where('is_active',1)->get();
return view('admin/business/add')->with('countries',$countries)
->with('states',$states)
->with('cities',$cities)
->with('timezones',$timezones)
->with('currencies',$currencies);
}

function postBusinessAdd(Request $request){
if ($request->is_restaurant!="") {
$is_restaurant=1;
}else{
$is_restaurant=0;
}

$business = new Business;
//Validate Add Business Data
$request -> validate([
'business_name' => 'required',
'version' => 'required',
'expiry_date' => 'required',
'renewal_date' => 'required',
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
//End validation of Add Business Data

$business->business_name = $request->business_name;
$business->version = $request->version;
$business->package_name = $request->package_name;
$business->expiry_date=$request->expiry_date;
$business->renewal_date=$request->renewal_date;
$business->is_restaurant = $is_restaurant;


$is_app = $request->is_app;
if($request->is_app==""){
$is_app=0;
} 

//File Logo Image
if($request->hasfile('logo')){
$logo_image = $request->file('logo');
$logo_path = $logo_image->store('logo');
$business->logo=$logo_path;
}
else{
$business->logo="";
return $request;
}

//File Splash Screen Image
if($request->hasfile('splash_screen')){
$splash_screen_image = $request->file('splash_screen');
$splash_screen_path = $splash_screen_image->store('Splash_Screen_Image');
$business->splash_screen = $splash_screen_path;
}else{
$business->splash_screen = "";
return $request;
}

// File Login Screen Image

if($request->hasfile('login_screen')){
$login_screen_image = $request->file('login_screen');
$login_screen_path = $login_screen_image->store('Login_Screen_Image');
$business->login_screen=$login_screen_path;
}else{
$business->login_screen = "";
return $request;
}

//File Registration Screen Image
if($request->hasfile('registration_screen')){
$registration_screen_image = $request->file('registration_screen');
$registration_screen_path = $registration_screen_image->store('Registration_Screen_Image');
$business->registration_screen = $registration_screen_path;
}else{
$business->registration_screen = "";
return $request;
}

//Policy Image

if($request->hasfile('policy_image')){
$policy_image = $request->file('policy_image');
$policy_path = $policy_image->store('Policy_Image');
$business->policy_image = $policy_path;
}else{
$business->policy_image = "";
return $request;
}

//About Image
if($request->hasfile("about_image")){
$about_image = $request->file('about_image');
$about_path = $about_image->store('About_Image');
$business->about_image = $about_path;            
}else{
$business->about_image = "";
return $request;
}

$business->tag_line = $request->tag_line;
$business->otp_screen = $request->otp_screen;
$business->text_color = $request->text_color;
$business->background_color = $request->background_color;
$business->policy_title = $request->policy_title;
$business->policy_description = $request->policy_description;
$business->about_title = $request->about_title;
$business->about_description = $request->about_description;
$business->company_name = $request->company_name;
$business->business_number = $request->business_number;
$business->website = $request->website;
$business->address = $request->address;
$business->country_id = $request->country_id;
$business->state_id = $request->state_id;
$business->city_id = $request->city_id;
$business->post_code = $request->post_code;
$business->contact_number = $request->contact_number;
$business->email = $request->email;
$business->facebook = $request->facebook;
$business->instagram = $request->instagram;
$business->timezone_id = $request->timezone_id;
$business->currency_id = $request->currency_id;
$business->taxsettings = $request->taxsettings;
$business->is_app = $is_app;
$business->domain = "www.vebsigns.com";
$business->subdomain = "www.vebsigns.com";
$business->save();
return redirect('admin/business/all');
}
//Update data
function getBusinessUpdate($id){

	$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 


$business = Business::find($id);
$countries = Country::where('is_active',1)->get();
$states = State::where('is_active',1)->get();
$cities = City::where('is_active',1)->get();
$timezones = Timezone::where('is_active',1)->get();
$currencies = Currencies::where('is_active',1)->get();
return view('admin.business.update')->with('business',$business)
->with('countries',$countries)
->with('states',$states)
->with('cities',$cities)
->with('timezones',$timezones)
->with('currencies',$currencies);
}

function postBusinessUpdate(Request $request){

	$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 

$is_restaurant=$request->is_restaurant;

// if($is_restaurant==""){
//      $is_restaurant=0;
// }

if ($request->is_restaurant!="") {
$is_restaurant=1;
}else{
$is_restaurant=0;
}

$business = Business::find($request->id);
$request -> validate([
'business_name' => 'required',
'version' => 'required',
'package_name' => 'required',
'expiry_date' => 'required',
'renewal_date' => 'required',
'tag_line'=>'required',        
'otp_screen'=>'required',
'text_color'=>'required',
'background_color'=>'required',
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
$business->business_name = $request->business_name;
$business->version = $request->version;
$business->package_name = $request->package_name;
$business->expiry_date=$request->expiry_date;
$business->renewal_date=$request->renewal_date;
$business->is_restaurant = $is_restaurant;


$is_app = $request->is_app;
if($request->is_app==""){
$is_app=0;
} 

//File Logo Image
if($request->hasfile('logo')){
$logo_image = $request->file('logo');
$logo_path = $logo_image->store('logo');
$business->logo=$logo_path;
}


//File Splash Screen Image
if($request->hasfile('splash_screen')){
$splash_screen_image = $request->file('splash_screen');
$splash_screen_path = $splash_screen_image->store('Splash_Screen_Image');
$business->splash_screen = $splash_screen_path;
}

// File Login Screen Image

if($request->hasfile('login_screen')){
$login_screen_image = $request->file('login_screen');
$login_screen_path = $login_screen_image->store('Login_Screen_Image');
$business->login_screen=$login_screen_path;
}

//File Registration Screen Image
if($request->hasfile('registration_screen')){
$registration_screen_image = $request->file('registration_screen');
$registration_screen_path = $registration_screen_image->store('Registration_Screen_Image');
$business->registration_screen = $registration_screen_path;
}

//Policy Image

if($request->hasfile('policy_image')){
$policy_image = $request->file('policy_image');
$policy_path = $policy_image->store('Policy_Image');
$business->policy_image = $policy_path;
}

//About Image
if($request->hasfile("about_image")){
$about_image = $request->file('about_image');
$about_path = $about_image->store('About_Image');
$business->about_image = $about_path;            
}


$business->tag_line = $request->tag_line;
$business->otp_screen = $request->otp_screen;
$business->text_color = $request->text_color;
$business->background_color = $request->background_color;
$business->policy_title = $request->policy_title;
$business->policy_description = $request->policy_description;
$business->about_title = $request->about_title;
$business->about_description = $request->about_description;
$business->company_name = $request->company_name;
$business->business_number = $request->business_number;
$business->website = $request->website;
$business->address = $request->address;
$business->country_id = $request->country_id;
$business->state_id = $request->state_id;
$business->city_id = $request->city_id;
$business->post_code = $request->post_code;
$business->contact_number = $request->contact_number;
$business->email = $request->email;
$business->facebook = $request->facebook;
$business->instagram = $request->instagram;
$business->timezone_id = $request->timezone_id;
$business->currency_id = $request->currency_id;
$business->taxsettings = $request->taxsettings;
$business->is_app = $is_app;

$business->save();

return redirect('admin/business/all');
}

//Delete Record
public function getBusinessInactive(Request $request){

	$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 


$deactive =Business::find($request->id);
if($deactive!=""){
$deactive->is_active=0;
}
$deactive->save();
return redirect('admin/business/all');
}

public function getBusinessActive(Request $request){

	$user=Auth::user();
		if ($user!="") {
			$role=$user->role_id;
			if ($role!=1) {
				return redirect('/home');
			}
		} 


$active=Business::find($request->id);
if($active!=""){
$active->is_active=1;
}
$active->save();
return redirect('admin/business/all');
}

}
