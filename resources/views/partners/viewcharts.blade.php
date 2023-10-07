@extends('layouts.app')
@section('charts')
  {!! Charts::assets() !!}

@endsection
@section('content')

<!-- Loads all the charts from the controller onto the page -->
 <div class="container" >
  <div style="margin-top: 69px">
    {!! $chart->render() !!}
    <hr />

    <center> <h3>Thu nhập</h3>  </center>

    {!! $chart3->render() !!}

  </div>
</div>



 @endsection
