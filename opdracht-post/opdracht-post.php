<?php

	$username = "Luka";
	$password = "azerty";


if    (isset($_POST["submit"])){
    
    if    ($_POST["username"] == $username && $_POST["password"] == $password){
        
        echo  "good";
    }else{
        echo "nope!";   
    }
    
    
}    
  
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    		
<form action="opdracht-post.php" method="POST">
   
<label for="username">Username:</label>
<input type="text" name="username" id="username">		<label for="password">Paswoord:</label>
<input type="password" name="password" id="password" value="azerty">
<input type="submit" name="submit" value="Verzend">
      
</form>


</body>
</html>