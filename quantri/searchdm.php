<?php 
    ob_start();
    session_start();   
    include_once './ketnoi.php'; 
if(isset($_SESSION["user"])& isset($_SESSION["pass"])){
?>     
 



<!DOCTYPE html>
<html>
<head>
    <title>Hệ Thống Quản Trị</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 style="text-align: center;margin: 30px"> Hệ Thống Quản Trị</h1>
        <div class="row">
            <div class="col-lg-3" >
                <div class="list-group">
                      <button type="button" class="list-group-item list-group-item-action active">
                        Trang chủ quản trị
                      </button>
                      <button type="button" class="list-group-item list-group-item-action"><a href="quantri.php?page=dstv">Danh sách thành viên</a></button>
                      <button type="button" class="list-group-item list-group-item-action"><a href="quantri.php?page=qldm">Quản lý danh mục</a></button>
                      <button type="button" class="list-group-item list-group-item-action"><a href="quantri.php?page=qlsp">Quản lý sản phẩm</a></button>
                      <button type="button" class="list-group-item list-group-item-action" disabled><a href="logout.php">Đăng xuất</a></button>
                </div>
            </div>
             
                
            <div class="col-lg-9">
                
              <?php
              
              include_once './qldm.php';
              
              ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}else{
    header('location: index.php');
}
?>
