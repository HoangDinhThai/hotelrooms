<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <title>DataTables example - Bootstrap 4</title>

    <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/dataTables.bootstrap4.css')}}">
    <style type="text/css" class="init">
    </style>
    <!-- script -->
     <script type="text/javascript" language="javascript" src="{{URL::asset('/js/jquery-3.3.1.js')}}"></script>
     <script type="text/javascript" language="javascript" src="{{URL::asset('/js/jquery.dataTables.js')}}"></script>
     <script type="text/javascript" language="javascript" src="{{URL::asset('/js/dataTables.bootstrap4.js')}}"></script>

    <script type="text/javascript" language="javascript" class="init">
$(document).ready(function() {
    $('#example').DataTable();
} );

    </script>
</head>
<body>



<h2 style="margin-top:70 px;">Danh Sách Đặt Phòng của {{$Hotel->Name}}:</h2>
<a class="btn btn-default pull-right" href="/home" style="">Trở về</a>
</button>

<table id="example" class="table table-striped table-bordered" style="width:100%">

                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Khách:</th>
                        <th>SĐT</th>
                        <th>Ngày Nhận Phòng</th>
                        <th>Ngày Trả Phòng</th>
                        <th>Tổng Giá</th>
                        <th>Trạng Thái</th>
                        <th>Ngày Đặt</th>
                        <th>Thao Tác</th>
                       
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                    ?>
                @foreach ($Reservations  as $Reservation)
               
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$Reservation->guestName}}</td>
                        <td>{{$Reservation->phone}}</td>
                        <td>{{ \Carbon\Carbon::parse($Reservation->CheckIn)->format('d/m/Y')}}</td>
                        <td>{{ \Carbon\Carbon::parse($Reservation->CheckOut)->format('d/m/Y')}}</td>
                        <td>{{$Reservation->totalPrice}}VNĐ</td>
                        @if($Reservation->statuspayment==0)
                        <td>Chưa Thanh Toán</td>
                        @else
                        <td>Đã Thanh Toán</td> 
                        @endif
                        <td>{{ \Carbon\Carbon::parse($Reservation->created_at)->format('d/m/Y')}}</td>
                        <td>
                       
                        <a class="btn btn-sm btn-danger pull-right" onclick="return confirm('Bạn Có Muốn Hủy?')" href="/reservations/{{$Reservation->id}}/cancel">Hủy Đặt Phòng</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            
</body>
</html>
