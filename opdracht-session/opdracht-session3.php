<?php
session_start();

if    (isset($_POST["straat"])){
    $_SESSION["adres"]= array();    
    $_SESSION["adres"][] = $_POST["straat"];  
    
}
if    (isset($_POST["nummer"])){
    
    $_SESSION["adres"][] = $_POST["nummer"];  
    
}
if    (isset($_POST["gemeente"])){
    
    $_SESSION["adres"][] = $_POST["gemeente"];  
    
}
if    (isset($_POST["postcode"])){
    
    $_SESSION["adres"][] = $_POST["postcode"];  
    
}
  
if(isset( $_SESSION["Registratie"])){
 var_dump( $_SESSION["Registratie"])   ;
}

if(isset( $_SESSION["adres"])){
 var_dump( $_SESSION["adres"]) ;
    
}


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
            a{
                border-left:1px black solid; 
                margin-left:10px;
            }
    </style>
</head>
<body>
   <h1>Overzichtpagina</h1>
    <ul>
        <li><?= (isset ($_SESSION["Registratie"][0])? $_SESSION["Registratie"][0]:"") ?><a href="http://oplossingen.web-backend.local/opdracht-session/opdracht-session.php"> Wijzig</a></li>
        <li><?= (isset ($_SESSION["Registratie"][1])? $_SESSION["Registratie"][1]:"") ?><a href="http://oplossingen.web-backend.local/opdracht-session/opdracht-session.php"> Wijzig</a></li>
        <li><?= (isset ($_SESSION["adres"][0])? $_SESSION["adres"][0]:"") ?><a href="http://oplossingen.web-backend.local/opdracht-session/opdracht-session2.php"> Wijzig</a></li>
        <li><?= (isset ($_SESSION["adres"][1])? $_SESSION["adres"][1]:"") ?><a href="http://oplossingen.web-backend.local/opdracht-session/opdracht-session2.php"> Wijzig</a></li>
        <li><?= (isset ($_SESSION["adres"][2])? $_SESSION["adres"][2]:"") ?><a href="http://oplossingen.web-backend.local/opdracht-session/opdracht-session2.php"> Wijzig</a></li>
        <li><?= (isset ($_SESSION["adres"][3])? $_SESSION["adres"][3]:"") ?><a href="http://oplossingen.web-backend.local/opdracht-session/opdracht-session2.php"> Wijzig</a></li>
    </ul>
</body>
</html>