
@section('customersearch')
@foreach ($Customer_Info as $Customer)
 <ul class="list_Coustomer searchCustomersContainer " style="float: left; display: block; visibility: visible;">

<li class="customer  vebsignsCustomer"  customerid="{{$Customer->id}}" 
   email="{{$Customer->email}}">
        <div class="customerImage" style="background:#d7dae3!important;">
           {{$Customer->name}}
            <div class="checkinIcon vebsigns"></div>
          
        </div>
      
        <div class="customerName">{{$Customer->name}}</div>
    </li>
      
</ul>
@endforeach 
@endsection