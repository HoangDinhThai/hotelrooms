@extends('layouts.app')

@section('content')
    @unless ($UsersRole->role_id == 2)

        <style>
            .panel-heading {
                font-size: 30px;
                text-align: center;
                font-family: 'Merienda', cursive;
            }

            .panel-body .list-group {
                text-align: center;
                font-weight: bold;
                font-family: 'Montserrat', sans-serif;
            }
        </style>

        <!-- Displays the Partners Dashboard -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
                    <div class="panel panel-default" style="border-top-color: #e74c3c;">
                        <div class="panel-heading">TRANG CHỦ</div>
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="/partners/{{ $Partner->id }}/yourhotels" class="list-group-item">Khách sạn của bạn</a>
                                <a href="/partners/{{ $Partner->id }}/newhotel" class="list-group-item">Thêm một khách sạn
                                    mới</a>
                                @if ($PartnerHotels > 0)
                                    <a href="/partners/{{ $Partner->id }}/graphs" class="list-group-item">Xem thống kê khách
                                        sạn</a>
                                @endif
                            </div>
                        </div>
                        <div class="panel-footel text-center", style="font-family: 'Montserrat', sans-serif; font-weight:bold;   margin-bottom: 10px" >
                            Xin chào {{ $UsersRole->RoleName }} - {{ $Partner->CompanyName }}</div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@else
    <h1> No Way.</h1>
@endunless
