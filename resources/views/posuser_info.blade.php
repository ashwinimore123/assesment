@section('posuser_info')
 @foreach ($products as $product)  
  <li class="userpos">
      <div class="userImagepos">MW</div>
      <div class="userNamepos">
      <span class="userNamepos">mahesh wandhekar</span>
      </div>
  </li>
@endforeach 

@endsection


<!-- @section('product')
<div class="row"> 
 @foreach ($products as $product)  
 <div class="col-lg-3">
  <a href="javascript:void(0);"class="product" id="price" value="{{$product->product_id}}">
    <div class="card overflow-hidden postproduct" value="{{$product->product_id}}" style="border:1px solid {{$product->color}} !important;">
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
@endforeach 
</div>
@endsection -->
