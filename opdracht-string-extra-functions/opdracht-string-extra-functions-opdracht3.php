<?php
    $lettertje = "e";
    $cijfertje = 3;
    $langsteWoord = "zandzeepsodemineralenwatersteenstralen";
    $replace = str_replace($lettertje , $cijfertje , $langsteWoord);
        

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>    <p>crazy woord = <?= $replace?></p>
    
</body>
</html>