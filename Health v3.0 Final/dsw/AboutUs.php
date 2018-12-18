<?php
	session_start();
	$_SESSION['placedorder']=0;
?>
<!doctype html>
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
<title> HealthMeds | About Us </title>
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

#top{
	position: relative;
	text-align:center;
}
#top img{
	width: 100%;
	height:400px;
}
#textimage{
	position: absolute;
	background-color: black;
	opacity:5;
	top: 170px;
    right: 16px;
	
}

#logotext{
	font-size:44px;
	color:white;
	font-weight:bold;
}

.textoverimage{
	position: relative;
	width:32.5%;
	height: 231px;
	min-height:230px;
	float:left;
	margin:4px;
	background-repeat:no-repeat;
	background-size:100%;
	background-position:center;
	transition:0.5s;
	
}

.textoverimage:hover{
	background-size:110%;
}

.textoverimage:after{
	position:absolute;

	top:90%;
	bottom:0;
	left:0;
	right:0;
	white-space: pre-wrap;
	overflow:hidden;
	background-color: rgba(0,0,0,0.5);
	color:#fff;
	padding:0 8px;
	content:attr(data-text);
	transition:0.5s;
}

.textoverimage:hover:after{
	top:0;
	padding:8px;
	background-color: rgba(0,0,0,0.8);
}

.textoverimage:first-line{
	color:#fff;
	font-weight:bold;
	font-size:23px;
}

.textoverimage2{
	position: relative;
	width:100%;
	height:40%;
	min-height:460px;
	float:left;
	margin:4px;
	background-size:100%;
	background-repeat:no-repeat;
	background-position:center;
	transition:0.5s;
	
}

.textoverimage2:hover{
	background-size:110%;
}

.textoverimage2:after{
	position:absolute;

	top:90%;
	bottom:0;
	left:0;
	right:0;
	white-space: pre-wrap;
	overflow:hidden;
	background-color: rgba(0,0,0,0.5);
	color:#fff;
	padding:0 8px;
	content:attr(data-text);
	transition:0.5s;
}

.textoverimage2:hover:after{
	top:0;
	padding:8px;
	background-color: rgba(0,0,0,0.8);
}

.textoverimage2:first-line{
	color:#fff;
	font-weight:bold;
	font-size:23px;
}
</style>
</head>
<body>
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

<div class="textoverimage2" style="background-image: url('about5.jpg')" data-text="HealthMEDS Ltd. Serving You The Best Medicine Since 1978.

Established in 1978, HealthMEDS Founded by Sir Saflab and his wife, originally started out as humble supplier of pain relieving meds. But soon word spread about their super duper amazing breakthrough revolutionary foemula which made the curing of the H2KZ2 Zombie Virus finally a reality. Seeing so much potential in the company, Many investors came up to Sir Saflab in the hopes of striking a partnership. In time CASUAK AGENCY was the firm to support HealthMEDS and together they made the humble shop bloom into the multi billion dollar empire we see before us. Now HealthMEDS Sports a 200 acre campus with own special laboratries who continue to work day and night to discover and improve the medical standards.We recognise that in today's world, money is one of the top factors and Hence we offer exclusive pocket friendly medicine payment plans which are guaranteed to make you go WOW! And a bonanza offer for the elderly. Become a HealthMed user TODAY!Are you never at home? Are You always missing the home deliveries? Well fear not. With our special delivery plans, we provide YOU th option to chose the time and date of the delivery. Still missed it due to sudden last minute plans? Well we will redeliver. FREE OF COST With over 40,000 medicines and counting, we have the biggest collection of medicines. We update our collections archives on a daily basis. So if we dont have it, You can be sure that medicine does not exist. From pathological to supplements, We are the go to place for your medicine needs.With ground breaking research underway, Who knows what the future may hold for us?  Here at HealthMEDS we believe that the only boundaries we face are that of our imaginations. Albert Bandura who played a very important role in our ideology today coined the term Self Efficacy. And here at HealthMEDS we believe that we all are the most Self Efficacy rich people around. All our laboratories are 0 emission labs and we believe that the only growth acceptable is the growth with nature." >
	
</div>


<div class="textoverimage" style="background-image: url('about2.jpg');" data-text="LARGEST MEDICINE COLLECTION.
With over 40,000 medicines and counting, we have the biggest collection of medicines. We update our collections archives on a daily basis. So if we dont have it, You can be sure that medicine does not exist. From pathological to supplements, We are the go to place for your medicine needs.">
	
</div>

<div class="textoverimage" style="background-image: url(about3.jpg);" data-text="AFFORDABLE MEDICINES.
We recognise that in today's world, money is one of the top factors and Hence we offer exclusive pocket friendly medicine payment plans which are guaranteed to make you go WOW! And a bonanza offer for the elderly. Become a HealthMed user TODAY!">
	
</div>

<div class="textoverimage" style="background-image: url(about4.jpg);" data-text="FLEXIBLE DELIVERY OPTIONS. 
Are you never at home? Are You always missing the home deliveries? Well fear not. With our special delivery plans, we provide YOU th option to chose the time and date of the delivery. Still missed it due to sudden last minute plans? Well we will redeliver. FREE OF COST.">
	
</div>


</body>
</html>