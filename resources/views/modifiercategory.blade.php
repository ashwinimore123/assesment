@section('modifiercategory')
 @foreach ($modifier_categories as $categories)
       <ul class="leftul modifier_category_link " value="{{$categories->modifier_category_id}}" id="modifier_category_link">
       <li class="nav-item left-menu_modifier">
        <a class="nav-link colorlink  " value="{{$categories->modifier_category_id}}" id="modifier_category">
          {{$categories->modifier_category_name}}
        </a>
      </li>
     </ul> 
@endforeach
@endsection


