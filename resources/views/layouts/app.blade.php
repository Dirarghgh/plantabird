<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Plantabird : L’expert en phytothérapie chez les oiseaux</title>
        <!-- /SEO Ultimate -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta charset="utf-8">
        <link rel="icon" type="image/png"  href="./assets/images/favicon/favicon.ico">
        <link rel="manifest" href="./assets/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/favicon.ico">
        <meta name="theme-color" content="#ffffff">
        <!-- Latest compiled and minified CSS -->
        <link href="{{ asset('assets/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('./assets/js/bootstrap.min.js')}}">
        <!-- Font Awesome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!-- StyleSheet link CSS -->
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/mediaqueries.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    </head>
    <body >
        <!-- Responsive navbar-->
        <!--  navbar -->
        @include('layouts.navbar')
 
        @yield('content')

        @include('layouts.footer')
        <!-- Latest compiled JavaScript -->
        <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
        <script src="{{asset('assets/js/carousel.js')}}"></script>
        <script src="{{asset('assets/js/counter.js')}}"></script>
        <script src="{{asset('assets/js/animation.js')}}"></script>
        <script src="{{asset('assets/js/video-popup.js')}}"></script>
        <script src="{{asset('assets/js/video-section.js')}}"></script>
        <script src="{{asset('assets/js/remove-product.js')}}"></script>
        <script src="{{asset('assets/js/scroll.js')}}"></script>
    </body>
</html>