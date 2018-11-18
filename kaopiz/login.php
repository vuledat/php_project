<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<?php
	if (isset($_POST['submit'])) {
		if (isset($_POST['name']) && isset($_POST['pass'])) {
			$name = $_POST['name'];
			$pass =$_POST['pass'];
			if ($name == 'admin' && $pass == 'admin') {
				header('location: regis.php');
			}
		}
	}
?>
<body>
	<h2>BOOK YOUR TICKET</h2>
	<div>
		<form method="post">
			<table>
				<tr>
					<td>User name</td>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="Password" name="pass">
					</td>
				</tr>
			</table>
			
			<input type="submit" name="submit" value="login">
			<input type="reset" name="reset" value="reset">
		</form>
	</div>
</body>
</html>