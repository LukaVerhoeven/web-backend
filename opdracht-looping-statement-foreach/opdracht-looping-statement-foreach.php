<?php
$text = file_get_contents('C:\Users\Luka\Desktop\school\web-backend\oplossingen\opdracht-looping-statement-foreach\text-file.txt');
$textChar = str_split($text);
rsort($textChar);
$textChar= array_reverse($textChar);



$aantalkarakters = 0;

foreach ( $textChar as $letter ){
   
    echo $letter . "\n";    
        
    $aantalkarakters++;   

}

$karakters = array_count_values($textChar);
var_dump($karakters) ;




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <p> totaal aantal karakter = <?=$aantalkarakters?></p>
    
</body>
</html>