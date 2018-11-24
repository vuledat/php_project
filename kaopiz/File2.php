<!DOCTYPE html>
<html>
<head>
	<title>File 2</title>
</head>
<style type="text/css">
	#file{
		margin-left: 20%;
	}
</style>
<?php
$f = fopen("data.txt", "w");
if (isset($_POST['submit'])) {
	if (isset($_POST['name']) || isset($_POST['company']) ||isset($_POST['address']) || isset($_POST['Email'])) {
		if (empty($_POST['name']) || empty($_POST['company']) ||empty($_POST['address']) || empty($_POST['Email'])) {
		echo "<script>alert('Khong duoc de trong');</script>";
	}
	else{
		if (empty($_POST['pass']) || empty($_POST['repass'])) {
			echo "<script>alert('Ban can nhap mat khau');</script>";
		}
		else{
			if ($_POST['pass'] == $_POST['repass']) {
				if (empty($_POST['PostM']) && empty($_POST['PostP'])) {
					echo "<script>alert('Vui long chon Email hoac Post');</script>";
				}
				else{
					
					$name = $_POST['name'];
					$company = $_POST['company'];
					$address = $_POST['address'];
					$country = $_POST['country'];

					$mem = $_POST['Memtype'];

					
					

					$pass = $_POST['pass'];
					$email = $_POST['Email'];

					fwrite($f, $name."\r\n");
					fwrite($f, $company."\r\n");
					fwrite($f, $address."\r\n");
					fwrite($f,$mem."\r\n");
					if (isset($_POST['PostM'])) {
						$postm = $_POST['PostM'];
						fwrite($f,$postm."\r\n");
					}
					if (isset($_POST['PostP'])) {
						$postp = $_POST['PostP'];
						fwrite($f,$postp."\r\n");
					}
					fwrite($f, $country."\r\n");
					fwrite($f, $email."\r\n");
					header("location: ../quantri.php");

				}
			}
			else{
				echo "<script>alert('Nhap sai mat khau');</script>";

			}
		}
	}
	}
}
?>
<body>

	<div id="file">
		<h2>Member Information</h2>
		<form method="Post" action="File2.php">
			<table>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" required></td>
				</tr>
				<tr>
					<td>Company: </td>
					<td><input type="text" name="company"></td>
				</tr>
				<tr>
					<td>Address: </td>
					<td><input type="text" name="address"></td>
				</tr>
				<tr>
					<td>Country: </td>
					<td><select name="country">
						<option value="Viet Nam">Viet Nam</option>
						<option value="US">US</option>
					</select></td>
				</tr>
				<tr>
					<td>Membership Type:</td>
					<td>
						<input type="radio" name="Memtype" value="Individual" checked="checked">Individual
						<input type="radio" name="Memtype" value="BUsiness">BUsiness
						<input type="radio" name="Memtype" value="Organization">Organization
					</td>
				</tr>
				<tr>
					<td>Post Infor By</td>
					<td>
						<input type="checkbox" name="PostM" value="Email" checked="checked">Email
						<input type="checkbox" name="PostP" value="Post">Post
					</td>
				</tr>
				<tr>
					<td>Enter Password</td>
					<td>
						<input type="password" name="pass">
					</td>
				</tr>
				<tr>
					<td>ReEnter Password</td>
					<td>
						<input type="password" name="repass">
					</td>
				</tr>
				<tr>
					<td>Email Address</td>
					<td>
						<input type="email" name="Email">
					</td>
				</tr>
				<tr>
					<td>Want Newsletter</td>
					<td>
						<input type="radio" name="new">yes
						<input type="radio" name="new">no
						
					</td>
				</tr>

			</table>
			<input type="submit" name="submit" value="submit">
			<input type="reset" name="reset" value="reset">
		</form>
	</div>
</body>
</html>