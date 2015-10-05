<?php

    $jaartal = 100;
    $schrikkel = "";

if($jaartal%4 == 0){
    
    $schrikkel = "schrikkeljaar";
    
    if($jaartal%100 == 0 && $jaartal%400 !=0){
         $schrikkel = "geen schrikkeljaar";
    
    }
}else{
    $schrikkel = "geen schrikkeljaar";
    
}
    
    
    
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
       <P>Het jaar <?= $jaartal?> is , <?=$schrikkel ?></P>
        
    
</body>
</html>