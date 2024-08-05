@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-9 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Time Zone</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="add" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-12">
                	<label>Time Zone</label>
                  <input type="text" name="timezone" class="form-control" placeholder="Time Zone" value="{{old('timezone')}}">
                  <span style="color:red;">@error('timezone') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-12">
                  <label>Time Zone Details</label>
                  <input type="text" name="timezonedetails" class="form-control" placeholder="Time Zone Details" value="{{old('timezonedetails')}}">
                  <span style="color:red;"> @error('timezonedetails') {{$message}} @enderror </span>
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