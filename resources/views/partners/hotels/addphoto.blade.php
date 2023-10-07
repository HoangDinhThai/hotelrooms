@extends('layouts.app')
@section('content')
  <!-- A Drop Upload Container , where the user can Drop photos During the creation of a hotel  which will be uploaded to a hotel -->
  <div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
  <div class="panel panel-default" style="border-top-color: #e74c3c;">
    <div class="panel-heading"> Thêm hình ảnh</div>
    <div class="panel-body">
      <form action="/{{$CurrentHotel->id}}/photos" class="dropzone">
          {{ csrf_field()}}
      </form>
  <a href="/home" class="btn btn-primary">Tiếp tục</a>
</div>
</div>
</div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@endsection
