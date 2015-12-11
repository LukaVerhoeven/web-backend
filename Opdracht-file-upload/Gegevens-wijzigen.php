<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gegevens wijzigen</title>
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
          <?= ($_SESSION["message"]["good"])? "color: green" :  "color: red" ?>
        }
        img{
          max-width: 400px;
          min-width: 200px;
        }
    </style>
  </head>
  <body>
    <h1>Gegevens wijzigen</h1>
    <p>
      Profielfoto
    </p>
    <img src= <?php
    try {
    	$db = new PDO('mysql:host=localhost;dbname=fileUpload', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $queryString = 'SELECT profilepicture FROM users where email ="'. $_SESSION["user"]["e-mail"] . '" ';
      $statement = $db->prepare($queryString);
      $statement->execute();
      $profilepicture;

      while ( $picturename = $statement->fetch( PDO::FETCH_ASSOC ) )
      {
        $profilepicture	=	$picturename;
      }
      if ($profilepicture['profilepicture'] != 0) {

        echo "img/". $profilepicture['profilepicture'] ."";
      }else {
        echo "img/Empty_Profile.png";
      }

    } catch (Exception $e) {
      $message["text"] = "er is iets misgelopen met het inladen van de database";
    	echo $message["text"];
    }




?>  alt="profielfoto" />

    <?php if(isset($_SESSION["message"]["text"])){
      echo "<h6>" . $_SESSION["message"]["text"] . "</h6>";
      unset($_SESSION["message"]["text"]);
    } ?>




    <form action=" gegevens-wijzigen-verwerken.php" method="post" enctype="multipart/form-data">

			<label for="file">Bestand:</label>
			<input type="file" name="file" id="file"  placeholder=url()>
      <br>
      <label for="email">e-mail</label>
      <input type="text" name="email" id="email" value="<?= (isset($_SESSION["user"]["e-mail"])?$_SESSION["user"]["e-mail"]:"") ?>">

			<input type="submit" name="submit" value="Submit">
		</form>

  </body>
</html>
