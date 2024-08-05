@extends('layouts.app')
@section('content')
 <div class="dtatablewitdh">          
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-9 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Product Variant</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="add" method="POST">
              @csrf
              
                <div class="form-group col-md-12">
                  <label>Product Variant Name</label>
                  <input type="text" name="product_variant_name" class="form-control" value="{{old('product_variant_name')}}" placeholder="Enter Product Varaint Name" >
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
                      <button type="submit" class="btn btn-primary">Add Product Variant</button>
                </div>
                </form>
             </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script type="text/javascript">


$("#variant_dropdown option[value='{{old('variant_id')}}']").prop('selected',true);



</script>

@endsection