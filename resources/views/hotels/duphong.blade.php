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
        <div id="left-aboutHotel" style="width: 65%; float: left; position: relative; background-color: white">
        <div class="tmp-left-aboutHotel" style="display: none">...</div>
            <!-- Start WOWSlider.com BODY section -->
            <div id="wowslider-container1">
                <!--neu dung margin-top: 380px => khi zoom browser thi chu~ bi. day? xuog' -->
                <div style="position: absolute; z-index: 1000; color: white; text-shadow: 1px 0px black; margin-left: 50px;bottom: 45px">
                    <span style="font-weight: bolder; font-size: 30px" class="name-of-hotel">Vanda Hotel</span><br/>
                    <div style="font-size: 15px">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </div>
                    <!--<span class="glyphicon glyphicon-map-marker" style="font-size: 10px"> 3 Nguyễn Văn Linh, Q Hải Châu, Đà Nẵng</span>-->
                    <div style="font-size: 15px">
                        <span class="glyphicon glyphicon-map-marker"></span>
                        <span class="address-of-hotel">
                            Số 10 Phường Văn Quán, Quận Hà Đông, Thành phố Hà Nội
                        </span>
                    </div>
                </div>

                <div class="ws_images" style="z-index: 999">
                    <ul>
                    <li><img src="{{URL::asset('/Utilities/slideshow/slideshow2/data1/images/room01.jpg')}}" alt="room01" title="room01" id="wows1_0"/></li>
                    
                    </ul>
                </div>
                <div class="ws_bullets"><div>
                   
                </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">slider</a> by WOWSlider.com v8.6</div>
                <div class="ws_shadow"></div>
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
                    
                </p>
            </div>

            <div style="margin-left: 50px; color: rgb(70,68,79); line-height: 75px">
                <!--dung div thi bi. <br/>-->
                <a href="homepage.html" style="color: grey">Trang chủ</a>
                <span class="glyphicon glyphicon-menu-right" style="font-size: 10px"></span>
                <a href="search-hotels.html" style="color: grey">
                    <span class="name-of-location">Hà Nội</span>
                </a>
                <span class="glyphicon glyphicon-menu-right" style="font-size: 10px"></span>
                <b>YOY <span class="name-of-hotel">Vanda Hotel</span></b>
            </div>
        </div>
        <!--tam dat. height de ho tro fill color (vi ko xac dinh dc height cua right-aboutHotel)-->
        <!--neu height: 1715px; du* qua nhieu thi` ko the scroll xuong' sat' mep' cua footer, trang goc' khi zoom
        browser thi ben trai bi thu nho con` ben phai van~ giu~ nguyen -->
        <!--background-color: rgb(246,245,245) height: 1675px;  -->
        <div id="right-aboutHotel" style="width: 35%; float: right; bottom: 0">
        <!--<div id="right-aboutHotel" style="width: 400px; height: 1715px; background-color: rgb(246,245,245); float: right; bottom: 0">-->
            <div id="right-aboutHotel-1" style="width: 93%; margin: auto; margin-top: 5px">
                <table class="table borderless myTable-1">
                    <tr style="color: rgb(122,118,118); width: 50%">
                        <th>Nhận phòng</th>
                        <th>Trả phòng</th>
                    </tr>

                    <tr>
                        <td>
                            <!--chung thuc khi click DAT PHONG-->
                            <div id="tooltip1" class="validation-advice" style="display: none">Ngày nhận phòng không hợp lệ !</div>
                            <input type="date" class="form-control" id="date1" style="margin-top: -5px">
                            <!--nhap chung viec chung thuc cho nut' DAT PHONG (hop ly' hon dat o day-->
                        </td>
                        <td>
                            <div id="tooltip2" class="validation-advice" style="display: none">Ngày trả phòng không hợp lệ !</div>
                            <input type="date" class="form-control" id="date2" style="margin-top: -5px">
                        </td>
                    </tr>

                    <tr>
                        <th style="text-align: right; color: rgb(122,118,118)">Phòng</th>
                        <td>
                            <!--gia tri cua select co the tuy` thuoc vao thong bao' con` bao nhieu phong` tai trang search-hotels-->
                            <select id="slt-rooms" class="form-control" style="width: 70px">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>6+</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <!--chua hover duoc -->
                <table id="mytable" class="table table-hover" style="margin-top: -22px">
                    <tr id="mytable-th" style="color: rgb(122,118,118)">
                        <th style="border: none">PHÒNG#</th>
                        <th style="border: none">KHÁCH</th>
                        <th style="border: none">GIÁ (đ)</th>
                        <th style="border: none">SỐ TIỀN (đ)</th>
                    </tr>
                    <tr id="room-row1" style="background-color: white">
                        <td> &nbsp; 1</td>
                        <td>
                            <img src="../img/room-bookings/minus-25.png" class="minus img-not-allowed"/>
                            <span>1</span>
                            <img src="../img/room-bookings/plus-25.png" class="plus img-allowed"/>
                        </td>
                        <!--tuy theo chinh sach cua tung` ks ma` gia phong` duoc quy dinh theo SL khach' o?-->
                        <td>1.500.000</td>
                        <td class="row-total">1.500.000</td>
                    </tr>
                    <tr id="room-row2" style="background-color: white; display: none">
                        <td> &nbsp; 2</td>
                        <td>
                            <!--<input type="number" min="1" max="3" value="1" class="form-control" style="width: 65px"/>-->
                            <img src="../img/room-bookings/minus-25.png" class="minus img-not-allowed" />
                            <span>1</span>
                            <img src="../img/room-bookings/plus-25.png" class="plus img-allowed" />
                        </td>
                        <td>1.500.000</td>
                        <td class="row-total">1.500.000</td>
                    </tr>
                    <tr id="room-row3" style="background-color: white; display: none">
                        <td> &nbsp; 3</td>
                        <td>
                            <img src="../img/room-bookings/minus-25.png" class="minus img-not-allowed"/>
                            <span>1</span>
                            <img src="../img/room-bookings/plus-25.png" class="plus img-allowed"/>
                        </td>
                        <td>1.500.000</td>
                        <td class="row-total">1.500.000</td>
                    </tr>
                    <tr id="room-row4" style="background-color: white; display: none">
                        <td> &nbsp; 4</td>
                        <td>
                            <img src="../img/room-bookings/minus-25.png" class="minus img-not-allowed"/>
                            <span>1</span>
                            <img src="../img/room-bookings/plus-25.png" class="plus img-allowed"/></td>
                        <td>1.500.000</td>
                        <td class="row-total">1.500.000</td>
                    </tr>
                    <tr id="room-row5" style="background-color: white; display: none">
                        <td> &nbsp; 5</td>
                        <td>
                            <img src="../img/room-bookings/minus-25.png" class="minus img-not-allowed"/>
                            <span>1</span>
                            <img src="../img/room-bookings/plus-25.png" class="plus img-allowed"/>
                        </td>
                        <td>1.500.000</td>
                        <td class="row-total">1.500.000</td>
                    </tr>
                    <tr id="room-row6" style="background-color: white; display: none">
                        <td> &nbsp; 6</td>
                        <td>
                            <img src="../img/room-bookings/minus-25.png" class="minus img-not-allowed"/>
                            <span>1</span>
                            <img src="../img/room-bookings/plus-25.png" class="plus img-allowed"/></td>
                        <!--<td>-->
                            <!--<input type="number" min="1" max="3" value="1" class="form-control" style="width: 65px"/>-->
                        <!--</td>-->
                        <td>1.500.000</td>
                        <td class="row-total">1.500.000</td>
                    </tr>
                </table>

                <table id="table-result" class="table borderless" style="margin-top: -15px;">
                    <tr>
                        <td id="table-result-1">
                            Tổng số
                            <span id="table-result-11" style="font-weight: bold">1</span> Phòng,
                            <span id="table-result-12" style="font-weight: bold">1</span> Khách &
                            <span id="table-result-13" style="font-weight: bold; text-decoration: underline">1</span><u> Đêm</u>
                        </td>
                        <td rowspan="2" style="text-align: right">
                            <span id="table-result-2" style="font-weight: bold; font-size: 25px">
                            1.500.000 <sup><u>đ</u></sup>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><small>Bao gồm tất cả các loại thuế</small></td>
                    </tr>
                </table>

                <div id="extra-room" style="display: none">
                    <div style="margin: auto; width: 95%; height: 60px; background-color: rgb(247,221,221); text-align: center; margin-bottom: 5px; padding: 10px; border: 1px solid rgb(220,30,40); color: rgb(220,30,40)">
                        Để đặt phòng số lượng lớn, vui lòng để lại số điện thoại<br/>của bạn. Chúng tôi sẽ gọi trong thời gian sớm nhất.
                    </div>
                    <div>
                    <form onsubmit="alert('Chúng tôi đã nhận được yêu cầu của bạn !')">
                        <table class="table borderless" style="width: 95%; margin: auto">
                        <tr>
                            <td style="width: 20%">
                                <input type="text" class="form-control" value="+84" disabled style="height: 45px"/>
                            </td>
                            <td style="width: 80%">
                                <!-- class="extraroom-phone" se~ duoc ap dug vao` phan` chu*ng' thuc -->
                                <div id="extraroom-tooltip" data-tooltip="Vui lòng điền vào trường này.">
                                    <!--<input name="extraroom-phone" type="tel" required class="form-control" placeholder="Nhập số điện thoại của bạn"/>-->
                                    <input name="extraroom-phone" type="tel" required="true" class="form-control" placeholder="Nhập số điện thoại của bạn"
                                               pattern="[0-9]{6,}" title="Tối thiểu 6 số"/>
                                    <!--chua tao duoc alert ios-overlay-->
                                </div>
                            </td>
                        </tr>
                        </table>
                        <div style="text-align: center; margin-top: 10px;">
                            <input type="submit" class="btn mybtn-style1" value="YÊU CẦU GỌI LẠI">
                        </div>
                    </form>
                    </div>
                </div>

                <!--them div de cai` text-align: center-->
                <div style="text-align: center; margin-top: 10px;">
                    <input id="book-now" type="button" class="btn mybtn-style1" value="ĐẶT PHÒNG">
                </div>

                <div style="width: 100%; text-align: center; margin-top: 10px">
                    <a href="#" style="color: rgb(220,30,40)">Các điều khoản và Điều kiện</a>
                </div>
            </div>
            <!-- sau khi click DAT PHONG -->
            <div id="right-aboutHotel-2" style="width: 90%; margin: auto; margin-top: 15px; display: none; bottom: 0">
                <!--borderless-->
                <table class="table borderless">
                    <tr>
                        <td>NHẬN PHÒNG</td>
                        <td>TRẢ PHÒNG</td>
                        <td>PHÒNG</td>
                        <td>KHÁCH</td>
                        <td>
                            <a id="book-now-2" href="#" style="color: rgb(220,30,40)">THAY ĐỔI</a>
                        </td>
                    </tr>
                    <tr style="font-weight: bold; text-align: center">
                        <td id="right-aboutHotel-2-checkin">20/01/2016</td>
                        <td id="right-aboutHotel-2-checkout">21/01/2016</td>
                        <td id="table-result-21">1</td>
                        <td id="table-result-22">1</td>
                        <!--<td>...</td>-->
                    </tr>
                </table>

                <form id="thanhtoan" name="formthanhtoan">
                    <b>THÔNG TIN CHI TIẾT:</b>
                    <table class="table borderless">
                        <tr>
                            <td colspan="2">
                                <input type="text" name="info-name" class="form-control" required="" placeholder="Họ và Tên" style="height: 40px"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><input type="text" class="form-control" value="+84" disabled style="height: 40px; margin-top: -10px"/></td>
                            <td style="width: 80%">
                                <!--<input type="tel" name="info-phone" class="form-control" required="" placeholder="Số điện thoại" style="height: 40px; margin-top: -10px"/>-->
                                <input type="text" name="info-phone" required="true" class="form-control" placeholder="Số điện thoại"
                                       style="height: 40px; margin-top: -10px"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="email" name="info-email" class="form-control" placeholder="Email"
                                       style="height: 40px; margin-top: -10px"/>
                            </td>
                        </tr>
                    </table>
                    <hr style="margin-top: -10px"/>
                    <table class="table borderless">
                        <tr>
                            <td style="width: 50%">
                                Tổng tiền thanh toán<br/><small>Đã bao gồm thuế</small>
                            </td>
                            <td id="tien-thanhtoan" style="text-align: right; width: 50%; font-weight: bold; font-size: 25px">
                                1.500.000 <sup><u>đ</u></sup>
                            </td>
                        </tr>
                    </table>

                    <div id="bt-thanhtoan" style="font-weight: bold; margin: auto; width: 88%">
                        <input id="bt-thanhtoan1" type="submit" class="btn mybtn-style2" value="THANH TOÁN TẠI KHÁCH SẠN" style="float: left"
                                >
                        <div style="float: left; margin-left: 10px">
                            <div id="paywith">
                                <div class="effect-shadow-ul">
                                    <!--ban dau dung ul, li nhu*ng ko ho tro hover row
                                    <li style="list-style-image:url('../img/room-bookings/icon%20pay/visa.gif')"> Visa</li> -->
                                    <!--http://www.w3schools.com/bootstrap/bootstrap_ref_css_tables.asp-->
                                    <table class="table table-hover borderless">
                                        <!--khi nao co' trang moi' thi cai` the? a-->
                                        <thead>
                                        <tr>
                                            <th colspan="2">TRẢ VỚI</th>
                                            <!--<th></th>-->
                                        </tr>
                                        </thead>
                                        <!--<tbody>-->
                                        <tr>
                                            <td><img src="../img/room-bookings/pay_with/visa.gif"/></td>
                                            <td>Visa</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../img/room-bookings/pay_with/mastercard.png"/></td>
                                            <td>MasterCard</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../img/room-bookings/pay_with/JCB.png"/></td>
                                            <td>JCB</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../img/room-bookings/pay_with/american-express.png"/></td>
                                            <td>American Express</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../img/room-bookings/pay_with/paypal.png"/></td>
                                            <td>PayPal</td>
                                        </tr>
                                        <!--</tbody>-->
                                    </table>
                                </div>

                                <input type="button" class="btn mybtn-style1" value="TRẢ BÂY GIỜ">
                            </div>
                        </div>
                    </div>
                </form>

                <div id="verify-code" style="clear: both; width: 93%; display: none; margin: auto">
                <hr style="margin-top: -10px"/>
                    <form>
                    Nhập mã xác nhận đã gửi đến số điện thoại trên:
                    <table class="table borderless">
                        <tr>
                            <td>
                                <input type="text" name="enter-code" class="form-control" required placeholder="Nhập mã" style="height: 35px" />
                            </td>
                            <td>
                                <input type="submit" class="btn mybtn-style1" value="XÁC NHẬN & ĐẶT PHÒNG">
                                <div id="myID" class="ios-overlay" style="display: none">
                                    <span class="glyphicon glyphicon-ok" style="font-size: 100px"></span>
                                    <span>ĐÃ XÁC NHẬN !</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a id="verify-code-resendcode" href="#" style="color: rgb(220,30,40)">Gửi lại mã</a>
                            </td>
                            <td>
                                <a id="verify-code-cancel" href="#" style="color: rgb(220,30,40)">Hủy</a>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>

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