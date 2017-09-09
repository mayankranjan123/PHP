<?php
require "includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>SignUp Page</title> 
    
<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="sign_style.css">
    
</head>
    
<body>
    <?php
    if($_SESSION['email'])
    {
        header("location:products.php");
    }
    ?>
    
   <?php include 'head.php';?>
    
    <div class="container">
    <div class="row row_st">
        
    <div class="col-xs-5">
          <center>    <h6><?php echo @$_GET["invalid"];?></h6></center>
    <form method="post" action="signup_script.php">
    <h3>SIGN UP</h3>    
        <div class="form-group">
        
        <input type="text" name="name" class="form-control" placeholder="Name">
        
        
        </div>
        
        <div class="form-group">
        
        <input type="email" name="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
        
        
        </div>
        
        <div class="form-group">
        
        <input type="password" name="password" class="form-control" placeholder="Password">
        
        
        </div>
        <div class="form-group">
        
        <input type="number" name="phone" class="form-control" placeholder="Contact">
        
        
        </div>
        
        <div class="form-group">
        
        <input type="text" name="city" class="form-control" placeholder="City">
            
        
        
        </div>
        
        <div class="form-group">
        
        <input type="text" name="address" class="form-control" placeholder="Address">
        
        
        </div>
        
        
        
        <div class="form-group">
        
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        
        
        </div>
    
    </form>    
            
        
    </div>    
        
        
    </div>
    

    </div>
    
    <?php include 'foot.php';?>
    

</body>

</html>