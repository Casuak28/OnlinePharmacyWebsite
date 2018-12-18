<?php
	session_start();
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

 input.s1
    {
        align-content: center;
        height: 55px;
        width: 500px;
        border-radius: 10px;
        opacity: 0.6;
        font-size: 20px;
    }



    input.s2
    {
        width:200px;
        border-radius: 5px;
        opacity: .8;
    }


    body
    {

        background-image: url("vunature.com-nature-biology-psychedelic-abstract-medical-chemistry-genetics-detail-science-abstraction-medicine-hd-desktop-backgrounds-1920x1080.jpg");
        background-size:cover; 
    
    }
	
	button.s2
    {
        width:200px;
        border-radius: 5px;
        opacity: .8;
    }
	
	#name{
		color:#00ff00;
		font-size:30px;
		padding-top:10px;
		margin-top:10px;
		text-align:center;
	}
</style>
<script type="text/javascript">
	function Validation(){
		var FName= document.getElementById("FName").value;
		var LName= document.getElementById("LName").value;
		var Email= document.getElementById("Email").value.indexOf("@");
		var UserId= document.getElementById("UserId").value;
		var Password = document.getElementById("Password").value;
		
		
		if(FName==""){
			alert("Please Enter the First Name.");
			
		}
		
		else if(LName==""){
			alert("Please Enter the Last Name.");
			
		}
		
		else if(Email==-1){
			alert("Please Enter a valid Email.");
			
		}
		
		else if(UserId==""){
			alert("Please Enter the UserId.");
			
		}
		else if(Password==""){
			alert("Please Enter the Password.");
			
		}
		else if(!document.getElementById("terms").checked){
			alert("You Need To Accept Our Terms And Conditions In Order To Sign Up.");
			
		}
	}
</script>




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
    </ul>
     <a href="login.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Login</button></a> &nbsp;&nbsp;&nbsp;
    <a href="signup.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up</button></a>
    
  </div>
</nav>   <br><br><br>

	<form action="includes/signup.inc.php" method="POST"><center>
    <input class="s1" id="FName" type="text" name="first" placeholder="               First Name"><br><br><br>
    <input class="s1" id="LName" type="text" name="last" placeholder="               Last Name"><br><br><br>
    <input class="s1" id="Email" type="text" name="email" placeholder="               Email Id"><br><br><br>
	<input class="s1" id="UserId" type="text" name="uid" placeholder="               User Id"><br><br><br>
    <input class="s1" id="Password" type="password" name="pwd" placeholder="                Password "><br><br><br>
    <input  id="terms" type="checkbox" name="c1"><font color="white">  I agree to the T&c and give my sign up for the mailing list.</font><br><br><br>
    <button class="s2" id="box7" type="Submit" name="submit" onClick="Validation();">Sign Up</button>&nbsp&nbsp&nbsp
    <br><br><br>
    </center>
</form></div>

    </body>
</html>