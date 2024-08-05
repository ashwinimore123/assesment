<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="csrf-token" content="F0ugf7vC1dYUtsM2CDNLw9w6rDO1l0Z9tX54TxDG">
  <title>VposAdmin|Dashboard</title>

  <meta name="description" content="Some description for the page">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets\images\logo.jpg">

            <!--     //csss local files 
            -->
            <link href="{{asset('assets/css/toaster.css')}}"rel="stylesheet" type="text/css">

            <link href="{{asset('assets/css/bootstrap-select.min.css')}}"rel="stylesheet" type="text/css">
            <!-- jquery cdn file link -->
            <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}" type="text/javascript"></script>

            <link href="{{asset('assets/css/jqvmap.min.css')}}" rel="stylesheet" type="text/css">

            <link href="{{asset('assets/css/chartist.min.css')}}" rel="stylesheet" type="text/css">

            <link href="{{asset('assets/css/LineIcons.css')}}" rel="stylesheet" type="text/css">

            <link href="{{asset('assets/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">

            <link href="{{asset('assets/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css">

            <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
            <!-- MEDIA CLASSES SCREEN RESOULTIONS -->
            <link href="{{asset('assets/css/media.css')}}" rel="stylesheet" type="text/css">

            <!-- for google font -->

             <link href="{{asset('assets/css/font.css')}}" rel="stylesheet" type="text/css">

<style type="text/css">
.navbar-nav1 
        {
          margin-bottom: 0px !important;
        }
.header-content1
        {
          width:79%!important;
          left:8%!important;
          padding-left: 2.875rem !important;

        }
 .header-content 
        {
          position: relative;
          padding-right: 20rem!important;
        }
.form-control {
    width: 66%;
    background: #ffffff !important;
    border: 0.5px solid!important;
    border-radius: 0 !important;
    padding-left: 2rem;
    left: 9rem;
    position: fixed;
    top: 10px;
}


.input-group-prepend .btn, .input-group-append .btn {
    z-index: 1111111;
}

.form-control1{
    width: 50%;
    background: #ffffff !important;
    border: 0.5px solid!important;
    border-radius: 0 !important;
    padding-left: 2rem;
    left: 9rem;
    position: fixed;
    top: 10px;
}
.back-button
      {
        padding: 1rem 1rem 0 1rem;
        background: #24365c;
        color: #fff;
      }

/* chatbox classes */
a{
    color: #fff;
}
.a1 {
    position: fixed;
    color: #fff;
    width: 107px;
    height: 5%;
    background-color: #5b93d9;
    border: 1px solid #6b789c;
    margin-left: -2px;
    border-radius: 0px 0 0 0 !important;
    font-weight: 200;
    font-size: 12px;
    bottom: 46px;
    padding-top: 3px !important;
}
/* for right side header links */
.header-ra {
    color: #3a7afe;
    background-color: #ffffff;
    border: 1px solid #0d0d0d47;
}

.header-raa {
    color: #3a7afe;
    background-color: #ffffff;
    border: 1px solid #0d0d0d47;
}


.red {
    color: #ec0a0a;
    font-weight: 300;
    font-size: 20px;
}
.white{
    color: #ffffff;
    font-weight: 300;
    font-size: 12px;
}


.ul1{
      padding:revert;
}
.chatbox 
      {
        background: #346ee5;
      }
.chatbox.active {
    width: 209px!important;
}

.chatbox .nav
      {
       padding: 0rem 0rem 0 0rem !important;
      } 
.chatbox .nav {
  
    background: #346ee5;
    border: 0;
    justify-content: space-between;
}      


.fixed-content-box .head-name 
    {
      padding: 0px 100px !important;
      font-size: 15px;
    }
.chatbox .chatbox-close {
    right: 208px !important;
}

.header-right .nav-item .nav-link 
    {
      font-size: 13px !important;
      color: #3a7afe !important;
    }
.header-right .right-sidebar a {
    height: 43px;
    width: 100px;
}

.anchoer
    {
      color: #ffffff!important;
      background-color: #3a7afe !important;
      height: 80px !important;
    }
.anchoer2
    {
      color: #ffffff!important;
      background-color: #3a7afe !important;
      height: 80px !important;
    }

.anchoer1
    {
      color: #ffffff!important;
      background-color: #3a7afe !important;
      height: 0px !important;
    }

.img {
     max-width: 25%;
     height: 15;
   }
.header .navbar .navbar-collapse
   {
    height: 105%;
  }
.header{
    width: 200% !important;
    padding-left: 2rem !important;
    background-color: #fff !important;
  }
.header1 {
    width: 0!important;
    padding-left: 1rem !important;
    background-color: #fff !important;
    position: fixed;
    top:0;
    width: 39%;
  }
.dropdown-menu 
  {
    min-width: 58rem !important;
  }
.header-left input {
    background: #ffffff !important;
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
    min-height: 26px !important;
    color: #c3c0c0 !important;
    height: 25px !important;
    border-radius: -9.625rem !important;
  }
  /* body
  {
    background-color: #ffffff !important;
  }
*/
.dropdown-menu.show 
  {
    left: -196px ! important;
  }

.col-xxl-3 {
    flex: 0 0 11 !important;
    max-width: 11% !important;
  }
/*.content-body .container-fluid 
  {
    padding-top: 0px !important;
    padding-right: 60px !important;
    padding-left: 56px;
}*/
.container-fluid {
    position: fixed !important;
    width: 169%;
} 
.footer .copyright p {
    text-align:center !important;
    margin: 0 !important;
  }

  .footer {
              position: fixed;
              left: 0;
              bottom: 0;
              text-align: center;
              width: 100%  ;
              padding-right: 25rem !important;
            }
               

.footer .copyright {
    padding: 0px;
   
}

p {
    line-height: 1.8 !important;
  }


.card {
    height: 100px !important;
    background-color: #ffffff ! important;
    border-radius: 0 ! important;
    border: 1px solid !important;
    cursor: pointer;
    max-height: 100px;
}


.text-success {
    color: #10ca93 !important;
    font-size: 30px !important height: 27px !important;
    position: absolute;
    left: 10px;
    top: 5px;
}


.text-success1{
    color: #10ca93 !important;
    position: absolute;
    left:18px;
    top: 24px;
    font-size: 18px;
}

.header-left .search_bar .search_icon 
  {
    background: #ebeef6 !important;
    height:70px !important;
    padding: 8px 0 8px 15px !important;
    border-top-left-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
  } 
.text-center {
    text-align: left !important;
  }

  /* Styles for wrapping the search box */
 .has-search .form-control {
    padding-left: 2.375rem;
  }

  .no-padding{
    padding: 0px;
  }

.no-padding .btn {
    padding: 1.562rem 0rem 0.00rem 5.8rem !important;
    color: #fff;
    background-color: #ffffff14;
    border-color: #24365c00;
    position: absolute;
    bottom:0px;
}


.no-paddingbtnn {
    padding: 0.562rem 0rem 0.000rem 3.8rem;
    color: #fff;
    background-color: #ffffff14;
    border-color: #24365c00;
    position: absolute;
    bottom:0px;
}
  
.no-padding .btn .fa-search{

color: #111;
}

.has-search .form-control-feedback 
  {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
  }
  /* left menu*/
[data-sidebar-style="mini"][data-layout="vertical"] .nav-header {
    width: 105.5px;
}

[data-sidebar-position="fixed"][data-layout="vertical"] .deznav {
    position: fixed;
    width: 105.5px;
}

.btn {
    padding: 8px 0.25rem;
    border-radius: -24.625rem;
    font-weight: 300;
    font-size: 12px;
}
.btn-light {
    background: #ebfe3a30;
    border-color: #6b789c;
    color: #ffffff;
    width: 106px;
    margin-left: -10px;
    position: fixed;
    height: 5%;
    bottom: 137px;
}


h6, .h6 {
    position: fixed;
    background: #5b93d9 !important;
    width: 105px;
    text-align: center;
    height: 5%;
    padding-top: 4px;
    border: 1px solid #6b789c;
    color: lemonchiffon;
    bottom: 84px;
}

.logout-btn {
    position: fixed;
    width: 108px;
    display: block;
    height: 5%;
    bottom: 1px;
    border: 1px solid #6b789c;
    border-radius: 0px 0 0 0 !important;
    padding-top: 3px !important;
    background-color: #5b93d9;
}


.deznav .menu-tabs li a {
    color: #fff;
    font-size: 12px;
    display: block;
    line-height: 2;
    padding: 0px 0px 0px 0px;
    border-radius: 6px 0 0 6px;
    margin-top: 9px;
}
.deznav .tabs-fixed{
    padding: 0px 0 1px 20px;
    direction: rtl;
}

.col {
    flex-basis: 0;
    flex-grow: 1;
    text-align: -webkit-right;
    max-width: 100;
}
.hidden{
  display: none !important;
}


  [data-sidebar-style="mini"][data-layout="vertical"] .nav-header-checkout {
    width: 22rem;
    height:10;
    max-width: 21.2rem !important;
    position:fixed;
    top: 0px;
}


.checkout-close.active
{
  width: 22vw!important;

}

.fixed-content-box-checkout {
    z-index: 4;
    height: 100%;
    max-width: -webkit-fill-available;
    width:305px;
    height: auto;
    position: absolute;
    top: 20px;
    bottom: 0;
    /* right: 0; */
    z-index: 3;
    background: #fff;
    border-left: solid 1px #d7dce1;
    box-sizing: border-box;
    -ms-behavior: url(/ie/PIE.php);
    transition: all .2s ease-out 0s;
    left: 0;
    right: unset;
}

.payment {
font-size: 20px;
height: 5%;
position: fixed;
right: 612px;
}
/*fixed contant box1*/

.fixed-content-box1{
    width:auto;
    right: 14rem;
    position: fixed;
    height: 100%;
    background: #fff;
    z-index: 4;
    box-shadow: 0px 0px 40px 0px rgb(82 63 105 / 10%);
}
                             
</style>
</head>
<body class="pos" id="posdata">
@include('layouts.pos-header')
@include('layouts.pos-leftpanel')
@include('layouts.pos-rightpanel')
@yield('content') 
@include('layouts.pos-footer')

<!--  // javascript local files  -->

<script src="{{asset('assets/js/toaster.min.js')}}" type="text/javascript"></script>


<script src="{{asset('assets/js/global.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/bootstrap-select.min.js')}}" type="text/javascript"></script>



<script src="{{asset('assets/js/Chart.bundle.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/apexchart.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/jquery.peity.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/chartist.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/vivus.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/svg.animation.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/custom.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/deznav-init.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/dashboard-1.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/datatables.init.js')}}" type="text/javascript"></script>

<!-- //toastr popup script -->
<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type', 'info') }}";
 switch(type){
  case 'info':
  toastr.info("{{ Session::get('message') }}");
  break;

  case 'warning':
  toastr.warning("{{ Session::get('message') }}");
  break;
  case 'success':
  toastr.success("{{ Session::get('message') }}");
  break;
  case 'error':
  toastr.error("{{ Session::get('message') }}");
  break;
}
@endif
</script>

</body>
</html>










