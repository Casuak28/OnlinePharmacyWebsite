<html>
<head>
<title> Database setup for Health Meds </title>
</head>
<body>
<?php
	$con = mysqli_connect("localhost","root","","");
	$database = "create database loginsystem";
	if(mysqli_query($con , $database)){
		echo("Database Created Successfully.<br>");
	}
	$run = "use loginsystem";
	if(mysqli_query($con , $run)){
		echo("Now Accessing loginsystem Database. Please wait while we populate the database...<br>");
	}
	
	$table="CREATE TABLE users(user_id INTEGER(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_first varchar(20) NOT NULL, user_last varchar(20) NOT NULL, user_email varchar(50) NOT NULL, user_uid varchar(25) NOT NULL, user_pwd varchar(256) NOT NULL)";
	if(mysqli_query($con,$table)){
		echo "users table created successfully.<br>";
	}
	
	$table2="CREATE TABLE stock(medicine VARCHAR(50), dose INTEGER, quantity INTEGER, cost INTEGER)";
	if(mysqli_query($con,$table2)){
		echo("stock table created successfully.<br>");
	}
	
	$table3="CREATE TABLE cart(medicine VARCHAR(50), dose INTEGER, quantity INTEGER, cost INTEGER)";
	if(mysqli_query($con,$table3)){
		echo("cart table created successfully.<br>");
	}
	
	
	echo("<br><br><br><br>Please wait while we populate the stock table with medicines.");
	
	
	$insert1="INSERT INTO stock VALUES('Pudinhara',10,40,20)";
	if(mysqli_query($con,$insert1)){
		echo("VALUES INSERTED Succesfully");
		echo("<BR>");
	}
	
	$insert2="INSERT INTO stock VALUES('Paracetemol',10,40,40)";
	if(mysqli_query($con,$insert2)){
		echo("VALUES INSERTED Succesfully");
		echo("<BR>");
	}
	
	$insert3="INSERT INTO stock VALUES('Sumo',10,40,50)";
	if(mysqli_query($con,$insert3)){
		echo("VALUES INSERTED Succesfully");
		echo("<BR>");
	}
	
	$insert4="INSERT INTO stock VALUES('Soframycine',10,40,30)";
	if(mysqli_query($con,$insert4)){
		echo("VALUES INSERTED Succesfully");
		echo("<BR>");
	}
	
	$insert5="INSERT INTO stock VALUES('Dettol',10,40,100)";
	if(mysqli_query($con,$insert5)){
		echo("VALUES INSERTED Succesfully");
		echo("<BR>");
	}
	
	$insert6="INSERT INTO stock VALUES('Combiflam',10,40,65)";
	if(mysqli_query($con,$insert6)){
		echo("VALUES INSERTED Succesfully");
		echo("<BR>");
	}
?>
</body>
</html>