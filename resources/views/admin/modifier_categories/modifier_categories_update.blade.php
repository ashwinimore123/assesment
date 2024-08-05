@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container-fluid mt-1">
  <div class="row page-titles mx-5">
   <div class="col-xl-5 col-lg-12">
     <div class="card" >
       <div class="card-header">
         <h4 class="card-title">UPDATE MODIFIER CATEGORIES </h4>
          </div>
            <div class="card-body">
              <div class="basic-form">
                <form action="{{config('app.baseURL')}}/admin/modifier_categories_update/{{$modifier_category->modifier_category_id}}"method="post">      
                   @csrf

                   <div class="form-row">
                    <div class="form-group col-md-12">
                    <label>Modifier Category Name</label>
                    <input type="text" class="form-control"  name="modifier_category_name" placeholder="please enter  modifier category name" value="{{$modifier_category->modifier_category_name}}" >
                      @if ($errors->has('modifier_category_name'))
                    <span class="text-danger">{{ $errors->first('modifier_category_name') }}</span>
                      @endif  
                     </div>
                     </div>
                     
                    
                     <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>Product Id</label>
                        <select class="form-control" name = "produc_id" id="produc_id">
                          <option>Select product name </option>
                            @foreach($product as $products)
                          <option value="{{$products->product_id}}">
                            {{$products->product_name}}
                          </option>
                          @endforeach
                        </select>
                        <span style="color:red;">@error('produc_id') {{$message}} @enderror</span>
                      </div>
                    </div>


                   <div class="form-row">
                    <div class="form-group col-md-12">
                   <label>Is multiple</label>
                   <input type="text" class="form-control"  name="is_multiple" placeholder="please enter your is_multiple" value="{{$modifier_category->is_multiple}}" >
                   @if ($errors->has('is_multiple'))
                   <span class="text-danger">{{ $errors->first('is_multiple') }}</span>
                   @endif  
                  </div>
                  </div>

             <button type="submit" id="toastr-success-bottom-right" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection

