<?php 
ob_start();
include_once './ketnoi.php'; 
if (isset($_GET['submit'])) {
  if (isset($_GET['search'])) {
  $keyword = $_GET['search'];
   $sql= "SELECT * FROM danhmucsp WHERE ten LIKE '%$keyword%'";
    
}
}
else{
    $sql="SELECT * FROM danhmucsp ORDER BY id";
}
$query = mysqli_query($con,$sql);

?>

<script>
    function xoaDanhMuc(){
        var conf=confirm("Bạn có chắc chắn muốn xóa danh mục này hay không?");
        return conf;
    }
</script>
         
<div class="panel-body">
       <nav class="navbar navbar-light bg-light justify-content-between">
        <button type="button" class="btn btn-primary" ><a href="quantri.php?page=themdm" style="color: white;">Thêm Danh Mục</a></button>

        <form class="form-inline" action="searchdm.php">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" >
          <button class="btn btn-primary" type="submit" name="submit">Search</button>
        </form>
      </nav>

<table class="table table-striped" style="margin-top: 10px">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tên Danh Mục</th>
          <th scope="col">Xóa</th>
          <th scope="col">Sửa</th>
        </tr>
      </thead>
      <tbody>
      <?php
      while ($row= mysqli_fetch_array($query)){
      ?>
        <tr>
          <th scope="row"><?php echo $row['id'];  ?></th>

          <td><?php echo $row['ten']; ?> </td>

          <td><a href="xoadm.php?id=<?php echo $row['id']; ?>" 
            onclick="return xoaDanhMuc();"><span class="fa fa-trash-alt"></span></a></td>

          <td><a href="quantri.php?page=suadm&id=<?php echo $row['id']?>"><span class="fa fa-edit"></span></a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
</table>

</div>

