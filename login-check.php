<?php
session_start();

$link= mysqli_connect("localhost:3307", "root", "", "a3");
if ($link->connect_error) 
{
  die("Connection failed: " . $link->connect_error);
}

$email=$_POST["email"];
$password= $_POST["pass"];

$q="SELECT * FROM user_registration WHERE Email='$email' and Password='$password'";

$result= $link->query($q);
$row= $result->fetch_assoc();

if(is_array($row))
{
	$_SESSION["id"]= $row["ID"];
	$_SESSION["email"]= $row["Email"];
	$_SESSION["name"]=$row["First_name"];
	header("location:Home.php");
}
else
{
	header("location:wrong-login.html");
}

?>