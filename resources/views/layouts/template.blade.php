<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="public/style.css">
        <link rel="stylesheet" href="{{asset('/scss/main.scss/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="{{asset('scripts/bootstrap.min.js')}}"></script>
        <script src="{{asset('scripts/jquery-3.6.3.min.js')}}"></script>
        <title>@yield('title')</title>
    </head>
    <body>
        <main>@yield('content')</main>
        <style src="public/scripts/bootstrap.min.js"></style>
    </body>
</html>
