<?php
session_start();


if    (isset($_POST["email"])){
    $_SESSION["Registratie"]= array();    
    $_SESSION["Registratie"][] = $_POST["email"];   
    
}

if    (isset($_POST["name"])){
    
    $_SESSION["Registratie"][] = $_POST["name"];    
    
}  



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


if    (isset($_POST["reset"])){
    
    $_SESSION["adres"]= array();    
    
}


if(isset( $_SESSION["Registratie"])){
 var_dump( $_SESSION["Registratie"])   ;
}

if(isset( $_SESSION["adres"])){
 var_dump( $_SESSION["adres"])   ;
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
    </style>
</head>
<body>
   <h1>DEEL1 : registratiegegevens</h1>
<p>E-mail: <?=(isset( $_SESSION["Registratie"][0]))?$_SESSION["Registratie"][0]: ''; ?></p>
  
   <p>Nickname: <?=(isset( $_SESSION["Registratie"][1]))?$_SESSION["Registratie"][1] : ''; ?></p>

   <h1>DEEL2 : adres</h1>
   
   
    <form action="opdracht-session3.php" method="POST" >
        
<label for="straat">Straat:</label>
<input type="text" name="straat" id="straat"  
value="<?=(isset( $_SESSION["adres"][0])) ?  $_SESSION["adres"][0] : '' ?>">

<p></p>         
<label for="nummer">Nummer:</label>
<input type="text" name="nummer" id="nummer"
value="<?=(isset( $_SESSION["adres"][1])) ?  $_SESSION["adres"][1] : '' ?>" >
 
 <p></p>         
<label for="gemeente">Gemeente:</label>
<input type="text" name="gemeente" id="gemeente" 
value="<?=(isset( $_SESSION["adres"][2])) ?  $_SESSION["adres"][2] : '' ?>">
 
 <p></p>         
<label for="postcode">Postcode:</label>
<input type="text" name="postcode" id="postcode"
 value="<?=(isset( $_SESSION["adres"][3])) ?  $_SESSION["adres"][3] : '' ?>" >
  
<p></p>    
<input type="submit" name="submit" id="submit" value="Volgende">    

	
    </form>
    <form action="opdracht-session2.php" method="POST">
        <input type="submit" name="reset" id="reset" value="Reset"> 
    </form>
    
    
    
</body>
</html>








