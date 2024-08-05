
@php
$tableno=0;
@endphp
@section('tablepos')
<div class="row tablerow">
 @foreach ($tables as $table)
@php
$tableno ++;
@endphp  

                @if($table_cart!="") 
               
                  <div class="col-xl-2"  style="margin-bottom:10%;"> 
                  <div class="tableclick" style="z-index: 111111111;position: absolute;left: 0px;">
                  <a href="javascript:void(0);" class="tablelink" id="tablelink" value="{{$table->table_id}}">
                 <div class="row tablerow">
                 <div class="line1"></div>
                 <div class="line2"></div>
                 <div class="line3"></div>
                 <div class="line4"></div>
                  @if($table_cart=$table->table_id)
                 <div class="circletable" id="circletable" style="background: #ec0f0f8c !important;">
                  @else
                  <div class="circletable " id="circletable">
                 <div class="circlemiddel">
                 <span class="tablespan">{{$tableno}}</span>
                 </div>
                 </div>
            
                

              @else           
                  <div class="col-xl-2"  style="margin-bottom:10%;"> 
                  <div class="tableclick" style="z-index: 111111111;position: absolute;left: 0px;">
                  <a href="javascript:void(0);" class="tablelink" id="tablelink" value="{{$table->table_id}}">
                 <div class="row tablerow">
                 <div class="line1"></div>
                 <div class="line2"></div>
                 <div class="line3"></div>
                 <div class="line4"></div>
                 <div class="circletable " id="circletable">  
                 <div class="circlemiddel">
                 <span class="tablespan">{{$tableno}}</span>
                 </div>
                 </div>
              

              @endif

</div> 
</a>
</div>
</div>
@endforeach 
</div>
@endsection