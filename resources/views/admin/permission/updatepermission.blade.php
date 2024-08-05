@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container-fluid">
  <div class="row page-titles mx-5">
   <div class="col-lg-5 col-lg-12">
     <div class="card">
       <div class="card-header">
         <h4 class="card-title">update permission Currunt Permission Id Is {{$permissions->permission_id}}</h4>
          </div>
            <div class="card-body">
              <div class="basic-form">
                <form action="{{config('app.baseURL')}}/admin/permission/updatepermission/{{$permissions->permission_id}}" method= "post">

                   @csrf
                    <div class="form-row">
                      <div class="form-group col-md-9">
                      <label> Update permission Name</label>
                    <input type="text"class="form-control"
                    value="{{$permissions->permission_name}}" name="permission_name"placeholder="please enter your new permission name">  
                </div>
              </div>
             <button type="submit" class="btn btn-primary">submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection