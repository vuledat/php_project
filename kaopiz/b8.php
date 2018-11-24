<!DOCTYPE html>
<html>
<head>
	<title>B8</title>
</head>
<body>
	<form>
		<input type="text" name="kw">
		<input type="submit" value="Giá Tiền" name="sbm">
	</form>
	<?php
		$tien = $_GET['kw'];
		if($tien <101)
			echo "Gía: ".$tien*450;
		if($tien >100 && $tien< 201)
			echo "Gía: ".(100*450 +($tien-100)*600);
		if($tien >200 && $tien<301)
			echo "Gía: ".(100*450 +($tien-100)*600);
		if($tien >300 && $tien<501)
			echo "Gía: ".$tien*900;
		if($tien >500 && $tien<1000)
			echo "Gía: ".$tien*1000;
		if($tien >1000)
			echo "Gía: ".$tien*1200;
	?>
</body>
</html>
