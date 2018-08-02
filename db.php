<?php
/*
Author: Mansour Zekria

*/

$con = mysqli_connect("localhost","root","","multi_login");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>