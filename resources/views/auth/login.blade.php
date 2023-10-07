@extends('layouts.app')
@section('content')
    <style>
        .panel-heading {
            font-size: 30px;
            text-align: center;
            font-family: 'Merienda', cursive;
        }

        .panel-body.form-group{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .remember_password{
            font-size: 20px;
            text-decoration: none;
        }

        #reset_password{
            text-decoration: none;
            font-size: 20px;
            color: #000;
        }

        #reset_password:hover{
            cursor: pointer;
            color: chocolate;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-top: 69px;">
                <div class="panel panel-default" style="border-top-color: #e74c3c;">
                    <div class="panel-heading">ĐĂNG NHẬP</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-mail:</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Mật khẩu:</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label class="remember_password">
                                            <input type="checkbox" name="remember"> Nhớ mật khẩu
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" style="font-size: 20px">
                                        Đăng nhập
                                    </button>

                                    <a id="reset_password" class="btn btn-link" href="{{ url('/password/reset') }}">
                                        Quên mật khẩu?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
