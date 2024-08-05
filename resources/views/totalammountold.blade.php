@section('totalammount') 
@php
$total=0;
@endphp
@foreach ($carts as $cart)    
 <div class="total-price1">
      <span class="span-price" id="productname">{{$cart->quantity}} x {{$cart->product->product_name}}</span>
      <span class="span-price1"  id="productprice">{{$cart->product_price}}</span> 
      <span class="span-price11" id="productprice1">{{$cart->product_price*$cart->quantity}}</span>      
@php
$total=$total+$cart->product_price*$cart->quantity;
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
    </div>
    <div class="col-md-9">
      <span class="span-price3"id="productprice3">{{$total}}</span>   
    </div>
  </div>
</div>
</div> 
@endsection











