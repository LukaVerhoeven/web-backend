<?php
$userpass = file_get_contents("C:\Users\Luka\Desktop\school\web-backend\oplossingen\opdracht-cookies\user.txt");
$gebruikers = explode(",", $userpass);
var_dump($gebruikers);
    
$loggedIn = false;

if    (isset($_POST["user"])){
  if  ($_POST["user"] ==$gebruikers[0] && $_POST["pass"]== $gebruikers[1]){
      
      $loggedIn= true;
      
        setcookie( 'authenticated', TRUE, time() + 360 );
        header( 'opdracht-cookies.php' );
  }    
}


if(isset($_GET["logout"])){
if($_GET["logout"]){
    setcookie( 'authenticated', false, time() - 360 );
    $loggedIn = false;
    header("Refresh:0");
}
}

   if(isset($_COOKIE["authenticated"])){
     $loggedIn= true;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <title>Document</title>
    <style>

            
    label , input{   
        
     display:block;
        
    }
    h1{
        color:white;
        padding:20px;
        padding-left :30px;
        background-color:#a3a2a2;
         width:400px;
        font-size:25px;
        border-radius:10px;
       
    }
        h5{
        color:red;
        background-color:rgb(255, 138, 138);
            width:380px;
            padding: 10px;
            border-radius:5px;
        }
        
    
    </style>
</head>
<body>
  <?php if ( !$loggedIn ): ?>
        
   <h1>Inloggen</h1>
     
    <?php if ( isset($_POST["submit"])&& !$loggedIn): ?>
    <h5>Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw.</h5>
    <?php endif ?>
     <form action="opdracht-cookies.php" method="POST" >
        
<label for="user">Gebruikersnaam:</label>
<input type="text" name="user" id="user">

<p></p>         
<label for="pass">Password:</label>
<input type="password" name="pass" id="pass">
  
<p></p>    
<input type="submit" name="submit" id="submit" value="Verzenden">       	
    </form>
      <?php else: ?>
      <h1>Dashboard</h1>
      <p>u bent ingelogd</p>
      <a href="?logout=true" >Uitloggen</a>
       <?php endif ?>
    
    
</body>
</html>