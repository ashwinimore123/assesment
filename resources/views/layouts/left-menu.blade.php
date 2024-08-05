<!--admin panel left menu links using user role  nav menu-tabs -->
<style type="text/css">
.gwCktg {
    width:170px!important;
    height:100%!important;
    list-style-type: none;
    padding: 0px;
    margin: 0px;
    overflow-y: auto;
    top:4rem;
    display: block;
    left: 0; 
}
.deznav .menu-tabs {
     padding: 0px 0px 0px 0px; 
}

/* mouse over link */
.left-menu:hover {
    color: #f54a16 !important;
    background-color: black;
}

/* selected link */
.left-menu{

    display: block;
    font:600 15px / 34px Akkurat-Regular, Helvetica, Arial, sans-serif;
    color: rgb(70, 74, 81);
    text-decoration: none;
}
.colorlink
{
       color: #ffffff !important;
}
.scrollbarleft {
    height: 70%;
    overflow-y: auto;
    overflow-x: hidden;
}
.leftpanelbottom {
    position: absolute;
    bottom: 59px;
    padding: 7px !important;
}

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #888;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #888; 
}



</style>
 @php
  $user=auth::user();
  $role_id=$user->role_id;
  $id=$user->id;
  @endphp
@if($role_id==1 )
<div class="deznav gwCktg">
    <ul class="leftul scrollbarleft">
      <li class="nav-item left-menu">
        <a class="nav-link colorlink"  href="{{config('app.baseURL')}}/home">
          Home
        </a>
      </li>
   

     <!--  <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/table/all">
        pos tableinfo
        </a>
      </li>      
       
    -->



      <li class="nav-item left-menu">
        <a class="nav-link colorlink  " href="#dashboard">
        Mysite
        </a>
      </li>


      <li class="nav-item left-menu">
        <a class="nav-link colorlink "href="{{config('app.baseURL')}}/admin/product/all">
         Products
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/branch/all">
         Branch
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/user/all">
        Users
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink "  href="#table">
         Features
        </a>
      </li>



<li class="nav-item left-menu">
        <a class="nav-link colorlink " href="{{config('app.baseURL')}}/admin/business/all">
        Business 
        </a>
      </li>


      <li class="nav-item left-menu">
        <a class="nav-link colorlink "href="{{config('app.baseURL')}}/admin/category/all">
         Categoery
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/city/all">
         City
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/country/all">
        Countries
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink "  href="{{config('app.baseURL')}}/admin/currency/all">
         Currency
        </a>
      </li>

    <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/kitchen-section/all">
        Kitchen-Section
        </a>
      </li>


      <li class="nav-item left-menu">
        <a class="nav-link colorlink "href="{{config('app.baseURL')}}/admin/permission/permission">
         Permission
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/printer/all">
         Printers
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/product-variant/all">
        Product-Variant
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink "  href="{{config('app.baseURL')}}/admin/role/all">
         Roles
        </a>
      </li>


    <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/state/all">
        State
        </a>
      </li>


      <li class="nav-item left-menu">
        <a class="nav-link colorlink "href="{{config('app.baseURL')}}/admin/tax/all">
         Taxes
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/timezone/all">
         Timezone
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/variant/all">
        Variant
        </a>
      </li>

      <li class="nav-item left-menu ">
        <a class="nav-link  colorlink"  href="#extra">
         Intigretions
        </a>
      </li>

      <li class="nav-item left-menu ">
        <a class="nav-link  colorlink" href="#extra">
        Companysetting
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink"  href="#extra">
        Findpartner
        </a>
      </li>
      <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="https://vebsigns.com/">
        Refer Vebsigns
        </a>
      </li>
     </ul>
     <ul class="leftpanelbottom">
      <ul style="padding:1px;">
      <li class="nav-item left-menu">
        <a class="nav-link colorlink" style="background-color: blue;padding: 8px;" href="#extra">
         <svg width="24" height="24" color="#fff" aria-label="help" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#ffffff" fill-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12zm0-2c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zM8.516 8.805c0-.547.1-1.04.3-1.477s.476-.795.825-1.074.754-.491 1.214-.637c.461-.146.96-.219 1.497-.219 1.036 0 1.888.301 2.554.903s1 1.347 1 2.238c0 .974-.422 1.82-1.265 2.54-.084.072-.214.179-.391.32s-.303.244-.379.312c-.075.068-.173.167-.293.297s-.206.25-.258.36-.099.247-.14.413-.063.347-.063.54v.445h-1.984c0-.75.028-1.266.086-1.547.057-.266.138-.508.242-.727s.232-.411.383-.578.29-.307.418-.422c.127-.114.289-.25.484-.406.195-.156.348-.284.457-.383.412-.37.617-.752.617-1.148 0-.375-.138-.693-.414-.953s-.653-.391-1.133-.391c-.515 0-.927.138-1.234.414s-.46.67-.46 1.18zM11.008 17v-2.242h2.226V17z"></path></svg>
         help&support
        </a>
      </li>
   </ul>

     <ul style="padding:1px;">
      <li class="nav-item left-menu">
        <a class="nav-link colorlink " style="background-color: blue;padding: 6px; " href="#extra">
          <svg width="24" height="24" viewBox="0 0 24 24"  fill="black" xmlns="http://www.w3.org/2000/svg">
                          <path   fill="#ffffff" fill-rule="evenodd" clip-rule="evenodd" d="M12.0001 14C14.7616 14 17 11.7614 17 9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9C7 11.7614 9.23871 14 12.0001 14ZM12 6C13.6569 6 15 7.34315 15 9C15 10.6569 13.6569 12 12 12C10.3431 12 9 10.6569 9 9C9 7.34315 10.3431 6 12 6Z" fill="#2E61DE"></path>
                          <path fill="#ffffff" fill-rule="evenodd" clip-rule="evenodd" d="M12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 15.4046 22.5821 18.4781 20.3047 20.6621C20.2997 20.667 20.2948 20.6718 20.2897 20.6766C20.0767 20.8801 19.8562 21.0759 19.6286 21.2635C17.5846 22.9487 14.9732 23.9705 12.1241 23.9994C12.0828 23.9998 12.0414 24 12 24C12 24 12 24 12 24ZM20.2225 17.6928C21.3432 16.0772 22 14.1153 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 14.1153 2.65681 16.0773 3.77761 17.693C5.78979 15.4303 8.7288 14 12.0001 14C15.2714 14 18.2103 15.4302 20.2225 17.6928ZM18.9079 19.2306C18.6509 18.9232 18.3738 18.6332 18.0786 18.3627C17.8808 18.1815 17.6749 18.009 17.4615 17.8459C15.9469 16.6879 14.0539 16 12.0001 16C9.94639 16 8.05332 16.6879 6.53876 17.8459C6.32535 18.009 6.11946 18.1815 5.92169 18.3627C5.62644 18.6333 5.34929 18.9232 5.09229 19.2306C5.4136 19.5377 5.75536 19.8236 6.1153 20.086C6.29564 20.2174 6.48055 20.343 6.66974 20.4624C7.94089 21.2648 9.40539 21.7887 10.9776 21.9484C11.3137 21.9825 11.6548 22 12 22C12.1726 22 12.3442 21.9956 12.5146 21.987C12.7301 21.9761 12.9437 21.9583 13.1554 21.934C15.3755 21.6785 17.3744 20.696 18.9079 19.2306Z" fill="#2E61DE"></path>
                         </svg>
         {{Auth::user()->name}}
       </a>
      </li>

    </ul>
</ul>
</div>


@elseif($role_id==2 or $role_id==3 or $role_id==4)
<div class="deznav gwCktg">
    <ul class="leftul scrollbarleft">
      <li class="nav-item left-menu">
        <a class="nav-link colorlink"  href="{{config('app.baseURL')}}/home">
          Home
        </a>
      </li>
   
      <li class="nav-item left-menu">
        <a class="nav-link colorlink  " href="#dashboard">
        Mysite
        </a>
      </li>


      <li class="nav-item left-menu">
        <a class="nav-link colorlink "href="{{config('app.baseURL')}}/admin/product/all">
         Products
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/branch/all">
         Branch
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/user/all">
        Users
        </a>
      </li>

       <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="{{config('app.baseURL')}}/admin/table/all">
        pos tableinfo
        </a>
      </li>      
       

      <li class="nav-item left-menu">
        <a class="nav-link colorlink "  href="#table">
         Features
        </a>
      </li>

      <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="https://vebsigns.com/">
        Refer Vebsigns
        </a>
      </li>
     </ul>
     <ul class="leftpanelbottom">
      <ul style="padding:1px;">
      <li class="nav-item left-menu">
        <a class="nav-link colorlink" style="background-color: blue;padding: 8px;" href="#extra">
         <svg width="24" height="24" color="#fff" aria-label="help" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#ffffff" fill-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12zm0-2c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zM8.516 8.805c0-.547.1-1.04.3-1.477s.476-.795.825-1.074.754-.491 1.214-.637c.461-.146.96-.219 1.497-.219 1.036 0 1.888.301 2.554.903s1 1.347 1 2.238c0 .974-.422 1.82-1.265 2.54-.084.072-.214.179-.391.32s-.303.244-.379.312c-.075.068-.173.167-.293.297s-.206.25-.258.36-.099.247-.14.413-.063.347-.063.54v.445h-1.984c0-.75.028-1.266.086-1.547.057-.266.138-.508.242-.727s.232-.411.383-.578.29-.307.418-.422c.127-.114.289-.25.484-.406.195-.156.348-.284.457-.383.412-.37.617-.752.617-1.148 0-.375-.138-.693-.414-.953s-.653-.391-1.133-.391c-.515 0-.927.138-1.234.414s-.46.67-.46 1.18zM11.008 17v-2.242h2.226V17z"></path></svg>
         help&support
        </a>
      </li>
   </ul>

     <ul style="padding:1px;">
      <li class="nav-item left-menu">
        <a class="nav-link colorlink " style="background-color: blue;padding: 6px; " href="#extra">
          <svg width="24" height="24" viewBox="0 0 24 24"  fill="black" xmlns="http://www.w3.org/2000/svg">
                          <path   fill="#ffffff" fill-rule="evenodd" clip-rule="evenodd" d="M12.0001 14C14.7616 14 17 11.7614 17 9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9C7 11.7614 9.23871 14 12.0001 14ZM12 6C13.6569 6 15 7.34315 15 9C15 10.6569 13.6569 12 12 12C10.3431 12 9 10.6569 9 9C9 7.34315 10.3431 6 12 6Z" fill="#2E61DE"></path>
                          <path fill="#ffffff" fill-rule="evenodd" clip-rule="evenodd" d="M12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 15.4046 22.5821 18.4781 20.3047 20.6621C20.2997 20.667 20.2948 20.6718 20.2897 20.6766C20.0767 20.8801 19.8562 21.0759 19.6286 21.2635C17.5846 22.9487 14.9732 23.9705 12.1241 23.9994C12.0828 23.9998 12.0414 24 12 24C12 24 12 24 12 24ZM20.2225 17.6928C21.3432 16.0772 22 14.1153 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 14.1153 2.65681 16.0773 3.77761 17.693C5.78979 15.4303 8.7288 14 12.0001 14C15.2714 14 18.2103 15.4302 20.2225 17.6928ZM18.9079 19.2306C18.6509 18.9232 18.3738 18.6332 18.0786 18.3627C17.8808 18.1815 17.6749 18.009 17.4615 17.8459C15.9469 16.6879 14.0539 16 12.0001 16C9.94639 16 8.05332 16.6879 6.53876 17.8459C6.32535 18.009 6.11946 18.1815 5.92169 18.3627C5.62644 18.6333 5.34929 18.9232 5.09229 19.2306C5.4136 19.5377 5.75536 19.8236 6.1153 20.086C6.29564 20.2174 6.48055 20.343 6.66974 20.4624C7.94089 21.2648 9.40539 21.7887 10.9776 21.9484C11.3137 21.9825 11.6548 22 12 22C12.1726 22 12.3442 21.9956 12.5146 21.987C12.7301 21.9761 12.9437 21.9583 13.1554 21.934C15.3755 21.6785 17.3744 20.696 18.9079 19.2306Z" fill="#2E61DE"></path>
                         </svg>
         {{Auth::user()->name}}
       </a>
      </li>
    </ul>
</ul>
</div>




@else
<div class="deznav gwCktg">
    <ul class="menu-tabs" >

</ul>
    <li class="nav-item left-menu">
        <a class="nav-link colorlink" href="https://vebsigns.com/">
        Refer Vebsigns
        </a>
      </li>

</div>
@endif