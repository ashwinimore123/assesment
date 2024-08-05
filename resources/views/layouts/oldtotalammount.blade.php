@section('totalammount')
<div class="total-price1">
  @foreach ($carts as $cart)  
      <span class="span-price" id="productname">{{$cart->product_id}}</span>
      <span class="span-price1"  id="productprice">{{$cart->product_price}}</span> 
      <span class="span-price11" id="productprice1">{{$cart->product_price}</span>   
@endforeach 
    </div>
@endsection











