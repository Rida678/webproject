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
<div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Rida's Car Rental</h1>
</div>


    </div>
    <div class="container mt-3">
  <h3>Car Rental Form</h3>
        <p>Fill out the form so that we can see if you're eligible for our services!</p>
  <p>Residency</p>
  <form>
    <select class="custom-select custom-select-sm mb-3">
      <option selected>Are you based in the UK?</option>
      <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
      <p>Drivers Permit</p>
  <form>
    <select class="custom-select custom-select-sm mb-3">
      <option selected>Do you have a valid driving license?</option>
      <option value="yess">Yes</option>
        <option value="noo">No</option>
      </select>
      <p>Experience</p>
      <form>
      <select class="custom-select custom-select-sm mb-3">
      <option selected>How long have you been a driver?</option>
      <option value="automatic">0-1 Year(s)</option>
        <option value="manual">1-2 Years</option>
          <option value="manual">2-3 Years</option>
          <option value="manual">3-4 Years</option>
          <option value="manual">5-7 Years</option>
          <option value="manual">8-9 Years</option>
          <option value="manual">10+ Years</option>
      </select>
          <p>License Points</p>
      <form>
      <select class="custom-select custom-select-sm mb-3">
      <option selected>Do you have any points on your license?</option>
      <option value="automatic">Yes</option>
        <option value="manual">No</option>
      </select>
      
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Submit</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Service Approved</h4>
      </div>
      <div class="modal-body">
        <p>Thanks for filling out the form, you may now proceed to make your order.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <a href="create.php" class="btn btn-info" role="button">Proceed</a>
      </div>
    </div>

  </div>
</div>

     </div> 


<?php
require_once "footer.php"   
    ?>



</body>

