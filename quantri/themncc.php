<?php 
 
if(isset($_POST['submit'])){
  $ten=$_POST['ten_ncc']; 
  if(isset($ten)){
      $sql="INSERT INTO oem(ten) VALUES('$ten')";
      $query = mysqli_query($con,$sql);
      header("location: quantri.php?page=qloem");
  }
}
?>




            
<h2>Thêm Nhà Cung Cấp</h2>
    <div class="panel-body">
           <div >
              
              <div>
                  <form method="post">
                      <input type="text" class="form-control" name="ten_ncc" placeholder="Nhập tên NCC">
                        <br>
                       <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                      <button type="button" class="btn btn-primary">Làm mới</button>
                  </form>
              </div>
              
              <div>
                 
              </div>
          
           </div>


    </div>
            
   