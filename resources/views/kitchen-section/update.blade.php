 @extends('layouts.app')
 @section('content') 
 <div class="dtatablewitdh">      
 <div class="container mt-1">
  <div class="row">
    <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Kitchen Section</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="{{config('app.baseURL')}}/admin/kitchen-section/update/{{$kitchen->kitchen_section_id}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
               <div class="form-group col-md-12">
                <label>Printer Id</label>
                <select class="form-control" name="printer_id" id='printer-dropdown'>
                  <option>Select Printer</option>
                  @foreach($printer as $printer)
                  <option value="{{$printer->printer_id}}">
                    {{$printer->printer_ip}}
                  </option>
                  @endforeach
                </select>
                <span style="color:red;">@error('printer_id'){{$message}}@enderror</span>
              </div>

              <div class="form-group col-md-12">
                <label>Kitchen Section Name</label>
                <input type="text" name="kitchen_section_name" class="form-control" value="{{old('kitchen_section_name',$kitchen->kitchen_section_name)}}" placeholder="Enter Kitchen Section Name" >
                <span style="color:red;">@error('kitchen_section_name') {{$message}} @enderror</span>
              </div>

              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Update Kitchen Section</button>
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
  var new_val_printer = '{{$kitchen->printer_id}}';
  var old_val_printer = "{{old('printer_id')}}";
if(old_val_printer!=""){
  $('#printer-dropdown option[value='+old_val_printer+']').prop('selected', true);
}else{
  $('#printer-dropdown option[value='+new_val_printer+']').prop('selected', true);
}
</script>
@endsection


