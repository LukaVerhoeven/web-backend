<?php
session_start();
 $_SESSION["user"]["e-mail"] =$_POST["email"];
try {
	$db = new PDO('mysql:host=localhost;dbname=fileUpload', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
  $message["text"] = "er is iets misgelopen met het inladen van de database";
	echo $message["text"];
}

$queryString = 'SELECT * FROM users where email ="'. $_POST["email"] . '" ';
$statement = $db->prepare($queryString);
$statement->execute();
$email;

while ( $IngevuldeEmail = $statement->fetch( PDO::FETCH_ASSOC ) )
{
  $email	=	$IngevuldeEmail;
}

if (!empty($email)) {
  $passwordWithSalt = $_POST["passwoord"]. $email["salt"];
  $emailWithSalt = $email["email"] .$email["salt"];
  $hasedpass = hash("SHA512", $passwordWithSalt);
  $hashedemail = hash("SHA512", $emailWithSalt);

  if ($hasedpass ==$email["hashed_password"] ) {
    setcookie( 'login', $_POST["email"] . "," . $hashedemail   , time() + (60*60*24*30) );
    header("Location: http://oplossingen.web-backend.local/Opdracht-file-upload/dashboard.php");
  }else {
      header("Location: http://oplossingen.web-backend.local/Opdracht-file-upload/Login.php");
      $_SESSION["user"]["message"] = "U hebt een fout e-mail of passwoord ingevuld";
  }
}else {
  header("Location: http://oplossingen.web-backend.local/Opdracht-file-upload/Login.php");
}




/*
$_POST["e-mail"];

*/
?>
