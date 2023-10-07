@extends('adminM.master')
@section('content')
<div class="panel-heading">Thêm tiện ích</div>
    <div class="panel-body">
<!-- A form to collect all the Hotel Details when the Partner sets up a new Hotel.-->
  <form method="POST"  action="{admin}/facilityadd" enctype="multipart/form-data">
    {{ csrf_field()}}
      <div class="form-group">
        <div class="col-md-4 col-md-offset-2">
          <label for="namebox" class="col-2 col-form-label">Tên tiện ích:</label>
          <input class="form-control" name="Name" type="text" value="" id="namebox">
          <button type="submit" class="btn btn-primary">Thêm</button>
          <a class="btn btn-default pull-right" href="/home">Trở về</a>
        </div>
      </div>
  </form>
  <div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
        <div class="panel panel-default" style="border-top-color: #e74c3c;">
            <div class="panel-heading">Danh sách tiện ích</div>
            <div class="panel-body">
      <ul>
        <table class="table">
          <thead>
            <tr>
            <th>Tên tiện ích</th>
            </tr>
          </thead>
          <tbody>
                <!-- Displays a list of all the partner Proposals sent to Check-In.com and an Accept/Refuse Button -->
              @foreach ($Facility as $facility)
                <tr>
                  <td>{{$facility->name}}</td>  
                      <td><a class="btn btn-danger pull-right" href="destroy/{{$facility->id}}"> Xóa </a></td>
                </tr>
              @endforeach
         </tbody>
     </table>
      <a href="/home" class="btn btn-info">Trở về trang chủ.</a>
    </div>
    </div>
    </div> 
</div>
</div>
@endsection