<style>
  .text {
    margin: 0px 0px 8px 1px
  }

  #star {
    padding-top: 16px;
  }

  .panel-body .text {
    font-size: 14px;
    color: #8f8f8f;
    font-weight: 500;
    line-height: 14px;
    text-transform: capitalize;
  }

</style>
@extends('layouts.app') 
@section('content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('/engine1/style.css') }}" />
<script type="text/javascript" src="{{URL::asset('/engine1/jquery.js') }}"></script>
<div style="margin:auto">
  <div class="row">
    <div class="col-md-6 " style="margin-left: 3%">
      <div id="wowslider-container1" style="margin: 0;">
        <div style="position: absolute; z-index: 1000; color: white; text-shadow: 1px 0px black; margin-left: 50px;bottom: 45px">
          <span style="font-weight: bolder; font-size: 30px" class="name-of-hotel">{{ $hotel->Name }}</span><br/>
          <div style="font-size: 15px">
            <span class="glyphicon glyphicon-star" style="color:yellow"></span>
            <span class="glyphicon glyphicon-star" style="color:yellow"></span>
            <span class="glyphicon glyphicon-star" style="color:yellow"></span>
            <span class="glyphicon glyphicon-star" style="color:yellow"></span>
          </div>
          <div style="font-size: 15px">
            <span class="glyphicon glyphicon-map-marker"></span>
            <span class="address-of-hotel">
                      {{ $hotel->Country}} |  {{ $hotel->City}}
            </span>
          </div>
        </div>
        <div class="ws_images">
          <ul>
            @foreach ($hotel->photos as $Photo)
            <li>
              <img src="{{$Photo->path}}" alt="" title="" id="{{$Photo->id}}" /></li>
            @endforeach
          </ul>
        </div>
        <div class="ws_bullets">
          <div>
          </div>
        </div>
        <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.8</div>
        <div class="ws_shadow"></div>
      </div>
      <div class="panel panel-primary" style="margin-top: 1%;    margin-right: 18px;">
        <div class="panel-heading">
          <h3 class="panel-title">Chi tiết khách sạn:</h3>
        </div>
        <div class="panel panel-body">
          <dl class="row" style="font-size: 15px;">
            <dt class="col-sm-5">Đánh giá người dùng đặt phòng:</dt>
            <dd class="col-sm-7">
              <img src="{{$starPath}}" />
              <b>{{$Rating}}%</b>
            </dd>
            <dt class="col-sm-5">Địa chỉ:</dt>
            <dd class="col sm-7">
              {{ $hotel->Address}}
            </dd>
            <dt class="col-sm-5">Tiện Ích:</dt>
            <dd class="col sm-7">
              @foreach($hotel->facilitys as $value)
                 <span style="border: solid 1px #CC99CC;">{{ $value->name}}</span>
              @endforeach
            </dd>
            <dt class="col-sm-5">Số điện thoại:</dt>
            <dd class="col sm-7">
              {{ $hotel->TelephoneNumber}}
            </dd>
            
          </dl>
        </div>
      </div>
    </div>
    <div class="col-md-5" style="margin-top: 69px">
      @foreach ($hotel->rooms as $Room) 
      @if ($Room->spaceleft > 0)
      <div class="panel panel-default" style="border-top-color: #e74c3c; margin-bottom: 8px;">
        <div class="panel-body text">
          <div>
            <div style="float: left;height: 112px;width: 112px; display: block">
              <img style ="height: 112px;width: 112px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCCs_tQ3TPtvVr4R2LnmLZlWzROHVX2UnwGg&usqp=CAU"></div>
            <div style="float:left   ; width: 56%;">
              <p class="text"><b>{{$Room->RoomType}}</b></p>
              <p class="text"><img src="{{URL::asset('/images/succhua.svg') }}" alt="" style="display: inline-block;
                vertical-align: middle;
                height: 14px;
                width: auto;"> {{$Room->Capacity}} Khách</p>
              <p class="text"><svg fill="currentColor" stroke="none" style="display: inline-block;vertical-align: middle;height: 14px;width: auto;"
                  class="_1ztFV" height="24" stroke-linecap="round" viewBox="0 0 24 24" width="24"><path d="M22 19a.999.999 0 0 1 1 1c0 .552-.44 1-1.002 1H2.002A.999.999 0 0 1 1 20c0-.552.44-1 1.002-1H20v-2.5c0-1.379-1.118-2.5-2.492-2.5H6.492c-.812 0-1.535.393-1.99 1h13.497c.553 0 1.001.444 1.001 1 0 .552-.445 1-1 1H4a1 1 0 1 1-2 0v-.49c0-1.564.794-2.943 2-3.752V3.995C4 3.445 4.444 3 5 3c.552 0 1 .456 1 .995V5c.836-.628 1.876-1 3.004-1h6.002c1.123 0 2.16.372 2.994.999V3.995c0-.55.444-.995 1-.995.552 0 1 .456 1 .995v8.761a4.5 4.5 0 0 1 2 3.744V19zM6 9.267c.292-.17.63-.267.99-.267h4.02c.361 0 .7.096.992.265A1.97 1.97 0 0 1 12.991 9h4.018c.361 0 .7.096.991.264V9a3 3 0 0 0-2.994-3H9.004A3 3 0 0 0 6 9v.267zM16.99 11s-3.981 0-3.98-.001V12s3.981 0 3.98.001V11zM11 11l-4-.001V12l4 .001V11z"></path></svg>               
                   {{$Room->BedOption}}</p>
              <p class="text">{{$Room->View}}.</p>
              <p class="text">Giá : {{$Room->Price}} vnd</p>
            </div>
            <div style="padding-top: 34px;float: left;width: 20%;height: 121px;">
              <a href="/book/{{$hotel->id}}/{{$Room->id}}" class="btn" style="float: right;background-color: #f96d01;float: right;
                color: white;
                font-family: inherit;">Đặt ngay</a>
              <p style="padding-top: 45px;color: #f34646;font-size: 9px;font-weight: 700;text-align: center;">{{$Room->spaceleft}} phòng còn trống</p>
            </div>
          </div>
        </div>
      </div>
      @endif 
      @endforeach
    </div>
  </div>
  <div style="margin-left: 3%">
    <h4>Nhận xét:</h4>
    <table class="table">
      <thead>
        <tr>
          <th>Người dùng</th>
          <th>Bình luận</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($hotel->reviews as $Review)
        <tr>
          <td><a class="" href="#">{{$Review->user->name}}:</a></td>
          <td>{{$Review->comment}}</td>
          @if ($Review->user_id == Auth::id())
          <td><a class="btn btn-default pull-right" href="/reviews/{{$Review->id}}/edit">Chỉnh sửa</a></td>
          <td><a class="btn btn-danger pull-right" href="/reviews/{{$Review->id}}/destroyreview">Xóa</a></td>
          @else
          <td></td>
          <td></td>
          @endif
        </tr>
        @endforeach
      </tbody>
    </table>
    <hr> @if ($RecentBooking == true)
    <h4>Thêm nhận xét</h4>
    <form method="POST" action="/hotels/{{$hotel->id}}/reviews">
      {{ csrf_field()}}
      <div class="form-group">
        <textarea name="comment" class="form-control">{{ old('comment')}}</textarea>
        <label>Đánh giá sao:</label><input type="hidden" name="rating" class="rating" data-stop="100" data-step="20" />
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Thêm nhận xét</button>
      </div>
    </form>
    @endif @if (count($errors))
    <ul>
      @foreach ($errors->all() as $error)
      <div class="list-group">
        <li class="list-group-item list-group-item-action list-group-item-danger">
          {{$error}}
        </li>
        @endforeach
      </div>
    </ul>
    @endif
  </div>
</div>
<script type="text/javascript" src="{{URL::asset('engine1/wowslider.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('engine1/script.js') }}"></script>
<script src="/js/bootstrap-rating.js" type="text/javascript"></script>
<script>
  $('.autoplay').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows:false,
        infinite: true,
        speed: 1000,
        fade: true,
        cssEase: 'linear'

      });
</script>
@endsection