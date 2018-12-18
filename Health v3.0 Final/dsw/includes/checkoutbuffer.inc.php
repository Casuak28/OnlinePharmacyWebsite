<?php

	session_start();

if(isset($_POST['checkout'])){
	include 'dbh.inc.php';
	//Check If Cart Is Empty
	$sql = "SELECT * FROM cart";
	$result = mysqli_query($conn, $sql);
	$resultcheck = mysqli_num_rows($result);
	if($resultcheck<1){
		header("Location: ../buyproducts.php?CartEmpty");
		exit();
	}else{
		header("Location: ../checkout.php");
		exit();
	}
}else{
	header("Location: ../buyproducts.php?checkoutunsuccessful");
	exit();
}	
