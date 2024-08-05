@section('modifier_details') 
@foreach ($modifiers_details as $details)                       
<div class="option">
<div class="remove removeModifier"><div class="box">×</div></div>
<div class="unitPrice" modifier_id="{{$details->modifier_id}}" price="{{$details->price}}">{{$currency_data->currency_symbol}}{{$details->price}}</div>
<div class="name1">{{$details->modifier_categories->modifier_category_name}}</div>
</div>
@endforeach
@endsection