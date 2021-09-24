<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('asset_website/img/favicon.png')}}" rel="icon">
    <link href="{{asset('asset_website/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('asset_website/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset_website/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset_website/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset_website/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('asset_website/css/responsive.css')}}" rel="stylesheet">

    <link href="{{asset('asset_website/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset_website/svg/icomoon/style.css')}}" rel="stylesheet">

    @yield('head')

</head>

<body>

    <!-- ======= Header ======= -->
   @include('layout.website.include.header')


   @include('layout.website.include.navbar')

    <!-- End Header -->


    <main>

       @yield('content')

        @include('layout.website.include.footer')


    </main>




    <script src="{{asset('asset_website/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset_website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asset_website/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('asset_website/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset_website/js/main.js')}}"></script>

    @yield('scripts')

</body>

</html>