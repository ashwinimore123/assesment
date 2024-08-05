@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add User</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="add" method="POST">
              @csrf
              <div class="form-row">

                <div class="form-group col-md-12">
                  <label>Business</label>
                  <select class="form-control" name="business_id" id="state-dropdown">
                      <option value="">Select Business</option>
                      @foreach ($business as $business) 
                      <option value="{{$business->business_id}}">
                      {{$business->business_name}}
                      </option>
                      @endforeach
                  <span style="color:red;">@error('business_id') {{$message}} @enderror</span>
                  </select>
                </div>


                 <div class="form-group col-md-12">
                  <label>Branch</label>
                  <select class="form-control choose_branch" multiple="multiple" name="branch_id[]">
                      @foreach ($branches as $branch)
                      <option value="{{$branch->branch_id}}">
                      {{$branch->branch_name}}
                      </option>
                      @endforeach

                  <span style="color:red;">@error('branch_id') {{$message}} @enderror</span>
                  </select>
                </div>

                <div class="form-group col-md-12">
                  <label>Role</label>
                  <select class="form-control" name="role_id" id="role_dropdown">
                    <option>Select Role</option>
                    @foreach($role as $role)
                      <option value="{{$role->role_id}}">
                        {{$role->role_name}}
                      </option>                  
                    @endforeach
                  </select>
                  <span style="color:red;">@error('role_id') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Enter name" >
                  <span style="color:red;">@error('name') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="Enter email" >
                  <span style="color:red;">@error('email') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12 container">
                  <label>Password</label>
                  
                  <input type="password" id="password" name="password" class=" form-control"  value="{{old('password')}}" placeholder="Enter Password" data-toggle="password">



                  <input type="checkbox" id="togglePassword" name="" class=""> show

              
                  <span style="color:red;">@error('password') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Pin</label>
                  <input type="number" name="pin" class="form-control" value="{{old('pin')}}" placeholder="Enter Pin" >
                  <span style="color:red;">@error('pin') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Contact Number</label>
                  <input type="number" name="contact_number" class="form-control" value="{{old('contact_number')}}" placeholder="Enter Contact" >
                  <span style="color:red;">@error('contact_number') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Add User</button>
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

const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
        
    togglePassword.addEventListener('click', function (e) {
      // toggle the type attribute
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // toggle the eye slash icon
      this.classList.toggle('');
});
$(".choose_branch").chosen({
  no_results_text: "Oops, nothing found!"
})
/*$('select').find("select option:eq({{old('state_id')}})").prop('selected', true);*/
$("select option[value='{{old('state_id')}}']").prop('selected', true);  
</script>
@endsection