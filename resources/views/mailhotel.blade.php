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

<p>Xin chào:{{($hotel->Name)}}!</p>
<p>Khách sạn bạn vừa nhận được lượt đặt phòng !</p>
<br>
<p>Thông tin đặt phòng như sau: </p>
<p>Tên người đặt:{{$reservation->guestName}}</p>
<p>SĐT:{{$reservation->phone}}</p>
<p>Ngày nhận phòng:{{ \Carbon\Carbon::parse($reservation->checkIn)->format('d/m/Y')}}.  </p>
<p>Ngày trả phòng:{{ \Carbon\Carbon::parse($reservation->checkOut)->format('d/m/Y')}}.   </p>
<p>Tổng tiền:{{$reservation->totalPrice}}</p>   
@if($reservation->statuspayment==0)
<p>Trạng thái thanh toán: Chưa thanh toán</p>
@else
<p>Trạng thái thanh toán: Đã thanh toán</p>
@endif

</div>


</body>
</html>