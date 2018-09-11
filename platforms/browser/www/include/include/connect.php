<?php
$link=mysqli_connect("localhost","itficlgm_loop","ITF@@204","itficlgm_cfirst");


//$link=mysqli_connect("localhost","root","","itficlgm_cfirst");
// Check connection

$web="http://www.career-first.in/admin-first/";

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if (session_status() == PHP_SESSION_NONE) {
    session_start();
   
}
?>