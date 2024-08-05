@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">          
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Variant</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="{{config('app.baseURL')}}/admin/variant/update/{{$variant->variant_id}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Variant Name</label>
                  <input type="text" name="variant_name" class="form-control" value="{{old('variant_name',$variant->variant_name)}}" placeholder="Enter Variant Name" >
                  <span style="color:red;">@error('variant_name') {{$message}} @enderror</span>
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
</div>
@endsection


