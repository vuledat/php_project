<?php
ob_start();
session_start();

if (isset($_GET['key'])) {
	$key= $_GET['key'];
	
	unset($_SESSION["cart_id"][$key]);
	if ($_SESSION["cart_sl"]>=1) {
		$_SESSION["cart_sl"]--;
	}
	$a=$_SERVER['HTTP_REFERER'];
	header("Location: $a");
}
?>