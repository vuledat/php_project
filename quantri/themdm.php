<?php 
      
   // include_once 'ketnoi.php'; 

if(isset($_POST['submit'])){
  $ten=$_POST['ten_dm']; 
  if(isset($ten)){
      $sql="INSERT INTO danhmucsp(ten) VALUES('$ten')";
      $query = mysqli_query($con,$sql);
      header("location: quantri.php?page=qldm");
  }
}
?>




            
<h2>Thêm danh mục</h2>
    <div class="panel-body">
           <div >
              
              <div>
                  <form method="post">
                      <input type="text" class="form-control" name="ten_dm" placeholder="Nhập tên danh mục">
                        <br>
                       <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                      <button type="button" class="btn btn-primary">Làm mới</button>
                  </form>
              </div>
              
              <div>
                 
              </div>
          
           </div>


    </div>
            
   