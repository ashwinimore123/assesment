@extends('layouts.app')
@section('content') 
<div class="dtatablewitdh">         
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-9 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add City</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="add" method="POST">
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
                  <input type="text" name="city_name" class="form-control" value="{{old('city_name')}}" placeholder="Enter City name" >
                  <span style="color:red;">@error('city_name') {{$message}} @enderror</span>
                  
                </div>

                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Add City</button>
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
//$('select').find("select option:eq({{old('state_id')}})").prop('selected', true);
$("select option[value='{{old('state_id')}}']").prop('selected', true);  
</script>
@endsection