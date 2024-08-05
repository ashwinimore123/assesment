@extends('layouts.app')
@section('content')
<style type="text/css">
div.one
{
border-radius: 10px;
}

div #card
{
border-radius: 8px;
}
.row1{
display: flex;
flex-wrap: wrap;
margin-right: 21px !important;
margin-left: 68px !important;
}

.branch {
    position: absolute;
    left: 75px !important;
    top: 85px;
}

</style>         
<div class="container mt-1 branch">
<div class="text-dark col-3">
<h4 style="text-align: center; !important;">Your Branches</h4>
</div>
<div class="row row1">
@foreach($branch_users as $branch_user)
<div class="col-xl-3">
<div class="card bg-dark">
<div class="card-body" style="background: #3a7afe;">
<a href="{{config('app.baseURL')}}/dashboard/{{$branch_user->branch->branch_id}}">

<h5 class=" text-white card-text">
<!-- 	<svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 510 510" height="50px" viewBox="0 0 510 510" width="100px"><g><path d="m191 80h128v30h-128z" fill="#696e73"/><path d="m255 80h64v30h-64z" fill="#4b5055"/><path d="m0 0v510h64l17.702-13.319 102.128 1.702 7.17-3.383v-15-145h15v-335z" fill="#59abff"/><path d="m304 0v175.89h15v304.11 15l17.34 1 105.192 4.766 4.468 9.234h64v-510z" fill="#4b5055"/><path d="m264 198.352v136.648h15v145 15l12.745 3.383 87.844 6.616 2.411 5.001h64v-417.017z" fill="#59abff"/><g fill="#f7f9fa"><path d="m63 64h80v30h-80z"/><path d="m63 128h80v30h-80z"/><path d="m63 192h80v30h-80z"/><path d="m63 256h80v30h-80z"/></g><path d="m64 320h318v190h-318z" fill="#e40058"/><path d="m255 320h127v190h-127z" fill="#c40048"/><path d="m135 400h32v30h-32z" fill="#f7f9fa"/><path d="m207 400h32v30h-32z" fill="#f7f9fa"/><path d="m279 400h32v30h-32z" fill="#e5eaee"/><path d="m327 240h56v30h-56z" fill="#e5eaee"/></g></svg>  --> {{$branch_user->branch->branch_name}}</h5>

</a>
</div>
</div>
</div>
@endforeach
</div>
</div>
@endsection

