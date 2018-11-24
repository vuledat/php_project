<?php
ob_start();
session_start();  
$selectSP = "SELECT sanpham.*,oem.ten as ten_ncc,danhmucsp.ten as ten_dm FROM sanpham INNER JOIN oem ON oem.id = sanpham.id_oem INNER JOIN danhmucsp ON danhmucsp.id = sanpham.id_dm";
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
else{
	if (isset($_GET['id_dm'])) {
		$id_dm = $_GET['id_dm'];
		$sql2 = "select * from sanpham WHERE id_dm='$id_dm' ";
		
	}

	elseif (isset($_GET['id_ncc'])) {
		$id_ncc = $_GET['id_ncc'];
		$sql2 = "$selectSP WHERE id_oem='$id_ncc' ";
		
	}
	else
		$sql2 = "$selectSP";
}
	$sql = "SELECT * FROM danhmucsp";
	$query = mysqli_query($con, $sql);
	$query2 = mysqli_query($con, $sql2);

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
        <script type="text/javascript" src="./js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="./js/jquery.lazyload.min.js"></script>
	</head>
	<body>
		<?php
		include 'header.php';
		include 'slider.php';
		?>

		

		<div id="menu">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12" id="menu">
						<?php
							include 'menu.php';
							include 'ncc.php';
							include 'widget.php';
						?>
	
					</div>
					<?php
					

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
<script>

    function timkiem(str) {
        var xhttp;
        if (str == "") {
            document.getElementById("sanpham_nd").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("sanpham_nd").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "ajax/home_search.php?keyword="+str, true);
        xhttp.send();
    }
</script>
<script type="text/javascript">
	$( ".get-tt" ).click(function() {
	  // document.getElementById('link').innerHTML = "Sản phẩm / " + this.innerHTML;
	});

</script>
