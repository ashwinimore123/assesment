@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-9 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Tax</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="add" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-12">
                	<label>Tax</label>
                  <input type="text" name="tax_name" class="form-control" placeholder="Enter Tax Name" value="{{old('tax_name')}}">
                  <span style="color:red;">@error('tax_name') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-12">
                  <label>Percentage</label>
                  <input type="text" name="tax_percentage" class="form-control" placeholder="Enter Tax Percentage" value="{{old('tax_percentage')}}">
                  <span style="color:red;"> @error('tax_percentage') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Add State</button>
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