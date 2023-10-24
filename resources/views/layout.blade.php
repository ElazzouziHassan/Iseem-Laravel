<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel app | @yield('title')</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
    }
    nav{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 7vh;
        width: 100%;
        background-color: rgb(26, 26, 69);
    }
    ul{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }
    li{
        padding: 5px;
        
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        font-weight: bold;
    }
    li a{
        color: whitesmoke;
    }
</style>
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
