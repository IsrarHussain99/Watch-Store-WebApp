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
                <div>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    sendmail();
                    @csrf
                  </form>
                </div>
                @endguest


                <!-- DROPDOWN CART BUTTONS -->
                <div class="dropdown">
                  <button type="button" class="btn btn-primary" style="background-color:black;color:white; " data-toggle="dropdown">
                    <i></i> Cart</button>
                  <div class="dropdown-menu">
                    <h5>Your Cart</h5>
                    <!-- PHP TO CALCULATE TOTAL PRICE IN CART-->
                    <?php
                              $totalCost= 0;
                              foreach($Watches as $Watch)
                              {
                                if($Watch->InCart == '1')
                                {
                              $value = $Watch->Watch_price;
                              $priceAsInt = (int) $value;
                               $totalCost+= $priceAsInt;
                              }
                              }
                              ?>

                    <div class="card" style="margin-bottom: auto; margin-right: auto; height: auto;">
                      <!-- ALL WATCHES IN CART ARE IN LIST AND CARD LAYOUT. -->
                      <!-- GETS ALL WATCHES -->
                      @foreach($Watches as $Watch)
                      <!-- ONLY GETS WATCHES WITH INCART VALUE OF 1 (TO SEE IF THE WATCH IS IN CART!) -->
                      @if($Watch->InCart == '1')
                      <div class="card-body" style="width: 18rem;">
                        <a>
                          <h14 class="card-title">{{ $Watch->Watch_company }}</h14>
                          <h10> -- {{ $Watch->Watch_color }}</h10>
                        </a>
                        <p><b>£{{ $Watch->Watch_price }}</b></p>

                        <form action="{{  route('remove',$Watch->id) }}" method="GET">
                          {{ csrf_field() }}

                          <div class="row">
                            <!-- remove item button-->
                            <button class="btn btn-secondary btn-sm" style="width: 18rem;" title="Remove">
                              <i></i> Remove Item
                            </button>
                          </div>

                        </form>
                      </div>
                      @endif
                      @endforeach
                      <!-- Total Cost Text -->
                      <h14 class="card-title" style="color:black;margin-left:20%;">Total Cost: <b>£{{ $totalCost }}</b></h14>
                    </div>
                  </div>
                </div>
                <div>
                </div>

                <!-- dropdown for account-->
                <div class="container">
                  <div class="dropdown">

                    <button type="button" class="btn btn-primary" style="background-color:black;color:white;" data-toggle="dropdown">
                      <!--  Account box -->
                      <i aria-hidden="true"></i>My Account<span></span>
                      <!-- this shows user account profile-->
                      <td><img src="{{ Auth::user()->profile_image_path }}" width="20" height="20"></td>
                    </button>
                    <div class="dropdown-menu">
                      <!--title-->
                      <h3><b>Your Profile</b></h3>
                      <td><img src="{{ Auth::user()->profile_image_path }}" width="250" height="250"></td>
                      <a>
                        <!-- shows users name in dropdown-->
                        <h4><b>{{ Auth::user()->name }}</b></h4>
                      </a>
                      <!-- dropdown for account-->


                      <tr>
                        <a href="{{ route('accountEdit',Auth::user()->id) }}" class="btn btn-secondary btn-sm" style="margin-left: 15px;">Edit My Account</a>
                        <br></br>
                        <div>
                          <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-primary btn-sm" style="margin-left: 20px;">Logout</a>
                        </div>
                        <br></br>
                      </tr>
                      <div class="card-footer" style="background-color: white;">
                        <div class="row">
                          <!-- title -->
                          <h7>The Watch Shop<h7>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </ul>
            </div>
      </div>
    </nav>
    <div>
      <img src=/HeaderIMG2.png width="1900" height="1000" align="middle">

    </div>
    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>

</html>
