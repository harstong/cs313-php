<?php
	session_start();
	$product = $_POST['product'];
	$count =  $_POST['count'];
	$items = $_SESSION['product'];
	if(array_key_exists($product, $_SESSION['products'])){
		$_SESSION['products'][$product] += $count;
	}
	else{
		$_SESSION['products'][] = array($product=>$count);
	}
		
	header('Location: browse.php');
?>

