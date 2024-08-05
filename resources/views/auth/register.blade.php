<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MotaAdmin | Page Login</title>
    <meta name="description" content="Some description for the page">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://motaadmin.dexignlab.com/laravel/demo/images/favicon.png">
    <link href="https://motaadmin.dexignlab.com/laravel/demo/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    
</head>
<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
  <div class="authincation-content">
      <div class="row no-gutters">
          <div class="col-xl-12">
              <div class="auth-form">

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> -->
              <div class="text-center mb-4"><h4>{{ __('Register') }}</h4></div>

                <div class="form-group">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="name" class="mb-1"><strong>{{ __('Name') }}</strong></label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class="mb-1"><strong>{{ __('E-Mail Address') }}</strong></label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="mb-1"><strong>{{ __('Password') }}</strong></label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="mb-1"><strong>{{ __('Confirm Password') }}</strong></label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

               <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/global/global.min.js" type="text/javascript"></script>
               <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
                <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/chart.js/Chart.bundle.min.js" type="text/javascript"></script>
                <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/svganimation/vivus.min.js" type="text/javascript"></script>
                <script src="https://motaadmin.dexignlab.com/laravel/demo/vendor/svganimation/svg.animation.js" type="text/javascript"></script>
                <script src="https://motaadmin.dexignlab.com/laravel/demo/js/custom.js" type="text/javascript"></script>
                <script src="https://motaadmin.dexignlab.com/laravel/demo/js/deznav-init.js" type="text/javascript"></script>



                <!--  Footer start
***********************************-->
<div class="footer">
  <div class="copyright">
    <p>Copyright © Designed &amp; Developed by <a href="http://vebsigns.com/" target="_blank">Vebsigns Technologies</a> 2021</p>
  </div>
</div>
</body>
</html>
