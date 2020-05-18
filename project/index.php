<?php
    require_once "navbar.php"   
     ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rida's Car Rental</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        href=styles1.css>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

       <style>
  .carousel-inner img {
      width: 95%;
      height: 50%;
  }
  </style>
</head>
<body>
<div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1 style="background-color:rgb(180, 180, 180);">Rida's Car Rental</h1>
</div>
    <br>
    <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>
</head>
<body>

<div class="container">
  <img src="img/banner1.jpg" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <a class="btn btn-lg btn-primary btn-block" href="services.php">View Services</a>
  </div>
</div>
  
</body>
</html>
    
    

<div class="container" style="margin-top:30px">

        <p>Welcome to Rida's Car Rental. It is in our best interest that we provide you the best deals, and look for the perfect car that caters to you. We provide a huge range of vehicles that you can hire on the go, with a click of a few buttons. At Rida's Car Rental, we ensure quality for both our vehicles and customer service, so you'll always leave the website with a smile on your face feeling very reassured! To look for your best deal, check our 'Services' page to see what we offer.</p>
        <br>
    
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/car1.jpg" alt="car1" width="950" height="300">
    </div>
    <div class="carousel-item">
      <img src="img/car2.jpg" alt="car2" width="950" height="300">
    </div>
    <div class="carousel-item">
      <img src="img/car3.jpg" alt="car3" width="950" height="300">
    </div>
      <div class="carousel-item">
      <img src="img/car4.jpg" alt="car4" width="950" height="300">
    </div>
      <div class="carousel-item">
      <img src="img/car5.jpg" alt="car5" width="950" height="300">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    
    <br>
        <img src="img/bmw.png" class="img-fluid" alt="banner" width="1024" height="300">
        <p>With the latest eDrive technology and intelligent energy management, the award-winning BMW i8 Coupé with its iconic design is a truly revolutionary vehicle. Boasting a turbocharged three-cylinder engine, which accelerates from 0 to 62mph in just 4.4 seconds, and the unique LifeDrive architecture for sublime weight distribution, it delivers a new sense of freedom.</p>
    



    
        

  </div>
 


<?php
require_once "footer.php"   
    ?>

</div>

</body>

