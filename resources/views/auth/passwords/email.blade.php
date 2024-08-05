
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
<div class="container">
   <!--  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> -->
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
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
</body>
</html>