


<div class="col-lg-9">

<?php
	if (!$_SESSION["user"]) {
		header("Location: ./quantri/index.php");
	}
	else{
		
	$sql = "SELECT * FROM sanpham ORDER BY id";
	$query = mysqli_query($con,$sql);
	if (isset($_SESSION["user"])) {
	$ten =$_SESSION["user"];
		
	}
	while ($row = mysqli_fetch_array($query)) {
		foreach ($_SESSION["cart_id"] as $key => $value) {
			if ($row['id'] == $value) {
				if ($row['sl']>=1) {
					$sl = $row['sl']-1;
					$ban = $row['ban']+1;
					$sql1 = "UPDATE sanpham SET sl=$sl,ban=$ban WHERE id=$value";
					$query1 = mysqli_query($con,$sql1);
					
						
					$sql1 = "INSERT INTO giohang( ten_kh, id_sp) VALUES ('$ten','$value')";
					$query1 = mysqli_query($con,$sql1);
					
				}
				else
					{
					?>
						
					<div class='alert alert-success'>
				
				Thật không may! <strong><?php echo $row['ten']; ?></strong>  đã hết hàng 
				</div>
				 <?php
					}
				}
			
		}
	}

	
					// $sql1 = "INSERT INTO giohang( ten_kh, ten_sp) VALUES ('Dat',1)";
					// $query1 = mysqli_query($con,$sql1);




	$_SESSION["cart_sl"]=0;
	$_SESSION["cart_id"]= array();
	//header('location: index.php?pagecart=giohang');

	}
?>
	
<a class="btn btn-primary text-light" href="<?php echo 'index.php' ?>">Quay lại</a>
</div>

