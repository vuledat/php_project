<?php
$sql = "SELECT * FROM thanhvien ORDER BY id";
$query = mysqli_query($con, $sql);
?>
<script type="text/javascript">
	function xoatv() {
		var conf=confirm("Bạn có chắc chắn muốn xóa danh mục này hay không?");
        return conf;
	}

</script>
<div class="row">
          <div class="col-lg-6">
          <button type="button" class="btn btn-primary" ><a href="quantri.php?page=themtv" style="color: white;">Thêm Thành Viên</a></button>
       </div>
      <!--  <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <form method="GET">
                    <input type="text" class="form-control" placeholder="Nhập từ khóa" name="search">
                    </form>
                </div>
                <div class="col-lg-6">
                    <form method="GET">
                    <input type="submit" name="submit" class="btn btn-primary" value="Tìm Kiếm">
                    </form>
                </div>

            </div>
       </div> -->
       </div>
<table class="table table-striped" style="margin-top: 10px">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tên Thành Viên</th>
          <th scope="col">Mật Khẩu</th>
          <th scope="col">UT</th>
          <th scope="col">Sửa</th>
          <th scope="col">Xóa</th>
        
        </tr>
      </thead>
      <tbody>
      <?php
      while ($row= mysqli_fetch_array($query)){
      ?>
        <tr>
          <th scope="row"><?php echo $row['id'];  ?></th>

          <td><?php echo $row['ten']; ?> </td>
          <td><?php echo $row['mk']; ?> </td>
		  <td><?php echo $row['ut']; ?> </td>
          <td><a href="quantri.php?page=suatv" class="fa fa-edit"></a></td>
          <td><a href="xoatv.php?id=<?php echo $row['id']; ?>" onclick="return xoatv();" class="fa fa-trash"></a></td>

         
        </tr>
        <?php
        }
        ?>
      </tbody>
</table>