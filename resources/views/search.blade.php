@extends('layouts.app_no_header')

@section('content')
<div class="container-sm" style="background-color: #CABE78; border-radius: 50px;">
  <!--  Title Search Results  -->
  <br>
  <h2 style="text-align:center"><u>Your Search Results</u></h2>
  <br>
  <!--  Back Button  -->
  <a href="{{ route('home') }}" class="btn btn-primary" style="background-color:black;color:white;">Back</a>
  <div class="col-sm-12" style="padding-top: 20px;">
  </div>
  <br />
  <!--  Row  -->

  {{--</div>--}}
  {{--</div>--}}
  <!--  Table (bootstrap dark table)  -->
  <div class="container-sm" style="background-color: #CABE78; border-radius: 50px;">
    <table class="table table-light" style="border-radius: 10px;">
      <thead>
        <tr>
          <!-- Watch Details  -->
          <th></th>
          <th scope="col">ID</th>
          <th scope="col">Watch Name</th>
          <th scope="col">Watch Color</th>
          <th scope="col">Watch Price</th>
          <th scope="col">Watch Year</th>
          <th scope="col">Watch Type</th>
          <!--  edit or delete button -->
          <th scope="col">Edit OR Delete</th>
        </tr>
      </thead>
      <tbody>
        <!--  if there are no results  -->
        @if($Watches->count() > 0)
        @foreach($Watches as $Watch)
        <tr>
          <!--  (below) checks database for watch results   -->
          <!--  icon (icon.png - referenced in reference document)  -->
          <td><img src=/icon.png width="30" height="30"></td>
          <th scope="row">{{ $Watch->id }}</th>
          <td>{{ $Watch->Watch_company }}</td>
          <td>{{ $Watch->Watch_color }}</td>
          <td>{{ $Watch->Watch_price }}</td>
          <td>{{ $Watch->Watch_year }}</td>
          <td>{{ $Watch->Watch_type }}</td>
          <td>
            <a href="{{ route('edit',$Watch->id) }}" class="btn btn-outline-dark">Edit Watch</a>
            <a href="{{ route('delete',$Watch->id) }}" onclick="Alert()" class="btn btn-outline-dark">Delete Watch</a>
          </td>
        </tr>
        @endforeach
        @else
        <tr>
          <!--  no results message  -->
          <td colspan="10" class="btn-info"> No Watch Results Are Found!</td>
        </tr>
        @endif
      </tbody>
    </table>
    <br>

  </div>
</div>

</div>
@endsection
