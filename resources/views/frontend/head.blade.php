<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    @yield('metas')


    <script> window.Laravel = { csrfToken: ' csrf_token()'}</script>
    <!-- Page Title -->
    <title>Feel - Blog</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <!-- Cube Portfolio -->
    <link rel="stylesheet" href="{{asset('css/cubeportfolio.min.css')}}">
    <!-- Fancy Box -->
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/navigation.css')}}">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
                <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157328180-1"></script>
            

</head>

<script src="https://kit.fontawesome.com/e2c9ee503e.js" crossorigin="anonymous"></script>

<script type="text/javascript">
      window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157328180-1');


    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
 <script
    type="text/javascript"
    async defer
    src="//assets.pinterest.com/js/pinit.js"
></script>

</head>

