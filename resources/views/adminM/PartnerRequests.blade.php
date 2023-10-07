@extends('adminM.master')
@section('content')
<div class="col-md-12" style="margin-top: 30px;">
        <div class="panel panel-default" style="border-top-color: #e74c3c;">
            <div class="panel-heading">Yêu cầu của đối tác từ người dùng:</div>
            <div class="panel-body">
      <ul>
        <table class="table">
          <thead>
            <tr>
            <th>Tên công ty</th>
            <th>Email</th>
            <th>Địa chỉ </th>
            <th>Mô tả</th>
            </tr>
          </thead>
          <tbody>
                <!-- Displays a list of all the partner Proposals sent to Check-In.com and an Accept/Refuse Button -->
              @foreach ($Proposals as $Proposal)
                <tr>
                  <td><a class="" href="#">{{$Proposal->CompanyName}}</a></td>
                  <td>{{$Proposal->CompanyEmail}}</td>
                  <td>{{$Proposal->HQAddress}}</td>
                  <td>{{$Proposal->Vision}}</td>
                      <td><a class="btn btn-success " href="/proposal/{{$Proposal->id}}/accept">Chấp nhận</a>
                      <a class="btn btn-danger" style="margin-left :0" href="/proposal/{{$Proposal->id}}/decline">Từ chối</a></td>
                </tr>
              @endforeach
         </tbody>
     </table>
      <a href="/home" class="btn btn-info">Trở về trang chủ.</a>
    </div>
    </div>
    </div> 
@endsection