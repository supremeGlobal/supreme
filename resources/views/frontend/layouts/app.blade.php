<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta http-equiv="refresh" content="6"> --}}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <title>@yield('title', 'My Laravel App')</title>
    @include('layouts.head')
    @yield('css')
</head>

<body>
    @include('layouts.header')
   
    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
    @yield('js')
</body>

</html>
