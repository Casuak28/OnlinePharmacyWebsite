<?php

if(isset($_POST['yoyo'])){
	include 'dbh.inc.php';
	
	
	$sql = "TRUNCATE TABLE cart";
	//Check If The Query Ran Successfuly
	if(!mysqli_query($conn, $sql)){
		header("Location: ../buyproducts.php?cartnotemptied");
		exit();
	}else{
		header("Location: ../buyproducts.php?cartemptynow");
		exit();
	}
}else{
	header("Location: ../buyproducts.php?yoyoyo");
	exit();
}