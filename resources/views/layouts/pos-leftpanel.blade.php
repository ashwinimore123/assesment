
<style type="text/css">
.deznav-scroll::-webkit-scrollbar
{
  width: 0px;
}

.scrollhight
{
   padding: 0;
  max-height:80% !important; 
  overflow-y: auto !important;
}

.category-item{
  width: 100%;

}
.deznav .menu-tabs li a.category-link{
  float: right;
   padding-right: 5px;
}
.deznav .menu-tabs li a.category-link.active 
{
 padding: 2px 5px 2px 5px;
 width: 100%;
}

.deznav {
    width: 17.1875rem;
    padding-bottom: 0;
    height: calc(100% - 80px);
    position: absolute;
    top: 5rem;
    padding-top: 0;
    z-index: 5;
    background-color: #fff;
    transition: all .2s ease;
    box-shadow: 0px 40px 40px 0px rgb(82 63 105 / 10%);
    height: 100% !important;
}


.gwCktg_modifier_left {
    width: 170px!important;
    height: 100%!important;
    list-style-type: none;
    padding: 0px;
    margin: 0px;
    overflow-y: auto;
    top: 4rem;
    display: block;
    left: 0;
}


.left-menu_modifier{
    display: block;
    font: 600 15px / 34px Akkurat-Regular, Helvetica, Arial, sans-serif;
    color: rgb(70, 74, 81);
    text-decoration: none;
}



.left-menu_modifier_bottom{
    display: block;
    font: 600 15px / 34px Akkurat-Regular, Helvetica, Arial, sans-serif;
    color: rgb(70, 74, 81);
    text-decoration: none;
}

.colorlink {
    color: #ffffff !important;
}

/* mouse over link */
.left-menu_modifier:hover {
    color: #f54a16 !important;
    background-color: black;
}


.leftpanelbottom_modifier {
    position: absolute;
    bottom: 70px;
    padding: 7px !important;
}


.modifier_left_panel{
    height: 70%;
    overflow-y: auto;
    overflow-x: hidden;
}

</style>

<div style="display: block;">
<div class="deznav">
<div class="modifier_left_panel  hidden">
<div class="gwCktg_modifier_left" id="modifiercategory">
<!--     <ul class="leftul ">
      <li class="nav-item left-menu_modifier">
        <a class="nav-link colorlink"  href="#">
          abc
        </a>
      </li>
   
      <li class="nav-item left-menu_modifier">
        <a class="nav-link colorlink  " href="#">
        xyz
        </a>
      </li>

</ul> -->
</div>


<ul class="leftpanelbottom_modifier">
      <ul style="padding:1px;">
      <li class="nav-item left-menu_modifier_bottom">
        <a class="nav-link colorlink" style="background-color: blue;padding:8px;" href="#extra">
         <svg width="25" height="25" color="#fff" aria-label="help" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#ffffff" fill-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12zm0-2c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zM8.516 8.805c0-.547.1-1.04.3-1.477s.476-.795.825-1.074.754-.491 1.214-.637c.461-.146.96-.219 1.497-.219 1.036 0 1.888.301 2.554.903s1 1.347 1 2.238c0 .974-.422 1.82-1.265 2.54-.084.072-.214.179-.391.32s-.303.244-.379.312c-.075.068-.173.167-.293.297s-.206.25-.258.36-.099.247-.14.413-.063.347-.063.54v.445h-1.984c0-.75.028-1.266.086-1.547.057-.266.138-.508.242-.727s.232-.411.383-.578.29-.307.418-.422c.127-.114.289-.25.484-.406.195-.156.348-.284.457-.383.412-.37.617-.752.617-1.148 0-.375-.138-.693-.414-.953s-.653-.391-1.133-.391c-.515 0-.927.138-1.234.414s-.46.67-.46 1.18zM11.008 17v-2.242h2.226V17z"></path></svg>
         help&amp;support
        </a>
      </li>
   </ul>



     <ul style="padding:1px;">
      <li class="nav-item left-menu_modifier_bottom">
        <a class="nav-link colorlink " style="background-color: blue;padding:6px;" href="#extra">
          <svg width="25" height="25" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
                          <path fill="#ffffff" fill-rule="evenodd" clip-rule="evenodd" d="M12.0001 14C14.7616 14 17 11.7614 17 9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9C7 11.7614 9.23871 14 12.0001 14ZM12 6C13.6569 6 15 7.34315 15 9C15 10.6569 13.6569 12 12 12C10.3431 12 9 10.6569 9 9C9 7.34315 10.3431 6 12 6Z"></path>
                          <path fill="#ffffff" fill-rule="evenodd" clip-rule="evenodd" d="M12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 15.4046 22.5821 18.4781 20.3047 20.6621C20.2997 20.667 20.2948 20.6718 20.2897 20.6766C20.0767 20.8801 19.8562 21.0759 19.6286 21.2635C17.5846 22.9487 14.9732 23.9705 12.1241 23.9994C12.0828 23.9998 12.0414 24 12 24C12 24 12 24 12 24ZM20.2225 17.6928C21.3432 16.0772 22 14.1153 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 14.1153 2.65681 16.0773 3.77761 17.693C5.78979 15.4303 8.7288 14 12.0001 14C15.2714 14 18.2103 15.4302 20.2225 17.6928ZM18.9079 19.2306C18.6509 18.9232 18.3738 18.6332 18.0786 18.3627C17.8808 18.1815 17.6749 18.009 17.4615 17.8459C15.9469 16.6879 14.0539 16 12.0001 16C9.94639 16 8.05332 16.6879 6.53876 17.8459C6.32535 18.009 6.11946 18.1815 5.92169 18.3627C5.62644 18.6333 5.34929 18.9232 5.09229 19.2306C5.4136 19.5377 5.75536 19.8236 6.1153 20.086C6.29564 20.2174 6.48055 20.343 6.66974 20.4624C7.94089 21.2648 9.40539 21.7887 10.9776 21.9484C11.3137 21.9825 11.6548 22 12 22C12.1726 22 12.3442 21.9956 12.5146 21.987C12.7301 21.9761 12.9437 21.9583 13.1554 21.934C15.3755 21.6785 17.3744 20.696 18.9079 19.2306Z"></path>
                         </svg>
         maheshadmin
       </a>
      </li>
    </ul>
</ul>

</div>





  <div class="categoery_product ">
  <div class="deznav-scroll scrollhight">
    <ul class="nav menu-tabs">
      
 @foreach ($categories as $category)
     <li class="nav-item active category-item">
       <a class="nav-link category-link" data-toggle="tab" id="categoryitem" href="#" value="{{$category->category_id}}">
       {{$category->category_name}}
       </a>
      </li>
@endforeach
</ul>
</div>


  <div class="deznav-scroll">
     <ul class="nav menu-tabs tabs-fixed">
       <li class="nav-item">
        <a href="{{config('app.baseURL')}}/home">
         <button type="button" class="btn  btn-square btn-light">BackOffice</button>
       </a>
       </li> 
      <li class="nav-item">


      <h6>{{Auth::user()->name}}</h6>
     </li>
  <li class="nav-item">
    <a class="a1" href="#">Help&support &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="18" height="22" fill="currentColor"  style=" fill: rgb(255 255 255);
    width: 24px;"  class="bi bi-question-circle svgq" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
</svg></a>
</li>

 <li class="nav-item">
  <a href="{{ route('logout')}}" class="logout-btn"> Logout&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline> <line x1="21" y1="12" x2="9" y2="12"></line></svg></a>
</li>
    </ul>
  </div>


</div>
</div>
</div> 


<script type="text/javascript">  
$(document).ready(function(){
$('.menu-tabs').on('click', 'a.category-link', function(){
var category_id=$(this).attr('value');
var product_id=$(this).attr('value');
//ajax call 
$.ajax({
url:"{{config('app.baseURL')}}/admin/getcategory",
type:'POST',
data: {'category_id':category_id,_token:'{{csrf_token()}}'},
success:function(data) {
document.getElementById("product").innerHTML=data;
}
});
});
});
</script>    