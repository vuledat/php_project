<?php
    $id = $_GET['id'];
    $sql="SELECT * FROM danhmucsp WHERE id='$id'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
    if(isset($_POST['submit'])){
    $ten_dm=$_POST['ten_dm'];
    if(isset($ten_dm)){
        $sql="UPDATE danhmucsp SET ten='$ten_dm' WHERE id=$id";
        $query= mysqli_query($con, $sql);
        header('location: quantri.php?page=qldm');
    }
}
?>



<h2>Sửa danh mục</h2>
    <div class="panel-body">
           <div >
              
              <div>
                  <form method="post">
                      <input type="text" class="form-control" name="ten_dm" value="<?php echo $row['ten']; ?>">
                        <br>
                       <button type="submit" class="btn btn-primary" name="submit">Sửa</button>
                      <button type="reset" class="btn btn-primary">Làm mới</button>
                  </form>
              </div>
              
              <div>
                 
              </div>
          
           </div>

    <table class="table table-striped" style="margin-top: 10px">
          
    </table>

    </div>