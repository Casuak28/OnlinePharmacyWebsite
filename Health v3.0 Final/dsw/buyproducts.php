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
	
	#confirmation{
		color:#0000ff;
		font-size:24px;
		text-align:center;
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
    <h1 class="display-2">Buy Products </h1>
    
  </div>
</div>
        <br><br><div>
		<?php
			if($_SESSION['buy']==1){
				if($_SESSION['add'] == 1){
					echo("<span id='confirmation'> THE MEDICINE HAS BEEN ADDED TO YOUR CART. </span>");
				}elseif($_SESSION['add'] == 2){
					echo("<span id='confirmation'> You Left One Of The Input Fields Empty, Please Try Again. </span>");
				}elseif($_SESSION['add'] == 3){
					echo("<span id='confirmation'> Sorry! The Medicine You're Wanting Is Not Available At This Moment. Please Try Again Later. </span>");
				}elseif($_SESSION['add'] == 4){
					echo("<span id='confirmation'> There was an error in adding the medicine to your cart. Please Try Again. </span>");
				}
			}
		?>
         &nbsp;&nbsp;<p class="col-lg-5">Enter Name of Medicine , Dose(mg) and Qunatity :</p>
        </div><br>
        <form action="includes/addtocart.inc.php" method="POST" name="first">
		<div class="row">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="col-lg-5">
    <div class="input-group">
      <span class="input-group-addon">
        
      </span>
      <input type="text" class="form-control" name="medicine" placeholder="Medicine Name...">
    </div>
  </div>
  <div class="col-lg-3">
    <div class="input-group">
      <span class="input-group-addon">
            </span>
      <input type="text" class="form-control" name="dose" placeholder="Dose(mg)...">
    </div>
  </div>
            
  <div class="col-lg-3">
    <div class="input-group">
      <span class="input-group-addon">
         </span>
      <input type="text" class="form-control" name="quantity" placeholder=" Quantity...">
    </div>
  </div>
</div>
        <br>
        <br>
<center>   <button type="submit" class="btn btn-outline-primary" name="addtocart">Add to Cart</button>
		   <br>
		   <br><button type="submit" class="btn btn-outline-secondary" name="yoyo">Empty the Cart</button></form><br  />

<?php
		if(isset($_SESSION['u_id'])){
			echo '<br><form action="includes/checkoutbuffer.inc.php" method="POST" name="second"> <button type="submit" class="btn btn-outline-primary" name="checkout">Checkout</button></form>';
		}else{
			echo '<p class="col-lg-5" id="Red">You Need to be Loged in to Checkout with your meds.</p>';
		}
	?>
</center>
</body>
</html>