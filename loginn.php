<?php require "includes/common.php";?>
<!DOCTYPE html>
<html>
<head>
<title>Settings Page</title> 
    
<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .row_style
        {
            margin-top: 80px;
        }
        .sty
        {
            align-content: center;
        }
        .col_style
        {
            margin-left: 400px;
        }
        .footer
{
    background-color: #000; color:#fff; font-size:14px;
    margin-top:118.2px;
    width: auto;
}
        .register
        {
            color: blue;
            
            
        }
        .text-warning
        {
            font-style: italic;
            color: black;
            margin: 15px;
        }
        .in
        {
            margin-left: 15px;
            margin-right: 15px;
        }
        .co
        {
            margin-left: 400px;
            margin-top: 50px;
        }
       h6
        {
            color: red;
            font-size: 23px;
            
        }
        
    </style>
    
</head>
    
<body>
   <?php 
    include 'head.php';?>
   
    <div class="container co">
        
        <div class="row row_style">
            <div class="col-xs-5">
             <center>    <h6><?php echo @$_GET["success"];?></h6></center>
                <center>    <h6><?php echo @$_GET["invalid"];?></h6></center>
                <div class="panel panel-primary">
        
    <div class="panel-heading">
       
    <h3>LOGIN</h3></div>
        <panel body>
            <div class="row">
            <div class="col-xs-12">
        <p class="text-warning">Login to make a purchase</p>
            <form method="post" action="login1.php">
                <div class="in">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            
                </div>
                <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            
                </div>
                   
                <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login" name="login">
                
                
                </div>
                     </div>
            
            
            
            
            </form>
                
                
                <div class="panel-footer">
               <p>Don't have an account?<a href="signup.php"> <span class="register">Register</span></a></p>
                
                
                
                
                </div>
        
        </div>
        </div>
        </panel>
        
        
        
        
        
        </div>
        
      
    
    
    
    
    
    
    
    
    
    
    </div>
    
    
    
    
    
    
    
    
    
        </div>
    </div>
    
    
     <?php
    include 'foot.php';?>
    
    
    
    
    
    </body>
</html>