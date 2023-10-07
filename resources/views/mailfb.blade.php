<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
<div class="form-group">

<p>Xin chào:{{($user->name)}}!</p>
<br>
<p>Thông tin đặt phòng của bạn:</p>
<p>Tên người đặt:{{$reservation->guestName}}</p>
<p>SĐT:{{$reservation->phone}}</p>
<p>Ngày Nhận Phòng:{{ \Carbon\Carbon::parse($reservation->checkIn)->format('d/m/Y')}}.  </p>
<p>Ngày Trả Phòng:{{ \Carbon\Carbon::parse($reservation->checkOut)->format('d/m/Y')}}.   </p>
<p>Tổng Tiền:{{$reservation->totalPrice}}</p>
@if($reservation->statuspayment==0)
<p>Trạng thái thanh toán: Chưa thanh toán</p>
@else
<p>Trạng thái thanh toán: Đã thanh toán</p>
@endif
<p>Cảm ơn bạn đã đặt phòng tại TKK.com</p>
</div>
</body>
</html>