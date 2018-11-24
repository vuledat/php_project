<?php
if (isset($_POST['submit'])) {
  if (isset($_POST['ten_sp'])) {
    $ten_sp= $_POST['ten_sp'];
    $gia= $_POST['gia'];
    $ncc= $_POST['ncc'];
    $date = date("Y-m-d-H-i-s");
    $anh=$date.$_FILES['anh']['name'];
    $dm = $_POST['dm'];
    $sl = $_POST['sl'];
    $sql = "INSERT INTO sanpham(ten,id_oem,gia,anh,sl,id_dm) VALUES ('$ten_sp','$ncc','$gia', '$anh','$sl','$dm')";
    $query = mysqli_query($con,$sql);
    move_uploaded_file($_FILES['anh']['tmp_name'] ,'./anh/'.$anh);
    // echo $ten_sp.$gia.$ncc.$anh.$dm.$sl.$date ;
    echo "<div class='alert alert-success'>
    <strong>Success!</strong> Đã thêm thành công
  </div>";
  }
}
?>

<h2>Thêm sản phẩm</h2>
    <div class="panel-body">
           <div >
              
              <div>
                  <form method="post" enctype="multipart/form-data">
                      <input type="text" class="form-control" name="ten_sp" placeholder="Nhập tên sản phẩm" required="">
                        <br>
                         
                        <select class="form-control" name="ncc">
                          <?php
                          $sqll = "SELECT * FROM oem";
                          $sql2 = "SELECT * FROM danhmucsp";
                          $query2 = mysqli_query($con,$sql2);
                          $query = mysqli_query($con,$sqll);

                          while ($row= mysqli_fetch_array($query)){
                          ?>
                          <option value="<?php echo $row['id']; ?>"><?php echo $row['ten']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                        <br>
                        <select class="form-control" name="dm">
                          <?php
                          $sql2 = "SELECT * FROM danhmucsp";
                          $query = mysqli_query($con,$sql2);

                          while ($row= mysqli_fetch_array($query)){
                          ?>
                          <option value="<?php echo $row['id']; ?>"><?php echo $row['ten']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                        <br>

                         <input type="text" class="form-control" name="gia" placeholder="Nhập giá" required="">
                        <br>
                        <input type="text" class="form-control" name="sl" placeholder="Nhập số lượng" required="">
                        <br>
                        <input type="file" name="anh"  class="form-control" required="">
                        <br>
                       <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                      <button type="button" class="btn btn-primary">Làm mới</button>
                  </form>
              </div>
              
              <div>
                 
              </div>
          
           </div>

   

    </div>