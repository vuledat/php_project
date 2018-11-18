
<!DOCTYPE html>
<html>
<head>
	<title>B1</title>
</head>
<body>

	<form method="">
		<input type="text" name="txt">
		<input type="submit" value="Kết Quả" name="sbm">
	</form>
	<?php
	if (isset($_GET['txt'])) {
		$thu=$_GET['txt'];
	switch ($thu) {
		case 2:
			echo "<script>alert('Nhập số bất kỳ')</script>";
			break;
		case 3:
			echo "Thu 3";
			break;
		case 4:
			echo "Thu 4";
			break;
		case 5:
			echo "Thu 5";
			break;
		case 6:
			echo "Thu 6";
			break;
		case 7:
			echo "Thu 7";
			break;
		case 0:
			echo "Thu cn";
			break;
		default:
			echo "Không Hợp Lệ";
			break;
	}
	}
	else
		echo "alert('Nhập số bất kỳ')";
	
	?>
</body>
</html>