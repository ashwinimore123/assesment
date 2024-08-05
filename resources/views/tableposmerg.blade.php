@php
$tableno=0;
@endphp
@section('tableposmerg')
<div class="row tablerow">
 @foreach ($tables as $table)
@php
$tableno ++;
@endphp  

@php
$gettable_cart=$table_cart->where('table_id',$table->table_id)->first();
@endphp

                @if($gettable_cart!=""||$table->mergetable_id!=0||$table-> mergetable_id!=null) 
                <div class="col-xl-2"  style="margin-bottom:10%;"> 
                <div class="custom-control custom-checkbox mb-3 checkbox_posmerg">

                <input type="checkbox" class="custom-control-input" id="customCheckBox{{$tableno}}" name="checkbox[]" value="{{$table->table_id}}"required="" {{$table->status == 2 ? 'disabled':'false'}} >

                 @if($is_restaurant==1)
                 <label class="custom-control-label" for="customCheckBox{{$tableno}}">Select tables</label>
                 @endif
                 @if($is_restaurant==0)
                 <label class="custom-control-label" for="customCheckBox{{$tableno}}">Select Counters</label>
                 @endif
                 </div>

                 @if($table->status==2)
                  <div class="tableclick" style="z-index: 111111111;position: absolute;left: 0px; background:#19171752;">
                  <a href="javascript:void(0);" class="tablelink" id="tablelink" value="{{$table->table_id}}" style="color:white;">
                 <div class="row tablerow">
                 <div class="line1" style="border-color: #b5b4b4;"></div>
                 <div class="line2" style="border-color: #b5b4b4;"></div>
                 <div class="line3"style="border-color: #b5b4b4;"></div>
                 <div class="line4"style="border-color: #b5b4b4;"></div>
                 <div class="circletable" id="circletable"style="background:white; !important;">  
                 <div class="circlemiddel" style="background-color: #b5b4b4;">
                 <span class="tablespan">{{$tableno}}</span>
                 </div>
                 </div> 
                 @else
                  <div class="tableclick" style="z-index: 111111111;position: absolute;left: 0px; background:#19171752;">
                  <a href="javascript:void(0);" class="tablelink" id="tablelink" value="{{$table->table_id}}">
                 <div class="row tablerow">
                 <div class="line1"></div>
                 <div class="line2"></div>
                 <div class="line3"></div>
                 <div class="line4"></div>
                 <div class="circletable" id="circletable" style="background:#ec0f0f8c !important;">  
                 <div class="circlemiddel">
                 <span class="tablespan">{{$tableno}}</span>
                 </div>
                 </div> 
                 @endif


                 @else  
                <div class="col-xl-2"  style="margin-bottom:10%;"> 
                <div class="custom-control custom-checkbox mb-3 checkbox_posmerg">
                <input type="checkbox" class="custom-control-input" name="checkbox[]" id="customCheckBox{{$tableno}}" value="{{$table->table_id}}"required="">
                @if($is_restaurant==1)
                <label class="custom-control-label" for="customCheckBox{{$tableno}}">Select tables</label>
                @endif
                @if($is_restaurant==0)
                <label class="custom-control-label" for="customCheckBox{{$tableno}}">Select Counters</label>
                @endif
                </div>  

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