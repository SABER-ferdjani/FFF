<?php
include('config.php');

if(isset($_POST['submit'])){
  $EMAIL =$_POST['email'];
  $PASSWORD=$_POST['password'];
$insert="INSERT INTO login(email,password)VALUES('$EMAIL','$PASSWORD')";
mysqli_query($con,$insert);
header('location: index.php');
}



?>