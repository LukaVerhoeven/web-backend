<?php

$HansZijnCash = 100000;
$jaren = 10;

$Klantengegevens = array("naam"=> "Hans" , "zijn geld" => 100000, "aantaljaren" => 10, "gekregenpercent" => 8);




function berkenthemoney( $Klantengegevens){

if($Klantengegevens["aantaljaren"] >=10){
    
    $percentbonus = ($Klantengegevens["zijn geld"]/100) * $Klantengegevens["gekregenpercent"];
    
    $GeldMetBonus = $Klantengegevens["zijn geld"] + $percentbonus * $Klantengegevens["aantaljaren"];
    
    return $GeldMetBonus;    
} else {
    return $Klantengegevens["zijn geld"];
}
}


$geld = berkenthemoney($Klantengegevens);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <p><?=$Klantengegevens["naam"]?> heeft nu <?="$geld"?>€</p>
    
</body>
</html>