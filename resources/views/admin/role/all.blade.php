@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
    <h6 class="mb-1">Vpos Role Information</h6>
     <a class=datatable-left-link href=add><span><button type='submit' class='btn btn-primary pull-right datatableadd'>Addnew</button></span></a>
   <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Role id</th>
                <th>Role name</th>
                <th>created at</th>
                <th>updated at</th>
                <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</div>
<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "allData",
        columns: [
            {"mData": "role_id"},
            {"mData": 'role_name'},
            {"mData": 'created_at'},
            {"mData": 'updated_at'},
            {"mData": "Action",
             "mRender": function(data, type, row){

              if(row.is_active==1){
              return"<a class=datatable-left-link href=update/"+row.role_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a><a class=datatable-left-link href={{config('app.baseURL')}}/admin/rolestatus/"+row.role_id+">&nbsp;&nbsp;<span><button type='submit' class='btn btn-success'>Activate</button></span></a> &nbsp;&nbsp;                                        <a class=datatable-left-link href={{config('app.baseURL')}}/admin/rolepermission/roleacess/"+row.role_id+"><span><button type='submit' class='btn btn-danger'>AddPermission</button></span></a>";
            }else{
              return "<a class=datatable-left-link href=update/"+row.role_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a><a class=datatable-left-link href={{config('app.baseURL')}}/admin/rolestatus/"+row.role_id+">&nbsp;&nbsp;<span><button type='submit' class='btn btn-danger'>InActivate</button></span></a> &nbsp;&nbsp;<a class=datatable-left-link href={{config('app.baseURL')}}/admin/rolepermission/roleacess/"+row.role_id+"><span><button type='submit' class='btn btn-danger'>AddPermission</button></span></a>";

            }
          },
            

        },
           
        ]
    });
    
  });
</script>
@endsection