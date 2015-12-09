<?php
session_start();

if (!isset($_COOKIE["login"])) {
header("Location: http://oplossingen.web-backend.local/Opdracht-security-login/Opdracht-security-login.php");

}
try {
	var_dump($_COOKIE["login"]);
	$db = new PDO('mysql:host=localhost;dbname=opdrachtSecurityLogin', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  $cookieLogin = explode(",",$_COOKIE["login"]);

  $queryString = 'SELECT * FROM users where email ="'. $cookieLogin[0] . '" ';
  $statement = $db->prepare($queryString);
  $statement->execute();

  $Userdata= array();

      while ( $dbdata = $statement->fetch( PDO::FETCH_ASSOC ) )
      {
        $Userdata[]	=	$dbdata;
      }


  $emailWithSalt = $cookieLogin[0] . $Userdata[0]['salt'];
  $hashedemail =  hash("SHA512", $emailWithSalt );

      if ($hashedemail == $cookieLogin[1]) {
        var_dump("Het gerigistreerde e-mail in de Database = cookie e-mail");

      }else {
        unset($_COOKIE["login"]);
        header("Location: http://oplossingen.web-backend.local/Opdracht-security-login/login.php");

      }




} catch (Exception $e) {
  $message["text"] = "er is iets misgelopen met het inladen van de database";
	echo $message["text"];
}






 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Dashboard</title>
     <style>
         body{
             font-family: sans-serif;


         }
         h1{
           color: grey;
           text-decoration: underline;;
         }
				 h6{
					 color: green;
				 }
     </style>
   </head>
   <body>
     <h1>dashboard</h1>
		   <?php	 if(isset($_SESSION["user"]["message"])){
				 echo "<h6>" . $_SESSION["user"]["message"] ."</h6>";


					unset($_SESSION["user"]["EMailIsValid"]);
					unset($_SESSION["user"]["message"]);

			 }; ?>

     <?php if (isset($_COOKIE["login"])): ?>
       <a href="http://oplossingen.web-backend.local/Opdracht-security-login/logout.php">uitloggen</a>
     <?php endif; ?>

   </body>
 </html>
