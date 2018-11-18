<link rel="stylesheet" type="text/css" href="./css/style.css">

<div id="content" class="col-lg-9 col-md-9 col-sm-12">
	<div>
		<h3><a href="#"  class="text-danger">Sản phẩm nổi bật</a></h3>
	</div>


	<div class="row">
		<?php
		while ($row=mysqli_fetch_array($query2)) {
			?>
			<div class="item-sanpham col-lg-3 col-md-6 col-sm-12">
				<div class="card">
					<div class="card-body text-center">
						<img class="card-img-top img-fluid" height="150" width="150" src="./quantri/anh/<?php echo $row['anh'];?>">

						<div id="h6-item">
							<h6 class="card-title" style="height: 38px;"><?php echo $row['ten'];?></h6>
						</div>
						<span class="card-text text-success">còn lại: <?php echo $row['sl'];?></span>
						<br>
						<span class="card-text text-danger">giá: <?php echo $row['gia'];?></span>
						<a href="themcart.php?id=<?php echo $row['id'] ?>" class="text-white btn btn-primary">Thêm vào giỏ</a>
					</div>
				</div>
			</div>

			<?php
		}
		?>
	</div>



</div>
