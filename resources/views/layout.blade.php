<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Laracast lessons')</title>
</head>
<body>

<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/contact">Contact page</a></li>
    <li><a href="/about">About us</a></li>
    <li><a href="/projects">Projects</a></li>
    <li><a href="/projects/create">Create new projects</a></li>
</ul>

@yield('content')


</body>
</html>
