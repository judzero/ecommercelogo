<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <h1>This is Nav</h1>
    </nav>
    @yield('content')
    <footer>
        <h2>Footer</h2>
    </footer>
</body>
</html>