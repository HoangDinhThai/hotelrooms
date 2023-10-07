<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YOY | room-bookings</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/room-bookings.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('/Utilities/bootstrap-3.3.5-dist/css/bootstrap.min.css')}}">
    <script src="{{URL::asset('/Utilities/jQuery-1.x/jquery-1.11.3.min.js')}}"></script>
    <script src="{{URL::asset('/Utilities/bootstrap-3.3.5-dist/js/bootstrap.min.js')}}"></script>

    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/Utilities/slideshow/slideshow2/engine1/style.css')}}" />
    <script type="text/javascript" src="{{URL::asset('/Utilities/slideshow/slideshow2/engine1/jquery.js')}}"></script>
    <!-- End WOWSlider.com HEAD section -->

    <style>
    </style>

    <script>
    $(document).ready(function(){
       
        //lay' ten locations o? trang search-hotels, 1 so' bien' dung chung ten da~ luu voi trang homepage
//          $('#autocomplete').val(localStorage.index_tmp_name);
        $('.name-of-location').text(localStorage.index_tmp_name);
        $('#date1').val(localStorage.searchhotels_tmp_checkin);
        $('#date2').val(localStorage.searchhotels_tmp_checkout);
//            $('#loaiphong select').val(localStorage.index_tmp_typeofroom);
        $('.name-of-hotel').text(localStorage.searchhotels_tmp_nameofhotel);
        $('.address-of-hotel').text(localStorage.searchhotels_tmp_addofhotel);
        // xac dinh vi tri tren Google map, chi thay doi dia chi & cố định tại Đà Nẵng
        $('#right-infoTabs iframe').attr('src','https://maps.google.com/maps?hl=en&q=' + localStorage.searchhotels_tmp_addofhotel_2 + '&ie=UTF8&t=roadmap&z=14&iwloc=B&output=embed');
        // sau khi load xong thi check user da~ login hay chua
        // phai them delay thi moi' kich hoat duoc localStorage + id tu` file header1
//      se~ check + load sau khi load xong part-header1.html
//      bien' localStorage.check_login luu tai file user-login
        var timer;
//      neu thoi gian load body nhieu hon delay thi co the xay ra loi
        var delay = 1000;
        timer = setTimeout(function() {
            if (localStorage.check_login === 'true'){
//                    alert('DA DANG NHAP');
                $('#welcome').fadeIn(10);
                $('#signup-signin').fadeOut(10);
            } else {
                $('#welcome').fadeOut(10);
                $('#signup-signin').fadeIn(10);
            }
        }, delay);
    });
    </script>

</head>

<body>
<div id="container">

    <div id="header"></div>

    <div id="aboutHotel" class="container" style="background-color: rgb(246,245,245); margin: 0; padding: 0">
        <div id="left-aboutHotel" style="width: 55%; float: left; position: relative; background-color: white">
        <div class="tmp-left-aboutHotel" style="display: none"></div>
            <!-- Start WOWSlider.com BODY section -->
            <div class="ws_images">
          <ul>
            
             <img style="width:100%" src="{{URL::asset('/Utilities/slideshow/slideshow2/data1/images/room01.jpg')}}" alt="room01" title="room01" id="wows1_0"/>
          </ul>
        </div>
            <script type="text/javascript" src="../Utilities/slideshow/slideshow2/engine1/wowslider.js"></script>
            <script type="text/javascript" src="../Utilities/slideshow/slideshow2/engine1/script.js"></script>
            <div id="aboutHotel-infoTabs" class="container-fluid" style="width: 100%; border-bottom: 1px solid rgb(238,238,238)">
            <div class="row">
                <!--<div id="left-infoTabs" style="width: 55%; float: left">-->
            </div>
            </div>
            <!--<div style="height: 400px; width: 100%">-->
            <div class="container-fluid" style="width: 100%; border-bottom: 1px solid rgb(238,238,238)">
            </div>
            <div id="description" class="container" style="width: 85%; margin-left: 50px">
                <div class="title">Mô tả khách sạn</div>
                <div class="redline"></div>
                <p style="text-align: justify">
                    {{$hotel->description}}
                </p>
            </div>
        </div>
        <div id="right-aboutHotel" style="width: 45%; float: right; bottom: 0">
            <div id="right-aboutHotel-1" style="width: 93%; margin: auto; margin-top: 5px">
                <table class="table borderless myTable-1">
                    <tr style="color: rgb(122,118,118); width: 50%">
                        <th>NHẬN PHÒNG</th>
                        <th>TRẢ PHÒNG</th>
                    </tr>

                    <tr>
                        <td>
                            {{ \Carbon\Carbon::parse($FirstDate)->format('d/m/Y')}}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($SecDate)->format('d/m/Y')}}
                        </td>
                    </tr>
                </table>
                <!--chua hover duoc -->
                <table id="mytable" class="table table-hover" style="margin-top: -22px">
                    <tr id="mytable-th" style="color: rgb(122,118,118)">
                        <th style="border: none">TÊN PHÒNG</th>
                        <th style="border: none">KHÁCH</th>
                        <th style="border: none">GIÁ (đ)</th>
                        <th style="border: none">TỔNG TIỀN (đ)</th>
                    </tr>
                    <tr id="room-row1" style="background-color: white">
                        <td> &nbsp;{{$room->RoomType}} </td>
                        <td>{{$room->Capacity}}</td>
                        <td>{{$room->Price}}</td>
                        <td class="row-total">{{$TotalCost}}</td>
                    </tr>
                </table>
                <table id="table-result" class="table borderless" style="margin-top: -15px;">
                    <tr>
                        <td id="table-result-1">
                            Tổng số
                            <span id="table-result-11" style="font-weight: bold">1</span> Phòng,
                            <span id="table-result-12" style="font-weight: bold">{{$room->Capacity}}</span> Khách &
                            <span id="table-result-13" style="font-weight: bold; text-decoration: underline">{{$StayDuration}}</span><u> Đêm</u>
                        </td>
                    </tr>
                </table>
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{ $err }}<br>
                    @endforeach
                    </div>
                 @endif
                <div>
                    <button id='datphong' class="btn btn-success" onclick="showInputBox()">
                    ĐẶT PHÒNG
                    </button>
                </div>
                <div class="form-group" id='formthanhtoan' hidden>
                
                    <form method="POST" action="/bookings/new/{{$room->id}}/{{$FirstDate}}/{{$SecDate}}/{{$ProtectedCost}}">

                     {{ csrf_field()}}
                    <div class="form-group row">

                    <div class="col-xs-6">
                        <label for="first">Họ Tên:</label>
                        <input class="form-control pull-left" name="guestName" id="first" type="text" required="First Name" />
                    </div>
                    <div class="col-xs-6">
                        <label for="first">Phone:</label>
                        <input class="form-control pull-right" id="phone" name="phone" id="last" type="number" required="phone" />
                    </div>
                </div>
                <hr />

                <input type="submit" name="thanhtoan" class="btn btn-success" value="Thanh Toán Tại Khách Sạn">
                <input type="submit" name="thanhtoan" class="btn btn-success" value="Thanh Toán Qua visa">

                </form>
                </div>
            </div>
        </div>

    <div id="footer"></div>
    <div class="modal fade" id="theModal">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
<script>
  function showInputBox() {
        if(document.getElementById("datphong")){
            document.getElementById("formthanhtoan").style.display = 'block';
            
            document.getElementById("datphong").style.display = 'none';
        }
}
</script>
    <!--JavaScript-->
    <script src="{{URL::asset('/js/room-bookings.js')}}"></script>
    <script src="{{URL::asset('/Utilities/smoothscroll-for-websites-master/SmoothScroll.js')}}"></script>
    <script src="{{URL::asset('/Utilities/LiveChat.js')}}"></script>
    <!--Form Feedback (position: fixed): https://webengage.com/ , phai dang ky', chua tach ra duoc file rieng do co' kem` id-->
    <script id="_webengage_script_tag" type="text/javascript">
        var webengage;
        !function(e,t,n){function o(e,t){e[t[t.length-1]]=function(){r.__queue.push([t.join("."),arguments])}}var i,s,r=e[n],g=" ",l="init options track onReady".split(g),a="feedback survey notification".split(g),c="options render clear abort".split(g),p="Open Close Submit Complete View Click".split(g),u="identify login logout setAttribute".split(g);if(!r||!r.__v){for(e[n]=r={__queue:[],__v:"5.0",user:{}},i=0;i<l.length;i++)o(r,[l[i]]);for(i=0;i<a.length;i++){for(r[a[i]]={},s=0;s<c.length;s++)o(r[a[i]],[a[i],c[s]]);for(s=0;s<p.length;s++)o(r[a[i]],[a[i],"on"+p[s]])}for(i=0;i<u.length;i++)o(r.user,["user",u[i]]);var f=t.createElement("script"),d=t.getElementById("_webengage_script_tag");f.type="text/javascript",f.async=!0,f.src=("https:"==t.location.protocol?"//ssl.widgets.webengage.com":"//cdn.widgets.webengage.com")+"/js/widget/webengage-min-v-5.0.js",d.parentNode.insertBefore(f,d)}}(window,document,"webengage");
        webengage.init('~15ba209b4');
        webengage.options('isDemoMode', true);
    </script>
   
</div>
</body>
</html>
