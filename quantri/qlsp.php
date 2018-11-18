<?php
ob_start();
include_once './ketnoi.php'; 
$sql="SELECT * FROM sanpham ORDER BY id";
$query = mysqli_query($con, $sql);
$row= mysqli_fetch_array($query);
$rowCount = mysqli_num_rows($query);

if (isset($_GET['submit'])) {
  if (isset($_GET['search'])) {
    $keyword = $_GET['search'];
    $sql= "SELECT * FROM sanpham WHERE ten LIKE '%$keyword%'";
  }
}
else{
  if (isset($_GET['paging']))
          $paging =$_GET['paging']*5;
$sql="SELECT * FROM sanpham LIMIT $paging,5";
}
$query = mysqli_query($con, $sql);

?>
<?php
if(isset($_SESSION["user"])&& isset($_SESSION["pass"])){
?>

<script>
    function xoa(){
        var conf=confirm("Bạn có chắc chắn muốn xóa danh mục này hay không?");
        return conf;
    }
</script>
<nav class="navbar navbar-light bg-light justify-content-between">
        <button type="button" class="btn btn-primary" ><a href="quantri.php?page=themsp" style="color: white;">Thêm Sản Phẩm</a></button>

        <form class="form-inline" action="searchsp.php">
          <input class="form-control mr-sm-2 timkiem" type="search" placeholder="Search" aria-label="Search" name="search" onkeyup="timkiem(this.value)">
          <button class="btn btn-primary" type="submit" name="submit">Search</button>
        </form>
      </nav>

    <script>

        function timkiem(str) {
            var xhttp;
            if (str == "") {
                document.getElementById("sanpham_nd").innerHTML = "";
                return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("sanpham_nd").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "ajax/searchSP.php?keyword="+str, true);
            xhttp.send();
        }
    </script>

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
      <tbody id="sanpham_nd">
      <?php
      while ($row= mysqli_fetch_array($query)){
      ?>
        <tr>
          <th scope="row"><?php echo $row['id'];  ?></th>

          <td><?php echo $row['ten']; ?> </td>
          <td><?php echo $row['gia']; ?> </td>
          <td><?php 
          $id_dm=$row['id_dm'];
          $sql2 = "SELECT * FROM danhmucsp WHERE id =$id_dm ";
          $query2 = mysqli_query($con, $sql2);
          $row2= mysqli_fetch_array($query2);
           echo $row2['ten']; 
          ?> </td>
          <td><span class="thumb"><img width="80px" height="auto" src="anh/<?php echo $row['anh']; ?>" /></span></td>
          
          <td><a href="xoasp.php?id=<?php echo $row['id']; ?>" 
            onclick="return xoa();"><span class="fa fa-trash-alt"></span></a></td>

          <td><a href="quantri.php?page=suasp&id=<?php echo $row['id']?>"><span class="fa fa-edit"></span></a></td>
        </tr>
        <?php
        
        }
        
        //$rowCount = mysqli_num_rows($query);
        echo $rowCount;
        ?>
      </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    
  <li class="page-item"><a class="page-link" href="quantri.php?page=qlsp&paging=<?php 
    if($_GET['paging']>0 )
        echo $_GET['paging']-1;
        else echo 0;


   ?>">Previous</a></li>

<?php
for ($i=0; $i <$rowCount/5 ; $i++) { 
?>
    <li class="page-item"><a class="page-link" href="quantri.php?page=qlsp&paging=<?php echo $i ?>"><?php echo $i ?></a></li>
   
<?php
}
?>
  <li class="page-item"><a class="page-link" href="quantri.php?page=qlsp&paging=<?php echo $_GET['paging']+1 ?>">Next</a></li>
  </ul>
</nav>


<?php
}
?>
