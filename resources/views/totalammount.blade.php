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

      @php
      $modifiertotal1=0;
      @endphp
      @foreach ($cart->cartmodifier  as $modifiertotal)
      @php
      $modifiertotal1=$modifiertotal1+$modifiertotal->modifier_price;
      @endphp 
      @endforeach

       <span class="span-price11" id="productprice1">{{$currency_data->currency_symbol}}{{$cart->base_price*$cart->quantity+$modifiertotal1}}</span> 
   
     
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


<a class="amt">
@if($globalOrder!="")  
<div class="discount_price ">  
   <div class="col-md-12">
    <div class="row">

      <div class="col-lg-12">
        @if($globalOrder->globalorder!="")
        @if($globalOrder->globalorder->discount!=0)
        <span class="span-price2 labelDiscount">Discount({{$globalOrder->globalorder->discount}}%)</span>
        @endif
        @endif
        @if($globalOrder->globalorder!="")
        @if($globalOrder->globalorder->surcharge!=0)
        <span class="span-price2 labelDiscount">Surcharge({{$globalOrder->globalorder->surcharge}}%)</span>
         @endif
          @endif
        </div>

       <div class="col-md-9">
         @if($globalOrder->globalorder!="")
         @if($globalOrder->globalorder->discount!=0)
         
         @php
          $dicountamount=$globalOrder->globalorder->discount*$total/100;
         @endphp

         <span class="amountDiscount span-price_discount" id="receiptDiscount">{{$currency_data->currency_symbol}}{{$globalOrder->globalorder->discount*$total/100}}</span>
         @endif
         @endif

         @if($globalOrder->globalorder!="")
         @if($globalOrder->globalorder->surcharge!=0)
         
          @php
          $surchargeamount=$globalOrder->globalorder->surcharge*$total/100;
          @endphp

         <span class="amountDiscount span-price22" id="receiptDiscount">{{$currency_data->currency_symbol}}{{$globalOrder->globalorder->surcharge*$total/100}}</span>
         @endif
         @endif
     </div>
     
</div>
</div>
</div>
@endif

@if($paid_transaction_sum!==0 && $paid_transaction_sum!="")
<div class="total-price2">  
   <div class="col-md-12">
    <div class="row">
      <div class="col-md-3">
        <span class="span-price2">Total({{$currency_data->currency_symbol}}{{$paid_transaction_sum}}Paid)</span>
      </div>
       <div class="col-md-9" >
        <span class="span-price22" id="productprice2">{{$currency_data->currency_symbol}}{{$total}}</span>  
      </div>
    </div>
  </div>
</div>

@else 
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
@endif




<div class="total-price3">
 <div class="col-md-12">
  <div class="row">

@if($paid_transaction_sum!==0 && $paid_transaction_sum!="")
    <div class="col-md-3">
      <span class="span-price33">ToPay</span>
    </div>
@else
    <div class="col-md-3">
      <span class="span-price33">Total</span>
    </div>
@endif

    <div class="col-md-6">

     @if($globalOrder!="")    
         @if($globalOrder->globalorder!="")
         @if($globalOrder->globalorder->surcharge!=0)

         <span class="span-price3 new3"id="productprice3">{{$currency_data->currency_symbol}}{{$total+$surchargeamount-$paid_transaction_sum}}</span>

         <span class="hidden"id="calculationprice">{{$currency_data->currency_symbol}}{{$total+$surchargeamount}}</span>

         @endif
         @endif
 
         @if($globalOrder->globalorder!="")
         @if($globalOrder->globalorder->discount!=0)
        <span class="span-price3 new2"id="productprice3">{{$currency_data->currency_symbol}}{{$total-$dicountamount-$paid_transaction_sum}}</span>

        <span class="hidden"id="calculationprice">{{$currency_data->currency_symbol}}{{$total-$dicountamount}}</span>
          @endif
          @endif

          @if($globalOrder->globalorder!="")
          @if($globalOrder->globalorder->discount==0 && $globalOrder->globalorder->surcharge==0)
           <span class="span-price3 new1"id="productprice3">{{$currency_data->currency_symbol}}{{$total-$paid_transaction_sum}}</span>

           <span class="hidden"id="calculationprice">{{$currency_data->currency_symbol}}{{$total}}</span>
          @endif
          @endif

        @endif




          @if($globalOrder==""||$globalOrder->globalorder=="")
           <span class="span-price3 new"id="productprice3">{{$currency_data->currency_symbol}}{{$total}}</span>

           <span class="hidden"id="calculationprice">{{$currency_data->currency_symbol}}{{$total}}</span>
           @endif
        
    </div>

  </div>
</div>
</div>
</a>
@endsection

