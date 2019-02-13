<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
        <link href="{{ asset('css/app.css') }}" media="all" rel="stylesheet" type="text/css" />
        <!-- <script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script> -->      

        <title>@yield('title', 'Home')</title>

    </head>
    <body>

        <h1>Home</h1>

        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/projects">Projects</a></li>
        </ul>

        @yield('content')
       
    </body>
</html>
