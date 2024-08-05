@extends('layouts.app')
@section('content')
<style type="text/css">
      .container i {
    margin-left:;
    cursor: pointer;
}
</style>
<div class="dtatablewitdh">  
 <div class="container mt-1">
  <div class="row">
      <div class="col-xl-9 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Printer</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="add" method="POST">
              @csrf
                <div class="form-group col-md-12">
                  <label>Printer Ip</label>
                  <input type="text" name="printer_ip" class="form-control" value="{{old('printer_ip')}}" placeholder="Enter name" >
                  <span style="color:red;">@error('printer_ip') {{$message}} @enderror</span>
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
  <script type="text/javascript">
$(".choose_branch").choosen({
  no_results_text: "Oops, nothing found!"
});
$("select option[value='{{old('business-dropdown')}}']").prop('selected', true);  
</script>
@endsection