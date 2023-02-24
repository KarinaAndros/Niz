<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="{{ asset("js/jquery-3.6.3.min.js") }}"></script>

    <title>@yield('title')</title>
</head>
<body>
<header>@include('layouts.navigation')</header>
<main>@yield('content')</main>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
