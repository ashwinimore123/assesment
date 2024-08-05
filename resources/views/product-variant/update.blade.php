@extends('layouts.app')
@section('content') 
<div class="dtatablewitdh">        
<div class="container mt-1">
      <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update ProductVariant</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="{{config('app.baseURL')}}/admin/product-variant/update/{{$product_variant->product_variant_id}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
 
                <div class="form-group col-md-12">
                  <label>Product Variant Name</label>
                  <input type="text" name="product_variant_name" class="form-control" value="{{old('product_variant_name',$product_variant->product_variant_name)}}" placeholder="Enter Product Varaint Name" >
                  <span style="color:red;">@error('product_variant_name') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Variant</label>
                  <select class="form-control" name="variant_id" id="variant_dropdown">
                    <option>Select Variant</option>
                    @foreach($variant as $variant)
                      <option value="{{$variant->variant_id}}">
                        {{$variant->variant_name}}
                      </option>
                    @endforeach
                  </select>
                  <span style="color:red;">@error('product_variant_name') {{$message}} @enderror</span>
                </div>

        
                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Update Variant</button>
                </div>
             </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <script type="text/javascript">
var new_val_variant = '{{$product_variant->variant_id}}';
var old_val_variant = "{{old('variant_id')}}";
if(old_val_variant!=""){
      $('#variant_dropdown option[value='+old_val_variant+']').prop('selected', true);
}else{
      $('#variant_dropdown option[value='+new_val_variant+']').prop('selected', true);
}
</script>
@endsection


