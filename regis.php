<script type="text/javascript">
	$(document).ready(function(){

		// $("#devregis").hide(0);
		$("#body").click(function(){
			$("#devregis").hide(1000);
		});
		$("#regis").click(function(){
			$("#devregis").show(1000);
		});
	});
</script>
<?php
if(isset($_POST['submit'])){
	if (isset($_POST['ten']) || isset($_POST['pass']) || isset($_POST['repass']) ) {
		$ten = $_POST['ten'];
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];
		if ($pass == $repass) {
			$sql = "SELECT * FROM thanhvien";
			$query = mysqli_query($con,$sql);
			$dem = 0;
			while ($row = mysqli_fetch_array($query) ) {
				
			if ($row['ten'] == $ten) {
				$dem++;
			}
			}
			if ($dem <= 0) {
				$sql = "INSERT INTO `thanhvien`(`ten`, `mk`, `ut`) VALUES ('$ten','$pass','2')";
				$query = mysqli_query($con,$sql);
			}
			else 
		echo "<script> alert('Không đăng ký thành công. Tài khaonr bị trùng.') </script>";
		}
		else
		echo "<script> alert('Không đăng ký thành công. Mật khẩu không khớp.') </script>";

	}
}
?>
<div style="">
	<div id="devregis" style="width: 30%;height: 60%; background: #fff;position: fixed;top: 20%; right: 35%;border-radius: 10px 10px; border: 1px solid orange; padding-top: 5%; display: none;">
		<div class="fa fa-close" style="float: right; ">

		</div>
		<div class="row">
			<div class="col-lg-3">

			</div>
			<form method="post" class="col-lg-9">
				Tên tài khoản: 
				<input class="form form-control w-75 " required type="text" name="ten" id="name" onkeyup="testName()">
				<br>
				Mật Khẩu: 
				<input  class="form form-control w-75 " required type="password" name="pass" id="pass">
				Nhập lại mật khẩu: 
				<input class="form form-control w-75 " required type="password" name="repass" onkeyup="keyup()" id="repass">
				<br>
				<p id="alert" class="text-info"></p>
				<br>
				<button class="btn btn-primary" type="submit" name="submit" value="Đăng ký">Đăng ký</button>
				<span id="body" class="btn btn-primary" >Đóng</a></span>


			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	
	function testName(){
		var name=document.getElementById('name').value;
		var ok =1;
		<?php
		$sql1 = "SELECT * FROM thanhvien";
		$query1 = mysqli_query($con,$sql1);

		while ($row1 = mysqli_fetch_array($query1)) {
			$a = $row1['ten'];
			?>
			var ten = "<?php echo $a; ?>";
			if (name == ten) 
				ok = 0;
			<?php
		}
		?>
			if (!ok) {
				document.getElementById('alert').innerHTML = "Tên bị trùng";
				
			}
				
			else
				document.getElementById('alert').innerHTML = "Tên hợp lệ";
			
			
	}

	function keyup(){
		var pass=document.getElementById('pass').value;
		var repass =document.getElementById('repass').value;
		if(pass == repass){
			document.getElementById('alert').innerHTML = "đúng pass ";
			document.getElementById('alert').innerHTML = "đúng pass ";

		}
		else
		{
			document.getElementById('alert').innerHTML = "sai pass ";
			// document.getElementById('alert').css ("color": "red");

		}

	}
</script>