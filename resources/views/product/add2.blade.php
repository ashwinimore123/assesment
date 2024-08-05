@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>


<style type="text/css">
      .container i {
    margin-left:;
    cursor: pointer;
  }
  .tm-input{margin-bottom:5px;vertical-align:middle;}

</style>


  <div class="content-body">
<!-- row -->           
<div class="container-fluid">

  <div class="row">
      <div class="col-xl-9 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Product</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="add" method="POST">
              @csrf
              
                <div class="form-group col-md-12">
                  <label>Product Name</label>
                  <input type="text" name="product_name" class="form-control" value="{{old('product_name')}}" placeholder="Enter Product Name" >
                  <span style="color:red;">@error('product_name') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Color</label>
                  <input type="text" name="color" class="form-control" value="{{old('color')}}" placeholder="Enter color" >
                  <span style="color:red;">@error('color') {{$message}} @enderror</span>
                </div>

                <!-- <div class="form-group col-md-12">
                  <label>Image</label>
                  <input type="file" name="image" accept="image/*" class="form-control">
                  <span style="color:red;">@error('product_name') {{$message}} @enderror</span>
                </div> -->

                <div class="form-group col-md-12">
                  <label>image</label>
                  <input type="file" name="image" class="form-control">
                  <span style="color:red;">@error('image'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Price</label>
                  <input type="text" name="price" class="form-control" value="{{old('price')}}" placeholder="Enter Price 0.00" >
                  <span style="color:red;">@error('price') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Take Away Price</label>
                  <input type="text" name="take_away_price" class="form-control" value="{{old('take_away_price')}}" placeholder="Enter Take Away Price 0.00" >
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
                  <input type="text" name="tax_setting" class="form-control" value="{{old('tax_setting')}}" placeholder="Enter Tax Setting">
                  <span style="color:red;">@error('tax_setting') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                    <label>Category</label>
                    <select class="form-control" multiple="multiple" name="category_id[]" id="category_dropdown">
                      
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
                  <label>Parent Variant</label><br/>
                  <div class="form-control">
                  <input style="border: 0;" type="text" name="parent_variant_id" placeholder="Enter Parent variant" class="tm-input tm-input-info" id="parent" data-role="tagsinput"/>
                  </div>
                </div>
                
                <div class="form-group col-md-12">
                  <label>Child Variant</label><br/>
                  <div class="form-control">
                  <input style="border: 0;" data-role="tagsinput" type="text" name="child_variant_id" placeholder="Enter Child variant" class="tm-input tm-input-info" data-role="tagsinput"/>
                  </div>
                </div>
                
                

                <!--=================SKU data===================-->
                <div class="form-group col-md-12">
                    <label>Parent Product Variant</label>
                    <select class="form-control" name="parent_product_variant_id" id="parent_product_variant_dropdown">
                    <option>Select Parent Product Variant</option>
                    @foreach($parent_product_variant as $parent_product_variant)
                      <option value="{{$parent_product_variant->product_variant_id}}">
                        {{$parent_product_variant->product_variant_name}}
                      </option>
                    @endforeach
                    </select>
                    <span style="color:red;">@error('parent_product_variant_id') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                    <label>Child Product Variant</label>
                    <select class="form-control" name="child_product_variant_id" id="child_product_variant_dropdown">
                    <option>Select Child Product Variant</option>
                    @foreach($child_product_variant as $child_product_variant)
                      <option value="{{$child_product_variant->product_variant_id}}">
                        {{$parent_product_variant->product_variant_name}}
                      </option>
                    @endforeach
                    </select>
                    <span style="color:red;">@error('child_product_variant_id') {{$message}} @enderror</span>
                </div>


                <div class="form-group col-md-12">
                  <label>Sku Price</label>
                  <input type="text" name="sku_price" class="form-control" value="{{old('sku_price')}}" placeholder="Enter price" >
                  <span style="color:red;">@error('sku_price') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Discount</label>
                  <input type="text" name="discount" class="form-control" value="{{old('discount')}}" placeholder="Enter Discount" >
                  <span style="color:red;">@error('discount') {{$message}} @enderror</span>
                </div>


                <div class="form-group col-md-12">
                  <label>Product Weight</label>
                  <input type="text" name="product_weight" class="form-control" value="{{old('product_weight')}}" placeholder="Enter Product Weight" >
                  <span style="color:red;">@error('product_weight') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Product Unit</label>
                  <input type="text" name="product_unit" class="form-control" value="{{old('product_unit')}}" placeholder="Enter Product Unit" >
                  <span style="color:red;">@error('product_unit') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Quantity</label>
                  <input type="text" name="quantity" class="form-control" value="{{old('quantity')}}" placeholder="Enter Product Quantity" >
                  <span style="color:red;">@error('quantity') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>SKU Name</label>
                  <input type="text" name="sku_name" class="form-control" value="{{old('sku_name')}}" placeholder="Enter SKU Name" >
                  <span style="color:red;">@error('sku_name') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Barcode</label>
                  <input type="text" name="barcode" class="form-control" value="{{old('barcode')}}" placeholder="Enter Barcode">
                  <span style="color:red;">@error('barcode') {{$message}} @enderror</span>
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
                      <button type="submit" class="btn btn-primary">Add Product Variant</button>
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
  <script type="text/javascript">
    
 $(".tm-input").tagsManager();

$(document).ready(function(){  
  
});



   



    



$("#parent_variant_dropdown option[value='{{old('parent_variant_id')}}']").prop('selected',true);
$("#child_variant_dropdown option[value='{{old('child_variant_id')}}']").prop('selected',true);



</script>

@endsection