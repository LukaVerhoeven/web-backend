<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thumbnail generen</title>
    <style>
        body{
            font-family: sans-serif;

        }
        h1{
          font-weight:100;
          color: grey;
          text-decoration: underline;;
        }
        input,label{
          display: block;
          margin-bottom: 5px;
        }
        h6{

          <?=  ($_SESSION["Messageverstuurd"]? "color:green" : "color:red") ?>

        }
    </style>
  </head>
  <body>
    <h1>Thumbnail genereren</h1>
    <form class="" action="index.php" method="post">
      <p>Foto Kiezen</p>
      <input type="file" name="file" value="Choose File">
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
