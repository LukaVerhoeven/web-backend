<?php
session_start();
$_SESSION["email"] = $_POST["email"];
$_SESSION["boodschap"] = $_POST["boodschap"];
$admin  = $_POST["email"];



if (isset($_POST["email"]) && $_POST["boodschap"]) {

  try {
    var_dump(isset($_POST["checkbox"]));
  	$db = new PDO('mysql:host=localhost;dbname=opdrachtmail', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $queryString = 'Insert into contact_messages(id, email, message, time_sent) values( null , "'. $_POST["email"] .'" , "' . $_POST["boodschap"] .'",  NOW()) ';
    $statement = $db->prepare($queryString);
    $statement->execute();

    if (isset($_POST["checkbox"])) {
      mail($admin , 'mail contact form',$_POST["boodschap"]);
      if (mail($admin , 'mail contact form', $_POST["boodschap"])) {
        $_SESSION["Messageverstuurd"] = true;
        $_SESSION["Message"] = "De Mail is correct verstuurd";
        header("Location: http://oplossingen.web-backend.local/opdracht-mail/contact-form.php");
      }else {
        $_SESSION["Message"] = "De mail is niet vertuurd";
        $_SESSION["Messageverstuurd"] = false;
        header("Location: http://oplossingen.web-backend.local/opdracht-mail/contact-form.php");
      }
    }

  } catch (Exception $e) {
    $_SESSION["Messageverstuurd"] = false;
    $message["text"] = "er is iets misgelopen met de database";
  	echo $message["text"];
  }

}elseif (!isset($_POST["email"])) {
  $_SESSION["Messageverstuurd"] = false;
  $_SESSION["Message"] = "Er is geen E-mail adress ingevuld";
}else {
  $_SESSION["Messageverstuurd"] = false;
  $_SESSION["Message"] = "Er is geen boodschap adress ingevuld";
}
header("Location: http://oplossingen.web-backend.local/opdracht-mail/contact-form.php");
 ?>
