@section('totalammount') 
@php
$total=0;
@endphp
@foreach ($carts as $cart) 
 <div class="total-price1 " id="t_price"value="{{$cart->product_price}}">
 	<a href="javascript:void(0);" id="{{$cart->cart_id}}"class="product_click" alt="{{$cart->product_price}}" value="{{$cart->product->product_name}}"style="color: #89879f;">
  <div class="row">
     <div class="hidden name"id="div_price" value="{{$cart->product_price}}">
      {{$cart->product_price}}
     </div>
 
          <div class="col-md-6">
          @if($cart->quantity==1)         
            <span class="span-price" id="productname1">
            {{$cart->product->product_name}}
            </span>
           @else 
            <span class="span-price" id="productname" >
            	{{$cart->quantity}} 
            	<span style="font-size:10px">&#x2716;&nbsp;</span>{{$cart->product->product_name}} 
            </span>      
           @endif
         </div>
          <div class="col-md-6" >
          
      <span class="span-price1"  id="productprice">{{$cart->base_price}}</span> 
    
     
       <span class="span-price11" id="productprice1">{{$cart->base_price*$cart->quantity}}</span>     
</div>
</div>
</a>      
@php
$total=$total+$cart->base_price*$cart->quantity;
@endphp
</div>      
@endforeach
<div class="total-price2">   
   <div class="col-md-12">
    <div class="row">
      <div class="col-md-3">
        <span class="span-price2">Total</span >
      </div>
      <div class="col-md-9" >
        <span class="span-price22" id="productprice2">{{$total}}</span>   
      </div>
    </div>
  </div>
</div> 
<div class="total-price3">
 <div class="col-md-12">
  <div class="row">
    <div class="col-md-3">
      <span class="span-price33">Total</span >

    <div class="col-md-9">
      <span class="span-price3"id="productprice3">{{$total}}</span>   
    </div>
     </div>
  </div>
</div>
</div>

@endsection







<!-- aftr -->



@section('totalammount') 
@php
$total=0;
@endphp

@foreach ($carts as $cart) 

 <div class="total-price1 " id="t_price"value="{{$cart->product_price}}">

  <a href="javascript:void(0);" id="{{$cart->cart_id}}"class="product_click" alt="{{$cart->product_price}}" value="{{$cart->product->product_name}}"style="color: #89879f;">
  <div class="row">

      
     <div class="hidden name"id="div_price" value="{{$cart->product_price}}">
      {{$cart->product_price}}
     </div>
 
          <div class="col-md-6">
          @if($cart->quantity==1)         
            <span class="span-price" id="productname1">
            {{$cart->product->product_name}}
            </span>
           @else 
            <span class="span-price" id="productname" >
              {{$cart->quantity}} 
              <span style="font-size:10px">&#x2716;&nbsp;</span>{{$cart->product->product_name}} 
            </span>      
           @endif
         </div>
          <div class="col-md-6" >
          
      <span class="span-price1"  id="productprice">{{$cart->base_price}}</span> 
    
     
       <span class="span-price11"  id="productprice1">{{$cart->base_price*$cart->quantity}}</span> 
     
</div>
           </div>
    </a>  


      
@php
$total=$total+$cart->base_price*$cart->quantity;
@endphp
</div>      
@endforeach


<div class="total-price2">   
   <div class="col-md-12">
    <div class="row">
      <div class="col-md-3">
        <span class="span-price2">Total</span >
      </div>
      <div class="col-md-9" >
        <span class="span-price22" id="productprice2">{{$total}}</span>   
      </div>
    </div>
  </div>
</div> 
<div class="total-price3">
 <div class="col-md-12">
  <div class="row">
    <div class="col-md-3">
      <span class="span-price33">Total</span >

    <div class="col-md-9">
      <span class="span-price3"id="productprice3">{{$total}}</span>   
    </div>
     </div>
  </div>
</div>
</div>

@endsection











