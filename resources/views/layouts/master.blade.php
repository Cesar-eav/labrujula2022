<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

    <link rel="stylesheet" href="//unpkg.com/leaflet/dist/leaflet.css" />
    <script src="//unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="//unpkg.com/vue2-leaflet"></script>

    <title>La Brújula</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="https://unpkg.com/fast-image-zoom@7.0.1/dist/fast-image-zoom.js"></script>

<body>

    <div id="app">

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

    </div>

</body>

</html>
