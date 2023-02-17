<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/imp.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/custom-animate.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/scrollbar.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/hiddenbar.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/icomoon.css') }}">
    <!-- Module css -->
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/module-css/header-section.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/module-css/banner-section.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/module-css/about-section.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/module-css/blog-section.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/module-css/fact-counter-section.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/module-css/faq-section.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/module-css/contact-page.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/module-css/breadcrumb-section.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/module-css/team-section.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/module-css/partner-section.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/module-css/testimonial-section.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/module-css/footer-section.css') }}">

    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/color.css') }}">
    <link href="{{asset('Theme/frontTemp/assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/rtl.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('Theme/frontTemp/assets/css/responsive.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('Theme/frontTemp/assets/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('Theme/frontTemp/assets/images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('Theme/frontTemp/assets/images/favicon/favicon-16x16.png')}}" sizes="16x16">
</head>
<body>
    <div id="app">



            @yield('content')

    </div>
</body>

<script src="{{asset('Theme/frontTemp/assets/js/jquery.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/aos.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/appear.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/isotope.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/jquery.countTo.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/jquery.enllax.min.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/jquery.paroller.min.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/jQuery.style.switcher.min.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/knob.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/map-script.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/owl.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/pagenav.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/parallax.min.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/scrollbar.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/slick.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/timePicker.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/validation.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/wow.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('Theme/frontTemp/assets/js/jquery-sidebar-content.js')}}"></script>


<!-- thm custom script -->
<script src="{{asset('Theme/frontTemp/assets/js/custom.js')}}"></script>
</html>
