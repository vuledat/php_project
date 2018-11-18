<?php

if(isset($_POST['submit'])){
  $ten=$_POST['ten_tv']; 
  $mk =$_POST['mk_tv'];
  $ut =$_POST['ut'];
  if(isset($ten)){
      $sql="INSERT INTO thanhvien(ten,mk,ut) VALUES('$ten','$mk','$ut')";
      $query = mysqli_query($con,$sql);
      header("location: quantri.php?page=dstv");
  }
}
?>
<h2>Thêm Thanh Viên</h2>
<div class="panel-body">
 <div >
  
  <div>
    <form method="post">
      <input type="text" class="form-control" name="ten_tv" placeholder="Nhập tên thành viên">
      <br>
      <input type="text" class="form-control" name="mk_tv" placeholder="Nhập mật khẩu">
      <br>
      <div>
        <select class="custom-select" name="ut">
          <option value="1">Quả Trị Viên</option>
          <option value="2">Chủ Cửa Hàng</option>
          <option value="3">Nhân Viên</option>
          
        </select>      
      </div>
      <br>
      <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
      <button type="reset" class="btn btn-primary">Làm mới</button>
    </form>
  </div>

  <div>
   
  </div>

</div>

</div>