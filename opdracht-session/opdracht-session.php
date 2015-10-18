<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        
    label , input{   
        
     display:block;
        
    }
    h1{
        color:white;
        padding:20px;
        padding-left :30px;
        background-color:#656565;
         width:400px;
        font-size:25px;
       
    }
    </style>
</head>
<body>
   <h1>DEEL1 : registratiegegevens</h1>
    <form action="opdracht-session2.php" method="POST" >
        
<label for="email">E-mail:</label>
<input type="text" name="email" id="email" value="<?=(isset( $_SESSION["Registratie"][0])) ? $_SESSION["Registratie"][0] : '' ?>">

<p></p>         
<label for="name">Nickname:</label>
<input type="text" name="name" id="name" value="<?=(isset( $_SESSION["Registratie"][1])) ? $_SESSION["Registratie"][1] : '' ?>">
  
<p></p>    
<input type="submit" name="submit" id="submit" value="Volgende">    
   	
    </form>
</body>
</html>