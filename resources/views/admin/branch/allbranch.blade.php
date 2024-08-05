@extends('layouts.app')
@section('content')
<div class="dtatablewitdh" style="left: 3% !important;"> 
<div class="container mt-1">
    <div class="col-xl-12 col-lg-12">
    <h6 class="mb-1">Vpos Branch Information</h6>
     <a class=datatable-left-link href=addbranch><span><button type='submit' class='btn btn-primary pull-right' style="background: white; color: black;border-color: black;">Add New Branch</button></span></a>
   <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Image</th>
                <th>BranchId</th>
                <th>Name</th>
                <th>bussinesname</th>
                <th>Address</th>
                
                <th>PromoLine</th>
                <th>Phone</th>
                <th>IsActive</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</div>
</div>
<script type="text/javascript">
  $(function () {
    
    var table =$('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax:"allbranch",
        columns: [


        {
                          'target' : -1,
                        'mData' : 'Image',
                        'ilter' : false,
                        'bSortable' : false,
                        'mRender':function(data,type,row){
                          return "<img alt='Image' height='60px' width='80px' src='{{config('app.baseURL')}}/storage/app/"+row.image+"'/>";
                        }
                      },

            {"mData": 'branch_id'},
            {"mData": 'branch_name'},
            {"mData": 'business_id'},
            {"mData": 'address'},
            {"mData": 'promo_line'},
            {"mData": 'phone'},
            {"mData": 'is_active'},
            {"mData": 'created_at'},
            {"mData": 'updated_at'},

            {"mData": "Action",
             "mRender": function(data, type, row){
            

            if(row.is_active==1){
              return"<a class=datatable-left-link href=updatebranch/"+row.branch_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a><a class=datatable-left-link href={{config('app.baseURL')}}/admin/branch/branchstatus/"+row.branch_id+">&nbsp;&nbsp;<span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
            }else{
              return "<a class=datatable-left-link href=updatebranch/"+row.branch_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a><a class=datatable-left-link href={{config('app.baseURL')}}/admin/branch/branchstatus/"+row.branch_id+">&nbsp;&nbsp;<span><button type='submit' class='btn btn-danger'>InActivate</button></span></a>";
            }
          },

        },
           
        ]
    });
    
  });
</script>
@endsection