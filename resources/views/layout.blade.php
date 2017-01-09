<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.meta-tags')
        @yield('title')
        <link rel="stylesheet" href="/assets/fonts/font.css">
        <link rel="stylesheet" href="/assets/css/app.css">
        <link rel="apple-touch-icon" href="/assets/img/touch_icon.png">
    </head>
    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
        <script src="/assets/js/app.js"></script>
        <script src="/assets/js/report.js" charset="utf-8"></script>
    </body>
</html>
