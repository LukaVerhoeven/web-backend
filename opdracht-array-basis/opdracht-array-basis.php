<?php
    $demooiearray = array( "tijger" , "olfifant" , "anaconda", "zeepaardje","aap","vis","panda","arend","wandelende tak","witte haai");

$dieren[] = "tijger";
$dieren[] = "olfifant";
$dieren[] = "Anaconda";
$dieren[] = "zeepaardje";
$dieren[] = "aap";
$dieren[] = "vis";
$dieren[] = "panda";
$dieren[] = "arend";
$dieren[] = "wandelende tak";
$dieren[] = "witte haai";

    $voertuigen["landvoertuigen"] = array("Auto" , "fiets");
    $voertuigen["watervoertuigen"] = array("boot" , "diepzeeduiker");
    $voertuigen["luchtvoertuigen"] = array("helicopter" , "vliegtuig");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <p><?php var_dump($demooiearray)?></p>
   <p><?php var_dump($dieren)?></p>
   <p><?php var_dump($voertuigen)?></p>
    
</body>
</html>