<?php
$con=mysqli_connect("localhost","root","","test") or die(mysqli_error($con));
session_start();
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$email=stripcslashes($email);
$password=stripcslashes($password);
$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);
$result=mysqli_query($con,"select *from users where email='$email' and password='$password'") or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
if($row['email']==$email && $row['password']==$password)
{
   $_SESSION['email']=$email;
    header("location:products.php");
}
else
{
    header("location:loginn.php?invalid=Invalid email or password!");
}}
?>