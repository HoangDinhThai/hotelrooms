@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
      <div class="panel panel-default" style="border-top-color: #e74c3c;">
          <div class="panel-heading">Đối tác với OYO.com</div>
          <div class="panel-body">
<!-- List All the Hotels belonging to the Signed in partner , Linking to the Hotel Dashboard of each Hotel -->
      <div class="list-group">
          @foreach ($Hotels as $Hotel)
            <a href="/yourhotels/{{$Hotel->id}}/dashboard" class="list-group-item">{{$Hotel->Name}}</a>
          @endforeach
      </div>
      <hr>
      <a class="btn btn-default pull-right" href="/home">Trở về</a>
  </div>
  </div>
  </div>

@endsection
