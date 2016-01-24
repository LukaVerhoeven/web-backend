<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Regular expression</title>
    <style>
        body{
            font-family: sans-serif;
        }
        h1{
          color: grey;
          border-bottom: 2px solid  grey;
        }
        input,label{
          display: block;
          margin-bottom: 5px;
        }
        span{
          color:red;
        }


    </style>
  </head>
  <body>
    <h1>RegEx tester</h1>
    <form  action="logic.php" method="post">
      <label for="Expression">Regular Expression</label>
      <input type="text" name="Expression" value="<?= (isset($_SESSION["exp"]))? $_SESSION["exp"]: "" ?>">

      <label for="string">String</label>
      <textarea name="string" rows="8" cols="40"><?= (isset($_SESSION["string"]))? $_SESSION["string"]: ""  ?></textarea>
      <input type="submit" name="submit">

    </form>

    <?= (isset($_SESSION["regex"]))?$_SESSION["regex"]: ""  ?>

  </body>
</html>
