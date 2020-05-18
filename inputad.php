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
  .fakeimg {
    height: 250px;
    background: #aaa;
  }
  </style>

</head>
    
    <body>

<br>
        <br>
        <br>
        <br>
        <br>

<div class="container">
    <div class="row">
    </div>
</div>
<div class="page-splash">
    <div class="container">
        <div class="row">
            <div class="container">
            
                <div class="panel panel-default account-panel">
                    <div class="panel-heading">
                        <h3 class="text-center">Input password to unlock</h3>
                        <p class="text-center">To access the admin login page, you must first pass this access point!</p>
                    </div>
                    <div class="panel-body">
                        <div class="center-block text-center">
                            <img class="img-thumbnail img-circle" src="img/profile.jpg"
                                 alt="">
                            <p>Admin</p>
                            <form class="unlock-form">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" placeholder="Password" required autofocus>
                                </div>
                                <br>
                                <a class="btn btn-lg btn-primary btn-block" href="login.php">Unlock</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </body>