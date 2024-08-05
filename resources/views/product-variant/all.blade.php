@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
 <div class="container mt-1">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Product Variant</h4>
          <button type="button" class="btn btn-success datatableadd"><a href="add">Add Product Variant</a></button>         
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered verticle-middle table-responsive-sm" id="table_id">
              <thead>
                <tr>
                  <th scope="col">Product Variant id</th>
                  <th scope="col">Product Variant name</th>
                  <th scope="col">Variant Name</th>
                  
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
                      {'mData':'product_variant_id'},                    
                      {'mData':'product_variant_name'},                    
                      {'mData':'variant.variant_name'},                    
                      

                      {
                        'target' : -1,
                        'mData' : 'action',
                        'ilter' : false,
                        'bSortable' : false,
                        'mRender':function(data,type,row){

                            if (row.is_active === 1) {

                              return "<a href={{config('app.baseURL')}}/admin/product-variant/update/"+row.product_variant_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a> <a  href={{config('app.baseURL')}}/admin/product-variant/status/"+row.product_variant_id+"><span><button type='submit' class='btn btn-danger'>Inactivate</button></span></a>";

                            }else{

                                return "<a  href={{config('app.baseURL')}}/admin/product-variant/update/"+row.product_variant_id+"><span><button type='submit' class='btn btn-primary'>Edit</button></span></a> <a class=datatable-left-link href={{config('app.baseURL')}}/admin/product-variant/status/"+row.product_variant_id+"><span><button type='submit' class='btn btn-success'>Activate</button></span></a>";
                            }
                          
                        }
                        }
                        ]
        });
  });
</script>



@stop

<!--

  return "<a class='btn btn-info' href='admin/Business/update/"+row.id+"'>Edit</a> <a class='btn btn-danger' href='delete/"+row.id+"'>Delete</a>";

-->

