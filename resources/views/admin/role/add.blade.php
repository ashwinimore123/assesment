@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container-fluid">
  <div class="row page-titles mx-5">
   <div class="col-xl-5 col-lg-12">
     <div class="card" >
       <div class="card-header">
         <h4 class="card-title">ADD NEW ROLE</h4>
          </div>
            <div class="card-body">
              <div class="basic-form">
                <form action="{{url('admin/role/add')}}"method="post">
                   @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                      <label>Name</label>
                    <input type="text" class="form-control"  name="role_name" placeholder="please enter your name" >
                      @if ($errors->has('role_name'))
                    <span class="text-danger">{{ $errors->first('role_name') }}</span>
                @endif  
                </div>
              </div>
             <button type="submit" id="toastr-success-bottom-right" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection

