<?php
session_start();

unset($_COOKIE["login"]);
$_SESSION["user"]["message"] = "U bent uitgelogd";
header("Location: http://oplossingen.web-backend.local/Opdracht-file-upload/Login.php");

 ?>