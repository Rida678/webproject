
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $model = $transmission = $cost = "";
$name_err = $address_err = $model_err = $transmission_err = $cost_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    // Validate model
    $input_model = trim($_POST["model"]);
    if(empty($input_model)){
        $model_err = "Please enter car model.";     
    } else{
        $model = $input_model;
    }
    // Validate transmission
    $input_transmission = trim($_POST["transmission"]);
    if(empty($input_transmission)){
        $transmission_err = "Please enter transmission type.";     
    } else{
        $transmission = $input_transmission;
    }
    
    // Validate cost
    $input_cost = trim($_POST["cost"]);
    if(empty($input_cost)){
        $cost_err = "Please enter the cost amount.";     
    } elseif(!ctype_digit($input_cost)){
        $cost_err = "Please enter a positive integer value.";
    } else{
        $cost = $input_cost;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($model_err) && empty($transmission_err) && empty($cost_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO customer (name, address, model, transmission, cost) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_address, $param_model, $param_transmission, $param_cost);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_model = $model;
            $param_transmission = $transmission;
            $param_cost = $cost;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: services.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rida's Car Rental</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Choose your car</h2>
                    </div>
                    <p>Congratulations, you've successfully accessed this page.<br>Please fill the details precisely, so that we can contact you whether we have your ideal car available!</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Address</label>
                            <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                            <span class="help-block"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($model_err)) ? 'has-error' : ''; ?>">
                            <label>Model</label>
                            <textarea name="model" class="form-control"><?php echo $model; ?></textarea>
                            <span class="help-block"><?php echo $model_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($transmission_err)) ? 'has-error' : ''; ?>">
                            <label>Transmission</label>
                            <textarea name="transmission" class="form-control"><?php echo $transmission; ?></textarea>
                            <span class="help-block"><?php echo $transmission_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($cost_err)) ? 'has-error' : ''; ?>">
                            <label>Cost</label>
                            <input type="text" name="cost" class="form-control" value="<?php echo $cost; ?>">
                            <span class="help-block"><?php echo $cost_err;?></span>
                        </div>
                        <p>By clicking 'Submit', you agree to share your information with Rida's Car Rental. (You will be redirected to the services page!)</p>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="services.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>