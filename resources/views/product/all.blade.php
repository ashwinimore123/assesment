@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">
<div class="row">  
 <div class="container mt-1">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Product</h4>
          <button type="button" style="background: white; border-color: black;" class="btn btn-success"><a href="add">Add Product</a></button>         
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered verticle-middle table-responsive-sm" id="table_id">

              <thead>
                <tr>
                  <th scope="col">Product Name</th>
                  <th scope="col">Tax</th>
                  <th scope="col">Business</th>
                  <th scope="col">branch</th>
                  <th scope="col">Is Restaurant</th>
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
                      {'mData':'product_name'},                    
                      {'mData':'tax.tax_name'},                    
                      {'mData':'business.business_name'},                    
                      {'mData':'branch.branch_name'},                    
                      {
                        'target':-1,
                        'mData' : 'is Restaurant',
                        'ilter' : false,
                        'bSortable' : false,
                        'mRender':function(data,type,row){
                          if (row.is_restaurant===0) {
                            return "<p>No</p>";
                          }else{
                            return "<p>Yes</p>";
                          }
                        }
                      },                    
                      
                      {
                        'target' : -1,
                        'mData' : 'action',
                        'ilter' : false,
                        'bSortable' : false,
                        'mRender':function(data,type,row){

                            if (row.is_active === 1) {

                              return "<a href={{config('app.baseURL')}}/admin/product/update/"+row.product_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a> <a  href={{config('app.baseURL')}}/admin/product/status/"+row.product_id+"><span><button type='submit' class='btn btn-danger'>Inactivate</button></span></a>";

                            }else{

                                return "<a  href={{config('app.baseURL')}}/admin/product/update/"+row.product_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a> <a class=datatable-left-link href={{config('app.baseURL')}}/admin/product/status/"+row.product_id+"><span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
                            }
                          
                        }
                        }
                        ]
        });
  });
</script>

@endsection