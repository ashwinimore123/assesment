@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container-fluid mt-1">
  <div class="row page-titles mx-5">
   <div class="col-xl-5 col-lg-12">
     <div class="card">
       <div class="card-header">
         <h4 class="card-title">ADD NEW Table </h4>
          </div>
            <div class="card-body">
              <div class="basic-form">
                <form action="{{url('admin/table/addtable')}}"method="post">
                   @csrf
                     <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>Table section name</label>
                        <select class="form-control" name = "table_section" id="tax_dropdown">
                          <option>Select section name </option>
                          @foreach($section as $sections)
                          <option value="{{$sections->section_id}}">
                            {{$sections->section_name}}
                          </option>
                           @endforeach
                        </select>
                        <span style="color:red;">@error('table_section') {{$message}} @enderror</span>
                      </div>
                    </div>

                <div class="form-row">
                        <div class="form-group col-md-12">
                      <label>Table Name</label>
                    <input type="text" class="form-control"  name="table_name" placeholder="please enter your table name" >
                      @if ($errors->has('table_name'))
                    <span class="text-danger">{{ $errors->first('table_name') }}</span>
                @endif  
                </div>
              </div>


                <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Table type</label>
                  <select class="form-control" name = "table_type" id="tax_dropdown">
                    <option>Select table_type</option>
                    <option value="rounded-circle">
                      rounded-circle
                    </option>
                      <option value="circle">
                        circle
                    </option>
                      <option value="combo">
                        combo
                    </option>
                 
                  </select>
                  <span style="color:red;">@error('table_type') {{$message}} @enderror</span>
                </div>
              </div>

    


                <div class="form-row">
                        <div class="form-group col-md-12">
                      <label>Table capacity</label>
        <input type="text" class="form-control"  name="table_capacity" placeholder="please enter your Tablecapacity" >
                      @if ($errors->has('table_capacity'))
                    <span class="text-danger">{{ $errors->first('table_capacity') }}</span>
                @endif  
                </div>
              </div>


                <div class="form-row">
                        <div class="form-group col-md-12">
                      <label>Table mergcolor</label>
                    <input type="text" class="form-control"  name="merg_color" placeholder="please enter your Tablemergcolor" >
                      @if ($errors->has('merg_color'))
                    <span class="text-danger">{{ $errors->first('merg_color') }}</span>
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

