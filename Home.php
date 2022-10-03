<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    
    <a href="logout.php">
        <button style="float: right; background-color: palegreen; width: 90px; height: 35px;">Log Out</button>
    </a>

    <br><br><br><br>
    <h1 align="center" style="color: palegreen;"><u>Welcome 
        <?php
        echo $_SESSION['name'];
        ?>
    !</u></h1>

    <br><br><br><br>
    <h4 align="center"><i>If you want to fill the Admission Form CLick Here </i><a style="color: palegreen;" href="admission-form.html">ADMISSION FORM</a></h4>

</body>
</html>