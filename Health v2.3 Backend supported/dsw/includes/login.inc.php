<?php

session_start();

if(isset($_POST['submit'])){
	
	include 'dbh.inc.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd2 = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	
	//Error Handlers
	//Check If The Inputs Are Empty
	
	if(empty($uid)|| empty($pwd2)){
		header("Location: ../index.php?login=empty");
		exit();
	}else{
		$sql2 = "SELECT * FROM users WHERE user_uid='$uid'";
		$result = mysqli_query($conn, $sql2);
		$resultCheck1 = mysqli_num_rows($result);
		if($resultCheck1 < 1){
			header("Location: ../index.php?login=error1");
			exit();
		}else{
			if($row = mysqli_fetch_array($result)){
				//Dehashing the password
				$hashedPwdChecked = password_verify($pwd2, $row['user_pwd']);
				if($hashedPwdChecked == false){
					header("Location: ../index.php?login=error2");
					exit();
				}elseif($hashedPwdChecked == true){
					//Log In The User Here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../index.php?login=success");
					exit();
					
				}
			}
		}
	}
}else{
	header("Location: ../index.php?login=error3");
	exit();
}