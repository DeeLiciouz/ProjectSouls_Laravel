<?php

function isSecure()
{
    return
        (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || $_SERVER['SERVER_PORT'] == 443;
}

?>
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js', isSecure()) }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css', isSecure()) }}" rel="stylesheet">
    <link href="{{asset('css/ps_app.css', isSecure())}}" rel="stylesheet">

    <!-- Title -->
    <title>{{ config('app.name') }}</title>
</head>
<body>
<div id="app">
    @include('modules.nav.topnav')
    <main class="container-fluid align-items-center m-0 p-0">
        @yield('content')
    </main>
</div>
</body>
</html>
