<?php

session_start();
unset($_SESSION["id"]);
unset($_SESSION["email"]);
unset($_SESSION["name"]);

header("Location:login-form.html");
?>