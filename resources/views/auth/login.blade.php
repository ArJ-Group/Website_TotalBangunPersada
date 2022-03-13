<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Total Bangun Persada</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="icon" href="logreg/new/logo.png">

    <link rel="stylesheet" type="text/css" href="{!! asset('logreg/new/vendor/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('logreg/new/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('logreg/new/vendor/animate/animate.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('logreg/new/vendor/css-hamburgers/hamburgers.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('logreg/new/vendor/animsition/css/animsition.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('logreg/new/vendor/select2/select2.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('logreg/new/vendor/daterangepicker/daterangepicker.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('logreg/new/css/util.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('logreg/new/css/main.css') !!}">


</head>

<body style="color:#010173 ;">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <span class="login100-form-logo">
                    <img src="logreg/new/logo.png"></img>
                </span>
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    {{ csrf_field() }}
                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="focus-input100">
                            <i class="fa fa-user" aria-hidden="true"><span class="focus-input100"></i>

                        </span>
                    </div>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" required placeholder="Password">
                        <span class="focus-input100">
                            <i class="fa fa-lock" aria-hidden="true"><span class="focus-input100"></i>

                        </span>
                    </div>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif

                    <div class="contact100-form-checkbox">
                        <input type="checkbox" name="remember-me"> Remember Me

                    </div>
                    <div class="container-login100-form-btn">
                        
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>


                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="#" onclick="myFunction1()">
                            Doesn't Have Account ?
                        </a><br>
                        <a class="txt1" href="#" onclick="myFunction1()">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <script>
        function myFunction1() {
            alert("Silahkan Mengubungi Administrasi");
        }
    </script>

    <script src="logreg/new/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="logreg/new/vendor/animsition/js/animsition.min.js"></script>

    <script src="logreg/new/vendor/bootstrap/js/popper.js"></script>
    <script src="logreg/new/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="logreg/new/vendor/select2/select2.min.js"></script>

    <script src="logreg/new/vendor/daterangepicker/moment.min.js"></script>
    <script src="logreg/new/vendor/daterangepicker/daterangepicker.js"></script>

    <script src="logreg/new/vendor/countdowntime/countdowntime.js"></script>

    <script src="logreg/new/js/main.js"></script>


    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>