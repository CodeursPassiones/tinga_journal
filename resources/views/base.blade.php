<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tinga</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href={{ asset('assets/apple-touch-icon.png') }}>




    <link rel="icon" href={{ asset('assets/images/favicon.png') }} type="image/x-icon">
    <link rel="stylesheet" href={{ asset('assets/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/normalize.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/fontawesome/fontawesome-all.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/linearicons.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/themify-icons.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/owl.carousel.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/chartist.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/main.css') }}>
    @yield('style')
    <link rel="stylesheet" href={{ asset('assets/css/color.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/transitions.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/responsive.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/custom.css') }}>

    <script src={{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}></script>

</head>

<body class="sj-home @auth sj-userlogin @endauth">
    <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
    @include('partials.preloader')
    <!--************************************
   Wrapper Start
 *************************************-->
    <div id="sj-wrapper" class="sj-wrapper">
        <!--************************************
    Content Wrapper Start
  *************************************-->
        <div class="sj-contentwrapper">
            @include('partials.header')
            @yield('banner')

            <!--************************************
     Main Start
   *************************************-->
            <main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">


                @yield('web-content')

            </main>
            <!--************************************
     Main End
     *************************************-->
            @include('partials.footer')
        </div>
        <!--************************************
    Content Wrapper End
  *************************************-->
    </div>
    <!--************************************
   Wrapper End
 *************************************-->











    @include('partials.search')
    <script src={{ asset('assets/js/vendor/jquery-3.3.1.js') }}></script>
    <script src={{ asset('assets/js/vendor/jquery-library.js') }}></script>
    <script src={{ asset('assets/js/vendor/bootstrap.min.js') }}></script>
    <script src={{ asset('assets/js/owl.carousel.min.js') }}></script>
    <script src={{ asset('assets/js/circle-progress.js') }}></script>
    <script src={{ asset('assets/js/scrollbar.min.js') }}></script>
    <script src={{ asset('assets/js/chartist.min.js') }}></script>
    <script src={{ asset('assets/js/countdown.js') }}></script>
    <script src={{ asset('assets/js/appear.js') }}></script>
    <script src={{ asset('assets/js/main.js') }}></script>
    <script src="{{ asset('assets/js/custom/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom/axios.min.js') }}"></script>
    <script src="{{ asset('app-js/modules.js') }}"></script>
    @stack('js')
</body>

</html>
