<?php
session_start();

unset($_COOKIE["login"]);
setcookie( 'login',""  , -20);
$_SESSION["user"]["message"] = "U bent uitgelogd";
header("Location: http://oplossingen.web-backend.local/Opdracht-security-login/Login.php");

 ?>
