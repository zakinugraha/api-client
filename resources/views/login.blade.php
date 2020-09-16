<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="{{ url('') }}/assets/vendor/simplebar.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{ url('') }}/assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="{{ url('') }}/assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ url('') }}/assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="{{ url('') }}/assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{ url('') }}/assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="{{ url('') }}/assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

    <!-- ion Range Slider -->
    <link type="text/css" href="{{ url('') }}/assets/css/vendor-ion-rangeslider.css" rel="stylesheet">
    <link type="text/css" href="{{ url('') }}/assets/css/vendor-ion-rangeslider.rtl.css" rel="stylesheet">

</head>

<body class="layout-login-centered-boxed">


    <div class="layout-login-centered-boxed__form">
        <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-2 navbar-light">
            <a href="index.html" class="navbar-brand text-center mb-2 mr-0" style="min-width: 0">
                <img class="navbar-brand-icon" src="assets/images/logo.svg" width="43" alt="Flat">
                <span>Flat</span>
            </a>
        </div>

        <div class="card card-body">

            @if (session('status'))
            <div class="alert alert-soft-success d-flex" role="alert">
                <i class="material-icons mr-3">check_circle</i>
                <div class="text-body">An email with password reset instructions has been sent to your email address, if it exists on our system.</div>
            </div>
            @endif

            <form action="{{url('/post-login')}}" method="post" novalidate>
                @csrf
                <div class="form-group">
                    <label class="text-label" for="email_2">Email:</label>
                    <div class="input-group input-group-merge">
                        <input id="email_2" type="email" name="email" required="" class="form-control form-control-prepended" placeholder="Masukan Email">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="far fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label" for="password_2">Password:</label>
                    <div class="input-group input-group-merge">
                        <input id="password_2" type="password" name="password" required="" class="form-control form-control-prepended" placeholder="Mauskan password">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-key"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Login</button>
                </div>
                <div class="form-group text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" checked="" name="remember" id="remember">
                        <label class="custom-control-label" for="remember">Ingat saya</label>
                    </div>
                </div>
                <div class="form-group text-center">
                    <a href="{{url('/forgot-password')}}">Lupa password?</a> <br>
                    <a class="text-body text-underline" href="{{url('/register')}}">Daftar Sekarang!</a>
                </div>
            </form>
        </div>
    </div>


    <!-- jQuery -->
    <script src="{{ url('') }}/assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{ url('') }}/assets/vendor/popper.min.js"></script>
    <script src="{{ url('') }}/assets/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <script src="{{ url('') }}/assets/vendor/simplebar.min.js"></script>

    <!-- DOM Factory -->
    <script src="{{ url('') }}/assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="{{ url('') }}/assets/vendor/material-design-kit.js"></script>

    <!-- Range Slider -->
    <script src="{{ url('') }}/assets/vendor/ion.rangeSlider.min.js"></script>
    <script src="{{ url('') }}/assets/js/ion-rangeslider.js"></script>

    <!-- App -->
    <script src="{{ url('') }}/assets/js/toggle-check-all.js"></script>
    <script src="{{ url('') }}/assets/js/check-selected-row.js"></script>
    <script src="{{ url('') }}/assets/js/dropdown.js"></script>
    <script src="{{ url('') }}/assets/js/sidebar-mini.js"></script>
    <script src="{{ url('') }}/assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="{{ url('') }}/assets/js/app-settings.js"></script>





</body>

</html>