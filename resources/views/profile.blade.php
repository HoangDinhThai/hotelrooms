@extends('layouts.app') 
@section('content')
<a class="btn btn-default pull-right" href="/home">Trở về</a>
<div class="row">
    <div class="col-md-8 col-md-offset-2" style="margin-top: 69px">
        @if (Session::has('success'))
        <div style="">
            <div class="alert alert-success" role="alert">
                <strong>Thông báo: </strong> {{ Session::get('success') }} và đang chờ phê duyệt
            </div>
        </div>
        @endif
    </div>
    {{--
    <div class="col-md-6" style="margin-top: 9px">
        <div class="panel panel-default" style="border-top-color: #e74c3c;">
            <div class="panel-heading">Thông tin cá nhân :</div>
            <div class="panel-body">
                <p> Tên : {{$proposal->fname}} {{$proposal->lname}}
                    <p>
                        <p> Số điện thoại : 0{{$proposal->phone_number}}</p>
                        <p> Thẻ ngân hàng : {{$proposal->card}}</p>
                        <p> Chức vụ trong công ty : {{$proposal->card}}</p>
            </div>
        </div>
    </div> --}}
    <div class="col-md-10 col-md-offset-1" style="margin-top: 9px">
        <div class="panel panel-default" style="border-top-color: #e74c3c;">
            <div class="panel-heading">Thông tin đối tác:</div>
            <div class="panel-body">
                <img src="{{URL::asset('upload/'.$proposal->ImagePath)}}" width="100%" height="310px" alt="" srcset="">
                <h3 style="text-align: center"> {{$proposal->CompanyName}}</h3>
                <p><label> Email khách sạn: </label> {{$proposal->CompanyEmail}}</p>
                <p><label> Địa chỉ: </label>{{$proposal->HQAddress}}</p>
                <p><label> Mô tả: </label>{{$proposal->Vision}}</p>
                <p><label> Tên: </label>{{$proposal->fname}} {{$proposal->lname}}</p>
                <p><label> Số điện thoại: </label> 0{{$proposal->phone_number}} @if ($proposal->verified) (Đã xác thực) @else
                    (Chưa xác thực) @endif
                </p>
                <p><label> Thẻ ngân hàng:</label> {{$proposal->card}}</p>
                <p><label> Chức vụ trong công ty: </label> {{$proposal->cv}}</p>
            </div>
        </div>
    </div>
</div>
@endsection