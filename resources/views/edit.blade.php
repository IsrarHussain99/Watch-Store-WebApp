@extends('layouts.app')

@section('content')
<div class="container-sm" style="background-color: #CABE78; border-radius: 50px;">
  <br>
  <a href="{{ route('home') }}" class="btn btn-outline-dark" style="margin-left: 0%;background-color:black;color:white;">Go Back</a>
  <br>
  <br> <h1 style="text-align:center" >Edit The Watch</h1> <br>
  <h6 style="text-align:center" >Change the details below to edit the watch</h6>
  <form method="post" action="{{ route('update') }}">
      <input type="hidden" name="id" value="{{ $Watch->id }}">
        <!-- csrf protection -->
      {{ csrf_field() }}
      <!-- csrf protection -->
          <label for="ValidationFrm01">Watch Price</label><br>
          <input type="text" name="Watch_price" value="{{ $Watch->Watch_price }}" class="form-control" id="ValidationFrm01" style="float: right;" placeholder="Watch Price" value="Watch Price" required>
          <!-- release year label and textbox -->
          <label for="validationDefaultUsername">Release Year</label><br>
          <input type="text" name="Watch_year" value="{{ $Watch->Watch_year }}" class="form-control" id="validationDefaultUsername" style="float: right;" placeholder="Release Year" aria-describedby="inputGroupPrepend2" required>
          <br/>
            <!-- Watch color label and textbox -->
          <label for="ValidationFrm01">Watch Color</label>
          <br>
          <input type="text" name="Watch_color" value="{{ $Watch->Watch_color }}" class="form-control" id="ValidationFrm01" style="float: right;" placeholder="Watch Color" value="" required>
            <!-- Watch name label and textbox -->
          <label for="validationDefault02">Watch Name</label><br>
          <input type="text" name="Watch_company" value="{{ $Watch->Watch_company }}" class="form-control" id="validationDefault02" style="float: right;" placeholder="Watch Name" value="" required>
            <!-- Watch type label and textbox -->
          <label for="validationDefaultUsername">Watch Type</label><br>
          <input type="text" name="Watch_type" value="{{ $Watch->Watch_type }}" class="form-control" id="validationDefaultUsername" style="float: right;" placeholder="Watch Type" aria-describedby="inputGroupPrepend2" required><br/>

  <!-- form for image path. -->
          <form action="/action_page.php">
          <input type="file" id="myFile" name="image_path">

          <br>
        <button class="btn btn-outline-dark" style="margin-left: 70%;" type="submit">Update</button><br><br><br>
          </form>

<br>      <!-- Watch update label and textbox -->
  </form>
</div>
@endsection
