<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$("#devregis").hide();

		$("#body").click(function(){
			$("#devregis").hide(1000);
		});
		$("#show").click(function(){
			$("#devregis").show(1000);
		});
	});
</script>
<div  style="width: 100%; height: 100%">
	<div id="devregis" style="width: 30%;height: 60%; background: #fff;position: fixed;top: 20%; right: 35%; ; border-radius: 10px 10px; border: 1px solid orange; padding-top: 5%;">
		<div class="fa fa-close" style="float: right;">

		</div>
		<div class="row">
			<div class="col-lg-3">

			</div>
			<form class="col-lg-9">
				Tên tài khoản: 
				<input class="form form-control w-75 "  type="text" name="ten">
				<br>
				Mật Khẩu: 
				<input  class="form form-control w-75 " type="password" name="pass">
				Nhập lại mật khẩu: 
				<input class="form form-control w-75 "  type="password" name="repass">
				<br>
				<button class="btn btn-primary" type="submit" name="submit" value="Đăng ký"><a href="" class="text-light">Đăng ký</a></button>

				<button id="body" class="btn btn-primary"><i class="far fa-times-circle"></i>Thoát</button>

			</form>
		</div>
	</div>
</div>
<a id="hide" href="#">hihe</a>
<a id="show" href="#">show</a>