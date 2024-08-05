@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">
<div class="container mt-1">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Printer</h4>
          <button type="button" class="btn btn-success datatableadd"><a href="add">Add Printer</a></button>         
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered verticle-middle table-responsive-sm" id="table_id">
              <thead>
                <tr>
                  <th scope="col">Printer Id</th>
                  <th scope="col">Printer IP</th>
                  <th scope="col">Business</th>
                  <th scope="col">Branch</th>
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
</div>
<script type="text/javascript">
  $(document).ready(function(){
        $('#table_id').DataTable({
          'ajax':'show',
          'columns': [
                      {'mData':'printer_id'},                    
                      {'mData':'printer_ip'},                    
                      {'mData':'business.business_name'},
                      {'mData':'branch.branch_name'},                    
                      {
                        'target' : -1,
                        'mData' : 'action',
                        'ilter' : false,
                        'bSortable' : false,
                        'mRender':function(data,type,row){

                            if (row.is_active === 1) {

                              return "<a href={{config('app.baseURL')}}/admin/printer/update/"+row.printer_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a> <a  href={{config('app.baseURL')}}/admin/printer/status/"+row.printer_id+"><span><button type='submit' class='btn btn-danger'>Inactivate</button></span></a>";

                            }else{

                                return "<a  href={{config('app.baseURL')}}/admin/printer/update/"+row.printer_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a> <a class=datatable-left-link href={{config('app.baseURL')}}/admin/printer/status/"+row.printer_id+"><span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
                            }
                          
                        }
                        }
                        ]
        });
  });
</script>
@endsection


