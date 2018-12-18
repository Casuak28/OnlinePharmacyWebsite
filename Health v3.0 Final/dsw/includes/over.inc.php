<?php

	session_start();

if(isset($_POST['placeorder'])){
	$_SESSION['placedorder']=1;
	header("Location: ../index.php?orderplaced");
	exit;
}else{
	header("Location: ../index.php?order");
	exit();
}