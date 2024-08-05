 @extends('layouts.app')
@section('content')  
<div class="dtatablewitdh">        
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Printer</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="{{config('app.baseURL')}}/admin/printer/update/{{$printer->printer_id}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-row">

                <div class="form-group col-md-12">
                  <label>Printer IP</label>
                  <input type="text" name="printer_ip" class="form-control" value="{{old('printer_ip',$printer->printer_ip)}}" placeholder="Enter name" >
                  <span style="color:red;">@error('name') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Update Printer</button>
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


