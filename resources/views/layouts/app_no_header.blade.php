<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.google.com/specimen/Oswald" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
</head>
<body style="background-image: url('https://m.rolex.com/content/dam/rolexcom/downloads/wallpapers/1920x1080/wallpaper_yacht-master_m226659-0002_1920x1080.jpg');">

<div id="app">
  
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
