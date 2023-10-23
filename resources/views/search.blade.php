@extends('layouts.app')
@section('css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&family=PT+Sans:ital,wght@1,400;1,700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">
    <style>
        #language {
            margin-top: 18px;
        }

        #star {
            height: 60px;
        }

        .info {
            font-size: 20px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }
    </style>
@endsection
<div class="container">
    @section('content')
        <div id="booking" style="margin-top: 69px">
            <div id="booking_slogan">
                Kỳ nghỉ trọn vẹn tại thành phố Hà Nội</br>
                với trên 20 khách sạn
            </div>
            <div id="search_form">
                <div
                    style="background-color: black; opacity: 0.3;width: 100%;  height: 328px; position: absolute; border-radius: 5px">
                </div>
                <form method="POST" action="/search" style="position: absolute; padding: 15px"
                    enctype="multipart/form-data" name="search" onsubmit="return validateForm()">
                    {{ csrf_field() }}
                    <div id="search-locations">
                        <img src="../img/homepage/Delete-25.png" width="16px"
                            style="position: absolute; margin-left: 405px; margin-top: 14px; display: none" />
                        <input class="form-control biginput" type="search" name="searchterm" id="checkin"
                            placeholder="Nhập tên khách sạn, quận, tên đường ...">
                    </div>
                    <div class="choose_day" style="height: 160px">
                        <table class="table borderless">
                            <tr style="color: white">
                                <label class="text-muted" for="checkin">Vui lòng chọn ngày nhận phòng & ngày trả
                                    phòng</label>
                                <input class="date form-control" type="text" name="daterange" id="checkin"
                                    placeholder="Chọn ngày.." required>
                            </tr>
                            <tr>
                                <label class="text-muted" for="travelers">Số người</label>
                                <select name="numtravelers" class="form-control">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </tr>
                        </table>
                    </div>
                    <div style="margin-top: auto; text-align: center; margin-top: 5px">
                        <button type="submit" class="btn mybtn-style1" id="booking_form_search"> Tìm kiếm </button>
                    </div>
                    <div class="booking_now">Đặt bây giờ.
                        Thanh toán sau tại khách sạn.</div>
                </form>
            </div>
        </div>
        <img src="../img/homepage/Center_1440x860.jpg" width="100%" height="82%" />
    </div>
    </div>
    <div id="our_promise">
        <div class="container-fluid">
            <div id="our_promise_title">CHÚNG TÔI ĐẢM BẢO</div>
            <!-- khi dung flexbox thi class="img-responsive" ko tac dung -->
            <div class="row" style="width: 80%; margin: 0 auto; text-align: center;  color: rgb(70,68,68)">
                <!--<div class="col-xs-2 col-sm-2 col-md-2">-->
                <div class="col-sm-2 col-md-2">
                    <p class="info">Điều hòa</p>
                    <!--do co' class="img-responsive" nen ko the? canh vao` center-->
                    <img class="img-responsive" src="../img/homepage/IMG_49949.svg" />
                </div>
                <div class="col-sm-2 col-md-2">
                    <p class="info">TV</p>
                    <img class="img-responsive" src="../img/homepage/IMG_41622.svg" />
                </div>
                <div class="col-sm-2 col-md-2">
                    <p class="info">Giường ngủ</p>
                    <img class="img-responsive" src="../img/homepage/bed-svgrepo-com.svg" />
                </div>
                <div class="col-sm-2 col-md-2">
                    <p class="info">Bữa sáng miễn phí</p>
                    <img class="img-responsive" src="../img/homepage/breakfast-svgrepo-com.svg" />
                </div>
                <div class="col-sm-2 col-md-2">
                    <p class="info">Miễn phí Wi-Fi</p>
                    <img class="img-responsive" src="../img/homepage/IMG_43553.svg" />
                </div>
                <div class="col-sm-2 col-md-2">
                    <p class="info">Nhà vệ sinh</p>
                    <img class="img-responsive" src="../img/homepage/bathroom-tube-svgrepo-com.svg" />
                </div>
            </div>
        </div>
    </div>

    <div id="promotion">
        <div class="container-fluid">
            </br>
            <div id="promotion_title"> Khách Sạn Các Quận
                <div class="redline" style="width: 50px; margin: 0 auto;"></div>
            </div>


            <div class="container" >
                <div class="grid">
                    <figure class="effect-chico">
                        <img src="../img/homepage/promotion_3.jpg" width="550px" height="200px" alt="img15" />
                        <figcaption>
                            <!--<strong>YOY <span class="txt-name-location">ĐÀ NẴNG</span></strong>-->
                            <h3>
                                <span class="txt-name-location" name="County" value="long+biên">Quận Long
                                    Biên</span><!--Value của quận-->
                            </h3>
                            <a href="hotel/location=long+biên"></a><!--link bấm vào trỏ ra-->
                            <p>Lập kế hoạch nghỉ ngơi những điểm yêu thích tại Hà Nội</p>
                            <!--<a href="#">View more</a>-->
                        </figcaption>
                    </figure>
                    <!--mac dinh the figure dag cai` float: left-->
                    <figure class="effect-chico">
                        <img src="../img/homepage/promotion_2.jpg" width="550px" height="200px" alt="img04" />
                        <figcaption>
                            <h3>
                                <span class="txt-name-location" name="County" value="hoàng+mai">Quận Hoàng
                                    Mai</span>
                            </h3>
                            <a href="hotel/location=hoàng+mai"></a>
                            <!--<a href="#">View more</a>-->
                        </figcaption>
                    </figure>
                    <figure class="effect-chico">
                        <img src="../img/homepage/promotion_1.jpg" width="550px" height="200px" alt="img04" />
                        <figcaption>
                            <h3>
                                <span class="txt-name-location" name="County" value="hà+đông">Quận Hà Đông</span>
                            </h3>
                            <a href="hotel/location=hà+đông"></a>
                            <!--<a href="#">View more</a>-->
                        </figcaption>
                    </figure>
                    <figure class="effect-chico">
                        <img src="../img/homepage/promotion_1.jpg" width="550px" height="200px" alt="img04" />
                        <figcaption>
                            <h3>
                                <span class="txt-name-location" name="County" value="hoàn+kiếm">Quận Hoàn Kiếm</span>
                            </h3>
                            <a href="hotel/location=hoàn+kiếm"></a>
                            <!--<a href="#">View more</a>-->
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        {{-- <div id="comment">
            <div class="container-fluid">
                <div id="comment_title"> Nhận xét gần đây về TKK HOTEL</div>
                <!-- make blockquote http://jsfiddle.net/pz6kx0bw/ -->
                <div class="row">
                    <div class="col-xs-1 col-sm-1 col-md-1"></div>
                    <!--thuoc tinh display: inline-flex thay the cho float tung` phan tu ben trong-->
                    <div class="col-xs-5 col-sm-5 col-md-5" style="display: inline-flex">
                        <div style="width: 22%">
                            <!--khi co' responsive + display: inline-flex => ko cai` duoc width, height -->
                            <img class="effect-shadow img-responsive" src="../img/homepage/comment1_gordonramsay.jpg"
                                style="border-radius: 5px" />
                        </div>
                       
                        <p style="width: 70%">
                           <br />
                            <span class="comment_name">Gordon Ramsay</span><span class="comment_country"> -
                                Scotland</span>
                        </p>
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5" style="display: inline-flex">
                        <div style="width: 22%">
                            <img class="effect-shadow img-responsive" src="../img/homepage/comment1_davidbeckham.jpg"
                                style="border-radius: 5px" />
                        </div>
                       
                        <p style="width: 70%">
                           <br />
                            <span class="comment_name">David Beckham</span><span class="comment_country"> - England</span>
                        </p>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-1"></div>
                </div>
                <br />
                <div class="row">
                    <div class="col-xs-1 col-sm-1 col-md-1"></div>

                    <div class="col-xs-5 col-sm-5 col-md-5" style="display: inline-flex">
                        <div style="width: 22%">
                            <img class="effect-shadow img-responsive" src="../img/homepage/comment1_mrbean.jpg"
                                style="border-radius: 5px" />
                            <!--<img src="../img/homepage/quote.png" style="margin-top: -85px; float: right"/>-->
                        </div>
                       
                        <p style="width: 70%">
                           <br />
                            <span class="comment_name">Mr.Bean</span><span class="comment_country"> - England</span>
                        </p>
                    </div>

                    <div class="col-xs-5 col-sm-5 col-md-5" style="display: inline-flex">
                        <div style="width: 22%">
                            <img class="effect-shadow img-responsive" src="../img/homepage/comment1_ronaldo.jpg"
                                style="border-radius: 5px" />
                        </div>
                       
                        <p style="width: 70%">
                           <br />
                            <!--Lần đầu tiên tôi đặt phòng ở YOY, đó là một trải nghiệm tuyệt vời về dịch vụ nghỉ-->
                            <!--dưỡng của các khu nghỉ dưỡng  cao cấp mà các bạn giới thiệu cho chúng tôi.-->
                            <!--Tôi và gia đình tôi vô cùng hài lòng về điều đó!!!!!<br/>-->
                            <span class="comment_name">Ronaldo</span><span class="comment_country"> - Saudi Arabia</span>
                        </p>
                    </div>

                    <div class="col-xs-1 col-sm-1 col-md-1"></div>
                </div>
            </div>
        </div> --}}
    @endsection

</div>

@section('scripts')
    <script src="https://unpkg.com/flatpickr"></script>
    <script>
        flatpickr(".date", {
            minDate: "today",
            mode: "range",
        });

        function validateForm() {
            var setdate = document.forms["search"]["daterange"].value;
            if (setdate == "") {
                Command: toastr["warning"]
                    ("Ngày phải được điền")
                toastr.options = {
                    "positionClass": "toast-top-center",
                }
                return false;
            }
        }
    </script>
@endsection
