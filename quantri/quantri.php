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
    <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>
    <div class="container">
        <h1 style="text-align: center;margin: 30px"> Hệ Thống Quản Trị</h1>
        <div class="row">
            <div class="col-lg-3" >
                <div class="list-group">
                      <button type="button" class="list-group-item list-group-item-action active">
                      <a class="text-light" href="quantri.php?page=thongke">Trang chủ quản trị</a>
                        
                      </button>
                      <button type="button" class="list-group-item list-group-item-action"><a href="quantri.php?page=dstv">Danh sách thành viên</a></button>
                      <button type="button" class="list-group-item list-group-item-action"><a href="quantri.php?page=qldm">Quản lý danh mục</a></button>
                      <button type="button" class="list-group-item list-group-item-action"><a href="quantri.php?page=qlsp&paging=0">Quản lý sản phẩm</a></button>
                      <button type="button" class="list-group-item list-group-item-action" disabled><a href="logout.php">( <?php echo $_SESSION["user"]; ?>) Đăng xuất</a></button>
                </div>
            </div>
             
                
            <div class="col-lg-9">
                
                <?php
                    if (isset($_GET["page"])) {
                      switch ($_GET["page"]) {
                        case 'qldm':
                          include_once './qldm.php';
                          break;
                        case 'themdm':
                          include_once './themdm.php';
                          break;
                        case 'suadm':
                          include_once './suadm.php';
                          break;
                        case 'dstv':
                          include_once './danhsachtv.php';
                          break;
                        case 'qlsp':
                          include_once './qlsp.php';
                          break;
                        case 'themtv':
                          include_once './themtv.php';
                          break;
                        case 'themsp':
                          include_once './themsp.php';
                          break;
                        case 'suasp':
                          include_once './suasp.php';
                          break;
                        case 'thongke':
                          include_once './thongke.php';
                          break;
                        default:
                          include_once './thongke.php';
                          break;
                      }
                    }

                ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php
  include 'infor.php';
?>
<?php
}else{
    header('location: index.php');
}
?>
 