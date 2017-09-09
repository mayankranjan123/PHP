<?php 
require "includes/common.php";?>
<!DOCTYPE html>
<html>
<head>
<title>Products Page</title> 
    
<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="product_style.css">
</head>
    
<body>
    
   <?php 
    if(!$_SESSION['email'])
{
    header("location:loginn.php");
}
    
    
    include 'head.php';?>
    <?php include 'includes/check-if-added.php';?>
    
    
    <div class="container co">
    
    <div class="jumbotron">
        
        <h1>Welcome to our Lifestyle Store!</h1>
        <hr>
     <p>   We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
   
        
    </div>
        
        
        <div class="row text-center">
        
        <div class="col-md-3 col-sm-6">
            
            <div class="thumbnail">
            
            <img src="Images/5.jpg" class="img-responsive">
                <div class="caption">
                <h3>Cannon EOS</h3>
                    <p>Price:Rs.36000.00</p>
                   <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <p><a href="loginn.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    }
                    else
                    {
                        if(check_if_added_to_cart(1))
                        {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                        }
                        else
                        {
                            ?>
                    <a  href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                    <?php
                        }
                            
                    }
                    ?>
                    
                    <div class="form-group">
              <a href= "loginn.php">     <input type="button" class="btn btn-primary" value="Add to Cart"></a>
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            
        </div>
            
             <div class="col-md-3 col-sm-6">
            
            <div class="thumbnail">
            
            <img src="Images/2.jpg" class="img-responsive">
                <div class="caption">
                <h3>Sony DSLR</h3>
                    <p>Price:Rs.40000.00</p>
                    <?php
                    if(!isset($_SESSION['email_id']))
                    {?>
                    <p><a href="loginn.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    }
                    else
                    {
                        if(check_if_added_to_cart(2))
                        {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                        }
                        else
                        {
                            ?>
                    <a  href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                    <?php
                        }
                            
                    }
                    ?>
                    <div class="form-group">
                    <input type="button" class="btn btn-primary" value="Add to Cart">
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            
        </div>
            
            
            
             <div class="col-md-3 col-sm-6">
            
            <div class="thumbnail">
            
            <img src="Images/3.jpg" class="img-responsive">
                <div class="caption">
                <h3>Sony DSLR</h3>
                    <p>Price:Rs.50000.00</p>
                    <?php
                    if(!isset($_SESSION['email_id']))
                    {?>
                    <p><a href="loginn.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    }
                    else
                    {
                        if(check_if_added_to_cart(3))
                        {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                        }
                        else
                        {
                            ?>
                    <a  href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                    <?php
                        }
                            
                    }
                    ?>
                    <div class="form-group">
                    <input type="button" class="btn btn-primary" value="Add to Cart">
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            
        </div>
            
            
            
            
             <div class="col-md-3 col-sm-6">
            
            <div class="thumbnail">
            
            <img src="Images/4.jpg" class="img-responsive">
                <div class="caption">
                <h3>Olympus DSLR</h3>
                    <p>Price:Rs.80000.00</p>
                    <?php
                    if(!isset($_SESSION['email_id']))
                    {?>
                    <p><a href="loginn.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    }
                    else
                    {
                        if(check_if_added_to_cart(4))
                        {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                        }
                        else
                        {
                            ?>
                    <a  href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                    <?php
                        }
                            
                    }
                    ?>
                    <div class="form-group">
                    <input type="button" class="btn btn-primary" value="Add to Cart">
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            
        </div>
        
        
        
        
        
        
        
        
        
        </div>
        
        
        
        
        
        <div class="row text-center">
        
        <div class="col-md-3 col-sm-6">
            
            <div class="thumbnail">
            
            <img src="Images/18.jpg" class="img-responsive">
                <div class="caption">
                <h3>Titan Model#301</h3>
                    <p>Price:Rs.13000.00</p>
                    <?php
                    if(!isset($_SESSION['email_id']))
                    {?>
                    <p><a href="loginn.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    }
                    else
                    {
                        if(check_if_added_to_cart(5))
                        {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                        }
                        else
                        {
                            ?>
                    <a  href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                    <?php
                        }
                            
                    }
                    ?>
                    <div class="form-group">
                    <input type="button" class="btn btn-primary" value="Add to Cart">
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            
        </div>
            
             <div class="col-md-3 col-sm-6">
            
            <div class="thumbnail">
            
            <img src="Images/19.jpg" class="img-responsive">
                <div class="caption">
                <h3>Titan Model#201</h3>
                    <p>Price:Rs.3000.00</p>
                    <?php
                    if(!isset($_SESSION['email_id']))
                    {?>
                    <p><a href="loginn.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    }
                    else
                    {
                        if(check_if_added_to_cart(6))
                        {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                        }
                        else
                        {
                            ?>
                    <a  href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                    <?php
                        }
                            
                    }
                    ?>
                    <div class="form-group">
                    <input type="button" class="btn btn-primary" value="Add to Cart">
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            
        </div>
            
            
            
             <div class="col-md-3 col-sm-6">
            
            <div class="thumbnail">
            
            <img src="Images/20.jpg" class="img-responsive">
                <div class="caption">
                <h3>HMT Milan</h3>
                    <p>Price:Rs.8000.00</p>
                    <?php
                    if(!isset($_SESSION['email_id']))
                    {?>
                    <p><a href="loginn.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    }
                    else
                    {
                        if(check_if_added_to_cart(7))
                        {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                        }
                        else
                        {
                            ?>
                    <a  href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                    <?php
                        }
                            
                    }
                    ?>
                    <div class="form-group">
                    <input type="button" class="btn btn-primary" value="Add to Cart">
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            
        </div>
            
            
            
            
             <div class="col-md-3 col-sm-6">
            
            <div class="thumbnail">
            
            <img src="Images/21.jpg" class="img-responsive">
                <div class="caption">
                <h3>Faber Luba#111</h3>
                    <p>Price:Rs.18000.00</p>
                    <?php
                    if(!isset($_SESSION['email_id']))
                    {?>
                    <p><a href="loginn.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    }
                    else
                    {
                        if(check_if_added_to_cart(8))
                        {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                        }
                        else
                        {
                            ?>
                    <a  href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                    <?php
                        }
                            
                    }
                    ?>
                    <div class="form-group">
                    <input type="button" class="btn btn-primary" value="Add to Cart">
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            
        </div>
        
        
        
        
        
        
        
        
        
        </div>
        
        
        
        
        
        
        
        <div class="row text-center">
        
        <div class="col-md-3 col-sm-6">
            
            <div class="thumbnail">
            
            <img src="Images/22.jpg" class="img-responsive">
                <div class="caption">
                <h3>H&W</h3>
                    <p>Price:Rs.800.00</p>
                    <?php
                    if(!isset($_SESSION['email_id']))
                    {?>
                    <p><a href="loginn.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    }
                    else
                    {
                        if(check_if_added_to_cart(9))
                        {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                        }
                        else
                        {
                            ?>
                    <a  href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                    <?php
                        }
                            
                    }
                    ?>
                    <div class="form-group">
                    <input type="button" class="btn btn-primary" value="Add to Cart">
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            
        </div>
            
             <div class="col-md-3 col-sm-6">
            
            <div class="thumbnail">
            
            <img src="Images/23.jpg" class="img-responsive">
                <div class="caption">
                <h3>Luis Phil</h3>
                    <p>Price:Rs.1000.00</p>
                    <?php
                    if(!isset($_SESSION['email_id']))
                    {?>
                    <p><a href="loginn.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    }
                    else
                    {
                        if(check_if_added_to_cart(10))
                        {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                        }
                        else
                        {
                            ?>
                    <a  href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                    <?php
                        }
                            
                    }
                    ?>
                    <div class="form-group">
                    <input type="button" class="btn btn-primary" value="Add to Cart">
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            
        </div>
            
            
            
             <div class="col-md-3 col-sm-6">
            
            <div class="thumbnail">
            
            <img src="Images/24.jpg" class="img-responsive">
                <div class="caption">
                <h3>John Zok</h3>
                    <p>Price:Rs.1500.00</p>
                    <?php
                    if(!isset($_SESSION['email_id']))
                    {?>
                    <p><a href="loginn.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    }
                    else
                    {
                        if(check_if_added_to_cart(11))
                        {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                        }
                        else
                        {
                            ?>
                    <a  href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                    <?php
                        }
                            
                    }
                    ?>
                    <div class="form-group">
                    <input type="button" class="btn btn-primary" value="Add to Cart">
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            
        </div>
            
            
            
            
             <div class="col-md-3 col-sm-6">
            
            <div class="thumbnail">
            
            <img src="Images/25.jpg" class="img-responsive">
                <div class="caption">
                <h3>Jhalsani</h3>
                    <p>Price:Rs.1300.00</p>
                    <?php
                    if(!isset($_SESSION['email_id']))
                    {?>
                    <p><a href="loginn.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    }
                    else
                    {
                        if(check_if_added_to_cart(12))
                        {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                        }
                        else
                        {
                            ?>
                    <a  href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to Cart</a>
                    <?php
                        }
                            
                    }
                    ?>
                    <div class="form-group">
                    <input type="button" class="btn btn-primary" value="Add to Cart">
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            
        </div>
        
        
        
        
        
        
        
        
        
        </div>
    
    
    
    
    </div>



  <?php
    include 'foot.php';?>
</body>

</html>