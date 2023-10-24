<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | Test view</title>
</head>
<body>
    <h1>Test view page</h1>
    @if ($numbre > 0)
        <h2>{{ $numbre }} is greatter than 0</h2>
    @else
        <h2>{{ $numbre }} is less than 0</h2>
    @endif
</body>
</html>
