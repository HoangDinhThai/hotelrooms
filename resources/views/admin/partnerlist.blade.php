@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
                    <div class="panel panel-default" style="border-top-color: #e74c3c;">
                <div class="panel-heading">Tất cả đối tác với TKK.com</div>
                <!-- Displays a list of all the partners of Check-In.com and displays a Remove Button next to each -->
                    @foreach ($Partners as $Partner)
                      <li class="list-group-item text-center">
                        {{$Partner->CompanyName}} <a class="btn btn-sm btn-danger pull-right" href="/partners/{{$Partner->id}}/remove">Remove</a>
                      </li>

                    @endforeach

              </div>

              <a href="/home" class="btn btn-info">Back to Dashboard.</a>

          </div>
      </div>
  </div>

@endsection
