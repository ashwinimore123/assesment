@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Variant</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="{{config('app.baseURL')}}/admin/product/update/{{$product->product_id}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group col-md-12">
                  <label>Product Name</label>
                  <input type="text" name="product_name" class="form-control" value="{{old('product_name',$product->product_name)}}" placeholder="Enter Product Name" >
                  <span style="color:red;">@error('product_name') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Color</label>
                  <input type="text" name="color" class="form-control" value="{{old('color',$product->color)}}" placeholder="Enter Color Name" >
                  <span style="color:red;">@error('color') {{$message}} @enderror</span>
                </div>


                <div class="form-group col-md-12">
                  <label>Price</label>
                  <input type="text"  id="price_id"name="price" class="form-control" value="{{old('price',$product->price)}}" placeholder="Enter Price 0.00" >
                  <span style="color:red;">@error('price') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Take Away Price</label>
                  <input type="text" name="take_away_price" class="form-control" value="{{old('take_away_price',$product->take_away_price)}}" placeholder="Enter Take Away Price 0.00" >
                  <span style="color:red;">@error('take_away_price') {{$message}} @enderror</span>
                </div>

                


                <div class="form-group col-md-12">
                  <label>Tax</label>
                  <select class="form-control" name = "tax_id" id="tax_dropdown">
                    <option>Select Tax</option>
                    @foreach($taxes as $tax)
                    <option value="{{$tax->tax_id}}">
                      {{$tax->tax_name}}
                    </option>
                    @endforeach
                  </select>
                  <span style="color:red;">@error('tax_id') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-12">
                  <label>Tax Setting</label>
                  <input type="text" name="tax_setting" class="form-control" value="{{old('tax_setting',$product->tax_setting)}}" placeholder="Enter Tax Setting">
                  <span style="color:red;">@error('tax_setting') {{$message}} @enderror</span>
                </div>
                   <div class="form-group col-md-12">
                    <label>Category</label>
                    <select class="form-control choose_category" multiple="multiple" name="category_id[]" id="category_dropdown">
                      
                      @foreach($category as $category)
                        <option value="{{$category->category_id}}">
                          {{$category->category_name}}
                        </option>
                      @endforeach
                    </select>
                    <span style="color:red;">@error('category_id') {{$message}} @enderror</span>
                </div>


<!--============================is_restaurant 1 Start=======================-->

                @if($business->is_restaurant==1)

                <div class="form-group col-md-12">
                  <label>Kitchen</label>
                  <select class="form-control" name="kitchen_section_id" id="kitchen_dropdown">
                      <option>Select Kitchen</option>
                      @foreach($kitchen as $kitchen)
                      <option value="{{$kitchen->kitchen_section_id}}">
                        {{$kitchen->kitchen_section_name}}
                      </option>
                      @endforeach
                  </select>
                  <span style="color:red;">@error('kitchen_section_id') {{$message}} @enderror</span>
                </div>

                @endif
<!--============================is_restaurant 1 End=======================-->
<!--=============================Is restaurant is 0 =====================-->
                
                  @if($business->is_restaurant==0)
                 <div class="form-group col-md-12">
                  <label>SKU Name</label>
                  <input type="text"id="sku_id"name="sku_name" class="form-control" value="{{old('sku_name')}}" placeholder="Enter SKU Name" >
                  <span style="color:red;">@error('sku_name') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Barcode</label>
                  <input type="text" id="barcode_id"  name="barcode" class="form-control" value="{{old('barcode')}}" placeholder="Enter Barcode">
                  <span style="color:red;">@error('barcode') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Quantity</label>
                  <input type="text" id="quantity_id" name="quantity" class="form-control" value="{{old('quantity')}}" placeholder="Enter Product Quantity" >
                  <span style="color:red;">@error('quantity') {{$message}} @enderror</span>
                </div>
                

          <!-- FOR CHANGE VARIANT BUTTON  -->


<!-- all ready exist data  -->

  <div class="col-md-12 card-block " style="clear: both;" id="variant_table1">
                    <div class="mobile-responsive">
                      <table class="table table-responsive">
                        <thead>
                    <th>Allready exist variant  data You can delete it...... </th>
                          <tr>
                            <th>Variant</th>
                            <th>Price</th>
                            <th>Sku Name</th>
                            <th>Quantity</th>
                            <th>Barcode</th>
                            <th>Action</th>
                          </tr>
                          <tbody id="variant_values_old">
                            @foreach($sku as $sku_value)
                              <tr value="{{$sku_value->sku_id}}" name="sku_id">
            <td>{{$sku_value->parent_product_variant->product_variant_name}}:
            {{$sku_value->child_product_variant->product_variant_name}}</td>
                  
                                <td>{{$sku_value->sku_price}}</td>
                                <td>{{$sku_value->sku_name}}</td>
                                <td>{{$sku_value->quantity}}</td>
                                <td>{{$sku_value->barcode}}</td>
  <td><a href="{{config('app.baseURL')}}/product/getSkuVal/{{$sku_value->sku_id}}"><button class='delete_variant_old btn btn-danger'><i class='fa fa-trash'></i></button></a></td>
                              </tr>
                            @endforeach
                          </tbody>
                        </thead>
                      </table>
                    </div>
                  </div>



                  <div class="form-group">
                  <div class="col-md-12">
                      <button id="add-parent-variant" class="btn btn-link  pull-right" type="button">Change variant</button>
                      
                      <p class="text-muted" style=""> Add variants if this product comes in multiple versions, like different sizes or colors.</p>
                    </div>
                </div>




                  <!-- FOR PARENT VARIANT   -->
           
                  <div class="form-group parent_variant_values">
                    <div class="row">
                    <div class="col-md-4"style="left: 15px;">
                        <label>Parent Variant</label>
                        <select class="form-control" name="parent_variant_id" id="parent_variant_dropdown">
                        <option value="">Select Parent Variant</option>
                        @foreach($parent_variant as $parent_variant)
                          <option value="{{$parent_variant->variant_id}}">
                            {{$parent_variant->variant_name}}
                          </option>
                        @endforeach
                        </select>
                        <span style="color:red;">@error('parent_variant_id') {{$message}} @enderror</span>
                    </div>

                      <!-- FOR  Parent Product Variant -->                    

                    <div class="col-md-8">
                      <label>Parent Product Variant</label><br/>
                      <div class="form-control">
                      <input style="border: 0 !important;" type="text" placeholder="Enter Parent Product Variant" class="tm-input tm-input-info" id="parent" data-role="tagsinput"/>
                      </div>
                    </div>
                  </div>                   
                </div>



<!-- FOR CHANGE CHILLD VARIANT 
 -->
  <div class=" col-md-12">
      <div class="row">
                    <div class=" col-md-12">
                    <div style="clear: both;"> 
                      <button id="add-child-variant" class="btn btn-link pull-right" type="button">Change Child Variant</button>

                      <button  id="cancel-variant" class="btn btn-link  pull-right" type="button">Cancel</button>
                      </div>
                    </div>
</div>


    <div class="form-group child_variant_values">
                    <div class="row">
                    <div class=" col-md-4" style="">
                        <label>Child Variant</label>
                        <select class="form-control" name="child_variant_id" id="child_variant_dropdown">
                        <option value="">Select Child Variant</option>
                        @foreach($child_variant as $child_variant)
                          <option style="width: 335px;"value="{{$child_variant->variant_id}}">
                            {{$child_variant->variant_name}}
                          </option>
                        @endforeach
                        </select>
                        <span style="color:red;">@error('child_variant_id') {{$message}} @enderror</span>
                    </div>




                    <div class="col-md-8">
                      <label>Child Product Variant</label><br/>
                      <div class="form-control">
                      <input style="border: 0;" data-role="tagsinput" type="text"  placeholder="Enter Child Product Variant" id="child" class="tm-input tm-input-info" data-role="tagsinput"/>
                      </div>
                    </div>

                  </div>
            </div>


                <div class="col-md-12 card-block " style="clear: both;" id="variant_table">
                    <div class="mobile-responsive">
                      <table class="table table-responsive">
                        <thead>
                          <tr>
                            <th>Variant</th>
                            <th>Price</th>
                            <th>Sku Name</th>
                            <th>Quantity</th>
                            <th>Barcode</th>
                            <th>Action</th>
                          </tr>
                          <tbody id="variant_values">
        
                          </tbody>
                        </thead>
                      </table>
                    </div>
                  </div>
           @endif        
<!--========================================End Is_restaurant========================-->
               
               <div class="form-group col-md-12">                     
                    <div class="custom-control custom-checkbox ml-1">
                        <input type="checkbox" class="custom-control-input" value="1" name="is_stock" id="basic_checkbox_1">
                        <label class="custom-control-label" for="basic_checkbox_1">Stock</label><br>
                    </div>
                </div>


                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Update Product</button>
                </div>
               </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript">
//Tax data
var new_val_tax = '{{$product->tax_id}}';
var old_val_tax = "{{old('tax_id')}}";

if(old_val_tax!=""){
      $('#tax_dropdown option[value='+old_val_tax+']').prop('selected', true);
}else{
      $('#tax_dropdown option[value='+new_val_tax+']').prop('selected', true);
}

//Kitchen data
var new_val_kitchen = '{{$product->kitchen_section_id}}';
var old_val_kitchen = "{{old('kitchen_section_id')}}";

if(old_val_kitchen!=""){
      $('#kitchen_dropdown option[value='+old_val_kitchen+']').prop('selected', true);
}else{
      $('#kitchen_dropdown option[value='+new_val_kitchen+']').prop('selected', true);
}
//
var new_val_parent_variant = '{{$product->parent_variant_id}}';
var old_val_parent_variant = "{{old('parent_variant_id')}}";
if(old_val_parent_variant!=""){
      $('#parent_variant_dropdown option[value='+old_val_parent_variant+']').prop('selected', true);
}else{
      $('#parent_variant_dropdown option[value='+new_val_parent_variant+']').prop('selected', true);
}
//child variant id
var new_val_child_variant = '{{$product->child_variant_id}}';
var old_val_child_variant = "{{old('child_variant_id')}}";

if(old_val_child_variant!=""){
      $('#child_variant_dropdown option[value='+old_val_child_variant+']').prop('selected', true);
}else{
      $('#child_variant_dropdown option[value='+new_val_child_variant+']').prop('selected', true);
}

if('{{$product->is_stock}}'!=0){
$('#basic_checkbox_1').prop('checked',true);
}
//Category Multiple Selection
      var category_val=<?php echo json_encode($product_category);?>;
        $.each(category_val,function(index,item){         
      $(".choose_category option[value="+item.category_id+"]").prop('selected',true);
        });    
</script>


<script type="text/javascript">
  function showVariant(parent_variant_value,child_variant_value){
      var parent_variant_value = parent_variant_value.replace(/ /g,'');
      var child_variant_value = child_variant_value.replace(/ /g,'');
      
      var parent_variant_value = parent_variant_value.split(",");
      var child_variant_value = child_variant_value.split(",");

      console.log(parent_variant_value);
      console.log(child_variant_value);

       var my_price=$("#price_id").val();
       if(my_price==""){
         my_price=0;
    }

    var quantity=$("#quantity_id").val();
     var sku=$("#sku_id").val();
     var barcode=$("#barcode_id").val();
    $("#variant_values").html("");

    if(child_variant_value=="" && parent_variant_value!=""){
      $.each(parent_variant_value, function(index, item){
        $("#variant_values").append("<tr><td>"+item+"<input name='parent_variant_values[]' class='form-control' value='"+item+"' type='hidden'/></td><td><input class='form-control number_type' name='variant_my_prices[]' type='text' value='"+my_price+"'/></td><td><input name='variant_skues[]' value='"+sku+"' class='form-control' type='text'/></td><td><input name='variant_skuess[]' value='"+quantity+"' class='form-control' type='text'/></td><td><input name='variant_barcodes[a]' value='"+barcode+"' class='form-control' type='text'/></td><td><button class='delete_variant btn btn-danger'><i class='fa fa-trash'></i></button></td></tr>");

      }); 
    }else if(child_variant_value!="" && parent_variant_value==""){
      $.each(child_variant_value, function(index, item){
        $("#variant_values").append("<tr><td>"+item+"<input name='parent_variant_values[]' class='form-control' value='' type='hidden'/><input class='form-control' name='child_variant_values[]' value='"+item+"' type='hidden'/></td><td><input class='form-control number_type' name='variant_my_prices[]' type='number' value='"+my_price+"' /></td><td><input name='variant_skues[]' value='"+sku+"' type='text' class='form-control'/><td><input name='variant_skuess[]' value='"+quantity+"' class='form-control' type='text'/></td><td><input name='variant_barcodes[]' value='"+barcode+"' class='form-control' type='text'/></td><td><button class='delete_variant btn btn-danger'><i class='fa fa-trash'></i></button></td></tr>");
      });
    }else if(child_variant_value!="" && parent_variant_value!=""){
      $.each(parent_variant_value, function(index, parentItem){
        $.each(child_variant_value, function(index, childItem){
          $("#variant_values").append("<tr><td>"+parentItem+"<input class='form-control' name='parent_variant_values[]' value='"+parentItem+"' type='hidden'/> : "+childItem+"<input class='form-control' name='child_variant_values[]' value='"+childItem+"' type='hidden'/></td><td><input  class='form-control number_type' name='variant_my_prices[]' type='number' value='"+my_price+"'/></td><td><input name='variant_skues[]' value='"+sku+"' class='form-control' type='text'/></td><td><input name='variant_skuess[]' value='"+quantity+"' class='form-control' type='text'/><td><input name='variant_barcodes[]' value='"+barcode+"' class='form-control' type='text'/></td><td><button class='delete_variant btn btn-danger'><i class='fa fa-trash'></i></button></td></tr>");
        });
      });
    }
}

//=====================show variant end==================================

$("#variant_values").on("click",".delete_variant",function(){
    $(this).parent().parent().remove();
  });

$("#variant_values_old").on("click",".delete_variant_old",function(){
    $(this).parent().parent().remove();
  });

$("#variant_values").on("focusout",".number_type",function(){
    value=$(this).val();
    if(value==""){
      $(this).val(0);
    }
  });

$('#parent,#child').on('itemAdded', function(event) {
   var parent_variant_value = $('#parent').val();
   var child_variant_value = $('#child').val();

   console.log(parent_variant_value);
   console.log(child_variant_value);
   showVariant(parent_variant_value,child_variant_value);
});
  

//Hide the Variant Data
$('.parent_variant_values').hide();
$('.child_variant_values').hide();
$(document).ready(function(){
  $('#add-parent-variant').click(function(){
    $('.parent_variant_values').show();
      $('.table-responsive').show();
  });
  $('#add-child-variant').click(function(){
    $('.child_variant_values').show();
      $('.table-responsive').show();
  });
});


$('#variant_table').hide();
$(document).ready(function(){
  $('#add-parent-variant').click(function(){
    $('#variant_table').show();
    $('.table-responsive').show();
  });
});


$(document).ready(function(){
  $('#cancel-variant').click(function(){
     $('.child_variant_values').hide();
      $('.parent_variant_values').hide();
      $('.table-responsive').hide();
  });
});
</script>
@endsection