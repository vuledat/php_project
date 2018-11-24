<?php 
    ob_start();
    session_start();    
    include_once 'ketnoi.php';
	$id_oem=$_GET['id'];
	$sql="DELETE FROM oem WHERE id='$id_oem'";
    $query= mysqli_query($con, $sql);
    header("location: quantri.php?page=qlncc");
?>