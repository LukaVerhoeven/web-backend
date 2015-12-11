<?php session_start();

if (isset($_COOKIE["login"])) {
    header("Location: http://oplossingen.web-backend.local/Opdracht-security-login/dashboard.php");
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inloggen</title>
    <style>
        body{
            font-family: sans-serif;
        }
        h1{
          color: grey;
          text-decoration: underline;;
        }
        input,label{
          display: block;
          margin-bottom: 5px;
        }
        h6{
          color: orange;
        }
    </style>
  </head>
  <body>
    <h1>Inloggen</h1>
    <?php	 if(isset($_SESSION["user"]["message"])){
      echo "<h6>" . $_SESSION["user"]["message"] ."</h6>";

       unset($_SESSION["user"]["message"]);

    }; ?>
    <form  action="login-process.php" method="post">
      <label for="email">E-mail:</label>
      <input type="text" name="email" id="email" value="<?= (isset( $_SESSION["user"]["e-mail"])? $_SESSION["user"]["e-mail"]:"")?>">
      <label for="passwoord">Passwoord:</label>
      <input type="password" name="passwoord" id="passwoord "value="">
      <input type="submit" name="Inloggen" value="Inloggen">
    </form>


  </body>
</html>
