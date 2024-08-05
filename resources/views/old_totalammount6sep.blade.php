@section('totalammount') 
@php
$total=0;
@endphp
@foreach ($carts as $cart) 

 <div class="total-price1" id="t_price"value="{{$cart->product_price}}">

 	<a href="javascript:void(0);" id="{{$cart->cart_id}}"class="product_click productcartleft" alt="{{$cart->product_price}}" product_id="{{$cart->product_id}}" value="{{$cart->product->product_name}}"style="color: #89879f;">

     <div class="hidden name"id="div_price" value="{{$cart->product_price}}">
      {{$currency_data->currency_symbol}}{{$cart->product_price}}
     </div> 
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
      <span class="span-price1"  id="productprice">{{$currency_data->currency_symbol}}{{$cart->base_price}}</span> 
       <span class="span-price11" id="productprice1">{{$currency_data->currency_symbol}}{{$cart->base_price*$cart->quantity}}</span> 

@php
$modifiertotal=0;
@endphp

@foreach ($cart->cartmodifier as $modifier) 
<div class=" modifier_cart_container">
    <ul class="modifiers_cart">
       <li class="">
          <span class="cart_total">{{$currency_data->currency_symbol}} {{$modifier->modifier_price}}</span>
          <span class="cart_name">{{$modifier->modifier->modifier_category_name}}</span>
        </li>
    </ul>
</div>
@php
$modifiertotal=$modifiertotal+$modifier->modifier_price;
@endphp
@endforeach

</a> 

@php
$total=$total+$cart->base_price*$cart->quantity+$modifiertotal;
@endphp
</div> 

@endforeach


<div class="total-price2">   
   <div class="col-md-12">
    <div class="row">
      <div class="col-md-3">
        <span class="span-price2">Total</span>
      </div>
      <div class="col-md-9" >
        <span class="span-price22" id="productprice2">{{$currency_data->currency_symbol}}{{$total}}</span>   
      </div>
    </div>
  </div>
</div> 

<div class="total-price3">
 <div class="col-md-12">
  <div class="row">
    <div class="col-md-3">
      <span class="span-price33">Total</span>
    </div>
    <div class="col-md-6">
      <span class="span-price3"id="productprice3">{{$currency_data->currency_symbol}}{{$total}}</span>   
    </div>
  </div>
</div>
</div>

</div>

@endsection
