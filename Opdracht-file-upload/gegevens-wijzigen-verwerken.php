<?php
session_start();
$_SESSION["message"]= array();

try {
	$db = new PDO('mysql:host=localhost;dbname=fileUpload', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
  $message["text"] = "er is iets misgelopen met het inladen van de database";
	echo $message["text"];
}

if (isset($_POST['submit']))
{

  if ((($_FILES["file"]["type"] == "image/gif")
  || ($_FILES["file"]["type"] == "image/jpeg")
  || ($_FILES["file"]["type"] == "image/png"))
  && ($_FILES["file"]["size"] < 2000000))
  {


    if ($_FILES["file"]["error"] > 0) {
      $_SESSION["message"]["good"] = false;
      $_SESSION["message"]["text"] ="Er is een fout gebeurd met het uploaden";
      header("Location: http://oplossingen.web-backend.local/Opdracht-file-upload/Gegevens-wijzigen.php");
    }else {

      $_FILES["file"]["name"] = time()."_".$_FILES["file"]["name"];


      define('ROOT', dirname(__FILE__));

      if (file_exists(ROOT . "/img/" . $_FILES["file"]["name"])) {

        //Als het bestand reeds bestaat in de map, moet er een foutboodschap getoond worden
        $explodeFileName = explode("_",$_FILES["file"]["name"]);
        $_FILES["file"]["name"] =  time()."_". $explodeFileName[1];


      }

      move_uploaded_file($_FILES["file"]["tmp_name"], (ROOT . "/img/" . $_FILES["file"]["name"]));


      $queryString = 'UPDATE users SET email= "'.$_POST["email"].'", profilepicture = "'. $_FILES["file"]["name"].'" WHERE email="'.$_SESSION["user"]["e-mail"] .'"';
      $statement = $db->prepare($queryString);
      $statement->execute();
      $userdata;



      $_SESSION["user"]["e-mail"] = $_POST["email"];
      $_SESSION["message"]["good"] = true;
      $_SESSION["message"]["text"] = "gegevens werden succesvol gewijzigd";

      header("Location: http://oplossingen.web-backend.local/Opdracht-file-upload/Gegevens-wijzigen.php");





    }

  }elseif ($_FILES["file"]["type"] == "") {
    $_SESSION["message"]["good"] = false;
    $_SESSION["message"]["text"] ="Selecteer een foto";
    header("Location: http://oplossingen.web-backend.local/Opdracht-file-upload/Gegevens-wijzigen.php");
  }
  else {
    $_SESSION["message"]["good"] = false;
    $_SESSION["message"]["text"] ="Het bestand mag niet groter zijn dan 2mb ne moet .gif .jpg of .png als extensie hebben";
    header("Location: http://oplossingen.web-backend.local/Opdracht-file-upload/Gegevens-wijzigen.php");
  }
}
 ?>
