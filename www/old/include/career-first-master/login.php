<?php
include("include/connect.php");

$escapedName = mysqli_real_escape_string($link,$_POST['username']);
$escapedPW = mysqli_real_escape_string($link,$_POST['password']);
$sql="select * from users where username = '$escapedName' and password = '$escapedPW'";
$query = mysqli_query($link,$sql);
if(mysqli_num_rows($query)){
	$row=mysqli_fetch_assoc($query);
	
	$_SESSION['careeradminid']=$row['userid'];
	$_SESSION['careeradmin_name']=$row['username'];
	echo "1";
}
else{
	echo "0";
}
?>