<style>
	fieldset {
		position: initial;
	}
</style>
<div style="background-color: white">
	@include('layouts.head')
</div>
<style>
	label {
		float: left;
	}

	label::after {
		content: "*";
		color: #ee0979;
		margin-left: .5em;
	}
	#dat::after {
		content: "*";
		color: #ee0979;
		margin-left: .5em;
	}
</style>
	@include('layouts.header')
<script src="{{URL::asset('http://code.jquery.com/jquery-1.10.2.js')}}"></script>
<script src="{{URL::asset('http://code.jquery.com/ui/1.11.2/jquery-ui.js')}}"></script>
<script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js')}}"></script>
{{--
<script src="{{URL::asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js')}}"></script> --}}
<link rel="stylesheet" href="{{URL::asset('//cdnjs.cloudflare.com/ajax/libs/authy-forms.css/2.2/form.authy.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('../css/application.css') }}">
<link rel="stylesheet" href="{{URL::asset('../css/css.css')}}"> @if (is_null($User->proposals))

<body style="background-color: rgb(230, 234, 237)">
	<div class="row" style="    min-height: 809px;">
		<div class="col-md-10 col-md-offset-1" style="display: block">
			<form id="msform" method="POST" action="/proposal/{{$User->id}}/new" enctype="multipart/form-data" class="form-horizontal">
				{{ csrf_field()}}
				<ul id="progressbar">
					<li class="active">THÔNG TIN ÐỐI TÁC</li>
					<li>THÔNG TIN CÁ NHÂN</li>
				</ul>
				<fieldset>
					<h2 class="fs-title">THÔNG TIN ÐỐI TÁC</h2>
					<h3 class="fs-subtitle">Hãy cho chúng tôi biết thêm thông tin </h3>
					<div class="form-group">
						<label>Tên công ty </label>
						<input type="text" name="CompanyName" placeholder="Tên công ty" />
					</div>
					<div class="form-group">
						<label>Địa chỉ email </label>
						<input name="CompanyEmail" type="email" placeholder="Email" />
					</div>
					<div class="form-group">
						<label>Mô tả </label>
						<input type="text" name="Vision" placeholder="Mô tả" />
					</div>
					<div class="form-group">
						<label>Địa chỉ </label>
						<input type="text" name="HQAddress" placeholder="Địa chỉ" />
					</div>
					<div class="form-group">
						<p id="dat" for="imagebox" style="text-align: justify;">Ảnh hoặc logo của công ty</p>
						<input type="file" name="file" required>
					</div>
					<input type="button" name="next" class="next action-button" value="Tiếp theo" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">THÔNG TIN CÁ NHÂN</h2>
					<h3 class="fs-subtitle">Hãy cho chúng tôi biết thêm thông tin về bạn</h3>
					<div class="form-group">
						<label>Tên </label>
						<input type="text" name="fname" placeholder="Tên" required />
					</div>
					<div class="form-group">
						<label>Họ </label>
						<input type="text" name="lname" placeholder="Họ" required/>
					</div>
					<div class="form-group">
						<label>Mã thẻ ngân hàng </label>
						<input type="number" name="card" placeholder="Mã thẻ ngân hàng" required/>
					</div>
					<div class="form-group">
						<label>Mã quốc Gia </label>
						<input type="number" name="country_code" id='authy-countries' placeholder="Quốc Gia" required/>
					</div>
					<div class="form-group">
						<label>Số điện thoại </label>
						<input type="number" name="phone_number" id='authy-cellphone' placeholder="Số điện thoại" />
					</div>
					<div class="form-group">
						<label>Chức vụ </label>
						<input type="text" name="cv" placeholder="Chức vụ" required/>
					</div>
					<input type="button" name="previous" class="previous action-button-previous" value="Quay về" />
					<input type="submit" class="action-button" value="Ðăng ký" />
				</fieldset>
			</form>
			<div class="dme_link">
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
    	$('#msform').bootstrapValidator({
			fields: {
				email: {
					validators: {
						emailAddress: {
							message: 'Không đúng cấu trúc email'
						}
					}
				},
				country_code:{
					validators: {
						stringLength: {
							max: 2,
							message: 'Phải tối thiểu là 2 số'
						}
					}
				},
				phone_number:{
					validators: {
						stringLength: {
							min: 9,
                        	max: 10,
							message: 'Phải tối thiểu là 9 và tối đa 10 số'
						}
					}
				},
				card:{
					validators: {
						stringLength: {
							min: 8,
                        	max: 10,
							message: 'Phải tối thiểu là 8 và tối đa 10 ký tự'
						}
					}
				}
			}
    });
});
	</script>
	<script>
		//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
$(".next").click(function(){
	if(animating) return false;
	animating = true;
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        // 'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});
	</script>
	<!-- /.MultiStep Form -->
	<br>
	</div>
	@else
	<div class="col-md-8 col-md-offset-2" style="">
		<div class="panel panel-default" style="border-top-color: #e74c3c;">
			<p style="text-align: center;  margin: 5px;">
				Bạn đã có đề xuất đang chờ xử lý.
			</p>
		</div>
	</div>
	@endif
	@include('layouts.footer')
	</div>

</body>