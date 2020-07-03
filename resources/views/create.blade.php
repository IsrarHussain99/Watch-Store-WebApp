@extends('layouts.app')

@section('content')
<!-- CSS and align-->
<div class="container-sm" style="background-color: #CABE78; border-radius: 50px;">
  <h3 style="text-align:center" >Add New Watch</h3>
    <div class="row">
        <div class="col-sm-12">
          <br><!-- Add New Watch Button-->
        <h1 style="padding-top: 20px; font-family:inherit;">Add New Watch
        <a href="{{ route('home') }}" style="float:right;" class="btn btn-outline-dark pull-right"><i class="fa fa-arrow-left"></i>  Back</a>
        </h1>

        </div>
    </div>
    <form method="post" action="{{ route('store') }}" enctype="application/x-www-form-urlencoded">
        {{ csrf_field() }}
    <div class="row">
      <div class="col-md-4">
        <!-- Name Input-->
          <label for="validationDefault02">Watch Name</label>
          <input type="text" name="Watch_company" class="form-control" id="validationDefault02" placeholder="Watch Name" value="" required>
      </div>
        <div class="col-md-4">
          <!-- Price Input-->
            <label for="ValidationFrm01">Watch Price</label>
            <input type="text" name="Watch_price" class="form-control" id="ValidationFrm01" placeholder="Watch Price" value="" required>
        </div>
        <div class="col-md-4">
          <!-- Color Input-->
            <label for="ValidationFrm01">Watch Color</label>
            <input type="text" name="Watch_color" class="form-control" id="ValidationFrm01" placeholder="Watch Color" value="" required>
        </div>

    </div>
    <br/>
    <div class="row">

        <div class="col-md-4">
          <!-- Release Input-->
            <label for="validationDefaultUsername">Release Year</label>

            <input type="text" name="Watch_year" class="form-control" id="validationDefaultUsername" placeholder="Release Year" aria-describedby="inputGroupPrepend2" required>
        </div>
        <div class="col-md-4">
          <!-- Watch information Input-->
            <label for="validationDefaultUsername">Watch Type</label>
            <input type="text" name="Watch_type" class="form-control" id="validationDefaultUsername" placeholder="Watch Type" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <form action="/action_page.php">
      <!-- Image Uplaod box-->s
  <input type="file" id="myFile" name="image_path">
  <input type="submit">
</form>
    <div class="row">
      <!-- Submit Button Input-->
        <div class="col-md-4" style="padding-bottom: 20px;">
            <button class="btn btn-outline-dark btn-lg btn-block" type="submit">Submit</button>
        </div>
    </div>
    </form>

</div>
@endsection
