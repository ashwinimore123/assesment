@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
    <h6 class="mb-1">MODIFIER  All INFORMATION</h6>
     <a class=datatable-left-link href="addmodifier"><span><button type='submit' class='btn btn-primary pull-right datatableadd'>Add new modifier</button></span></a>
   <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>PRODUCT NAME</th>
                <th>MODIFIER CATEGOERY NAME</th>
                <th>TAKE AWAY PRICE</th>
                 <th>RICE</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th>ACTION</th>
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
        ajax: "{{config('app.baseURL')}}/admin/addmodifierGetallData",
        columns:[
            {"mData": 'product.product_name'},
            {"mData": 'modifier_categories.modifier_category_name'},
            {"mData": 'take_away_price'},
            {"mData": 'price'},
            {"mData": 'created_at'},
            {"mData": 'updated_at'},
            {"mData": "Action",
             "mRender": function(data, type, row){

              if(row.is_active==1){
              return"<a class=datatable-left-link href=modifier_update/"+row.modifier_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a><a class=datatable-left-link href={{config('app.baseURL')}}/admin/modifier_status/"+row.modifier_id+">&nbsp;&nbsp;<span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
            }else{
              return "<a class=datatable-left-link href=modifier_update/"+row.modifier_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a><a class=datatable-left-link href={{config('app.baseURL')}}/admin/modifier_status/"+row.modifier_id+">&nbsp;&nbsp;<span><button type='submit' class='btn btn-danger'>InActivate</button></span></a>";
            }
          },           
        },           
        ]
    });   
  });
</script>
@endsection