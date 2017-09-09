<?php
function check_if_added_to_cart($product_id)
{
    require "common.php";
   $select_query= "SELECT * FROM user_product WHERE product_id='$product_id' AND user_id ='$user_id' and status='Added to cart'";
    $select_query_result=mysqli_query($con,$select_query);n
    if(mysqli_num_rows($select_query_result)>=1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}