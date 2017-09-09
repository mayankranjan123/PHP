<?php
require "common.php";
$product_id=@$_GET['product_id']; 
$user_id=$_SESSION['id'];
$insert_query=INSERT into user_product(user_id, product_id, status) VALUES ('$user_id', '$product_id', 'Added to cart') or die(mysqli_error($con));
$insert_query_result=mysqli_query($con,$insert_query);
header("location:products.php");
?>