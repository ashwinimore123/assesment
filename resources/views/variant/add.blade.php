@extends('layouts.app')
@section('content') 
<div class="dtatablewitdh">      
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-9 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add variant Name</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="add" method="POST">
              @csrf
              
                <div class="form-group col-md-12">
                  <label>Variant Name</label>
                  <input type="text" name="variant_name" class="form-control" value="{{old('variant_name')}}" placeholder="Enter Varaint Name" >
                  <span style="color:red;">@error('variant_name') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Add Printer</button>
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
$(".choose_branch").chosen({
  no_results_text: "Oops, nothing found!"
})

//$('select').find("select option:eq({{old('state_id')}})").prop('selected', true);

$("select option[value='{{old('business-dropdown')}}']").prop('selected', true);  
</script>

@endsection