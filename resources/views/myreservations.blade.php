@extends('layouts.app')

@section('content')
  <a class="btn btn-default pull-right" href="/home">Trở về</a>
  <div class="row">
      <div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
          <div>
              @if (session('status'))
               <div class="alert alert-success">{{session('status')}}</div>
           @endif
          </div>
          <div class="panel panel-default" style="border-top-color: #e74c3c;">
              <div class="panel-heading">Lịch sử đặt chỗ: </div>
              <div class="panel-body">
        <br />
        
<!-- Loads all of the Current users reservations in a list and displays all  the details -->
        @foreach ($reservations  as $reservation)
        <a class="btn btn-sm btn-danger pull-right"onclick="return confirm('Bạn Có Muốn Hủy?')" href="/reservations/{{$reservation->id}}/cancel">Hủy Dặt Phòng</a>
        <a class="btn btn-sm btn-default pull-right "href="/reservations/{{$reservation->id}}/pdf">Xem chi tiết</a>
          <h5><u> {{$reservation->room->hotel->Name}}</u></h5>
          <p><mark>Loại phòng :</mark> {{$reservation->room->RoomType}}.  </p>
          <p><mark>Tên khách :</mark>  {{$reservation->guestName}}</p>
          <p><mark>SĐT :</mark>  {{$reservation->phone}}</p>
          <p><mark>Ngày nhận phòng :</mark> {{ \Carbon\Carbon::parse($reservation->CheckIn)->format('d/m/Y')}}.  </p>
          <p><mark>Ngày trả phòng:</mark> {{ \Carbon\Carbon::parse($reservation->CheckOut)->format('d/m/Y')}}.   </p>
          <p><mark>Tổng giá :</mark> {{$reservation->totalPrice}} vnd.  </p>
          @if($reservation->statuspayment==0)
            <p><mark>Trạng Thái :</mark>Chưa Thanh Toán</p>
          @else
           <p><mark>Trạng Thái :</mark>Đã Thanh Toán</p>
          
          @endif
          <hr />
        @endforeach

      </div>
      </div>
      </div>
    </div>
@endsection
