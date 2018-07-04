<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Motawer">
    <meta name="keywords" content="Easy Setup - Support">
    <meta name="author" content="_nK">
    <meta name="google-site-verification" content="SMgQK1lFa1-X302zzXi1yKd-bLNlX4smBdAhAf_oKcg" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>مُطور - @yield('title')</title>
    <link rel="shortcut icon" type="image/icon" href="{{ asset('img/favicon.png') }}"/>
    <!-- Styles -->
	<!-- START: Styles -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700%7cOpen+Sans:400,400italic,600" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/ionicons/css/ionicons.min.css') }}">
    <!-- Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/css/navigation.css') }}">
    <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/flickity/dist/flickity.min.css') }}">
    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/photoswipe/dist/default-skin/default-skin.css') }}">
    <!-- DateTimePicker -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/datetimepicker/build/jquery.datetimepicker.min.css') }}">
    <!-- Prism -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/prism/themes/prism-tomorrow.css') }}">
    <!-- Khaki -->
    <link rel="stylesheet" href="{{ asset('assets/css/khaki.min.css') }}">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom-typography-app-2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/fonts/JANNALT-REGULAR.tif') }}">

    <!-- END: Styles -->
    <!-- jQuery -->
    <script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-48958097-5', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body dir="rtl">