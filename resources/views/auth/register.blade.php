@extends('layouts.app')

@section('content')
<div class="container-sm" style="background-color: #CABE78; border-radius: 40px;">
  <br><br>
  <h2 style="margin-left:45%">Register</h2>
<h5 style="margin-left:40%">Register to view collection</h5>
  <br>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 watchapp_col-form-label text-md-right">{{ __('Name') }}</label>
            <div class="col-md-6">
                  <input style="border-radius: 50px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Enter Name</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 watchapp_col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input style="border-radius: 50px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Enter Email</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 watchapp_col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input style="border-radius: 50px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Enter Password</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 watchapp_col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input style="border-radius: 50px;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-3">
                                <button style="width: 100%; border-radius:30px;margin-left:25%"   type="submit" class="btn btn-secondary btn-lg btn-block">Register
                                </button>
                                <br>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                           <label for="name" class="col-md-4 offset-md-5">Register With</label>
                           <div class="col-md-4 offset-md-5">
                               <a href="redirect/facebook" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                               <a href="redirect/twitter" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                               <a href="redirect/google" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>

                           </div>
                           <br>
                           <br>
                       </div>
                    </form>
                </div>

@endsection
