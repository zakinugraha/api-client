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
    <link type="text/css" href="{{url('')}}/assets/vendor/simplebar.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{url('')}}/assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="{{url('')}}/assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{url('')}}/assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="{{url('')}}/assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{url('')}}/assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="{{url('')}}/assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

    <!-- ion Range Slider -->
    <link type="text/css" href="{{url('')}}/assets/css/vendor-ion-rangeslider.css" rel="stylesheet">
    <link type="text/css" href="{{url('')}}/assets/css/vendor-ion-rangeslider.rtl.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133433427-1');
</script>


    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '340571383230227');
  fbq('track', 'PageView');
</script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=340571383230227&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->







</head>

<body class="layout-login-centered-boxed">





    <div class="layout-login-centered-boxed__form">
        <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-4 navbar-light">
            <a href="index.html" class="navbar-brand text-center mb-2 mr-0 flex-column" style="min-width: 0">
                <img class="navbar-brand-icon mb-3" src="{{url('')}}/assets/images/logo.svg" width="43" alt="Flat">
                <span>Registrasi Akun</span>
            </a>
        </div>
        <div class="card card-body">

            <form action="/register" method="post" novalidate>
                @csrf
                <div class="form-group">
                    <label class="text-label" for="name_2">Name:</label>
                    <div class="input-group input-group-merge">
                        <input id="name_2" type="text" name="name" required="" class="form-control form-control-prepended" placeholder="Masukan Nama Kamu">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="far fa-user"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label" for="name_2">No Telepon:</label>
                    <div class="input-group input-group-merge">
                        <input id="phone" type="text" name="phone" required="" class="form-control form-control-prepended" placeholder="Masukan No Telepon">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-phone"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label" for="email_2">Email Address:</label>
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
                        <input id="password_2" type="password" name="password" required="" class="form-control form-control-prepended" placeholder="Masukan Password">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-key"></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group text-center">
                    <button class="btn btn-primary mb-2" type="submit">Daftar Sekarang</button><br>
                    <span>Sudah punya akun?</span> <a class="text-body text-underline" href="{{url('/login')}}"> Login</a>
                </div>
            </form>
        </div>
    </div>


    <!-- jQuery -->
    <script src="{{url('')}}/assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{url('')}}/assets/vendor/popper.min.js"></script>
    <script src="{{url('')}}/assets/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <script src="{{url('')}}/assets/vendor/simplebar.min.js"></script>

    <!-- DOM Factory -->
    <script src="{{url('')}}/assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="{{url('')}}/assets/vendor/material-design-kit.js"></script>

    <!-- Range Slider -->
    <script src="{{url('')}}/assets/vendor/ion.rangeSlider.min.js"></script>
    <script src="{{url('')}}/assets/js/ion-rangeslider.js"></script>

    <!-- App -->
    <script src="{{url('')}}/assets/js/toggle-check-all.js"></script>
    <script src="{{url('')}}/assets/js/check-selected-row.js"></script>
    <script src="{{url('')}}/assets/js/dropdown.js"></script>
    <script src="{{url('')}}/assets/js/sidebar-mini.js"></script>
    <script src="{{url('')}}/assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="{{url('')}}/assets/js/app-settings.js"></script>





</body>

</html>