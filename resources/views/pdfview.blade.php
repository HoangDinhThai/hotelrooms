<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Hotels') }}</title>

    <!-- Styles -->
    <style>

        <?php include(public_path().'/css/app.css'); ?>
    </style>
  </head>
  <body>
    <div class="row">
      <div class="col-md-6 col-md-offset-1">
        <div class="container">
          <center>
            <!-- Displays the Hotel Details -->
            <div class="panel panel-default">
              <div class="panel-heading"><h1>Đặt Phòng</h1></div>
              @foreach ($reservation as $showdetails)
                <div class="panel-body">
                  <div><img  src="{{ URL::asset($hotelphoto->path)}}"></div>
                  <h3><b>{{$hotel->Name}}  </b></h3>
                  <p>{{$hotel->description}}</p>
                  <p>Địa chỉ: {{$hotel->Address}} , {{$hotel->City}} , {{$hotel->Country}}.</p>
                  <p>Liên Hệ: {{$hotel->TelephoneNumber}}</p>
                </div>
            </div>
              <!-- Displays the Booking Details such as Room name etc.. -->
            <div class="panel panel-default">
              <div class="panel-heading"><h3>Chi tiết đặt phòng</h3></div>
                <div class="panel-body">
                    <p><b>Tên khách:</b>{{$showdetails->guestName}} </p>
                    <p><b>Ngày Nhận phòng::  </b>{{\Carbon\Carbon::parse($showdetails->CheckIn)->format('d/m/Y')}}  / <b>Ngày trả phòng:  </b>  {{\Carbon\Carbon::parse($showdetails->CheckOut)->format('d/m/Y')}}</p>
                    <p><b>Tên phòng:</b> {{$showdetails->room->RoomType}}</p>
                    <p><b>Giường được cung cấp:</b> {{$showdetails->room->BedOption}}</p>
                    <p><b>Phong cảnh:</b> {{$showdetails->room->View}}</p>
                    <p><b>Tổng giá:</b>{{$showdetails->totalPrice}} vnd</p>
                </div>
            </div>
              <!-- Uses the City that the hotel is located in to pull a map from Google-->
            <div class="panel panel-default">
                <div class="panel-footer">Tận hưởng kì nghỉ của bạn tại {{$hotel->City}} !</div>
            </div>
            </center>
          @endforeach
      </div>
    </div>
    </div>
  </body>
  </html>
