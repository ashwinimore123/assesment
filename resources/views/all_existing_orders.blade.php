@php
$orderno=0;
@endphp
@section('ExistingOrders') 
<div class="row">
@foreach ($globalOrder as $Orders)
@php
$orderno ++;
@endphp 
   <div class="col-md-3 mt-3">
       <div class="widget-stat  Newordercard mt-3 exist_order"global_order_id="{{$Orders->global_order_id}}">
        <div class="card-body p-4">
            <span class="font_order">ORDER{{$orderno}}</span>
          </div>
     </div>
   </div>
@endforeach
</div>
@endsection