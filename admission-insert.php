<?php

$link=mysqli_connect("localhost:3307","root","","a3");
if($link->connect_error)
{
    die ("Connection Fail".$link->connect_error);
}


$name=$_POST["yname"];
$fname=$_POST["fname"];
$cnic=$_POST['nic'];
$gender=$_POST['r1'];
$email=$_POST['email'];
$num=$_POST['no'];
$address=$_POST['add'];
$provin=$_POST['pro'];
$city=$_POST['city'];
$degree=$_POST['deg'];
$skill=$_POST['ch'];
$skill_1=implode(" ,",$skill);

$q="INSERT INTO admission_form(Name,Father_name,CNIC,Gender,Email,Number,Address,Skill,Province,City,Degree) VALUES('$name','$fname','$cnic','$gender','$email','$num','$address','$skill_1','$provin','$city','$degree')";
if($link->query($q)==TRUE)
{
    header("location:after-admission.html");
}
else
{
    echo "error in admission form";
}
$link->close();

?>