<!doctype html>
<html lang="en">
  <head>
    <title>HealthMeds</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">



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
    </ul>
     <a href="login.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Login</button></a> &nbsp;&nbsp;&nbsp;
    <a href="signup.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up</button></a>
    
  </div>
</nav>  
        <br><br><br>
        
        <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-2">Buy Products </h1>
    
  </div>
</div>
        <br><br><div>
         &nbsp;&nbsp;<p class="col-lg-5">Enter Name of Medicine , Dose(mg) and Qunatity :</p>
        </div><br>
        <div class="row">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="col-lg-5">
    <div class="input-group">
      <span class="input-group-addon">
        
      </span>
      <input type="text" class="form-control" placeholder="Medicine Name..." aria-label="Text input with checkbox">
    </div>
  </div>
  <div class="col-lg-3">
    <div class="input-group">
      <span class="input-group-addon">
            </span>
      <input type="text" class="form-control" placeholder="Dose(mg)..." aria-label="Text input with radio button">
    </div>
  </div>
            
  <div class="col-lg-3">
    <div class="input-group">
      <span class="input-group-addon">
         </span>
      <input type="text" class="form-control" placeholder=" Quantity..." aria-label="Text input with radio button">
    </div>
  </div>
</div>
        <br>
        <br>
<center>      <button type="button" class="btn btn-outline-primary">Add to Cart</button>
<button type="button" class="btn btn-outline-secondary">Checkout</button>
        </center></body>
</html>