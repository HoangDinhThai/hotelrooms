@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
        <div class="panel panel-default" style="border-top-color: #e74c3c;">
            <div class="panel-heading">Chỉnh sửa phòng</div>
            <div class="panel-body">
  <!--Form for a Partner to edit a room in their hotel -->
  <form method="POST" action="/rooms/{{$room->id}}/edit">
    {{ csrf_field()}}
    {{ method_field('PATCH')}}

    <div class="form-group">
      <label for="roomtypebox" class="col-2 col-form-label">Loại phòng :</label>
      <div class="col-10">

        <input class="form-control" name="RoomType" type="text" value="{{$room->RoomType}}"  id="roomtypebox">

      </div>
    </div>

    <div class="form-group">
      <label for="capacitybox" class="col-2 col-form-label">Sức chứa:</label>
      <div class="col-10">

        <input class="form-control" name="Capacity" type="text" value="{{$room->Capacity}}"  id="Addressbox">
      </div>
    </div>

    <div class="form-group">
      <label for="bedsbox" class="col-2 col-form-label">Loại giường:</label>
      <div class="col-10">

        <input class="form-control" name="BedOption" type="text" value="{{$room->BedOption}}" id="bedsbox">
      </div>
    </div>

    <div class="form-group">
      <label for="pricebox" class="col-2 col-form-label">Giá: (vnd)</label>
      <div class="col-10">

        <input class="form-control" name="Price" type="text" value="{{$room->Price}}" id="pricebox">
      </div>
    </div>

    <div class="form-group">
      <label for="viewbox" class="col-2 col-form-label">View:</label>
      <div class="col-10">

        <input class="form-control" name="View" type="text" value="{{$room->View}}" id="viewbox">
      </div>
    </div>

    <div class="form-group">
      <label for="totalroombox" class="col-2 col-form-label">Số phòng:</label>
      <div class="col-10">
        <input class="form-control" name="TotalRooms" type="text" value="{{$room->TotalRooms}}" id="totalroombox">
      </div>
    </div>
    <a class="btn btn-default pull-right" href="/yourhotels/edit/{{$room->hotel_id}}">Trở về</a>
    <button type="submit" class="btn btn-primary">Sửa</button>

  </form>
</div>
</div>
</div>
@endsection
