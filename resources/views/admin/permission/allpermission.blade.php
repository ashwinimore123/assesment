@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
    <h6 class="mb-1">Vpos permission  Information</h6>
     <a class=datatable-left-link href=addpermission><span><button type='submit' class='btn btn-primary pull-right datatableadd'>Add New permission</button></span></a>
   <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>permission Id</th>
                <th>permission Name</th>
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
        ajax: "allpermission",
        columns: [
            {"mData": "permission_id"},
            {"mData": 'permission_name'},
            {"mData": 'created_at'},
            {"mData": 'updated_at'},
            {"mData": "Action",
             "mRender": function(data, type, row){
            if(row.is_active==1){
              return"<a class=datatable-left-link href=updatepermission/"+row.permission_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a><a class=datatable-left-link href={{config('app.baseURL')}}/admin/permissionstatus/"+row.permission_id+">&nbsp;&nbsp;<span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
            }else{
              return "<a class=datatable-left-link href=updatepermission/"+row.permission_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a><a class=datatable-left-link href={{config('app.baseURL')}}/admin/permissionstatus/"+row.permission_id+">&nbsp;&nbsp;<span><button type='submit' class='btn btn-danger'>InActivate</button></span></a>";
            }
          },

        },
           
        ]
    });
    
  });
</script>
@endsection