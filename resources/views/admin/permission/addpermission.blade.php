@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
  <div class="row page-titles mx-5">
   <div class="col-lg-12 col-lg-12">
     <div class="card" >
       <div class="card-header">
         <h4 class="card-title">Add Permission</h4>
          </div>
            <div class="card-body">
              <div class="basic-form">
                <form action="{{config('app.baseURL')}}/admin/permission/addpermission"
                method="post">
                   @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                      <label>Permission Name</label>
                    <input type="text" class="form-control"  name="permission_name" placeholder="please enter Permission name" >
                      @if ($errors->has('permission_name'))
                    <span class="text-danger">{{ $errors->first('permission_name')}}</span>
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

