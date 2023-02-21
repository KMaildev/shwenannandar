<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shwe Nan Nandar Co.,Ltd @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.webp') }}">
    <!-- Font Family CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.min.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    @include('layouts.menu')
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            @if (URL::current() == route('home') || URL::current() == route('welcome'))
                @include('layouts.slider')
            @endif
            @yield('content')
        </div>

        @include('layouts.footer')
    </div>

    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>

    <!-- wow JS -->
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>

    <!-- Swiper Slider JS -->
    <script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>

    <!-- Light gallery JS -->
    <script src="{{ asset('assets/js/plugins/lightgallery.min.js') }}"></script>

    <!-- Waypoints JS -->
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>

    <!-- Counter down JS -->
    <script src="{{ asset('assets/js/plugins/countdown.min.js') }}"></script>

    <!-- Isotope JS -->
    <script src="{{ asset('assets/js/plugins/isotope.min.js') }}"></script>

    <!-- Masonry JS -->
    <script src="{{ asset('assets/js/plugins/masonry.min.js') }}"></script>

    <!-- ImagesLoaded JS -->
    <script src="{{ asset('assets/js/plugins/images-loaded.min.js') }}"></script>

    <!-- Wavify JS -->
    <script src="{{ asset('assets/js/plugins/wavify.js') }}"></script>

    <!-- jQuery Wavify JS -->
    <script src="{{ asset('assets/js/plugins/jquery.wavify.js') }}"></script>

    <!-- circle progress JS -->
    <script src="{{ asset('assets/js/plugins/circle-progress.min.js') }}"></script>

    <!-- counterup JS -->
    <script src="{{ asset('assets/js/plugins/counterup.min.js') }}"></script>

    <!-- animation text JS -->
    <script src="{{ asset('assets/js/plugins/animation-text.min.js') }}"></script>

    <!-- Vivus JS -->
    <script src="{{ asset('assets/js/plugins/vivus.min.js') }}"></script>

    <!-- Some plugins JS -->
    <script src="{{ asset('assets/js/plugins/some-plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    @yield('script')
</body>

</html>
