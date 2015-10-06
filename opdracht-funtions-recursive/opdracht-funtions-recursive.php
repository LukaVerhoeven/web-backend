<?php

$HansZijnCash = 100000;
$jaren = 10;


function berkenthemoney( $aantalGeld , $aantaljaren ){

if($aantaljaren >=10){
    
    $percentbonus = ($aantalGeld/100) * 8;
    $GeldMetBonus = $aantalGeld + $percentbonus * $aantaljaren;
    
    return $GeldMetBonus;    
} else {
    return $aantalGeld;
}
}

$geld = berkenthemoney($HansZijnCash,$jaren );
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <p>Hans zijn geld word <?="$geld"?>€</p>
    
</body>
</html>