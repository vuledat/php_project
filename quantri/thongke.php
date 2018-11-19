<?php
$sql = "SELECT * FROM sanpham";
$query = mysqli_query($con,$sql);
$sl_ban = 0;
$doanh_thu = 0;
$ton_kho = 0;
$tien_ton_kho = 0;
function adddotstring($strNum) {

	$len = strlen($strNum);
	$counter = 3;
	$result = "";
	while ($len - $counter >= 0)
	{
		$con = substr($strNum, $len - $counter , 3);
		$result = '.'.$con.$result;
		$counter+= 3;
	}
	$con = substr($strNum, 0 , 3 - ($counter - $len) );
	$result = $con.$result;
	if(substr($result,0,1)=='.'){
		$result=substr($result,1,$len+1);   
	}
	return $result;
}

while ($row = mysqli_fetch_array($query)) {
	$sl_ban += $row['ban'];
	$ton_kho += $row['sl'];
	$doanh_thu += $row['ban']*$row['gia'];
	$tien_ton_kho += $row['sl']*$row['gia'];

}


?>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="mar">
				<div>
					<h5 class="">
						Số lượng đã bán:
					</h5>
				</div>
				<div class="alert alert-warning text-center" role="alert">
					<i class="fas fa-shopping-cart fa-3x"></i>
					<span class="text-danger"><strong><?php echo $sl_ban; ?></strong></span>
				</div>
			</div>
		</div>
		<div class=" col-lg-6">
			<div class="mar">
				<div>
					<h5 class="">
						Doanh thu:
					</h5>
				</div>
				<div class="alert alert-info text-center" role="alert">
					<i class="fas fa-dollar-sign fa-3x"></i>
					<span class="text-danger"><strong><?php echo adddotstring($doanh_thu); ?> Đồng</strong></span>

				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class=" col-lg-6">
			<div class="mar">
				<div>
					<h5 class="">
						Tồn kho:
					</h5>
				</div>
				<div class="alert alert-primary text-center" role="alert">
					<i class="fas fa-store fa-3x"></i>
					<span class="text-danger"><strong><?php echo $ton_kho; ?></strong></span>

				</div>
			</div>
		</div>
		<div class=" col-lg-6">
			<div class="mar">
				<div>
					<h5 class="">
						Tiền tồn kho:
					</h5>
				</div>
				<div class="alert alert-warning text-center" role="alert">
					<i class="fas fa-money-check-alt fa-3x"></i>
					<span class="text-danger"><strong><?php echo adddotstring($tien_ton_kho); ?> Đồng</strong></span>

				</div>
			</div>
		</div>
	</div>
	<h4 class=" text-center" style="margin-top: 10px">Sản phẩm hết hàng</h4>
<table class="table table-striped" style="margin-top: 10px">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tên Sản Phẩm</th>
          <th scope="col">Giá</th>
          <th scope="col">Danh Mục</th>
          <th scope="col">Ảnh</th>
          <th scope="col">Xóa</th>
          <th scope="col">Sửa</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $sql = "SELECT *, sanpham.ten as ten,oem.ten as ten_oem FROM sanpham INNER JOIN oem ON sanpham.id_oem = oem.id;";
	  $query = mysqli_query($con,$sql);
      while ($row= mysqli_fetch_array($query)){
      		if ($row['sl'] == 0) {
      			
      		
      ?>
        <tr>
          <th scope="row"><?php echo $row['id'];  ?></th>

          <td><?php echo $row['ten']; ?> </td>
          <td><?php echo $row['gia']; ?> </td>
          <td><?php echo $row['ten_oem']; ?> </td>
          <td><span class="thumb"><img width="80px" height="auto" src="anh/<?php echo $row['anh']; ?>" /></span></td>
          
          <td><a href="xoasp.php?id=<?php echo $row['id']; ?>" 
            onclick="return xoa();"><span class="fa fa-trash-alt"></span></a></td>

          <td><a href="quantri.php?page=suasp&id=<?php echo $row['id']?>"><span class="fa fa-edit"></span></a></td>
        </tr>
        <?php
        }
        }
        ?>
      </tbody>
</table>
</div>