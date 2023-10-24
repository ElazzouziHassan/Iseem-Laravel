<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel app | @yield('title')</title>
</head>
<body>
    <div class="head">
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('post') }}">Post</a></li>
                <li><a href="{{ url('user') }}">User</a></li>
                <li><a href="{{ url('test') }}">Test</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">footer</div>
</body>
</html>
