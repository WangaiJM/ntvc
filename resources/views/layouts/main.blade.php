<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('icon-font.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body>
    @include('./../includes/header')

    @yield('content')

    @include('./../includes/footer')
</body>
</html>