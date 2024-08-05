@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container-fluid mt-1">
  <div class="row page-titles mx-5">
   <div class="col-xl-5 col-lg-12">
     <div class="card" >
       <div class="card-header">
         <h4 class="card-title">ADD NEW MODIFIER </h4>
          </div>
            <div class="card-body">
              <div class="basic-form">
                <form action="{{url('admin/addmodifier')}}"method="post">
                   @csrf
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>Modifier Categoery</label>
                        <select class="form-control" name="modfier_category_name">
                          <option>Select product name </option>
                            @foreach($modifier_categories as $modifier_category)
                          <option value="{{$modifier_category->modifier_category_id}}">
                            {{$modifier_category->modifier_category_name}}
                          </option>
                          @endforeach
                        </select>
                        <span style="color:red;">@error('modfier_category_name') {{$message}} @enderror</span>
                      </div>
                    </div>


                    <div class="form-row">
                    <div class="form-group col-md-12">
                    <label>price </label>
                    <input type="text" class="form-control" name="price" placeholder="please enter  modifier category name" >
                      @if ($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                      @endif  
                     </div>
                     </div>


                   <div class="form-row">
                    <div class="form-group col-md-12">
                   <label> take_away_price </label>
                   <input type="text" class="form-control"  name="take_away_price" placeholder="please enter your is_multiple" >
                   @if ($errors->has('take_away_price'))
                   <span class="text-danger">{{ $errors->first('take_away_price')}}</span>
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

