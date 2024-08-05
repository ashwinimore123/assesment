@extends('layouts.app')
@section('content')    
<div class="container-fluid">
 <div class="row page-titles mx-5">
   <div class="col-xl-9 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Restaurant</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="add" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
                 <div class="form-group col-md-12">
                  <label>Restaurant Name</label>
                  <input type="text" name="restaurant_name" class="form-control" placeholder="Enter Restaurant Name" value="{{old('restaurant_name')}}">
                  <span style="color:red;">@error('restaurant_name'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Tag Line</label>
                  <input type="text" name="tag_line" class="form-control" placeholder="Enter Tag Line" value="{{old('tag_line')}}">
                  <span style="color:red;">@error('tag_line'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Logo</label>
                  <input type="file" name="logo" class="form-control">
                  <span style="color:red;">@error('logo'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Splash Screen</label>
                  <input type="file" name="splash_screen" accept="image/*" class="form-control" value="{{old('splash_screen')}}">
                  <span style="color:red;">@error('splash_screen'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Login Screen</label>
                  <input type="file" name="login_screen" class="form-control" accept="image/*" value="{{old('login_screen')}}">
                  <span style="color:red;">@error('login_screen'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Registration Screen</label>
                  <input type="file" name="registration_screen" class="form-control" accept="image/*" value="{{old('registration_screen')}}">
                  <span style="color:red;">@error('registration_screen'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>OTP Screen</label>
                  <input type="text" name="otp_screen" class="form-control" placeholder="OTP Screen" value="{{old('otp_screen')}}">
                  <span style="color:red;">@error('otp_screen'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Text Color</label>
                  <input type="text" name="text_color" class="form-control" placeholder="Text Color" value="{{old('text_color')}}">
                  <span style="color:red;">@error('text_color'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Background Color</label>
                  <input type="text" name="background_color" class="form-control" placeholder="Background color" value="{{old('background_color')}}">
                  <span style="color:red;">@error('background_color'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Package Name</label>
                  <input type="text" name="package_name" class="form-control" placeholder="Package Name" value="{{old('package_name')}}">
                  <span style="color:red;">@error('package_name'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Policy Title</label>
                  <input type="text" name="policy_title" class="form-control" placeholder="Policy title" value="{{old('policy_title')}}">
                  <span style="color:red;">@error('policy_title'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Policy Image</label>
                  <input type="file" name="policy_image" class="form-control" accept="image/*" value="{{old('policy_image')}}">
                  <span style="color:red;">@error('policy_image'){{$message}}@enderror</span>
                </div>


                <div class="form-group col-md-12">
                  <label>Policy Description</label>
                  <textarea name="policy_description" class="form-control" value="">{{old('policy_description')}}</textarea>
                  <span style="color:red;">@error('policy_description'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>About Title</label>
                  <input type="text" name="about_title" class="form-control" placeholder="About title" value="{{old('about_title')}}">
                  <span style="color:red;">@error('about_title'){{$message}}@enderror</span>
                </div>


                <div class="form-group col-md-12">
                  <label>About Image</label>
                  <input type="file" name="about_image" class="form-control" accept="image/*" value="{{old('about_image')}}">
                  <span style="color:red;">@error('about_image'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>About Description</label>
                  <textarea name="about_description" class="form-control">{{old('about_description')}}</textarea>
                  <span style="color:red;">@error('about_description'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Company Name</label>
                  <input type="text" name="company_name" class="form-control" placeholder="Company name" value="{{old('company_name')}}">
                  <span style="color:red;">@error('company_name'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Business Number</label>
                  <input type="number" name="business_number" class="form-control" placeholder="Business Number" value="{{old('business_number')}}">
                  <span style="color:red;">@error('business_number'){{$message}}@enderror</span>
                </div>


                <div class="form-group col-md-12">
                  <label>Website</label>
                  <input type="text" name="website" class="form-control" placeholder="Website" value="{{old('website')}}">
                  <span style="color:red;">@error('website'){{$message}}@enderror</span>
                </div>


                <div class="form-group col-md-12">
                  <label>Address</label>
                  <input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{old('address')}}">
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
                  <select class="form-control" name="state_id" id="state-dropdown" value="">
                    <option>Select State</option>
                    @foreach($states as $state)
                    <option value="{{$state->state_id}}">
                        {{$state->state_name}}
                    </option>
                    @endforeach
                  </select>
                  <span style="color:red;">@error('state_id'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>City Id</label>
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
                  <input type="number" name="post_code" class="form-control" placeholder="Enter Post" value="{{old('post_code')}}">
                  <span style="color:red;">@error('post_code'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Contact Number</label>
                  <input type="number" name="contact_number" class="form-control" placeholder="Enter Contact Number" value="{{old('contact_number')}}">
                  <span style="color:red;">@error('contact_number'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter email id" value="{{old('email')}}">
                  <span style="color:red;">@error('email'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Facebook</label>
                  <input type="text" name="facebook" class="form-control" placeholder="Enter facebook id" value="{{old('facebook')}}">
                  <span style="color:red;">@error('facebook'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Instagram</label>
                  <input type="text" name="instagram" class="form-control" placeholder="Enter instagram id" value="{{old('instagram')}}">
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
                  <input type="text" name="taxsettings" class="form-control" placeholder="Enter Tax settings" value="{{old('taxsettings')}}">
                  <span style="color:red;">@error('taxsettings'){{$message}}@enderror</span>
                </div>



                <div class="form-group col-md-12">                     
                    <div class="custom-control custom-checkbox ml-1">
                        <input type="checkbox" class="custom-control-input" value="1" name="is_app" id="basic_checkbox_1">
                        <label class="custom-control-label" for="basic_checkbox_1">App</label><br>
                    </div>
                </div>

                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Add Restaurant</button>
                </div>
             </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
        
</div>
<script type="text/javascript">
  $("select option[value='{{old('country_id')}}']").prop('selected', true);
  $("select option[value='{{old('state_id')}}']").prop('selected', true);
  $("select option[value='{{old('city_id')}}']").prop('selected', true);
  $("select option[value='{{old('timezone_id')}}']").prop('selected', true);
  $("select option[value='{{old('currency_id')}}']").prop('selected', true);

</script>
@endsection
