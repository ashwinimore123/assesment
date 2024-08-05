@extends('layouts.app')
@section('content')  
<div class="dtatablewitdh">        
<div class="container mt-1">
      <div class="col-xl-9 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Country</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="add" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Country</label>
                  <input type="text" name="country_name" class="form-control" placeholder="Enter Country Name" value="">
                  <span style="color: red;">@error('country_name') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Add Country</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>  
  </div>   
@endsection