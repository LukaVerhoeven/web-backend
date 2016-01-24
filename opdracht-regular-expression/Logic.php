<?php
session_start();
$_SESSION["exp"] = $_POST["Expression"];
$_SESSION["string"] = $_POST["string"];



if ($_POST["submit"]) {

  //$regex = $_POST["Expression"];
  $letter= "[a-d]|[u-z]";
  $regExpres = $_POST["Expression"];
  $color = "[color]|[colour]";
  $duizend = "1\d{3}";
  $datum = "[0-9]{2}[\/\-\.][0-9]{2}[\/\-\.][0-9]{4}";
  $regex  = $letter . "|". $regExpres. "|". $color . "|" . $duizend . "|" .$datum ;
  $string = $_POST["string"];
  $replacement = "<span>#</span>";
  $_SESSION["regex"] = preg_replace("/" . $regex . "/" ,$replacement  , $string);
}
  header("Location: http://oplossingen.web-backend.local/opdracht-regular-expression/opdracht-regular-expression.php");
 ?>
