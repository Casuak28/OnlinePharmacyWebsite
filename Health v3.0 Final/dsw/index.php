<?php
	session_start();
	$_SESSION['buy']=0;
	$_SESSION['logg']=0;
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
	
	.slider{
		overflow:hidden;
		height: 350px;
		
	}
	
	.slider figure div{
		width:20%;
		float: left;
		
	}
	
	.slider figure img{
		width: 100%;
		float: left;
		
		
	}
	
	.slider figure{
		position: relative;
		width: 500%;
		margin: 0;
		left:0;
		animation: 20s slidy infinite;
		
	}
	@keyframes slidy{
		0%{
			left:0%;
		}
		10%{
			left: 0%;
		}
		12%{
			left: -100%;
		}
		22%{
			left: -100%;
		}
		24%{
			left: -200%;
		}
		34%{
			left: -200%;
		}
		36%{
			left: -300%;
		}
		46%{
			left: -300%;
		}
		48%{
			left: -400%;
		}
		58%{
			left: -400%;
		}
		60%{
			left: -300%;
		}
		70%{
			left: -300%;
		}
		72%{
			left: -200%;
		}
		82%{
			left: -200%;
		}
		84%{
			left: -100%;
		}
		94%{
			left: -100%;
		}
		96%{
			left: 0%;
		}
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
        
        <div class="slider">
		<figure>
			<div class="slide">
				<img src="images/1.jpg">
			</div>
			<div class="slide">
				<img src="images/3.jpg">
			</div>
			<div class="slide">
				<img src="images/2.jpg">
			</div>
			<div class="slide">
				<img src="images/1.jpg">
			</div>
			<div class="slide">
				<img src="images/3.jpg">
			</div>
		</figure>
	</div>
	
	<?php
		if(isset($_SESSION['placedorder'])){
			
			if($_SESSION['placedorder']==1){
				echo("<span id='confirmation'> Congratulations!! Your order has been placed and a sales representative will soon call you for the details regarding payment and delivery address.</span>");
			}
		}
	?>
            
        <div class="columns"><div class="column main"><div><h1><center>THE TRUSTED ONLINE MEDICINE PARTNER </center><div><center>FOR MORE THAN A MILLION LOYAL CUSTOMERS</center></div></h1>
            </div><br/><div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<div class="col-md-2">
		<center><div class="partner-img">
			<img src="images/i1.png" alt="">
		</div></center>
		Excellence, Expertise and Experience in Pharma since 1914
	</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<div class="col-md-2">
		<center><div class="partner-img">
			<img src="images/i2.png" alt="">
		</div></center>
		Happy and Hassle-free user experience for lakhs of customers in more than 850 cities & towns
	</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;
	<div class="col-md-2">
<center>
					<div class="partner-img">
			<img src="images/i3.png" alt="">
    </div></center>
		Pan India Delivery with coverage of over 19,000 PIN codes
	</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<div class="col-md-2">
		<center><div class="partner-img">
			<img src="images/i4.png" alt="">
		</div></center>
		35,000+ products. Near 100% fulfillment rate. Most preferred online pharmacy
	</div>
            </div></div></div>
        
    </body>
</html>
