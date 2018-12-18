<?php
	session_start();
if(isset($_POST['addtocart'])){
	include 'dbh.inc.php';
	$one = 1;
	$two= 2;
	$three=3;
	$four=4;
	$_SESSION['buy']=$one;
	$medicine = mysqli_real_escape_string($conn, $_POST['medicine']);
	$dose = mysqli_real_escape_string($conn, $_POST['dose']);
	$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
	
	//Error Handlers
	//Checking If Any Field Is Empty
	if(empty($medicine) || empty($dose) || empty($quantity)){
		$_SESSION['add']=$two;
		header("Location: ../buyproducts.php?emptyfield");
		exit();
	}else{
		$sql1 = "SELECT * FROM stock WHERE medicine='$medicine' AND dose='$dose' AND quantity>'$quantity'";
		$result=mysqli_query($conn, $sql1);
		$resultCheck1 = mysqli_num_rows($result);
		//Check If The Medicine Is In Stock
		if($resultCheck1 < 1){
			$_SESSION['add']=$three;
			header("Location: ../buyproducts.php?outofstock");
			exit();
		}else{
			$row = mysqli_fetch_array($result);
			$cost=$quantity*$row['cost'];
			$sql3 = "INSERT INTO cart VALUES('$medicine', '$dose', '$quantity', '$cost')";
			//Check If The Value Got Inserted Into Cart
			if(!mysqli_query($conn, $sql3)){
				$_SESSION['add']=$four;
				header("Location: ../buyproducts.php?noadd");
				exit();
			}else{
				$_SESSION['add']=$one;
				header("Location: ../buyproducts.php?success");
				exit();
			}
		}
	}
	
}else{
	$_SESSION['add']=$four;
	header("Location: ../buyproducts.php?redirectedback");
}

//EMPTY CART

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
}

//CHECKOUT

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

