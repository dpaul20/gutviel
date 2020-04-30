<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    @include('layouts.scripts.js')
    <!-- Fonts -->

    <!-- Styles -->
    @include('layouts.scripts.css')
</head>
<body>
    <div class="container-fluid no-padding">

        @include('layouts.header')

        @include('layouts.menu')
        

        @yield('contenedor')
        
        @include('layouts.footer')

    </div>
</body>
</html>