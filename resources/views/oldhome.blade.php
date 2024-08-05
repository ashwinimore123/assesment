@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row page-titles mx-5">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">              
                  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div>    
                      
                    <a class=datatable-left-link href=admin/role/all><span><button type='submit' class='btn btn-primary'>View all Role</button></span></a>&nbsp;&nbsp;&nbsp; 
                     
                     <a class=datatable-left-link href=admin/currency/all><span><button type='submit' class='btn btn-primary'>View all curruncy</button></span></a>&nbsp;&nbsp;&nbsp; 



                     <a class=datatable-left-link href=admin/permission/permission><span><button type='submit' class='btn btn-primary'>View all permissions</button></span></a>&nbsp;&nbsp;&nbsp; 

                     <a class=datatable-left-link href=admin/branch/all><span><button type='submit' class='btn btn-primary'>View all Branches</button></span></a>
                </div>
                 </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
