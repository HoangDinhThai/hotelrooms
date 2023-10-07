@extends('adminM.master') 
@section('content')
<div class="">
  <div class="col-md-12" style="margin-top: 30px;">
    <div class="panel panel-default" style="border-top-color: #e74c3c;">
      <div class="panel-heading">Tất cả đối tác with OYO.com</div>
      <!-- Displays a list of all the partners of Check-In.com and displays a Remove Button next to each -->
      {{-- @foreach ($Partners as $Partner)
      <li class="list-group-item text-center">
        {{$Partner->CompanyName}} <a class="btn btn-sm btn-danger pull-right" href="/partners/{{$Partner->id}}/remove">Remove</a>
      </li> --}}

      <table class="table">
        <thead>
          <tr>
            <th>Tên công ty</th>
          </tr>
        </thead>
        <tbody>
          <!-- Displays a list of all the partner Proposals sent to Check-In.com and an Accept/Refuse Button -->
          @foreach ($Partners as $Partner)
          <tr>
            <td style="line-height: 31px">{{$Partner->CompanyName}} </td>
            <td><a class="btn btn-danger" href="/proposal/{{$Partner->id}}/remove">Xóa</a></td>
          </tr>
          @endforeach
        </tbody> 
      </table>
      {{-- @endforeach --}}
    </div>
    <a href="/home" class="btn btn-info">Trở về trang chủ</a>
  </div>
</div>
@endsection