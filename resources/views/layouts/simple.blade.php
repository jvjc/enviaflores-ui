<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Application')</title>
    @vite('resources/scss/app.scss')
</head>
<body>
<h1>Package layout</h1>

@yield('content')

@vite('resources/js/app.js')
</body>
</html>
