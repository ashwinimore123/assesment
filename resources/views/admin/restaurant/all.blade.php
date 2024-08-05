@extends('layouts.app')
@section('content')
<div class="content-body">            
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Restaurants</h4>
          <button type="button" class="btn btn-success"><a href="add">Add Restaurant</a></button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered verticle-middle table-responsive-sm" id="table_id">
              <thead>
                <tr>
                  <th scope="col">Logo</th>
                  <th scope="col">Restaurant Name</th>
                  <th scope="col">Package Name</th>
                  <th scope="col">Company Name</th>
                  <th scope="col">Business Number</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
     $(document).ready(function(){
        $('#table_id').DataTable({
          'ajax':'show',
          'columns': [
                      {
                          'target' : -1,
                        'mData' : 'action',
                        'ilter' : false,
                        'bSortable' : false,
                        'mRender':function(data,type,row){
                          return "<img alt='logo' height='60px' width='80px' src='{{config('app.baseURL')}}/storage/app/"+row.logo+"'/>";
                        }
                      },
                      {'mData':'restaurant_name'},
                      {'mData':'package_name'},
                      {'mData':'company_name'},
                      {'mData':'business_number'},                 
                      {
                        'target' : -1,
                        'mData' : 'action',
                        'ilter' : false,
                        'bSortable' : false,
                        'mRender':function(data,type,row){

                            if (row.is_active === 1) {

                              return "<a href={{config('app.baseURL')}}/admin/restaurant/update/" +row.restaurant_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a> <a  href={{config('app.baseURL')}}/admin/restaurant/status/"+ row.restaurant_id+"><span><button type='submit' class='btn btn-danger'>Inactivate</button></span></a>";

                            }else{

                                return "<a  href={{config('app.baseURL')}}/admin/restaurant/update/"+row.restaurant_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a> <a class=datatable-left-link href={{config('app.baseURL')}}/admin/restaurant/status/" +row.restaurant_id+"><span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
                            }
                          
                        }
                        }
                        ]
        });
  });
</script>
@endsection





