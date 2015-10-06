<?php

	$username	=	"Luka";
	$password 	=	"azerty";


if    (isset($_POST["submiit"])){
    
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
    		

<label for="username">Username:</label>
<input type="text" name="username" id="username" value="info@test.be">		<label for="password">Paswoord:</label>
<input type="password" name="password" id="password" value="azerty">
<input type="submit" name="submiit" value="Verzend">

</body>
</html>