<?php
session_start();
/*
if (isset($_COOKIE["login"])) {
    header("Location: http://oplossingen.web-backend.local/Opdracht-security-login/dashboard.php");
}
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <style>
        body{
            font-family: sans-serif;


        }
        h1{
          color: grey;
          text-decoration: underline;;
        }
        .block{
          margin-bottom:10px;
        }

        h6{

          <?= ($_SESSION["user"]["EMailIsValid"] ? "color:green" : "color:red")?>
        }
    </style>
  </head>
  <body>

    <h1>Registreren</h1>

    <?php  if (isset($_SESSION["user"]["EMailIsValid"]) ){

                  if(  isset($_SESSION["user"]["message"]))  {
                        echo  "<h6>". $_SESSION["user"]["message"]. "</h6>";
                  }
      /*
       if ($_SESSION["user"]["EMailIsValid"]) {
         //melding weghalen als Registratie gelukt is
        unset($_SESSION["user"]["EMailIsValid"]);
        unset($_SESSION["user"]["message"]);
      }
*/

      }
     ?>

    <form action="registratie-process.php" method="post">
      <div class="block">
        <label for="e-mail">e-mail</label>
        <input type="e-mail" name="e-mail" id="e-mail" value=<?= (isset($_SESSION["user"]["e-mail"])? $_SESSION["user"]["e-mail"] :"")?>>
      </div>
      <div class="block">
      <label for="passwoord">passwoord</label>

      <input type= <?php

      if(isset(  $_SESSION["user"]["genereerPass"])){
        if ($_SESSION["user"]["genereerPass"]) {
          echo "text";
          $_SESSION["user"]["genereerPass"] = false;
        }else{
        echo "password";
      }
    }else {
      echo "password";
    }

      ?> name="passwoord" id="passwoord" value="<?=
       (isset($_SESSION["user"]["passwoord"])?   $_SESSION["user"]["passwoord"]: "")?>">

      <input type="submit" name="genereerpasswoord" value="genereer passwoord">
  </div>
      <input type="submit" name="registreer" value="Registreer">


    </form>

  </body>
</html>
