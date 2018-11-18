<?php
ob_start();
session_start();   
include_once './quantri/ketnoi.php';
if (isset($_GET['id'])) {
	array_push($_SESSION["cart_id"],$_GET['id']);
	$_SESSION["cart_sl"]++;
	foreach ($_SESSION["cart_id"] as $key => $value) {
		echo $value." ";
	}
    

	if(isset($_SERVER['HTTP_REFERER']))
	{
    		echo "Your previous page URL is ".$a;
		$a=$_SERVER['HTTP_REFERER'];
    		header("Location: $a");
	}
}


?>