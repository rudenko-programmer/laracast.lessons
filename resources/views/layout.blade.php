<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <style>
        .is-completed{
            text-decoration: line-through;
        }
    </style>
    <title>@yield('title', 'Laracast lessons')</title>
</head>
<body>
<div class="container">
    <nav class="navbar">
        <div class="navbar-start">
            <a class="navbar-item" href="/">Home</a>
            <a class="navbar-item" href="/contact">Contact page</a>
            <a class="navbar-item" href="/about">About us</a>
            <a class="navbar-item" href="/projects">Projects</a>
            <a class="navbar-item" href="/projects/create">Create new projects</a>
        </div>
    </nav>

</div>
<div class="container">
    @yield('content')
</div>
<script src="{{ mix('/js/manifest.js') }}"></script>
<script src="{{ mix('/js/vendor.js') }}"></script>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
