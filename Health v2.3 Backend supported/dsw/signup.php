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
    </ul>
     <a href="login.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Login</button></a> &nbsp;&nbsp;&nbsp;
    <a href="signup.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up</button></a>
    
  </div>
</nav>   <br><br><br>

	<form action="includes/signup.inc.php" method="POST"><center>
    <input class="s1" id="box1" type="text" name="first" placeholder="               First Name"><br><br><br>
    <input class="s1" id="box2" type="text" name="last" placeholder="               Last Name"><br><br><br>
    <input class="s1" id="box3" type="text" name="email" placeholder="               Email Id"><br><br><br>
	<input class="s1" id="box2" type="text" name="uid" placeholder="               User Id"><br><br><br>
    <input class="s1" id="box4" type="password" name="pwd" placeholder="                Password "><br><br><br>
    <input  id="box6" type="checkbox" name="c1"><font color="white">  I agree to the T&c and give my sign up for the mailing list.</font><br><br><br>
    <button class="s2" id="box7" type="Submit" name="submit">Sign Up</button>&nbsp&nbsp&nbsp
    <input class="s2" id="box8" type="Reset" name="reset1" placeholder=" Reset "><br><br><br>
    </center>
</form></div>

    </body>
</html>