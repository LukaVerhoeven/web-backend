<?php
	session_start();
    $isValid = false;


try
			{
            if(isset($_POST["submit"])){
            if  ($_POST["submit"]){              
            $korting = $_POST["Kortingscode"];
                
            if  ($_POST["Kortingscode"] == ""){
                throw new Exception( "SUBMIT_ERROR" );
                
            }
            if (strlen($korting) ==8 ){
                $isValid = true;
            } else{
                $isValid = false;
                throw new Exception( "VALIDATION-CODE-LENGTH" );
            }
            }
            }
    

			}
			catch( Exception $e )
			{               
		        $messageCode = $e->getMessage();
                $message = array();
                $createMessage = false;
              
                switch ($messageCode){
                        
                    case "SUBMIT_ERROR":
                        $message["type"] = "error";
                        $message["text"] = "Er werd met het formulier geknoeid";
                        
                        break;
                        
                     case "VALIDATION-CODE-LENGTH":
                        $message["type"] = "error";
                        $message["text"] = "De kortingscode heeft niet de juiste lengte";
                        $createMessage = true;
                        
                        break;
				/*if($messageCode=="SUBMIT_ERROR"){
                    $message = "Er is een fout gebuurd met Submitten";
                }*/
			}
                logToFile($message);
                /*if ($createMessage){
                    createMessage($message);
                }*/
                
            }

function logToFile($foutboodshap){
    if(isset($foutboodshap)){
    $date = date("G:i:s d/m/Y");
    $ip = $_SERVER["REMOTE_ADDR"];
    
    $current = $date . "\n\r". $ip . "\n\r" .$foutboodshap["type"]. "\n\r" .$foutboodshap["text"] . "\n\r";
    file_put_contents("Log.txt", $current, FILE_APPEND);
    }
}

//function 

var_dump(date("G:i:s d/m/Y"));
//$test = $_POST["Kortingscode"];

   // var_dump(   (strlen($test) ==8 ) ?true : false );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    h1{
        color:white;
        padding:20px;
        padding-left :30px;
        border-radius:7px;
        background-color:#656565;
         width:45%;
        font-size:25px;   
    }
    p{
      background-color:#860404;
        padding :10px;
        border-radius:5px;
        color:#eb4242;
        
    }
</style>
</head>
<body>
 <?php if($isValid): ?>
   <h5>correcte code!</h5>
   <?php endif ?>
   <?php if(!$isValid): ?>
    <h1>Geef uw kortingscode op</h1>
      <?= (isset($message))? "<p>" . $message["text"]. "</p>": "" ?>
    <form action="opdracht-error-handling.php" method="POST">
   
<label for="Kortingscode">Kortingscode:</label>
<input type="text" name="Kortingscode" id="kortingscode">	
<input type="submit" name="submit" value="Verzenden">
      
</form>

<?php endif ?>
</body>
</html>