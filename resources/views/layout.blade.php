<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{url('/css/main.css')}}">
        <link rel="stylesheet" href="{{url('/css/style.css')}}">


    </head>
    <body class="antialiased">
        <div class="relative">
            <nav>
                <a href="{{route('home.index')}}">Home</a>
                <a href="{{route('home.about')}}">About</a>
                <a href="{{route('computers.index')}}">Computers</a>
                <a href="{{route('computers.create')}}">Create Item</a>
                <a href="{{route('home.contact')}}">Contact</a>
            </nav>
        </div>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @yield('content')

            </div>
        </div>
    </body>
</html>
