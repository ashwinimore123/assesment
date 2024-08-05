@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container-fluid">
  <div class="row page-titles mx-5">
   <div class="col-xl-9 col-lg-12">
     <div class="card" >
       <div class="card-header">
         <h4 class="card-title">Add New Branch</h4>
          </div>
            <div class="card-body">
              <div class="basic-form">
                {{$branch_session}}<br><br> 
                <form action="{{config('app.baseURL')}}/admin/branch/addbranch"
                method="post" enctype="multipart/form-data">
                   
                   @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                           <label>Business</label>
                    <select class="form-control" name="business_id" id="business-dropdown" value="">
                    <option>Select business</option>
                    @foreach($business as $business)
                    <option value="{{$business->business_id}}">
                        {{$business->business_name}}
                    </option>
                    @endforeach
                  </select>

                     

                    <STRONG>Branch Name</STRONG>
                    <input type="text" class="form-control"  name="branch_name" placeholder="please enter Branch Name">
                    @if ($errors->has('branch_name'))
                    <span class="text-danger">{{ $errors->first('branch_name')}}</span>
                    @endif<br>

                    <STRONG>Address</STRONG>
                    <textarea class="form-control" rows="2" id="comment" name="address" placeholder="please enter Address"></textarea>
                    @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address')}}</span>
                @endif<br>
                    
                    <STRONG>MapUrl</STRONG>
                    <input type="text" class="form-control"  name="map_url" placeholder="please enter MapUrl" >
                    @if ($errors->has('map_url'))
                    <span class="text-danger">{{ $errors->first('map_url')}}</span>
                @endif<br>


                    <STRONG>Image</STRONG>
                    <input type="file" class="form-control"name="image" accept="image/*" >
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image')}}</span>
                @endif<br>

                
               <STRONG>Latitude</STRONG>
                    <input type="text" class="form-control"  name="latitude" placeholder="please enter latitude" >
                      @if ($errors->has('latitude'))
                    <span class="text-danger">{{ $errors->first('latitude')}}</span>
                @endif<br>


                <STRONG>Longitude</STRONG>
                    <input type="text" class="form-control"  name="longitude" placeholder="please enter longitude" >
                      @if ($errors->has('longitude'))
                    <span class="text-danger">{{ $errors->first('longitude')}}</span>
                @endif<br>

                   <STRONG>Promo_line</STRONG>
                    <input type="text" class="form-control"  name="promo_line" placeholder="please enter promo_line" >
                      @if ($errors->has('promo_line'))
                    <span class="text-danger">{{ $errors->first('promo_line')}}</span>
                @endif<br>
                    
                    <STRONG>Phone</STRONG>
                    <input type="text" class="form-control"  name="phone" placeholder="please enter phone number" >
                      @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone')}}</span>
                @endif<br>

                    <STRONG>Billing_printer</STRONG>
                    <input type="text" class="form-control"  name="billing_printer" placeholder="please enter billing_printer name" >
                      @if ($errors->has('billing_printer'))
                    <span class="text-danger">{{ $errors->first('billing_printer')}}</span>
                @endif<br>
                    
                    <STRONG>Website</STRONG>
                    <input type="text" class="form-control"  name="website" placeholder="please enter website" >
                      @if ($errors->has('website'))
                    <span class="text-danger">{{ $errors->first('website')}}</span>
                @endif<br>

                    <STRONG>Area</STRONG>
                    <input type="text" class="form-control"  name="area" placeholder="please enter area" >
                      @if ($errors->has('area'))
                    <span class="text-danger">{{ $errors->first('area')}}</span>
                @endif<br>
                    
                    <STRONG>Postcode</STRONG>
                    <input type="text" class="form-control"  name="postcode" placeholder="please enter postcode" >
                      @if ($errors->has('postcode'))
                    <span class="text-danger">{{ $errors->first('postcode')}}</span>
                @endif<br>

                    <STRONG>Cashback Percentage</STRONG>
                    <input type="text" class="form-control"  name="cashback_percentage" placeholder="please enter cashback_percentage" >
                      @if ($errors->has('cashback_percentage'))
                    <span class="text-danger">{{ $errors->first('cashback_percentage')}}</span>
                @endif<br>
                    
                  <STRONG>Delivery Charges</STRONG>
                    <input type="text" class="form-control"  name="delivery_charges" placeholder="please enter delivery_charges" >
                      @if ($errors->has('delivery_charges'))
                    <span class="text-danger">{{ $errors->first('delivery_charges')}}</span>
                @endif<br>
                    
                    <STRONG>Delivery Area</STRONG>
                    <input type="text" class="form-control"  name="delivery_area" placeholder="please enter currency_symbol" >
                      @if ($errors->has('delivery_area'))
                    <span class="text-danger">{{ $errors->first('delivery_area')}}</span>
                @endif <br>
                     
                     <label><STRONG>Merg Table</STRONG></label>
                     <input type="checkbox" class="form-inpuit" id="merg1" name="merge_table" >
                     @if ($errors->has('merge_table'))
                    <span class="text-danger">{{ $errors->first('merge_table')}}</span>
                @endif &nbsp;&nbsp;&nbsp;&nbsp;
                      <label><STRONG>Take Away Order</STRONG></label>
                      <input type="checkbox" class="form-inpuit" id="merg2" name="take_away_order" >
                      @if ($errors->has('take_away_order'))
                      <span class="text-danger">{{ $errors->first('take_away_order')}}</span>
                @endif &nbsp;&nbsp;&nbsp;&nbsp;

                      <label><STRONG>App Order</STRONG></label>
                      <input type="checkbox" class="form-inpuit"id="merg3" name="app_order" >
                      @if ($errors->has('app_order'))
                      <span class="text-danger">{{ $errors->first('app_order')}}</span>
                @endif  &nbsp;&nbsp;&nbsp;&nbsp;

                       <label><STRONG>Show Hidden</STRONG></label>
                       <input type="checkbox" class="form-inpuit"id="merg4" name="show_hidden">
                       @if ($errors->has('show_hidden'))
                       <span class="text-danger">{{ $errors->first('show_hidden')}}</span>
                @endif  &nbsp;&nbsp;&nbsp;&nbsp;
                       
                       <label><STRONG>Is Online</STRONG></label>
                       <input type="checkbox"class="form-inpui>" id="merg5" name="is_online" >
                       @if ($errors->has('is_online'))
                       <span class="text-danger">{{ $errors->first('is_online')}}</span>
                @endif 
               </div>
               </div>
              <button type="submit" id="toastr-success-bottom-right" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection

