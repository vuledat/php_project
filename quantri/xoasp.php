<?php
ob_start();
session_start();    
include_once 'ketnoi.php';

$id_sp = $_GET['id'];
$sql = "SELECT * FROM sanpham WHERE id='$id_sp'";
$query= mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
unlink("./anh/".$row['anh']);
echo $row['anh'];

$sql = "DELETE FROM sanpham WHERE id='$id_sp'";
$query= mysqli_query($con, $sql);
$a=$_SERVER['HTTP_REFERER'];
	header("Location: $a");

?>