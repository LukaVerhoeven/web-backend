<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mail</title>
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
        textarea{
          display: block;
        }
        .inline{
          display: inline;
        }

        h6{

          <?=  ($_SESSION["Messageverstuurd"]? "color:green" : "color:red") ?>

        }
    </style>
  </head>
  <body>
    <h1>Contacteer ons</h1>
    <?php  if(isset($_SESSION["Message"])){
      echo "<h6>" . $_SESSION["Message"] . "</h6>";

      //unset($_SESSION["Message"]);
    } ?>
    <form  action="contact.php" method="post">
      <label for="email">E-mailadress</label>
      <input type="text" name="email" id="email" value=<?= (isset($_SESSION["email"])? $_SESSION["email"]: "")  ?>>
      <label for="boodschap">Boodschap</label>
      <textarea name="boodschap" id="boodschap" cols="50" rows="10"><?= (isset($_SESSION["boodschap"])? $_SESSION["boodschap"]: "")  ?></textarea>
      <input class="inline" type="checkbox" name="checkbox" id="checkbox" value="">
      <label class="inline" for="checkbox"> Stuur kopie naar mijzelf</label>
      <input type="submit" name="submit" value="submit">


    </form>

  </body>
</html>
