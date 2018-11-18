<?php 
    ob_start();
    session_start();    
    include_once 'ketnoi.php';

	$id_dm=$_GET['id'];
	$sql="DELETE FROM danhmucsp WHERE id='$id_dm'";
    $query= mysqli_query($con, $sql);
    header("location: quantri.php?page=qldm");
?>