@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
  <div class="row">
   <div class="col-lg-12 col-lg-12">
     <div class="card">
       <div class="card-header">
         <h4 class="card-title">update Branch Currunt Branch Id Is {{$branch->branch_id}}</h4>
          </div>
            <div class="card-body">
              <div class="basic-form">
    <form action="{{config('app.baseURL')}}/admin/branch/updatebranch/{{$branch->branch_id}}"method="post"enctype="multipart/form-data">
                   @csrf
                  <STRONG>Branch Name</STRONG>
                    <input type="text" class="form-control"  name="branch_name" value="{{$branch->branch_name}}"placeholder="please enter Branch Name">

                    <STRONG>Address</STRONG>
                    <textarea class="form-control" rows="2" id="comment" name="address" placeholder="please enter Address" value="{{$branch->address}}">{{$branch->address}}</textarea>
          
                    
                    <STRONG>MapUrl</STRONG>
                    <input type="text" class="form-control"  name="map_url" placeholder="please enter MapUrl"value="{{$branch->map_url}}">


                    <STRONG> Old Image</STRONG>
                     <p> <img src="{{config('app.baseURL')}}/storage/app/{{$branch->image}}" height="100px" width="100px" /></p>
                    <STRONG>Upload New Image</STRONG>
                    <input type="file" class="form-control" name="image" value="">
                

                    <STRONG>Latitude</STRONG>
                    <input type="text" class="form-control"  name="latitude" placeholder="please enter latitude" value="{{$branch->latitude}}">
                

                    <STRONG>Longitude</STRONG>
                    <input type="text" class="form-control"  name="longitude" placeholder="please enter longitude" value="{{$branch->longitude}}" >
                  

                   <STRONG>Promo_line</STRONG>
                    <input type="text" class="form-control"  name="promo_line" placeholder="please enter promo_line" value="{{$branch->promo_line}}" >
                    
                    <STRONG>Phone</STRONG>
                    <input type="text" class="form-control"  name="phone" placeholder="please enter phone number"value="{{$branch->phone}}">
                   

                    <STRONG>Billing_printer</STRONG>
                    <input type="text" class="form-control"  name="billing_printer" placeholder="please enter billing_printer name" value="{{$branch->billing_printer}}">
                  
                    
                    <STRONG>Website</STRONG>
                    <input type="text" class="form-control"  name="website" placeholder="please enter website" value="{{$branch->website}}">
                   

                    <STRONG>Area</STRONG>
                    <input type= "text" class="form-control"  name="area" placeholder="please enter area" value="{{$branch->area}}">
                
                    
                    <STRONG>Postcode</STRONG>
                    <input type="text" class="form-control"  name="postcode" placeholder="please enter postcode" value="{{$branch->postcode}}">
                 

                    <STRONG>Cashback Percentage</STRONG>
                    <input type="text" class="form-control"  name="cashback_percentage" placeholder="please enter cashback percentage" value="{{$branch->cashback_percentage}}">
                  
                    
                   <STRONG>Delivery Charges</STRONG>
                    <input type="text" class="form-control"  name="delivery_charges" placeholder="please enter delivery charges" value="{{$branch->delivery_charges}}">
                  
                    
                    <STRONG>Delivery Area</STRONG>
                    <input type="text" class="form-control"  name="delivery_area" placeholder="please enter currency_symbol" value="{{$branch->delivery_area}}">
               
                     
                     <label><STRONG>Merg Table</STRONG></label>
                     <input type="checkbox" class="form-input" id="merg1" name="merge_table" value="{{$branch->merge_table}}">
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <label><STRONG>Take Away Order</STRONG></label>
                      <input type="checkbox" class="form-input" id="merg2" name="take_away_order"  value="{{$branch->take_away_order}}">
                      &nbsp;&nbsp;&nbsp;&nbsp;

                      <label><STRONG>App Order</STRONG></label>
                      <input type="checkbox" class="form-inpuit"id="merg3" name="app_order"value="{{$branch->app_order}}">
                      &nbsp;&nbsp;&nbsp;&nbsp;

                       <label><STRONG>Show Hidden</STRONG></label>
                       <input type="checkbox" class="form-input"id="merg4" name="show_hidden" value="{{$branch->show_hidden}}" >
                       &nbsp;&nbsp;&nbsp;&nbsp;
                       
                       <label><STRONG>Is Online</STRONG></label>
                       <input type="checkbox"class="form-input>" id="merg5" name="is_online"value="{{$branch->is_online}}">
                     <div>
                       <button type="submit" class="btn btn-primary">submit</button>
                       </div>
                    </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    if({{$branch->merge_table}}==1)
    {
    $('#merg1').prop('checked',true);
    }
  
    if({{$branch->take_away_order}}==1){
    $('#merg2').prop('checked',true);
     }

     if({{$branch->app_order}}==1){
    $('#merg3').prop('checked',true);
    } 
    if({{$branch->show_hidden}}==1){
    $('#merg4').prop('checked',true);
    }
    
    if({{$branch->is_online}}==1){
    $('#merg5').prop('checked',true);
     }

  </script>>
@endsection