@section('modifier')
<div class="product-scroll" style="width:60%;"> 
<div class="row"> 
 @foreach ($modifiers as $modifier) 
<div class="col-lg-3">
<a href="javascript:void(0);"style="color:black;" class="modifier_click" modifier_category_id="{{ $modifier->modifier_categories->modifier_category_id}}" value="">
<div class="productModifierIcon">
<span class="large" style=" font-size: 14px;">0</span></div>
<div class="card overflow-hidden ">
<div class="card-body pb-0 px-4 pt-4">
<div class="row">
<div class="col">
<span class="text-success">{{$modifier->modifier_categories->modifier_category_name}}</span>
</div>
</div>
</div>
</div>
</a>
</div>
@endforeach 
</div>
</div>
@endsection