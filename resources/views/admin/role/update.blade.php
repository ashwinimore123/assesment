@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container-fluid">
  <div class="row page-titles mx-5">
   <div class="col-xl-5 col-lg-12">
     <div class="card">
       <div class="card-header">
         <h4 class="card-title">Update Role Record Role Currunt RoleId Is {{$role->role_id}} </h4>
          </div>
            <div class="card-body">
              <div class="basic-form">
                <form action="{{config('app.baseURL')}}/admin/role/update/{{$role->role_id}}"method="post">
                   @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                      <label> Update Name</label>
                    <input type="text"class="form-control" value="{{$role->role_name}}" name="role_name"placeholder="please enter your new name">  
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