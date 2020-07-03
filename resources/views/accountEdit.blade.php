@extends('layouts.app_no_header')

@section('content')
<div class="container-sm" style="background-color: #FDCC00; border-radius: 50px;">
  <br>
  <a href="{{ route('home') }}" class="btn btn-outline-dark" style="margin-left: 0%;background-color:black;color:white;">Go Back</a>
  <br>
  <br>
  <h1 style="text-align:center">Edit The User</h1> <br>
  <h6 style="text-align:center">Change the details below to edit the user details</h6>
  <form method="post" action="{{ route('updateAccount') }}">
    <input type="hidden" name="id" value="{{ $User->id }}">
    <!-- csrf protection -->
    {{ csrf_field() }}
    <!-- csrf protection -->
    <label for="ValidationFrm01">User Name</label><br>
    <input type="text" name="name" value="{{ $User->name }}" class="form-control" id="ValidationFrm01" style="float: right;" placeholder="name" value="name" required>
    <!-- release year label and textbox -->
    <label for="validationDefaultUsername">User Email</label><br>
    <input type="text" name="email" value="{{ $User->email }}" class="form-control" id="validationDefaultUsername" style="float: right;" placeholder="email" aria-describedby="inputGroupPrepend2" required>
    <br />

    <!--Upload users image.-->
    <form action="/action_page.php">
      <h5 style="text-align:center">Edit Profile Picture</h5>
      <input type="file" id="myFile" name="profile_image_path">
      <button class="btn btn-outline-dark" style="margin-left: 70%;" type="submit">Update</button><br><br><br>
    </form>

    <br>
  </form>
</div>
@endsection
