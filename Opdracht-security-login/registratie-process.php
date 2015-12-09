<?php
session_start();
$generatePassword;
$_SESSION["user"] =array();
$_SESSION["user"]["e-mail"] = $_POST["e-mail"];
$_SESSION["user"]["passwoord"] = $_POST["passwoord"];
try {
	$db = new PDO('mysql:host=localhost;dbname=opdrachtSecurityLogin', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
  $message["text"] = "er is iets misgelopen met het inladen van de database";
	echo $message["text"];
}

if (isset($_POST["genereerpasswoord"])) {
//er word op genereer passwoord gedrukt
  generatePassword(true,true,false,false,8);
  $_SESSION["user"]["genereerPass"] = true;

}
function generatePassword($uppercase ,$lowercase ,$numbers,$specialsymbols,$length )
{
$passwoord = "";

for ($i=0; $i < $length; $i++) {
  $symbolarray = array();

  if ($uppercase) {
    $symbolarray[] = chr(rand(65,90));
  }
  if ($lowercase) {
    $symbolarray[] = chr(rand(97,122));
  }
  if ($numbers) {
    $symbolarray[] = chr(rand(48,57));
  }
  if ($specialsymbols) {
    $symbols = array(chr(33));
    for ($j=34; $j < 127; $j++) {
      if ($j !=39 && $j != 22 &&  $j < 47 || $j > 60 && $j < 65 || $j > 90 && $j <96 || $j >122 ) {
        $symbols[] = chr($j);
      }
    }
    $symbolarray[] = $symbols[rand(0,count($symbols)-1)];
  }

    $passwoord = $passwoord . $symbolarray[rand(0,count($symbolarray)-1)];

  }

  $_SESSION["user"]["passwoord"] = $passwoord;
//echo "<p>Het gegenereerd passwoord is : " . $passwoord . "</p>";
}


if (!$_SESSION["user"]["genereerPass"]) {



  if (isset($_SESSION["user"]) && !empty($_SESSION["user"]["passwoord"]) &&  !empty($_SESSION["user"]["e-mail"])) {
  //als er iets is ingevuld in het e-mail en passwoord venster
      if (filter_var($_SESSION["user"]["e-mail"] , FILTER_VALIDATE_EMAIL)  ) {
        //als het opgegevn e-mail adres een geldig e-mail adress is

            try {

                  //CHECKEN of het e-mail adress al bestaat
                  $queryString = 'SELECT * FROM users where email ="'. $_SESSION["user"]["e-mail"] . '" ';
                  $statement = $db->prepare($queryString);
                  $statement->execute();
                  $emails = array();

                  while ( $email = $statement->fetch( PDO::FETCH_ASSOC ) )
                  {
                    $emails[]	=	$email;
                  }


                  if (empty($emails)) { //Het ingevulde e-mail adress bestaat nog niet dus REGISTRATIE GELUKT
                      //alleen als er op registreer gedrukt is kan er een USER aangemaakt worden
                    if (isset($_POST["registreer"])) {
                      try {
                        $_SESSION["user"]["EMailIsValid"] = true;
                        $_SESSION["user"]["message"] = "Registratie Gelukt";
                        //add account to database
                        $Salt = uniqid(mt_rand(), true);
                        $passwordWithSalt = $_SESSION["user"]["passwoord"] . $Salt;
                        $emailWithSalt = $_SESSION["user"]["e-mail"].$Salt ;
                        $hashedpass = hash("SHA512", $passwordWithSalt);
                        $hashedemail =  hash("SHA512", $emailWithSalt );

                        $queryString2 = 'Insert into users(ID, email, salt, hashed_password , last_login_time ) values( null , "'. $_SESSION["user"]["e-mail"] .'" , "' .$Salt .'", "' . $hashedpass .'", NOW()) ';
                        $statement2 = $db->prepare($queryString2);
                        $statement2->execute();
                        //setcookie
                        setcookie( 'login', $_SESSION["user"]["e-mail"] . "," . $hashedemail   , time() + (60*60*24*30) );

                        //inputvelden terug leegmaken + succesboodschap
                        unset($_SESSION["user"]["e-mail"]);
                        unset($_SESSION["user"]["passwoord"]);

                        //redirect naar dashboard.php
                        header("Location: http://oplossingen.web-backend.local/Opdracht-security-login/dashboard.php");

                      } catch (Exception $e) {
                        $_SESSION["user"]["EMailIsValid"] = false;
                        $_SESSION["user"]["message"] = "Er is iets missgelopen met de registratie";
                        $message["text"] = "er is iets fout gelopen met de query";
                      	echo $message["text"];
                      }


                    }

                  }else { //als het ingevulde e-mail adress al in de database staat
                    $_SESSION["user"]["EMailIsValid"] = false;
                    $_SESSION["user"]["message"] = "Het opgegeven e-mail adres bestaan al, geef een ander e-mail adress in";
                  }



              } catch (Exception $e) {
                $message["text"] = "er is iets fout gelopen met de query";
              	echo $message["text"];
              }





//onderstaande met try catch maken? is het dan korter?

        }else {
          //als het ingevulde e-mail geen geldig e-mail adress is
        $_SESSION["user"]["EMailIsValid"] = false;
        $_SESSION["user"]["message"] = "Het opgegeven e-mail adres is geen geldig e-mail adress";
        }

    }elseif (empty($_SESSION["user"]["passwoord"]) && empty($_SESSION["user"]["e-mail"])) {
      //als er niets is ingevuld
      $_SESSION["user"]["EMailIsValid"] = false;
      $_SESSION["user"]["message"] = "Vul de velden in";

    }elseif (empty($_SESSION["user"]["e-mail"])){
      //als het e-mail adress niet is ingevud
      $_SESSION["user"]["EMailIsValid"] = false;
      $_SESSION["user"]["message"] = "er is geen e-mail ingevuld";
    }else {
      //als het passwoord niet is ingevuld
      $_SESSION["user"]["EMailIsValid"] = false;
      $_SESSION["user"]["message"] = "Er is geen passwoord ingevuld";
    }
}











if (!$_SESSION["user"]["EMailIsValid"]) {
header("Location: http://oplossingen.web-backend.local/Opdracht-security-login/Opdracht-security-login.php");
}
 ?>
