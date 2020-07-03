@extends('layouts.app_home')

@section('content')
<div class="container-sm" style="background-color: #CABE78; border-radius: 50px;">
  <br>
  <h1 style="text-align:center">Search The Watch Collection</h1>
  <h6 style="text-align:center">Search for a watch by Name,Color,Year</h6>
  <!-- Form -->
  <form method="post" action="{{ route('search') }}">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-sm-4">
        <!-- Watch Name label and textbox -->
        <label for="validationDefault01">Watch Name</label>
        <input type="text" name="Watch_company" class="form-control" id="validationDefault01" style="float: right;" placeholder="Watch Name" value="">
      </div>
      <br>
      <div class="col-sm-4">
        <!-- Watch Color label and textbox -->
        <label for="validationDefault02">Watch Color</label>
        <input type="text" name="Watch_color" class="form-control" id="validationDefault02" style="float: right;" placeholder="Watch Color" value="">
      </div>
      <div class="col-sm-4">
        <!-- Release Year label and textbox -->
        <label for="validationDefaultUsername">Release Year</label>
        <input type="text" name="Watch_year" class="form-control" id="validationDefaultUsername" style="float: right;" placeholder="Release Year" aria-describedby="inputGroupPrepend2">
      </div>
    </div>
    <br />
    <button class="btn btn-dark  btn-lg btn-block" type="submit">Search</button>

    <br><br />
    <!--  Heading  -->
    <h3>Current Available Watches</h3>
    <!--  Heading  -->
    <h6>All Available Watches Are Shown Below</h6>
  </form>
  <br />
  <div>
    <!--  Session Status Check  -->
    @if (session('status'))
    <!--  Alert  -->
    <div class="alert alert-info" role="alert">
      {{ session('status') }}
    </div>
    @endif
    <!--  Logged In Message  -->
    {{--You are logged in!--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!--  Container 2 - for table length  -->
    <div class="container" style="background-color: #CABE78  ; border-radius: 50px;">
      <!-- Table Setup -->

      <div class="row">
        @foreach($Watches as $Watch)
        <div class="card" style="margin-bottom: 20px;  margin-left: 15px; height: auto;">
          <br> <img src="{{ $Watch->image_path }}" class="card-img-top mx-auto" style="height: 250px; width: 250px;display: block;" alt="{{ $Watch->image_path }}">
          <div class="card-body">
            <a href="">
              <h6 class="card-title">{{ $Watch->Watch_company }}</h6>
            </a>
            <p>£{{ $Watch->Watch_price }}</p>
            <form action="{{ route('add',$Watch->id) }}" method="GET">
              {{ csrf_field() }}
              <tr>
                <td><img src=/icon.png width="30" height="30"></td>
                <td>{{ $Watch->Watch_color }}</td>
                <td><br><br>
                  <!--  Edit Button  -->
                  <a href="{{ route('edit',$Watch->id) }}" class="btn btn-primary" style="background-color:black;color:white;">Edit Watch</a>
                  <!--  Delete Button  -->
                  <a href="{{ route('delete',$Watch->id) }}" onclick="Alert()" class="btn btn-primary" style="background-color:black;color:white;">Delete Watch</a>
                </td>
              </tr>
              <div class="card-footer" style="background-color: white;">
                <div class="row">
                  <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                    <i class="fa fa-shopping-cart"></i> Add to cart
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <br>
        @endforeach
      </div>

      <!-- Add Watch button -->
      <a href="{{ route('create') }}" class="btn btn-primary" style="margin-left: 40%;background-color:black;color:white; ">Add New Watch + </a>

        <a href="{{ route('sendmail') }}" class="btn btn-primary" style="margin-left: 40%;background-color:black;color:white; ">Send Me an Email! </a>
      <br><br><br>
      <!--  BELOW IS the script and the delete watch confirmation -->
      {{--</div>--}}
      <script>
        function Alert() {
          var question = confirm('delete this watch?');
          if (question == true) {
            return true;
          } else {
            return false;
          }
        }
      </script>
      @endsection
