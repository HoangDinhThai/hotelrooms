@extends('layouts.app') 
@section('content')
<div class="row">
    <div style="margin-top: 69px">
       @if (session('status'))
        <div class="alert alert-info">{{session('status')}}</div>
    @endif
    </div>
</div>
@endsection