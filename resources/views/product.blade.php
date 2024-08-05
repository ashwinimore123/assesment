@section('product')
<div class="product-scroll"> 
<div class="row"> 
 @foreach ($products as $product) 
<div class="col-lg-3">
  <a href="javascript:void(0);"class="product" id="price" value="{{$product->product_id}}">

 @if($product->modifier_categories!="")
  <div class="productModifierIcon"><span class="large" style=" font-size: 14px;">+</span></div>
  @endif
  
  <div class="card overflow-hidden postproduct" value="{{$product->product_id}}"style="border:1px solid {{$product->color}} !important;">
      <div class="card-body pb-0 px-4 pt-4">
        <div class="row">
          <div class="col">
           <span class="text-success">{{$product->product_name}}</span>
         </div>
       </div>
     </div>
   </div>
 </a>
</div>


<!--  <div class="col-lg-3">
  <a href="javascript:void(0);"class="product" id="price" value="{{$product->product_id}}">
  <div class="card overflow-hidden postproduct" value="{{$product->product_id}}"style="border:1px solid {{$product->color}} !important;">
      <div class="card-body pb-0 px-4 pt-4">
        <div class="row">
          <div class="col">
           <span class="text-success">{{$product->product_name}}</span>
         </div>
       </div>
     </div>
   </div>
 </a>
</div> -->


@endforeach 
</div>
</div>
@endsection


