<?php 
    ob_start();
    session_start();    
    include 'ketnoi.php';
?>
<?php 
function kt_login($a)
{
    if ($a == 1) {
            header("Location: quantri.php?page=thongke");
            }
            if ($a == 2) {
                header("Location: ../index.php");
            
            }
}

  if(isset($_POST["submit"])){
    $ten=$_POST["user"];
    $mk=$_POST["pass"];
    if(isset($ten)&&isset($mk)){
        $sql="SELECT * FROM thanhvien WHERE ten='$ten' AND mk='$mk'";
        $query=mysqli_query($con,$sql);
        $row= mysqli_fetch_array($query);
        $rows= mysqli_num_rows($query);
        $ut = $row['ut'];
        if($rows>0){
            $_SESSION["user"]=$ten;
            $_SESSION["pass"]=$mk;
            $_SESSION["ut"]=$ut;
            kt_login($ut);
        }
        else{
            echo '<center class="alert alert-danger">Tài khoản không tồn tại hoặc bạn không có quyền truy cập</center>';
        }
    }
}
// kieerm tra đã đăng nhập hay chưa
if(isset($_SESSION["user"]) && isset($_SESSION["pass"]))
{
    $ten=$_SESSION["user"];
    $mk=$_SESSION["pass"];   
    $sql="SELECT * FROM thanhvien WHERE ten='$ten' AND mk='$mk'";
        $query=mysqli_query($con,$sql);
        $row= mysqli_fetch_array($query);
        $ut = $row['ut'];
        kt_login($ut); 

}
    

?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập hệ thống</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
</head>
<body>
    <div class="container">


            <h2 style="color: green;margin-top:20px; text-align: center;">Đăng nhập hệ thống</h2><br/>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <form method="POST" action="index.php">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="user" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mật khẩu</label>
                            <input type="password" class="form-control" name="pass" id="password" placeholder="Password" required>
                        </div>
                        <div class="form-check">
                            <button type="submit" name="submit" class="btn btn-primary">Đăng Nhập</button>
                        </div>
                    </div>

                </form>
            </div>


            
        </div>    
    </div>
</div>
</body>
</html>
<div id="infor">
    <i class="far fa-user-circle"></i>
</div>