<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

       <!-- Generics -->
  <link rel="icon" href="{{ asset('assets/images/favicon/favicon-32.png')}}" sizes="32x32">
  <link rel="icon" href="{{ asset('assets/images/favicon/favicon-128.png')}}" sizes="128x128">
  <link rel="icon" href="{{ asset('assets/images/favicon/favicon-192.png')}}" sizes="192x192">

  <!-- Android -->
  <link rel="shortcut icon" href="a{{ asset('ssets/images/favicon/favicon-196.png')}}" sizes="196x196">

  <!-- iOS -->
  <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/favicon-152.png')}}" sizes="152x152">
  <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/favicon-167.png')}}" sizes="167x167">
  <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/favicon-180.png')}}" sizes="180x180">

  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    </head>
    <body>

            {{ $slot }}
        
        <!-- Scripts -->
    <script src="{{ asset('assets/js/vendor.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>
