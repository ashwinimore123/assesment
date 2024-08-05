@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
    <h6 class="mb-1">Table All Information</h6>
     <a class=datatable-left-link href=addtable><span><button type='submit' class='btn btn-primary pull-right datatableadd'>Add new Table </button></span></a>
   <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Section name</th>
                <th>Table name</th>
                <th>Table Type</th>
                <th>Table Capyacity</th>
                <th>Table_merg_color</th>
                <th>Table status</th>
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
        ajax: "alltabledata",
        columns: [
            {"mData": "section.section_name"},
            {"mData": 'table_name'},
            {"mData": 'table_type'},
            {"mData": 'table_capacity'},
            {"mData": 'merg_color'},
            {"mData": 'status'},
            {"mData": 'created_at'},
            {"mData": 'updated_at'},

            {"mData": "Action",
             "mRender": function(data, type, row){

              if(row.is_active==1){
              return"<a class=datatable-left-link href=updatetable/"+row.table_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a><a class=datatable-left-link href={{config('app.baseURL')}}/admin/tablestatus/"+row.table_id+">&nbsp;&nbsp;<span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
            }else{
              return "<a class=datatable-left-link href=updatetable/"+row.table_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a><a class=datatable-left-link href={{config('app.baseURL')}}/admin/tablestatus/"+row.table_id+">&nbsp;&nbsp;<span><button type='submit' class='btn btn-danger'>InActivate</button></span></a>";
              
            }
          },
            

        },
           
        ]
    });
    
  });
</script>
@endsection