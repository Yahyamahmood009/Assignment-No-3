<?php
$link= mysqli_connect("localhost:3307", "root", "", "a3");
if ($link->connect_error) 
{
  die("Connection failed: " . $link->connect_error);
}

$first_name=$_POST["fname"];
$last_name=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["pass"];
$num=$_POST["no"];


$q="INSERT INTO user_registration(First_name, Last_name, Email, Password, No)VALUES('$first_name','$last_name','$email','$password','$num')";

if($link->query($q)==TRUE)
{
	header("location:after-signup.html");
}
else
{
	echo "error in creating account";
}
$link->close();
?>