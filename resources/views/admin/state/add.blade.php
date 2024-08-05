@extends('layouts.app')
@section('content')  
<div class="dtatablewitdh">       
<div class="container  mt-1">
  <div class="row">
      <div class="col-xl-9 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add state</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="add" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Country</label>
                  <select class="form-control" name="country_id" id="country-dropdown" value="">
                      <option value="">Select Country</option>
                      @foreach ($countries as $country) 
                      <option value="{{$country->country_id}}">
                      {{$country->country_name}}
                      </option>
                      @endforeach
                  </select>
                  <span style="color:red;">@error('country_id') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-12">
                  <label>State</label>
                  <input type="text" name="state_name" class="form-control" placeholder="Enter State name">
                  <span style="color:red;">@error('state_name') {{$message}} @enderror</span>
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
  <script type="text/javascript">
    $("select option[value='{{old('country_id')}}']").prop('selected', true);
  </script>
@endsection