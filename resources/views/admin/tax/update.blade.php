@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Tax</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="{{config('app.baseURL')}}/admin/tax/update/{{$tax->tax_id}}" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Tax Name</label>
                  <input type="text" name="tax_name" class="form-control" placeholder="Enter Tax Name" value="{{old('tax_name',$tax->tax_name)}}">
                  <span style="color:red;">@error('tax_name') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-12">
                  <label>Tax Percentage</label>
                  <input type="text" name="tax_percentage" class="form-control" value="{{old('tax_percentage',$tax->tax_percentage)}}" placeholder="Enter Tax Percentage">
                  <span style="color:red;">@error('tax_percentage') {{$message}} @enderror </span>
                </div>

                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Update Tax</button>
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