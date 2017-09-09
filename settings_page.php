<?php
require "includes/common.php";?>
<!DOCTYPE html>
<html>
<head>
<title>Settings Page</title> 
    
<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="settings_style.css">
</head>
    
<body>
    <?php
    if(!$_SESSION['email'])
    {
        header("location:loginn.php");
    }?>
   <?php
    include 'head.php';?>
    <div class="row row_style">
    
    <div class="col-xs-5 col_style">
        <center>    <h6><?php echo @$_GET["success"];?></h6></center>
                <center>    <h6><?php echo @$_GET["invalid"];?></h6></center>
        
     <form method="post" action="settings_script.php">
     <label for="pass">Change Password</label>   
         <div class="form-group">
        <input type="password" class="form-control" placeholder="Old Password" name="old"> 
             </div>
          <div class="form-group">
        <input type="password" class="form-control" placeholder="New Password" name="new"> 
             </div>
          <div class="form-group">
        <input type="password" class="form-control" placeholder="Re-type New Password" name="renew"> 
             </div>
        
        <div class="form-group">
         <input type="submit" value="Change" class="btn btn-primary" name="submit">
         
         </div>
    
    </form> 
                     
        
    </div>

    </div>
   <?php include 'foot.php';?>  
</body>

</html>