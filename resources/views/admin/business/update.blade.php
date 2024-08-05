@extends('layouts.app')
@section('content') 
<div class="dtatablewitdh">          
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Business</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="{{config('app.baseURL')}}/admin/business/update/{{$business->business_id}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Business Name</label>
                  <input type="text" name="business_name" class="form-control" value="{{old('business_name',$business->business_name)}}" placeholder="Enter Business">
                  <span style="color:red;">@error('business_name') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-12">
                  <label>Version</label>
                  <input type="number" name="version" class="form-control" value="{{old('version',$business->version)}}" placeholder="Enter version">
                  <span style="color: red;">@error('version') {{$message}} @enderror</span>
                </div>
                
                <div class="form-group col-md-12">
                  <label>Expiry Date</label>
                  <input type="date" name="expiry_date" class="form-control" value="{{old('expiry_date',$business->expiry_date)}}" placeholder="Enter Expiry Date">
                  <span style="color:red;">@error('expiry_date') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-12">
                  <label>Renewal Date</label>
                  <input type="date" name="renewal_date" class="form-control" value="{{old('renewal_date',$business->renewal_date)}}" placeholder="Enter Renewal Date">
                  <span style="color:red;">@error('renewal_date') {{$message}} @enderror</span>
                </div>
                  <div class="form-group col-md-12">
                  <label>Tag Line</label>
                  <input type="text" name="tag_line" class="form-control" placeholder="Enter Tag Line" value="{{old('tag_line',$business->tag_line)}}">
                  <span style="color:red;">@error('tag_line'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Logo</label>
                  <input type="file" name="logo" class="form-control" accept="image/*">
                  <span style="color:red;">@error('logo'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Splash Screen</label>
                  <input type="file" accept="image/*" name="splash_screen" class="form-control"  value="{{old('splash_screen',$business->splash_screen)}}">
                  <span style="color:red;">@error('splash_screen'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Login Screen</label>
                  <input type="file" name="login_screen" accept="image/*" class="form-control"  value="{{old('login_screen',$business->login_screen)}}">
                  <span style="color:red;">@error('login_screen'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Registration Screen</label>
                  <input type="file" name="registration_screen" accept="image/*" class="form-control" value="{{old('registration_screen',$business->registration_screen)}}">
                  <span style="color:red;">@error('registration_screen'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>OTP Screen</label>
                  <input type="text" name="otp_screen" class="form-control" placeholder="OTP Screen" value="{{old('otp_screen',$business->otp_screen)}}">
                  <span style="color:red;">@error('otp_screen'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Text Color</label>
                  <input type="text" name="text_color" class="form-control" placeholder="Text Color" value="{{old('text_color',$business->text_color)}}">
                  <span style="color:red;">@error('text_color'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Background Color</label>
                  <input type="text" name="background_color" class="form-control" placeholder="Background color" value="{{old('background_color',$business->background_color)}}">
                  <span style="color:red;">@error('background_color'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Package Name</label>
                  <input type="text" name="package_name" class="form-control" placeholder="Package Name" value="{{old('package_name',$business->package_name)}}">
                  <span style="color:red;">@error('package_name'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Policy Title</label>
                  <input type="text" name="policy_title" class="form-control" placeholder="Policy title" value="{{old('policy_title',$business->policy_title)}}">
                  <span style="color:red;">@error('policy_title'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Policy Image</label>
                  <input type="file" name="policy_image" class="form-control" accept="image/*" value="{{old('policy_image',$business->policy_image)}}">
                  <span style="color:red;">@error('policy_image'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Policy Title</label>
                  <input type="text" name="policy_title" class="form-control" placeholder="Policy title" value="{{old('policy_title',$business->policy_title)}}">
                  <span style="color:red;">@error('policy_title'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Policy Description</label>
                  <textarea name="policy_description" class="form-control" value="">{{old('policy_description',$business->policy_description)}}</textarea>
                  <span style="color:red;">@error('policy_description'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>About Title</label>
                  <input type="text" name="about_title" class="form-control" placeholder="About title" value="{{old('about_title',$business->about_title)}}">
                  <span style="color:red;">@error('about_title'){{$message}}@enderror</span>
                </div>


                <div class="form-group col-md-12">
                  <label>About Image</label>
                  <input type="file" name="about_image" class="form-control" accept="image/*" value="{{old('about_image',$business->about_image)}}">
                  <span style="color:red;">@error('about_image'){{$message}}@enderror</span>
                </div>
                
                <div class="form-group col-md-12">
                  <label>About Description</label>
                  <textarea name="about_description" class="form-control">{{old('about_description',$business->about_description)}} </textarea>
                  <span style="color:red;">@error('about_description'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Company Name</label>
                  <input type="text" name="company_name" class="form-control" placeholder="Company name" value="{{old('company_name',$business->company_name)}}">
                  <span style="color:red;">@error('company_name'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Business Number</label>
                  <input type="number" name="business_number" class="form-control" placeholder="Business Number" value="{{old('business_number',$business->business_number)}}">
                  <span style="color:red;">@error('business_number'){{$message}}@enderror</span>
                </div>


                <div class="form-group col-md-12">
                  <label>Website</label>
                  <input type="text" name="website" class="form-control" placeholder="Website" value="{{old('website',$business->website)}}">
                  <span style="color:red;">@error('website'){{$message}}@enderror</span>
                </div>


                <div class="form-group col-md-12">
                  <label>Address</label>
                  <input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{old('address',$business->address)}}">
                  <span style="color:red;">@error('address'){{$message}}@enderror</span>
                </div>


                <div class="form-group col-md-12">
                  <label>Country</label>
                  <select class="form-control" name="country_id" id="country-dropdown" value="">
                    <option>Select Country</option>
                    @foreach($countries as $country)
                    <option value="{{$country->country_id}}">
                        {{$country->country_name}}
                    </option>
                    @endforeach
                  </select>
                  <span style="color:red;">@error('country_id'){{$message}}@enderror</span>
                </div>


                <div class="form-group col-md-12">
                  <label>State</label>
                  <select class="form-control" name="state_id" id="state-dropdown">
                      <option>Select State</option>
                      @foreach ($states as $state)
                      <option value="{{$state->state_id}}">
                      {{$state->state_name}}
                      </option>
                      @endforeach
                      <span style="color:red;">@error('state_id') {{$message}} @enderror</span>
                  </select>
                  <span style="color:red;">@error('state_id'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>City</label>
                  <select class="form-control" name="city_id" id='city-dropdown'>
                      <option>Select City</option>
                      @foreach($cities as $city)
                        <option value="{{$city->city_id}}">
                            {{$city->city_name}}
                        </option>
                      @endforeach
                  </select>
                  <span style="color:red;">@error('city_id'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Post Code</label>
                  <input type="number" name="post_code" class="form-control" placeholder="Enter Post" value="{{old('post_code',$business->post_code)}}">
                  <span style="color:red;">@error('post_code'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Contact Number</label>
                  <input type="number" name="contact_number" class="form-control" placeholder="Enter Contact Number" value="{{old('contact_number',$business->contact_number)}}">
                  <span style="color:red;">@error('contact_number'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter email id" value="{{old('email',$business->email)}}">
                  <span style="color:red;">@error('email'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Facebook</label>
                  <input type="text" name="facebook" class="form-control" placeholder="Enter facebook id" value="{{old('facebook',$business->facebook)}}">
                  <span style="color:red;">@error('facebook'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Instagram</label>
                  <input type="text" name="instagram" class="form-control" placeholder="Enter instagram id" value="{{old('instagram',$business->instagram)}}">
                  <span style="color:red;">@error('instagram'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>timezone</label>
                  <select class="form-control" name="timezone_id" id="timezone-dropdown">
                    <option>Select timezone</option>
                    @foreach($timezones as $timezone)
                      <option value="{{$timezone->timezone_id}}">
                          {{$timezone->timezone}}
                      </option>
                    @endforeach
                  </select>
                  <span style="color:red;">@error('timezone_id'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Currency</label>
                  <select class="form-control" name="currency_id" id="currency-dropdown">
                    <option>Select Currency</option>
                    @foreach($currencies as $currency)
                        <option value="{{$currency->currency_id}}">
                            {{$currency->currency_name}}
                        </option>
                    @endforeach
                  </select>
                  <span style="color:red;">@error('currency_id'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Tax Settings</label>
                  <input type="text" name="taxsettings" class="form-control" placeholder="Enter Tax settings" value="{{old('taxsettings',$business->taxsettings)}}">
                  <span style="color:red;">@error('taxsettings'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Domain</label>
                  <input type="text" name="domain" class="form-control" placeholder="Enter Domain" value="{{old('domain',$business->domain)}}">
                  <span style="color:red;">@error('domain'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Sub Domain</label>
                  <input type="text" name="subdomain" class="form-control" placeholder="Enter Sub Domain" value="{{old('subdomain',$business->subdomain)}}">
                  <span style="color:red;">@error('subdomain'){{$message}}@enderror</span>
                </div>



                <div class="form-group col-md-12">
                     <div class="custom-control custom-checkbox ml-1">
                        <input type="checkbox" name="is_app" class="custom-control-input" id="checkbox1" value="{{old('is_app',$business->is_app)}}">
                        <label class="custom-control-label" for="checkbox1">App</label>
                      </div>
                 </div>

                
                <div class="form-group col-md-12">
                     <div class="custom-control custom-checkbox ml-1">
                        <input type="checkbox" name="is_restaurant" class="custom-control-input" id="checkbox2" value="{{old('is_restaurant',$business->is_restaurant)}}">
                        <label class="custom-control-label" for="checkbox2">Restaurant</label>
                      </div>

                 </div>

                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Update Business</button>
                </div>
             </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
</div>
</div>
  

 <script type="text/javascript">
var new_val_country = '{{$business->country_id}}';
var old_val_country = "{{old('country_id')}}";
// console.log(new_val_country);
// console.log(old_val_country);
if(old_val_country!=""){
      $('select option[value='+old_val_country+']').prop('selected', true);
}else{
      $('select option[value='+new_val_country+']').prop('selected', true);
}
var new_val_state = '{{$business->state_id}}';
var old_val_state = '{{old("state_id")}}';
if(old_val_state!=""){
  $('select option[value='+old_val_state+']').prop('selected',true);
}else{
  $('select option[value='+new_val_state+']').prop('selected',true);
}
var new_val_city = '{{$business->city_id}}';
var old_val_city = '{{old("city_id")}}';
if(old_val_city!=""){
  $('select option[value='+old_val_city+']').prop('selected',true);
}else{
  $('select option[value='+new_val_city+']').prop('selected',true);
}

//============================================================

var new_val_timezone = '{{$business->timezone_id}}';
var old_val_timezone = '{{old("timezone_id")}}';
if(old_val_timezone!=""){
  $('select option[value='+old_val_timezone+']').prop('selected',true);
}else{
  $('select option[value='+new_val_timezone+']').prop('selected',true);
}

//=============================================================
var new_val_currency = '{{$business->currency_id}}';
var old_val_currency = "{{old('currency_id')}}";
if(old_val_currency!=""){
  $('select>option[value='+old_val_currency+']').prop('selected',true);
}else{
  $('select>option[value='+new_val_currency+']').prop('selected',true);
}

if("{{$business->is_restaurant}}"==1){
    $('#checkbox2').prop('checked',true);
  }

 if("{{$business->is_app}}"==1){
    $('#checkbox1').prop('checked',true);
  }
</script>
@endsection


