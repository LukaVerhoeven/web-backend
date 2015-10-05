<?php
$getal = 0;
$string = "";
$deelbaar = "";

while($getal <100){
    
    $string .= $getal .", ";
    
    if ($getal%3 == 0 && $getal>40 && $getal <80){
        
    $deelbaar .= $getal .", ";    

         
}
    
    $getal++;
    
      

    
}



while ($getal ==100){
    
    $string .= $getal;
    $getal++;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <p><?="$string"?></p>
   <p><?="$deelbaar"?></p>
    
</body>
</html>