<?php

?>
<div class="col-lg-9">
	<div>
		<h3><a href="#"  class="text-danger">Giỏ Hàng</a></h3>
	</div>


	<div class="row">
		<?php 
			$thanhtoan=0;
			$k= 0;
			if (!empty($_SESSION["cart_id"]))
			foreach ($_SESSION["cart_id"] as $key => $value) {
    		$sql = "SELECT * FROM sanpham WHERE id=$value";
    		$query = mysqli_query($con,$sql);
    		$row= mysqli_fetch_array($query);
    		$thanhtoan += $row['gia'];
    		//$sl=1;
    	?>

    		<div class="item-sanpham col-lg-3">
    			<div class="card">
    				<div class="card-body text-center">
    					<img class="card-img-top" height="150" width="150" src="./quantri/anh/<?php echo $row['anh'];?>">

    					<h6 class="card-title"><?php echo $row['ten'];?></h6>
    					<p class="card-text text-danger"><?php echo $row['gia'];?></p>

    					<button class="btn btn-danger "><a class=" text-light" href="xoa.php?key=<?php echo $k ?>">Xóa</a></button>

    				</div>
    			</div>
			</div>
		<?php
		$k++;
    	}

		?>
	</div>
	<div>
		
		Tổng Tiền: 
		<span class="text-danger font-weight-bold"><?php echo $thanhtoan; ?> Đồng</span>
		<button class="btn btn-success"><a class="text-white" href="index.php?pagecart=thanhtoan">Thanh toán</a></button>
	</div>


</div>