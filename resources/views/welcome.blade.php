<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <div class="head">
            <nav>
                <ul>
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/user/HASSAN') }}">User</a></li>
                    <li><a href="{{ url('/test/20') }}">Test Page</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <h1 style="color: white; font-size:50px; font-weight:bolder">Welcome to this laravel app</h1>
        </div>
    </body>
</html>

