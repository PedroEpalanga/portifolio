<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon-1.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/ajax/libs/font-awesome/6.4.2/css/all.min-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets//ajax/libs/remixicon/3.6.0/remixicon-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swap-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boostrap.min-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media_query-1.css') }}">
</head>

<body>

    @yield('content')

    <script src="{{ asset('assets/javascript/jquery.min-1.js') }}"></script>
    <script src="{{ asset('assets/javascript/magnific-popup.min-1.js') }}"></script>
    <script src="{{ asset('assets/javascript/progresscircle-1.js') }}"></script>
    <script src="{{ asset('assets/javascript/cursor-1.js') }}"></script>
    <script src="{{ asset('assets/javascript/bootstrap.bundle.min-1.js') }}"></script>
    <script src="{{ asset('assets/javascript/slick.min-1.js') }}"></script>
    <script src="{{ asset('assets/javascript/hexagon_animation/particles.min.js') }}"></script>
    <script src="{{ asset('assets/javascript/spider_animation/spider_animation.js') }}"></script>
    <script src="{{ asset('assets/javascript/script-1.js') }}"></script>
</body>

</html>
