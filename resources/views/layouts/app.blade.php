<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @include('layouts.scripts.js')

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    @include('layouts.scripts.css')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            @include('layouts.header')
        </div>
        <div class="row">
            @include('layouts.menu')
        </div>
        <div class="row">
            @yield('contenedor')
        </div>
        <div class="row">
           @include('layouts.footer')
       </div>
   </div>
</body>
</html>