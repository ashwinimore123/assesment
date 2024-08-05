@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">      
<div class="container mt-1">
  <div class="row">
      <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update User</h4>
        </div>
        <div class="card-body">
          <div class="basic-form">
            <form action="{{config('app.baseURL')}}/admin/user/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
               <div class="form-group col-md-12">
                  <label>Business</label>
                  <select class="form-control choose_business" name="business_id" id="state-dropdown">
                      <option value="">Select Business</option>
                      @foreach ($businesses as $business) 
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
                  <select class="form-control choose_role" name="role_id" id="role_dropdown">
                    <option>Select Role</option>
                    @foreach($roles as $role)
                      <option value="{{$role->role_id}}">
                        {{$role->role_name}}
                      </option>                  
                    @endforeach
                  </select>
                  <span style="color:red;">@error('role_id') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" value="{{old('name',$user->name)}}" placeholder="Enter name" >
                  <span style="color:red;">@error('name') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" value="{{old('email',$user->email)}}" placeholder="Enter email" >
                  <span style="color:red;">@error('email') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Change Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" >
                  <input type="checkbox" id="togglePassword" name=""> Show password
                  <span style="color:red;">@error('password') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Pin</label>
                  <input type="number" name="pin" class="form-control" value="{{old('pin',$user->pin)}}" placeholder="Enter Pin" >
                  <span style="color:red;">@error('pin') {{$message}} @enderror</span>
                </div>

                <div class="form-group col-md-12">
                  <label>Contact Number</label>
                  <input type="number" name="contact_number" class="form-control" value="{{old('contact_number',$user->contact_number)}}" placeholder="Enter Contact" >
                  <span style="color:red;">@error('contact_number') {{$message}} @enderror</span>
                </div>








                <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">Update User</button>
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
var new_val_business = '{{$user->business_id}}';
var old_val_business = "{{old('business_id')}}";
if(old_val_business!=""){
      $('.choose_business option[value='+old_val_business+']').prop('selected', true);
}else{
      $('.choose_business option[value='+new_val_business+']').prop('selected', true);
}
var new_val_role = '{{$user->role_id}}';
var old_val_role = "{{old('role_id')}}";
if(old_val_role!=""){
  $('.choose_role option[value='+old_val_role+']').prop('selected',true);
}else{
  $('.choose_role option[value='+new_val_role+']').prop('selected',true);
}
//Branch Data Multiple select box update data
var branch_val=<?php echo json_encode($branch_users);?>;
        $.each(branch_val,function(index,item){
       $(".choose_branch option[value="+item.branch_id+"]").prop('selected',true);
          });
const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
        
    togglePassword.addEventListener('click', function (e) {
      // toggle the type attribute
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // toggle the eye slash icon
      this.classList.toggle('');
});
</script>
@endsection


