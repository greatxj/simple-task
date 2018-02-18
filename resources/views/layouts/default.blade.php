<!DOCTYPE html>
<html lang="{{ env('APP_LOCALE') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">

    <link href="{{ asset('css/offcanvas.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
@include('layouts._header')

@yield('content')

@include('layouts._footer')

<!-- jQuery first, then Bootstrap JS. -->
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.js"></script>
</body>
</html>