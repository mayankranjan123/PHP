<?php require "includes/common.php";?>
<!DOCTYPE html>
<html>
<head>
<title>Cart Page</title> 
    
<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="success_page.css">
    
</head>
    
<body>
    
    <?php
    if(!$_SESSION['email'])
    {
        header("location:loginn.php");
    }
    ?>
    
    
   <?php
    include 'head.php';?>
    
    
    <div class="container co">
    
    <div class="jumbotron">
        
        <h2>Your order is confirmed. Thank you for shopping with us.</h2>
        <hr>
     <p>   Click<span id="here"> <a href="products.php">here</a></span> to purchase any other item.</p>
   
        
    </div>
        
    
    </div>



<?php
    include 'foot.php';?>
</body>

</html>