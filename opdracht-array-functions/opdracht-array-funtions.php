<?php
 $demooiearray = array( "tijger" , "olfifant" , "anaconda", "zeepaardje","aap","vis","panda","arend","wandelende tak","witte haai");
$aantaldieren = count( $demooiearray);
$Hetgezochtedier = "tijger";
$string = "";
$teZoekenDier = in_array($Hetgezochtedier, $demooiearray);

if($teZoekenDier){
    
    $string = $Hetgezochtedier . " zit in de array";

}else {
    $string = $Hetgezochtedier . " zit niet in de array";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    <p>er zitten <?="$aantaldieren"?> dieren in de string</p>
    <p><?="$string"?></p>
    
</body>
</html>