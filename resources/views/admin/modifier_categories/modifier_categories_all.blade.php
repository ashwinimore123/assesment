@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
    <h6 class="mb-1">MODIFIER CATEGORIES All INFORMATION</h6>
     <a class=datatable-left-link href="addmodifier_categories"><span><button type='submit' class='btn btn-primary pull-right datatableadd'>Add new categoery</button></span></a>
   <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Modifier Category Name</th>
                <th>Is Multiple</th>
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
  $(function (){
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{config('app.baseURL')}}/admin/addmodifier_categoriesGetallData",
        columns:[
            {"mData": 'modifier_category_name'},
            {"mData": 'is_multiple'},
            {"mData": 'created_at'},
            {"mData": 'updated_at'},
            {"mData": "Action",
             "mRender": function(data, type, row){

              if(row.is_active==1){
              return"<a class=datatable-left-link href=modifier_categories_update/"+row.    modifier_category_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a><a class=datatable-left-link href={{config('app.baseURL')}}/admin/modifier_categories_status/"+row.modifier_category_id+">&nbsp;&nbsp;<span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
            }else{
              return "<a class=datatable-left-link href=modifier_categories_update/"+row.   modifier_category_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a><a class=datatable-left-link href={{config('app.baseURL')}}/admin/modifier_categories_status/"+row.modifier_category_id+">&nbsp;&nbsp;<span><button type='submit' class='btn btn-danger'>InActivate</button></span></a>";
              
            }
          },           
        },           
        ]
    });   
  });
</script>
@endsection