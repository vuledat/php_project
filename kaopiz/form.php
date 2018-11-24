<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>

<body>
	<div>
		<form method="Post" action="display.php">
			Name: <input type="text" name="name">
			Age: <select name="age">
				<option value="1">under 18</option>
				<option value="2">under 30</option>
				<option value="3">under 60</option>
				<option value="4">over 60</option>
			</select>
			Sex: <input type="checkbox" name="Male" id="m" value="Male"> Male
				<input id="f" type="checkbox" name="Female" value="Female">Female
				<br>
				<script type="text/javascript">
					document.getElementById("m").checked = true;
					document.getElementById("m").onclick = function () {
						document.getElementById("m").checked = true;
						document.getElementById("f").checked = false;

					};

					document.getElementById("f").onclick = function () {
						document.getElementById("f").checked = true;
						document.getElementById("m").checked = false;
					};

				</script>
				<br>
				Working experiences
				<select name="exper">
					<option value="1">less than 2 </option>
					<option value="2">less than 5</option>
					<option value="3">more than 5</option>
				</select>
				Highest Graduation 
				<select name="gradu">
					<option value="1">highschool</option>
					<option value="2">university</option>
					<option value="3">postgraduate</option>
				</select>
				<br>
				<br>
				<input type="submit" name="submit" value="Qualification ">
				<input type="reset" name="reset" value="reset ">
		</form>
	</div>
</body>
</html>