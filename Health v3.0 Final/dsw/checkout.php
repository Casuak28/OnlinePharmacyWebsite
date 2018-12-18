<?php
	session_start();
	$_SESSION['placedorder']=0;
?>

<!doctype html>
<html lang="en">
  <head>
    <title>HealthMeds</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style type="text/css">
	#Red{
		color:#ff0000;
		font-size:21px;
	}
	
	#name{
		color:#00ff00;
		font-size:30px;
		padding-top:10px;
		margin-top:10px;
		text-align:center;
	}
	
	#bill{
		border: 3px double black;
		text-align:center;
		background:#d1d1e0; 
		padding: 40px;
		max-width: 600px;
		margin: 40px auto;
		border-radius: 4px;
		box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
		font-size: 22px;
		font-family:comic sans ms;
	}

  </style>
  </head>
    <body style="background-color: white">
<!-- Nav Bar-->
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  &nbsp;&nbsp;&nbsp;<a class="navbar-brand" href="index.php">HealthMeds</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="buyproducts.php">Buy Products</a>
      </li>
	  <li class="nav-item"><?php
		if(isset($_SESSION['u_id'])){
			echo('<center><span id="name">WELCOME TO HEALTHMEDS '.$_SESSION['u_first'].' '.$_SESSION['u_last'].'</span></center>');
		}
		?></li>
    </ul>
	 <?php
		if(isset($_SESSION['u_id'])){
			echo '<form action="includes/logout.inc.php" method="POST">
					<button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="submit"> Logout </button>
					</form>';
		}else{
			echo '<a href="login.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Login</button></a> &nbsp;&nbsp;&nbsp;
				  <a href="signup.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up</button></a>';
		}
	?>
	</div>
</nav>  
        <br><br><br>
        
        <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-2">Checkout </h1>
  </div>
</div>

<?php
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "loginsystem";

	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	
	$sql = "SELECT * FROM cart";
	$sql2 = "SELECT SUM(cost) FROM cart";
	
	$fcost = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($fcost);
	$total = $row2['SUM(cost)'];
	
	$result = mysqli_query($conn, $sql);
	echo"<center><table id='bill' border='1' cellpadding='10'>";
	echo"<tr><th colspan='4'>FINAL BILL</th></tr>";
	echo"<tr><th>Medicine</th><th>Dose(mg)</th><th>Quantity</th><th>Cost(Rs.)</th></tr>";
	while($row= mysqli_fetch_array($result)){
		echo("<tr>");
		echo("<td>".$row['medicine']."</td>");
		echo("<td>".$row['dose']."</td>");
		echo("<td>".$row['quantity']."</td>");
		echo("<td>".$row['cost']."</td>");
		echo("</tr>");
	}
	echo("<tr><th colspan='3'>Final Amount To Be Paid</th><th>".$total."</th></tr>");
	echo("</table></center>");
?>

<center>  
<form action="includes/over.inc.php" method="POST">
 <button type="submit" class="btn btn-outline-primary" name="placeorder">Place Order</button>
</form>		  
</center>
</body>
</html>	