<?php
ob_start();
session_start();    
include_once 'ketnoi.php';
$id = $_GET['id'];
$sql="DELETE FROM thanhvien WHERE id ='$id'";
$query = mysqli_query($con,$sql);
header("location: quantri.php?page=dstv");
?>
