@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container-fluid">
  <div class="row page-titles mx-5">
   <div class="col-xl-5 col-lg-12">
     <div class="card" >
       <div class="card-header">
         <h4 class="card-title">Insert Currency</h4>
          </div>
            <div class="card-body">
              <div class="basic-form">
                <form action="{{config('app.baseURL')}}/admin/currency/add"method="post">
                   @csrf
                    <div class="form-row">
                        <div class="form-group col-md-8">
                      <label><STRONG>Currency Name</STRONG></label>
                    <input type="text" class="form-control"  name="currency_name" placeholder="please enter Curruncy name">
                      @if ($errors->has('currency_name'))
                    <span class="text-danger">{{ $errors->first('currency_name')}}</span>
                @endif

                  <label><STRONG>Currency Symbole</STRONG></label>
                    <input type="text" class="form-control"  name="currency_symbol" placeholder="please enter currency_symbol" >
                      @if ($errors->has('currency_symbol'))
                    <span class="text-danger">{{ $errors->first('currency_symbol')}}</span>
                @endif
               </div>
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
  <div>  
@endsection
