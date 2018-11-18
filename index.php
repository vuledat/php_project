<?php
ob_start();
session_start();  

if (empty($_SESSION["cart_id"]) && empty($_SESSION["cart_sl"])) {
	$_SESSION["cart_id"]=array();
	$_SESSION["cart_sl"]=0;
}

include_once './quantri/ketnoi.php';
if (isset($_GET['submit'])) {
	if (isset($_GET['search'])) {
		$search = $_GET['search'];
		$sql2="SELECT * FROM sanpham WHERE ten LIKE'%$search%'";
	}
}
else
	if (isset($_GET['id_dm'])) {
		$id_dm = $_GET['id_dm'];
		$sql2 = "SELECT * FROM sanpham WHERE id_dm='$id_dm' ORDER BY id";
	}

	else
		$sql2 = "SELECT * FROM sanpham ORDER BY id";

	$sql = "SELECT * FROM danhmucsp";
	$query = mysqli_query($con, $sql);
	$query2 = mysqli_query($con, $sql2);
// if(isset($_SESSION["user"]) && isset($_SESSION["pass"])){
	?>



	<!DOCTYPE html>
	<html>
	<head>
		<title>Minh Anh Mobile</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./css/style.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
		include 'header.php';
		include 'slider.php';
		?>

		

		<div id="menu">
			<div class="container">
				<div class="row">
					<?php
					include 'menu.php';


					if (isset($_GET['pagecart'])) {
						$pagecart= $_GET['pagecart'];
						switch ($pagecart) {
							case 'giohang':
							include 'giohang.php';
							break;
							case 'thanhtoan':
							include 'thanhtoan.php';
							break;
							default:

							break;
						}
					}
					else
						include 'content.php';
					?>


				</div>

			</div>
		</div>
		<div style="height: 300px;background: #F5F5F5;">

		</div>
		<?php
		include_once('footer.php');
		?>
	</body>
	</html>
<!-- <div id="infor">
	<i class="far fa-user-circle"></i>
</div> -->
<?php
// }else{
//     header('location: quantri/index.php');
// }
function my_url(){

	$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

	return $url;
}

include 'scrolltop.php';
include 'regis.php';
?>

