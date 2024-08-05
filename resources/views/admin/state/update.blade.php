@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update State</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="{{config('app.baseURL')}}/admin/state/update/{{$state->state_id}}" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Country</label>
                  <select class="form-control" name="country_id" id="country-dropdown">
                      <option value="" id="country_prop">Select Country</option>
                      @foreach ($countries as $country) 
                      <option id="option" value="{{$country->country_id}}">
                      {{$country->country_name}}
                      </option>
                      @endforeach
                  </select>
                  <span style="color:red;">@error('country_id') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-12">
                  <label>State</label>
                  <input type="text" name="state_name" class="form-control" value="{{old('state_name',$state->state_name)}}" placeholder="Enter Country">
                  <span style="color:red;">@error('state_name') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Update State</button>
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
//$('select>option:eq({{$state->country_id}})').prop('selected', true);
var new_val = '{{$state->country_id}}';
var old_val = "{{old('country_id')}}";
if(old_val!=""){
      $('select>option:eq('+old_val+')').prop('selected', true);
}else{
      $('select>option:eq('+new_val+')').prop('selected', true);
}

</script>
@endsection



