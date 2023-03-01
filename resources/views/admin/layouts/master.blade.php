<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="CryptoDash admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, CryptoDash Cryptocurrency Dashboard Template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="ThemeSelection">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('bcnd/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('bcnd/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i|Comfortaa:300,400,500,700" rel="stylesheet">
 
    <link rel="stylesheet" type="text/css" href="{{ asset('bcnd/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bcnd/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bcnd/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('bcnd/css/app.css') }}">
  
    <link rel="stylesheet" type="text/css" href="{{ asset('bcnd/css/core/menu/menu-types/vertical-compact-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bcnd/vendors/css/cryptocoins/cryptocoins.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('bcnd/css/pages/timeline.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bcnd/css/pages/dashboard-ico.css') }}">
   
    <link rel="stylesheet" type="text/css" href="{{ asset('bcnd/assets/css/style.css') }}">
    
  </head>
  <body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
    
    @include('admin.layouts.nav')
    @include('admin.layouts.side')
    @yield('content')

    <footer class="footer footer-static footer-transparent">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; <script>
          document.write(new Date().getFullYear())
          </script> <a class="text-bold-800 grey darken-2" href="https://themeselection.com/" target="_blank">ThemeSelection </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer>
    
    <script src="{{ asset('bcnd/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
 
    <script src="{{ asset('bcnd/vendors/js/charts/chartist.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bcnd/vendors/js/charts/chartist-plugin-tooltip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bcnd/vendors/js/timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
    
    <script src="{{ asset('bcnd/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bcnd/js/core/app.js') }}" type="text/javascript"></script>
   
    <script src="{{ asset('bcnd/js/scripts/pages/dashboard-ico.js') }}" type="text/javascript"></script>

  </body>
</html>