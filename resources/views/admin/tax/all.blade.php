@extends('layouts.app')
@section('content')
<style type="text/css">
  #span_tax{
    color:black !important;
  }
</style>
<div class="dtatablewitdh ">  
 <div class="container mt-1">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Taxes</h4>
          <button type="button" class="btn btn-success datatableadd"><a href="add">Add Taxes</a></button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered verticle-middle table-responsive-sm" id="table_id">
              <thead>
                <tr>
                  <th scope="col">Tax Name</th>
                  <th scope="col">Tax Percentage</th>
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
                      {'mData':'tax_name'},
                      {'mData':'tax_percentage'},
                      {
                        'target' : -1,
                        'mData' : 'action',
                        'ilter' : false,
                        'bSortable' : false,
                        'mRender':function(data,type,row){

                            if (row.is_active === 1) {

                              return "<a href={{config('app.baseURL')}}/admin/tax/update/" +row.tax_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a> <a  href={{config('app.baseURL')}}/admin/tax/inactive/"+ row.tax_id+"><span><button type='submit' class='btn btn-danger'>Inactivate</button></span></a>";

                            }else{

                                return "<a  href={{config('app.baseURL')}}/admin/tax/update/"+ row.tax_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a> <a class=datatable-left-link href={{config('app.baseURL')}}/admin/tax/active/" + row.tax_id+"><span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
                            }
                          
                        }
                        }
                        ]
        });
  });
</script>
@endsection