@extends('layouts.app')
@section('content')
  <div class="row">
      <div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
          <a class="btn btn-default pull-right" href="/home" style="">Trở về</a>
          <div class="panel panel-default" style="border-top-color: #e74c3c;">
              <div class="panel-heading">Khách Sạn</div>
              <div class="panel-body">
    <!-- Displays Each Hotel as a "Card" and a button to visit the hotels page. -->
    @foreach ($Hotels as $Hotel)
      <div class="card">
        <div>
          <img class="card-img-top" style="height: 170px; width: 100%; padding: 7px" src="{{$Hotel->thumbnail->path}}" alt="Card image">
        </div>
        <div class="card-block">
          <h4 class="card-Title">{{ $Hotel->Name}}</h4>
          <p class ="card-text">{{$Hotel->description}}</p>
       </div>
        @if (Auth::check())
          <a href="/hotels/{{$Hotel->id}}" class="btn btn-primary" style="float: right;margin: 0px 10px 5px 10px;">Xem</a>
           @else
            <a href="/login" class="btn btn-primary" style="float: right;margin: 0px 10px 5px 10px;">Xem</a>
          @endif 
       </div>
  @endforeach
</div>
  </div>
</div>
@endsection
