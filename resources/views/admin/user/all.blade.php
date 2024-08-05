@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">
   <div class="container mt-1">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Users</h4>
          <button type="button" class="btn btn-success datatableadd"><a href="add">Add User</a></button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered verticle-middle table-responsive-sm" id="table_id">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Pin</th>
                  <th scope="col">Contact No.</th>
                  <th scope="col">business</th>
                  <th scope="col">role</th>
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
      $('#user').addClass('active');
        $('#table_id').DataTable({
          'ajax':'show',
          'columns': [     
                      {'mData':'id'},                    
                      {'mData':'name'},                    
                      {'mData':'email'},                    
                      {'mData':'pin'},                               
                      {'mData':'contact_number'},                    
                      {'mData':'business.business_name'},                            
                      {'mData':'role.role_name'},                                     
                      {
                        'target' : -1,
                        'mData' : 'action',
                        'ilter' : false,
                        'bSortable' : false,
                        'mRender':function(data,type,row){

                            if (row.is_active === 1) {

                              return "<a href={{config('app.baseURL')}}/admin/user/update/" +row.id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a> <a  href={{config('app.baseURL')}}/admin/user/status/"+ row.id+"><span><button type='submit' class='btn btn-danger'>Inactivate</button></span></a>";

                            }else{

                                return "<a  href={{config('app.baseURL')}}/admin/user/update/"+row.id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a> <a class=datatable-left-link href={{config('app.baseURL')}}/admin/user/status/" + row.id+"><span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
                            }
                          
                        }
                        }
                        ]
        });
  });
</script>
@endsection


