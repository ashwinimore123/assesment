@extends('layouts.app')
@section('content')  
<div class="dtatablewitdh">  
<div class="container mt-1">
 <div class="row ">
   <div class="col-xl-9 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Category</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="{{config('app.baseURL')}}/admin/category/update/{{$category->category_id}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-row">

                <div class="form-group col-md-12">
                  <label>Category Name</label>
                  <input type="text" name="category_name" class="form-control" placeholder="Enter Category" value="{{old('category_name',$category->category_name)}}">
                  <span style="color:red;">@error('category_name'){{$message}}@enderror</span>
                </div>

                <div class="form-group col-md-12">
                    <label>Color</label>
                    <input type="text" name="color" class="form-control" placeholder="Enter color" value="{{old('color',$category->color)}}">
                    <span style="color:red;">@error('color') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Priority</label>
                  <input type="text" name="priority" class="form-control" placeholder="Enter priority" value="{{old('priority',$category->priority)}}">
                  <span style="color:red;">@error('priority'){{$message}}@enderror</span>
                </div>

                <button type="submit" id="toastr-success-bottom-right" class="btn btn-primary">Update Category</button>

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
  
</script>
@endsection

