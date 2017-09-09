<?php
require "includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Cart Page</title> 
    
<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="cart_page_style.css">
</head>
    
<body>
    <?php
    if(!$_SESSION['email'])
    {
        header('location:loginn.php');
    }
 ?>
    <?php
    include 'head.php';
  
    ?>
    
    <div class="container co">
    <table class="table table-responsive table-bordered">
        
    <tbody>    
 
     <tr>
    <td >Item Number</td>
         <td>Item Name</td>
         <td >Price</td>
         <td>Item Number</td>
        
        
    </tr>
        
     <tr>
    <td></td>
         <td></td>
         <td></td>
         <td></td>
        
    </tr>

     <tr>
    <td>    </td>
         <td>Total</td>
         <td>Rs 0/-</td>
         <td><input type="button" value="Confirm Order" class="btn btn-primary"></td>
        
        
    </tr>
            
        </tbody>
    
    </table>
    
    </div> 
    <?php
    include 'foot.php';
    $user_id=$_SESSION['id'];
    $select_query="select * from user_product p INNER JOIN products d ON p.id=d.id";
    $select_query_result=mysqli_query($con,$select_query);
    if(mysqli_num_rows($select_query_result)==0)
    {
        echo "Add items to the cart first!";
       
    }
    else
    {
        while($row=mysqli_fetch_array($select_query_result))
        {
            $sum=$row['price'];
            
        }
    }
    
    ?>
</body>

</html>