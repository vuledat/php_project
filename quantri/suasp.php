<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM sanpham WHERE id = '$id'";

  $query = mysqli_query($con,$sql);
  $row= mysqli_fetch_array($query);
  $nhacc = $row['id_oem'];
  $danhmucsp = $row['id_dm'];
  $giasp = $row['gia'];
  $sl = $row['sl'];

}


if (isset($_POST['submit'])) {
  if (isset($_POST['ten_sp'])) {
    $ten_sp= $_POST['ten_sp'];
    $gia= $_POST['gia'];
    $ncc= $_POST['ncc'];
    $dm = $_POST['dm'];
    $sl = $_POST['sl'];



    if ($_FILES['anh']['error'] ==0 ) {
        if (isset($_FILES['anh']['name'])) {
          
         $anh=$date.$_FILES['anh']['name'];
         $sql="UPDATE sanpham SET ten='$ten_sp', gia='$gia', id_oem='$ncc',id_dm='$dm',anh='$anh',sl='$sl' WHERE id=$id"; 
         move_uploaded_file($_FILES['anh']['tmp_name'] ,'./anh/'.$anh);

         echo "<div class='alert alert-success'>
         <strong>Success!</strong> Đã sửa thành công
         </div>";
        }
        

    }
     else{
      $sql="UPDATE sanpham SET ten='$ten_sp', gia='$gia', id_oem='$ncc',sl='$sl',id_dm='$dm' WHERE id=$id"; 
    }
     
    $query = mysqli_query($con,$sql);
    echo $dm.$ncc;
  
  }
}
?>


<h2>Sửa sản phẩm</h2>
    <div class="panel-body">
           <div >
              
              <div>
                  <form method="post" enctype="multipart/form-data">
                    Tên: 
                      <input type="text" class="form-control" name="ten_sp" value="<?php echo $row['ten'] ?>">
                        <br>
                        Nhà sản xuất: 
                        <select class="form-control" name="ncc">
                          <?php
                          $sqll = "SELECT * FROM oem";
                          $sql2 = "SELECT * FROM danhmucsp";
                          $query2 = mysqli_query($con,$sql2);
                          $query = mysqli_query($con,$sqll);

                          while ($row= mysqli_fetch_array($query)){
                          ?>
                          <option value="<?php echo $row['id']; ?>" <?php
                            if ($row['id'] == $nhacc) {
                               echo "selected";
                            }
                           ?> ><?php echo $row['ten']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                        <br>
                        Danh mục: 
                        <select class="form-control" name="dm">
                          <?php
                          $sql2 = "SELECT * FROM danhmucsp";
                          $query = mysqli_query($con,$sql2);

                          while ($row= mysqli_fetch_array($query)){
                          ?>
                          <option value="<?php echo $row['id']; ?>" <?php
                            if ($row['id'] == $danhmucsp) {
                               echo "selected";
                            }
                           ?> ><?php echo $row['ten']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                        <br>
                        Giá: 
                         <input type="text" class="form-control" name="gia" value="<?php echo $giasp ?>">
                         <br>
                         Số lượng:
                         <input type="text" class="form-control" name="sl" value="<?php echo $sl ?>">
                        <br>
                        <input type="file" name="anh" class="form-control">
                        <br>
                       <button type="submit" class="btn btn-primary" name="submit">Sửa</button>
                      <button type="button" class="btn btn-primary">Làm mới</button>
                  </form>
              </div>
              
              <div>
                 
              </div>
          
           </div>

   

    </div>