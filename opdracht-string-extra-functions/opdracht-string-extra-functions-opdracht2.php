<?php

    $fruit = "ananas";
    $positie = strripos($fruit, "a");
    $hoofdletters = strtoupper($fruit);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <p>positie =<?= $positie?></p>
   <p><?= $hoofdletters?></p>
    
</body>
</html>