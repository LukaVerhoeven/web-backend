<?php

$getal1 =2;
$getal2 = 5;


function berekenSom($getal3,$getal4){
    return $getal3 + $getal4;

}
function Vermenigvuldig($getal3,$getal4){
    return $getal3 * $getal4;

}
function Iseven($getal3){
    if($getal3%2 ==0){
       return "is even"; 
    }else{
     return " is niet even";   
    }

}

$oplossing = berekenSom($getal1,$getal2);
echo "optellen: ".$oplossing . "\n";
$oplossing = Vermenigvuldig($getal1,$getal2);
echo ",Vermenigvuldig: ".$oplossing . "\n";
$oplossing = Iseven($getal1);
echo ",Getal ".$getal1. " : ".$oplossing . "\n";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    
</body>
</html>