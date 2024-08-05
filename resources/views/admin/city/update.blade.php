@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Citi</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="{{config('app.baseURL')}}/admin/city/update/{{$city->city_id}}" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>States</label>
                  <select class="form-control" name="state_id" id="state-dropdown">
                      <option value="">Select State</option>
                      @foreach ($states as $state) 
                      <option value="{{$state->state_id}}">
                      {{$state->state_name}}
                      </option>
                      @endforeach
                  <span style="color:red;">@error('state_id') {{$message}} @enderror</span>

                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label>City</label>
                  <input type="text" name="city_name" class="form-control" value="{{old('city_name', $city->city_name)}}" placeholder="Enter City">
                  <span style="color:red;">@error('city_name') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                      <button type="submit"  class="btn btn-primary">Update City</button>
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
//Select box start
var new_val_state = '{{$city->state_id}}';
var old_val_state = '{{old("state_id")}}';
if(old_val_state!=""){
  $('select option[value='+old_val_state+']').prop('selected',true);
}else{
  $('select option[value='+new_val_state+']').prop('selected',true);
}
</script>
@endsection
