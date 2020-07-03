@extends('layouts.app')

@section('content')
<div class="container-sm" style="background-color: #CABE78; border-radius: 40px;">
  <br><br>
  <h2 style="margin-left:33%">Login To View Our Collection</h2>
  <h4></h4>
  <br>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="row">
      <div class="col-md-5">
        <!-- email address box -->
        <label style="margin-left: 15%" for="email">Email Address</label>
        <input style="margin-left:15%" id="email" type="EmailAddress" class="form-control @error('email') is-invalid @enderror" name="email" value="" autofocus>

        @error('email')
        <br>
        <span class="invalid-feedback" role="alert">
          <!-- wrong emauil or password message -->
          <h6 style="margin-left:15%" class="alert alert-danger"> Wrong Email OR Password </h6>
          <div class="alert alert-info" style="margin-left: 15%">
            <!--  information to login -->
            <h6 style="margin-left:15%"> (Details Below Provided For Testing Purposes (by Israr Hussain)) </h6>
            <h6 style="margin-left:15%"> Email: Test@watch.com </h6>
            <h6 style="margin-left:15%"> Password:12345678 </h6>
          </div>
        </span>
        @enderror
      </div>
      <div class="col-md-5">
        <!-- password input -->
        <label style="margin-left: 25%" for="password" class="watchapp_col-md-4 watchapp_col-form-label text-md-right">{{ __('Password') }}</label>
        <input style="margin-left: 25%" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <!-- password wrong message -->
          <h6 style="margin-left:15%" class="alert alert-danger"> Wrong Email OR Password </h6>
          <h6 style="margin-left:15%"> Email: Test@watch.com Password:12345678 (Only Provided For Assignment Purposes) </h6>
        </span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
    </div>
    <div>
      <div class="form-group">
        <!-- SocialButtons added - April 24th -->
        <label for="name" class="col-md-4 control-label">Login With</label>
        <div class="col-md-6">
          <a href="redirect/facebook" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
          <a href="redirect/twitter" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
          <a href="redirect/google" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
        </div>
      </div><br>
    </div>
    <div class="form-group row mb-0">
      <div>
        <!-- Login button-->
        <button style="width: 100%; border-radius:30px;margin-left:386%" type="submit" class="btn btn-secondary btn-lg btn-block">{{ __('Login') }}</button>
        <!-- Register button-->
        <a href="{{ route('register') }}" class="btn btn-secondary btn-lg btn-block" style="margin-left: 386%;background-color:black;color:white; ">Register</a>
        @if(Route::has('password.request'))<a href="{{ route('password.request') }}" class="btn btn-secondary btn-md btn-block" style="margin-left:386%">Reset Password</a>
        <br>

        @endif
      </div>
      <br>
    </div>

  </form>
</div>


@endsection
