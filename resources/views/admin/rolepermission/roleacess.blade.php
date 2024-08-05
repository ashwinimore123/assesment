@extends('layouts.app')
@section('content')
<div class="dtatablewitdh">  
<div class="container mt-1">
    <h6 class="mb-1"><b>Curruent Role Is &nbsp;{{$role_name->role_name}}</b>  &nbsp;And Roll Id Is&nbsp;<b>{{$role_id}} </b></h6>
   <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Permission</th>
                <th>Permission Name</th>
              
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</div>
<script type="text/javascript">
  $(function () {
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{config('app.baseURL')}}/admin/rolepermission/allroleacess",
        columns: [
           
            {"mData": "Action",
             "mRender": function(data, type, row){
              // check boxt stay checked after check 
              if(row.rolepermissions!="" && row.rolepermissions!=null) {
               if(row.permission_id==row.rolepermissions.permission_id)
               {
           
              return "</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><input type='checkbox' class='form-check-input'Name='permission_id'value='"+row.permission_id+"' id='exampleCheck"+row.permission_id+"' checked=''><label class='form-check-label' for='exampleCheck"+row.permission_id+"'> ALLOW ROLE PERMISSION</label></span></a>";
             }
             else 
             {
                 return "</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><input type='checkbox' class='form-check-input'Name='permission_id'value='"+row.permission_id+"' id='exampleCheck"+row.permission_id+"'><label class='form-check-label' for='exampleCheck"+row.permission_id+"'> ALLOW ROLE PERMISSION</label></span></a>";

             }
           }else{
            return "</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><input type='checkbox' class='form-check-input'Name='permission_id'value='"+row.permission_id+"' id='exampleCheck"+row.permission_id+"'><label class='form-check-label' for='exampleCheck"+row.permission_id+"'> ALLOW ROLE PERMISSION</label></span></a>";
           }
             
          },
          },
         {"mData": 'permission_name'},
           
           
        ]
    }); 
  });

 var role_id="{{$role_id}}" 
// on change on selector id class 
$(document).ready(function(){
$('tbody').on('change', 'tr td input.form-check-input', function() {
var permission_id=$(this).val();

alert('Role Id Is'+''+role_id);
alert('Permission Id Is'+''+permission_id);
//ajax call
$.ajax({
           url:"{{config('app.baseURL')}}/admin/rolepermission",
           type:'POST',
           data: {'permission_id':permission_id,'role_id':role_id},
        });
      
  });
});

</script>
@endsection