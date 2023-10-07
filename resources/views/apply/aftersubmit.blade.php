@extends('layouts.app') 
@section('content')
<div>

  <div class="col-md-8 col-md-offset-2" style="margin-top: 69px">
    @if (Session::has('error'))
    <div style="margin-top: 31px">
      <div class="alert alert-success" role="alert">
        <strong>Thông báo:</strong> {{ Session::get('error')}}
      </div>
    </div>
    @endif
    <div class="panel panel-default" style="border-top-color: #e74c3c;">
      <div class="panel-heading">Đối tác với OYO.com </div>
      <div class="panel-body">
        {{--
        <p> --}} {{-- {{$request->CompanyName}} - Chúng tôi cảm ơn bạn đã chọn OYO.com làm Đối tác đặt chỗ trực tuyến của bạn.
          Chúng tôi sẽ nhanh chóng xem xét đơn đăng ký của bạn và thông báo cho bạn về phản hồi của chúng tôi. --}} {{--
          <input type="text" placeholder="Nhập mã được gởi vào điện thoại">
          <input type="submit" value="Xác nhận"> --}}
          <form action="{{route('user-verify')}}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
              <input type="text" class="form-control" name="token" id="" required>
            </div>
            <button type="submit" class="btn btn-primary">Xác minh mã thông báo</button>
          </form>
          <hr>
          <form action="{{route('user-verify-resend')}}" method="post">
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-primary">Resend code</button>
          </form>
          {{--
          <form action=" {{route('user-verify-resend')}} " method="post">
            {!! csrf_field() !!}
            <button type="submit" class="btn">Gửi lại mã</button>
          </form> --}}
          <a href="/home">Trở về trang chủ</a>
      </div>
    </div>
  </div>
@endsection