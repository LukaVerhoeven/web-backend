<?php

    $getal = 75;
    $tiental = "";

    if($getal >0 && $getal< 11){
        $tiental = "ligt tussen 1-10";
    }
    else if($getal >10 && $getal< 21){
        $tiental = "ligt tussen 10-20";
    }
    else if($getal >20 && $getal< 31){
        $tiental = "ligt tussen 20-30";
    }
    else if($getal >30 && $getal< 41){
        $tiental = "ligt tussen 30-40";
    }
    else if($getal >40 && $getal< 51){
        $tiental =="ligt tussen 40-50";
    }
    else if($getal >50 && $getal< 61){
        $tiental = "ligt tussen 50-60";
    }
    else if($getal >60 && $getal< 71){
        $tiental = "ligt tussen 60-70";
    }
    else if($getal >70 && $getal< 81){
        $tiental ="ligt tussen 70-80";
    }
    else if($getal >80 && $getal< 91){
        $tiental = "ligt tussen 80-90";
    }
    else if($getal >90 && $getal< 101){
        $tiental = "ligt tussen 90-100";
    }
    
    $revstr = strrev($tiental);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <p>Het getal <?= $getal ?>,  <?= $tiental ?></p>
    <p>Het getal <?= $getal ?>,  <?= $revstr ?></p>
</body>
</html>