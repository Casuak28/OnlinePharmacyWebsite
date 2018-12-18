<?php

if(isset($_POST['submit'])){
	
	include_once 'dbh.inc.php';
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	
	//Error Handlers 
	//Check For Empty Fields
	
	if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
		header("Location: ../signup.php?signup=empty");
		exit();
	}else {
			//Check If Input Characters Are Valid
			if(!preg_match("/^[a-zA-z]*$/", $first) || !preg_match("/^[a-zA-z]*$/", $last)){
				header("Location: ../signup.php?signup=invalid");
				exit();
			
			}else{
				//Check If Email Is Valid
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					header("Location: ../signup.php?signup=email");
					exit();
				}else{
					$sql = "SELECT * FROM users WHERE user_uid='$uid'";
					$result = mysqli_query($conn, $sql);
					$resultcheck = mysqli_num_rows($result);
					
					if($resultcheck > 0){
						header("Location: ../signup.php?signup=usertaken");
						exit();
					}else{
						//HASHING THE PASSWORD
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						//Insert The User Into Database
						$sql1 = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
						mysqli_query($conn, $sql1);
						header("Location: ../signup.php?signup=success");
						exit();
					}
				}
			}
		}
	
} else {
		header("Location: ../signup.php");
		exit();
	}