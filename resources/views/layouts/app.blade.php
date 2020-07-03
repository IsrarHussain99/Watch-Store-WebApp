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
      <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/solid.css">

    <!-- Latest compiled and minified CSS -->
</head>

<body style="background-image: url('https://m.rolex.com/content/dam/rolexcom/downloads/wallpapers/1920x1080/wallpaper_yacht-master_m226659-0002_1920x1080.jpg');">

<div id="app">
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
          <h3>The Watch Shop<h3>
      <div>
      <ul class="navbar-nav mr-auto"></ul>
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
        @if (Route::has('register'))
          <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <div >
            <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"class="btn btn-primary" style="background-color:black;color:white;float: right;">
              {{ __('Logout') }} of Account: {{ Auth::user()->name }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            
              @csrf

            </form>

          </div>
            @endguest
        </ul>
        </div>
        </div>
        </nav>
        <div>
        <img  src=/HeaderIMG2.png width="1900" height="1000" align="middle">

        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
