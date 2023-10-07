@extends('layouts.app')
@section('content')
<div>
<div class="row">
  <div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
      <div class="panel panel-default" style="border-top-color: #e74c3c;">
        <div class="panel-heading" style="height: 49px">Chỉnh sửa khach sạn <a class="btn btn-default pull-right" href="/yourhotels/{{$hotel->id}}/dashboard">Trở về</a></div>
        <div class="panel-body">
        <form method="POST" action="/yourhotels/edit/{{$hotel->id}}" enctype="multipart/form-data">
  {{ csrf_field()}}
  {{ method_field('PATCH')}}

    <div class="form-group">
      <label for="namebox" class="col-2 col-formabel">Tên khách sạn:</label>
      <div class="col-10">

        <input class="form-control" name="Name" type="text" value="{{$hotel->Name}}" id="namebox">

      </div>
    </div>


    <div class="form-group">
      <label for="Addressbox" class="col-2 col-form-label">Địa chỉ:</label>
      <div class="col-10">

        <input class="form-control" name="Address" type="text" value="{{$hotel->Address}}" id="Addressbox">
      </div>
    </div>

    <div class="form-group">
      <label for="Countybox" class="col-2 col-form-label">Quận :</label>
    <div class="col-8">
        {{Form::select('County',$array,$quancam,array('class' => 'form-control'))}}
    </div>
  </div>
  <div class="row" style="margin-left:5px;">
      <div class="form-group">
          <label for="Facilitybox" class="col-2 col-form-label">Tiện ích hiện có:</label>
        <div class="row">
          @foreach ( $fas as $key => $fa )
            <span style="padding-left: 15px;"><input name="namet[]" type="checkbox" value="{{$fa->id}}" checked=""  readonly=""> {{$fa->name }}</span>
          @endforeach 
        </div>
      </div>
  </div>
  <div class="row" style="margin-left:5px;">
      <div class="form-group">
          <label for="Facilitybox" class="col-2 col-form-label">Tiện ích :</label>
        <div class="row">
          @foreach ( $facilities as $key => $fa )
            <span  style="padding-left: 15px;"><input  name="names[]" type="checkbox" value="{{$fa->id }}"> {{$fa->name }}</span>
          @endforeach 
        </div>
      </div>
  </div>

    <div class="form-group">
      <label for="Telbox" class="col-2 col-form-label">Số điện thoại:</label>
      <div class="col-10">

        <input class="form-control" name="TelephoneNumber" type="text" value="{{$hotel->TelephoneNumber}}" id="Telbox">
      </div>
    </div>

    <div class="form-group">
        <input type="hidden" value="imag.jpg" name="ImagePath" />
        <label for="imagebox" class="col-2 col-form-label">Hình nhỏ:</label>
          <p>Hình thu nhỏ hiện tại: {{$hotel->thumbnail->path}}</p>
        <div class="col-10">

        <input  name="displaypic" type="file" value="{{$hotel->thumbnail->path}}" id="imagebox">
      </div>
    </div>

    <div class="form-group">
      <label for="Descbox" class="col-2 col-form-label">Mô tả:</label>
      <div class="col-10">

        <input class="form-control" name="description" type="text" value="{{$hotel->description}}" id="Descbox">
     </div>
   </div>

   <button type="submit" class="btn btn-primary">Sửa khách sạn</button>
   <a class="btn btn btn-danger pull-right" href="/yourhotels/destroy/{{$hotel->id}}">Xóa</a>
</form>
        </div>
        </div>
        </div>
<hr>
  <!-- Change the rooms provided at the hotel -->
    <div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
        <div class="panel panel-default" style="border-top-color: #e74c3c;">
          <div class="panel-heading" style="height: 49px">Phòng:</div>
          <div class="panel-body">
          <table class="table">
    <thead>
      <tr>
      <th>Loại</th>
      <th></th>
      <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($hotel->rooms as $room)
        <tr>
          <td><a class="" href="#">{{$room->RoomType}}:</a></td>
          <td></td>
          <td><a class="btn btn-default pull-right" href="/rooms/{{$room->id}}/edit">Chỉnh sửa phòng</a></td>
          <td><a class="btn btn-danger pull-right" href="/rooms/{{$room->id}}/discard">Xóa phòng</a></td>

        </tr>

      @endforeach
    </tbody>
</table>
<hr>
<!-- Adding a new Room -->
<h3>Thêm mới phòng</h3>
<form method="POST" action="/yourhotels/{{$hotel->id}}/rooms">
  {{ csrf_field()}}
  <div class="form-group">
      <label for="roomtypebox" class="col-2 col-form-label">Loại phòng:</label>
    <div class="col-10">
      <input class="form-control" name="RoomType" type="text"  id="roomtypebox">
    </div>
  </div>
  <div class="form-group">
      <label for="capacitybox" class="col-2 col-form-label">Sức chứa:</label>
    <div class="col-10">
      <input class="form-control" name="Capacity" type="text"  id="Addressbox">
    </div>
  </div>
  <div class="form-group">
      <label for="bedsbox" class="col-2 col-form-label">Loại giường:</label>
    <div class="col-10">
      <input class="form-control" name="BedOption" type="text"  id="bedsbox">
    </div>
  </div>
  <div class="form-group">
      <label for="pricebox" class="col-2 col-form-label">Giá: (vnd)</label>
    <div class="col-10">
      <input class="form-control" name="Price" type="text"  id="pricebox">
    </div>
  </div>
  <div class="form-group">
      <label for="viewbox" class="col-2 col-form-label">View:</label>
    <div class="col-10">
      <input class="form-control" name="View" type="text"  id="viewbox">
    </div>
  </div>
  <div class="form-group">
      <label for="totalroombox" class="col-2 col-form-label">Số phòng:</label>
    <div class="col-10">

      <input class="form-control" name="TotalRooms" type="text"  id="totalroombox">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Thêm phòng</button>
</form>
<!-- End Adding a New room -->
<!-- Add Photos, View  and Delete Photos -->
<hr>
<h1>Hình ảnh:</h1>
<table class="table">
  <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col"></th>
        </tr>
  </thead>
    <tbody>
@foreach ($hotel->photos as $photo)
<tr>
    <td><img class="img-thumbnail" style="height: 120px;width: 120px;" src="{{$photo->path}}"/><a class="btn btn btn-danger pull-right text-center" href="/{{$hotel->id}}/{{$photo->id}}/destroy">Xóa</a> </td>
</tr>
    @endforeach
</tbody>
</table>
  <hr />
  <a href="/{{$hotel->id}}/photos" class="btn btn-primary">Thêm hình ảnh</a>
</div>
</div>
</div>
@endsection
