<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=PT+Sans:ital,wght@1,400;1,700&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet">
<style>
    <style>.dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .booking {
        text-decoration: none;
        font-family: 'Merienda', cursive;
        font-size: 15px;
        color: #CDB38B;
    }

    .booking:hover {
        cursor: pointer;
        color: #FFCC00;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        font-size: 12px;
        display: none;
        position: absolute;
        background-color: #bdc3c7;
        height: auto;
        width: 110px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        left: -10px;
        right: -20px;
        top: 60px;
    }

    #right-header a {
        color: black;
    }

    #right-header div {
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
    }

    .dropdown{
        margin-right: 10px;
    }

    .dropdown-content {
        width: 170px;
        margin-right: 50px;
    }

    .dropdown-content a {
        color: black;
        text-align: center;
        color: #4CAF50;
        text-decoration: none;
        display: block;
        height: 30px;
        line-height: 30px;
    }

    .dropdown-content a:hover {
        background-color: #0366d6;
    }

    .dropdown:hover .dropdown-content {
        display: block;
        color: #4CAF50;
    }

    .dropdown:hover .dropbtn {
        color: #e74c3c;
    }
</style>
<header>
    <div class="container-fluid" style="font-size: 13px; background-color: white;">
        <div id="left-header">
            <a href="{{ URL::asset('/') }}" target="_self" title="Về trang chủ">
                <img class="animated bounce" src="{{ URL::asset('/img/img/logo.png') }}" width="110px"
                    height="64px" /> <span class="booking" href={{ url('/') }}>Đặt phòng khách sạn Online</span>
            </a>
        </div>

        <div id="right-header">
            <div style="float: left; margin: 0px 5px 0px 5px">
                <a href="{{ URL::asset('#footer') }}" style="margin-right: 5px">Liên hệ</a>
                <span>&nbsp;|&nbsp;</span>
            </div>
            <div style="float: left">
                <a href="#promotion" style="margin-right: 5px">Khuyến mãi</a>
                <span>&nbsp;|&nbsp;</span>
            </div>
            <div id="welcome" style="padding-left: 10px">
                <i class="material-icons" style="float: left; margin-top: 15px; font-size: 30px">
                    supervisor_account
                </i>
                <div class="dropdown" style="float: left;">
                    <button class="btn btn-default dropdown-toggle mybtn-style1" type="button" data-toggle="dropdown">
                        Xin chào Group 6
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li style="line-height: 30px">
                            <a onclick="alert('Đang cập nhật...')">
                                <i class="material-icons" style="color: rgb(166, 166, 166)">info</i>
                                <span>Thông tin tài khoản</span>
                            </a>
                        </li>
                        <li>
                            <a onclick="alert('Đang cập nhật...')">
                                <i class="material-icons" style="color: rgb(166, 166, 166)">card_travel</i>
                                <span>Các chuyến đi đã lưu</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="container-fluid"
                                onclick="
                                localStorage.check_login = 'false';
                                history.go(0); ">
                                <span style="float: left">Đăng xuất</span>
                                <i class="fa fa-sign-out"
                                    style="font-size: 20px; float: right; color: rgb(166, 166, 166)"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="signup-signin" style="float: left; margin-right: 5px; margin-left: 10px">
                @if (Auth::guest())
                    <a href="{{ url('/register') }}" class="signup">Đăng ký</a>
                    <span>&nbsp;|&nbsp;</span>
                    <a href="{{ url('/login') }}" class="login" style="margin-right: 10px">Đăng nhập</a>
                @else
                    <div class="dropdown">
                        <span class="dropbtn" style="margin-left: 5px"> {{ Auth::user()->name }}</span><span
                            class="caret"></span>
                        <div class="dropdown-content">
                            <a href="/profile" style="border-bottom: 1px solid #e74c3c">Thông tin </a>
                            @if (Auth::user()->role_id == '2')
                                <a href="/user/reservations" style="border-bottom: 1px solid #e74c3c">Xem đặt chỗ</a>
                                @endif @if (Auth::user()->role_id == '4')
                                    <a href="/home" style="border-bottom: 1px solid #e74c3c">Quản lý</a>
                                    @endif @if (Auth::user()->role_id == '1')
                                        <a href="/home" style="border-bottom: 1px solid #e74c3c">Quản lý khách sạn</a>
                                    @endif
                                    <div style="text-align: center">
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            Đăng xuất
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                        </div>
                    </div>
                @endif
            </div>
            {{-- <div id="star"
                style="float: left; border-right: solid thin rgb(238,238,238); margin-right: 5px;height: 60px;">
                <img id="language" src="{{ URL::asset('/img/img/flagvn_thumbnail.png') }}"
                    onclick="var $src = $(this).attr('src');
                        if ($src == 'header-footer/img/flagvn_thumbnail.png'){
                            $(this).attr('src','header-footer/img/flageng_thumbnail.png');
                            } else {
                            $(this).attr('src','header-footer/img/flagvn_thumbnail.png');
                        }"
                    style="margin-right: 15px;margin-top: 13px " width="32px" height="24px" title="Chọn ngôn ngữ" />
            </div> --}}
            <a href="modal-user/user-24h.html" data-toggle="modal" data-target="#myModal-24h" title="Gọi trực tuyến"
                style="color: white; float: left">
                <img src="{{ URL::asset('/img/img/24h_white.png') }}" />
            </a>
        </div>
    </div>
</header>
