<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="F0ugf7vC1dYUtsM2CDNLw9w6rDO1l0Z9tX54TxDG">
    <title>Business | Dashboard</title>
  
    <meta name="description" content="Some description for the page">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://motaadmin.dexignlab.com/laravel/demo/images/favicon.png">
  
 
   
            <link href="https://motaadmin.dexignlab.com/laravel/demo/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
            <link href="https://motaadmin.dexignlab.com/laravel/demo/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet" type="text/css">
            <link href="https://motaadmin.dexignlab.com/laravel/demo/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css">
            <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" type="text/css">
   
          <link href="https://motaadmin.dexignlab.com/laravel/demo/css/style.css" rel="stylesheet" type="text/css">
            

            <!--Css DataTable Link-->
          <link href="https://motaadmin.dexignlab.com/laravel/demo/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>

<body>
    
   
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        
    @include('layouts.header')->with($rolename);

    @include('layouts.sidebar')

    @yield('content')

    @include('layouts.footer')

    </div>

    <!--**********************************
        Scripts
    ***********************************-->
  <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/global/global.min.js" type="text/javascript"></script>
          <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/chart.js/Chart.bundle.min.js" type="text/javascript"></script>
        <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/apexchart/apexchart.js" type="text/javascript"></script>
        <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
        <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/chartist/js/chartist.min.js" type="text/javascript"></script>
        <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/svganimation/vivus.min.js" type="text/javascript"></script>
        <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/svganimation/svg.animation.js" type="text/javascript"></script>
        <script src="https://motaadmin.dexignlab.com/laravel/demo/js/custom.js" type="text/javascript"></script>
        <script src="https://motaadmin.dexignlab.com/laravel/demo/js/deznav-init.js" type="text/javascript"></script>
        <script src="https://motaadmin.dexignlab.com/laravel/demo/js/dashboard/dashboard-1.js" type="text/javascript"></script>


        <!--Js DataTable Link-->
        <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="https://motaadmin.dexignlab.com/laravel/demo/js/plugins-init/datatables.init.js" type="text/javascript"></script>


  </body>
</html>