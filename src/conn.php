<?php
$serverName='localhost';
$userName='root';
$password='';
$databaseName='SocialNetWork';
$connection = mysqli_connect($serverName,$userName,$password,$databaseName);
if (mysqli_connect_errno($connection))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
