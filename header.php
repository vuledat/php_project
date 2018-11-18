<link rel="stylesheet" type="text/css" href="./css/style.css">

<header>
	<div class="container">
		<div id="header-1">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<a href="#">Tải ứng dụng | </a>
					<a href="#">Kết nối | </a>
					<a href="#">Trợ giúp <i class="far fa-question-circle"></i></a>

				</div>
				<div class="col-lg-5"></div>
				<div id="header-right" class="col-lg-4 col-md-6 col-sm-12 text-right">
					<a href="#"><i class="fas fa-bell"></i>Thông báo</a>
					<a href="quantri/index.php"><?php if (isset($_SESSION["user"])) {
						echo $_SESSION["user"];
					} else echo "Đăng nhập"; ?> | </a>


					<a id="" href="<?php if (isset($_SESSION["user"])) {
						echo 'quantri/logout.php';
					} else echo ''; ?>">

					<?php if (isset($_SESSION["user"])) {
						echo "Thoát";
					} else echo ""; ?>
						
					</a>
					<?php if (empty($_SESSION['user'])) {
						echo "<span id='regis' class = 'text-light'>Đăng ký</span>";
					} ?>
					
				</div>

			</div>
		</div>
		<div id="header-2" class="row">
			<div id="logo" class="col-lg-2 col-md-2">
				<h1><a href="index.php?page=sanpham"><img src="anh/logo.png"></a><span>A.M</span></h1>
			</div>
			<div id="search" class="col-lg-8 col-md-8" >
				<form class="" method="get">
					<input class="form-control w-100 " type="text" placeholder="Search" aria-label="Search" name="search"><span>&nbsp;&nbsp;
					</span>
					<button id="btn" type="submit" name="submit" style="background: transparent;border: none; font-size: 13px"></button>
					
				</form>
			</div>
			<div id="cart" class="col-lg-2 col-md-2" style="padding-top: 15px">
				<a href="index.php?pagecart=giohang" style="background: transparent;border: none; font-size: 35px;">
					<i class="fas fa-shopping-cart text-white">
						<span style="font-size: 20px"><?php echo $_SESSION["cart_sl"]; ?></span>
					</i>
				</a>
			</div>

		</div>
	</div>
</header>