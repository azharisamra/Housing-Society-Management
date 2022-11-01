<?php

$host="localhost";
$username="root";
$password="";
$db="housing society management system";

$conn = mysqli_connect(hostname: $host,
					   username: $username,
					   password: $password,
                       database: $db);
if (mysqli_connect_error())
{    
	die("Connection failed: " . mysqli_connect_error());
}
 echo "Successfully connected housing society management system" ;

?>

<?php
/*
$connect=mysqli_connect("localhost","root","","housing society management system");

if($connect)
 echo "connected";
 else
 echo "not connected";
 */
 ?>