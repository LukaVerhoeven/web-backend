<?php
	session_start();

 $message = "";

try
			{
            if(isset($_POST["submit"])){
            if  ($_POST["submit"]){              
           
            if  ($_POST["Kortingscode"] == ""){
                throw new Exception( "SUBMIT_ERROR" );
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
                        
                    case "SUBMIT-ERROR":
                        $message["type"] = "error";
                        $message["text"] = "Er werd met het formulier geknoeid";
                        
                        break;
				if($messageCode=="SUBMIT_ERROR"){
                    $message = "Er is een fout gebuurd met Submitten";
                }
			}
                logToFile($message);
            }

function logToFile($foutboodshap){
    $date = date("G:i:s d/m/Y");
    $ip = $_SERVER["REMOTE_ADDR"];
    
    $current .= $date . "\n\r". $ip . "\n\r" .$foutboodshap["type"]. "\n\r" .$foutboodshap["text"] . "\n\r"  ;
    file_put_contents($file, $current);
}

var_dump(date("G:i:s d/m/Y"));
    //var_dump();

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
 
    <h1>Geef uw kortingscode op</h1>
      <?= ($message)? "<p>" . $message. "</p>": "" ?>
    <form action="opdracht-error-handling.php" method="POST">
   
<label for="Kortingscode">Kortingscode:</label>
<input type="text" name="Kortingscode" id="kortingscode">	
<input type="submit" name="submit" value="Verzenden">
      
</form>
</body>
</html>