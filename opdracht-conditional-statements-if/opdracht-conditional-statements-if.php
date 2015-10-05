<?php
    $getal  = 2;
    $weekdag = "";
if($getal  == 1){
    $weekdag = "maandag";
};
if($getal  == 2){
    $weekdag = "dinsdag";
};
if($getal  == 3){
    $weekdag = "woensdag";
};
if($getal  == 4){
    $weekdag = "donderdag";
};
if($getal  == 5){
    $weekdag = "vrijdag";
};
if($getal  == 6){
    $weekdag = "zaterdag";
};
if($getal  == 7){
    $weekdag = "zondag";
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>    
   <p>De dag van de week is , <?= $weekdag?></p>
    
</body>
</html>