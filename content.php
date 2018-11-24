<link rel="stylesheet" type="text/css" href="./css/style.css">


<div id="content" class="col-lg-9 col-md-9 col-sm-12">
	<div>
		<?php
			if (isset($_GET['ten_dm'])) {
				$ten_dm = $_GET['ten_dm'];
			}
			if (isset($_GET['ten_ncc'])) {
				$ten_dm = $_GET['ten_ncc'];
			}
		?>
		<h3><a href="#" id="link" class="text-danger">
			Sản phẩm / 
			<?php
			if (isset($_GET['ten_dm']) || isset($_GET['ten_ncc'])) {
				echo $ten_dm;
			}
				
					
			?>

		</a></h3>
	</div>


	<div class="row">
		<?php
		$t = 0;
		while ($row=mysqli_fetch_array($query2)) {
			$t++;
			?>

			<div class="item-sanpham col-lg-3 col-md-6 col-sm-12">
				<div class="card">
					<div class="card-body text-center">
						<img class="card-img-top img-fluid lazy-load-item" data-original="./quantri/anh/<?php echo $row['anh'];?>" src="./anh/load.gif" height="150" width="150" >

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
		<div class="text-primary">
			<strong>Đã tìm được: </strong> <?php echo $t; ?> Sản phẩm
		</div>
</div>
<script type="text/javascript">
    $(function() {
        $("img.lazy-load-item").lazyload({
            effect : "fadeIn",
            threshold: 1000,
            event : "scroll"
        });
    });
</script>


