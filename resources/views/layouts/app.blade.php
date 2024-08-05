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

    
    
                <link href="{{asset('assets/css/toaster.css')}}"rel="stylesheet" type="text/css">
     
                <link href="{{asset('assets/css/bootstrap-select.min.css')}}"rel="stylesheet" type="text/css">

                <link href="{{asset('assets/css/jqvmap.min.css')}}" rel="stylesheet" type="text/css">

                <link href="{{asset('assets/css/chartist.min.css')}}" rel="stylesheet" type="text/css">

                <link href="{{asset('assets/css/LineIcons.css')}}" rel="stylesheet" type="text/css">
                                    
                <link href="{{asset('assets/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">

                <link href="{{asset('assets/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css">
                
                <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

                
              

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<script
  src="{{asset('assets/js/jquery-3.5.1.min.js')}}"integrity=" "crossorigin=" ">
  </script>


</head>
<body>
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login')}}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else<!-- 
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> -->   
                            
                        @endguest

                         </ul>
                        </div>

           
              
            </div>
        </nav>
  

        <main class="py-4">
       
        </main>

    </div>

<style type="text/css">
    .footer .copyright p {
    text-align:center !important;
    margin: 0 !important;
  }
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    text-align: center;
    width: 100%;
    padding-right: 8rem !important;
}

.footer .copyright {
    padding: 0px;
   
}

  .dtatablewitdh{
    position: absolute;
    left:6%;
    width: 100%;
    }


  #span_user{
    color:black !important;
  }
 .table{
  color: black !important;
  /*border: solid 1px !important;*/
}



.dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
    color: #0e0e0e !important;
}

.card-header{
    border-color: #0c0c0c;
    }

.dataTables_wrapper input[type="search"], .dataTables_wrapper input[type="text"], .dataTables_wrapper select {
    border: 1px solid #0c0c0c;
    padding: .3rem 0.5rem;
    color: #101010;
    border-radius: 5px;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
    color: #181f39 !important;
}
.bootstrap-select .btn {
    border: 1px solid #0a0a0a !important;
    background-color: transparent !important;
    padding: 0.532rem 1rem;
    font-weight: 400;
    color: #020202 !important;
}
.dropdown-menu .dropdown-item:hover, .dropdown-menu .dropdown-item:focus, .dropdown-menu .dropdown-item:active, .dropdown-menu .dropdown-item.active {
    background: #f2f4fa;
    color: #1e1e1f !important;
}

/*.card
{
      border: solid black 1px;
}*/


.datatableadd
{
    background: white !important; 
    color: black !important;
    border-color: black !important;
    margin-bottom: 8px;
}

</style>
   <!--      -->

     @include('layouts.header')
     @yield('content') 
      @include('layouts.footer')
        @include('layouts.left-menu')
    
    
   
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










