<?php

function isSecure() {
    return
        (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || $_SERVER['SERVER_PORT'] == 443;
}

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $page_title ?? 'Project Souls' }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/layout.css', isSecure()) }}" rel="stylesheet">
</head>
<body>
<div class="flex-col position-ref full-height">
    @include('modules.nav.topnav')
    <div id="content" class="flex-center full-height">
        @yield('content')
    </div>

</div>

<!-- Scripts -->


</body>
</html>
