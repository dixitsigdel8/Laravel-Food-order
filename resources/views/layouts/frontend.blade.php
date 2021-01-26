<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  <title> @yield('title')</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @yield('meta')
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{asset('frontend/css/aos.css') }}">

    <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  </head>
  <body>
  @include('frontend.section.top_menu')

    

@yield('section')

    @include('frontend.section.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @include('frontend.section.scripts')

  {!! Toastr::message() !!}
    
  </body>
</html>