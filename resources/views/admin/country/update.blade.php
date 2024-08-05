@extends('layouts.app')
@section('content')  
<div class="dtatablewitdh">        
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Country</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="{{config('app.baseURL')}}/admin/country/update/{{$country->country_id}}" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Country</label>
                  <input type="text" name="country_name" class="form-control" value="{{$country['country_name']}}" placeholder="Enter Country">
                  <span style="color: red;">@error('country_name') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Update Country</button>
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
