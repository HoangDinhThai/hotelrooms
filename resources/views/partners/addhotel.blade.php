
@extends('layouts.app')
@section('content')

<div class="row">
    
<div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
  <div class="panel panel-default" style="border-top-color: #e74c3c;">
    <div class="panel-heading">Thêm khách sạn</div>
    <div class="panel-body">
<!-- A form to collect all the Hotel Details when the Partner sets up a new Hotel.-->
  <form method="POST" id="msform" action="/hotels/{{$partner->id}}/add" enctype="multipart/form-data">
    {{ csrf_field()}}
      <div class="form-group">
          <label for="namebox" class="col-2 col-form-label">Tên khách sạn:</label>
        <div class="col-8">
          <input class="form-control" name="Name" type="text" value="" id="namebox">
        </div>
      </div>
      <div class="form-group">
          <label for="Addressbox" class="col-2 col-form-label">Tên đường: </label>
        <div class="col-8">
          <input class="form-control" name="Address" type="text" value="" id="Addressbox">
        </div>
      </div>
      <div class="form-group">
          <label for="Countybox" class="col-2 col-form-label">Quận :</label>
        <div class="col-8">
            <select  name="County" class="form-control">
              @foreach ( $array as $county=>$quan )
                <option value="{{$quan}}">{{$quan}}</option>
              @endforeach 
            </select>
        </div>
      </div>
      <div class="row" style="margin-left:5px;">
        <div class="form-group">
            <label for="Facilitybox" class="col-2 col-form-label">Tiện ích :</label>
          <div class="row">
            @foreach ( $facilities as $key => $name )
              <span style="padding-left: 15px;"><input name="name[]" type="checkbox" value="{{$key }}"> {{$name }}</span>
            @endforeach 
          </div>
        </div>
    </div>
      <div class="form-group">
          <label for="Telbox" class="col-2 col-form-label">Điện thoại:</label>
        <div class="col-8">
          <input class="form-control" name="TelephoneNumber" type="number" value="" id="Telbox">
        </div>
      </div>

      <!-- Thumbnail is Uploaded Here.-->
      <div class="form-group">
          <label for="imagebox" class="col-2 col-form-label">Hình ảnh:</label>
        <div class="col-8">
          <input type="hidden" value="imag.jpg" name="ImagePath" />
          <input type="file"  name="displaypic"  id="imagebox" required>
        </div>
      </div>

      <div class="form-group">
          <label for="Descbox" class="col-2 col-form-label">Mô tả:</label>
        <div class="col-8">

          <textarea class="form-control" name="description" type="text" value="" id="Descbox"></textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Thêm khách sạn</button>
      <a class="btn btn-default pull-right" href="/home">Trở về</a>
  </form>
</div>
</div>
</div>
</div>
@endsection

