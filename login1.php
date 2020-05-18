

<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Rida's Car Rental</title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        href=styles1.css>
    <link rel="stylesheet" type="text/css" href="style.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="services.php">Services <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="option.php">Login/Signup</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
  <div class="container">
  	<h2 class="text-center">Login</h2>
  </div>
 
  <form class="text-center" method="post" action="login1.php">
  	<?php include('errors.php'); ?>
  	<div class="text-center">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="text-center">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn btn-lg btn-primary btn-block" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register1.php">Sign up</a>
  	</p>
      

  </form>
</body>
</html>