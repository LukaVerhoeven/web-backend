<?php
$md5HashKey  = "d1fa402db91a7a93c4f414b8278ce073";


function Argument1 (){   
    global $md5HashKey;
    $Argument = "2";
    
    $count = substr_count($md5HashKey,$Argument);
    
    $percent = $count/strlen($md5HashKey)*100; 
    
    echo("Functie 1: De needle '" . $Argument . "' komt " . $percent . "% voor in de hash key 'd1fa402db91a7a93c4f414b8278ce073'" ."<br>" );    
    
}

function Argument2 (){   
    global $md5HashKey;
    $Argument = "8";
    
    $count = substr_count($md5HashKey,$Argument);
    
    $percent = $count/strlen($md5HashKey)*100; 
    
    print_r("Functie 2: De needle '" . $Argument . "' komt " . $percent . "% voor in de hash key 'd1fa402db91a7a93c4f414b8278ce073'"."<br>" );    
    
}

function Argument3 (){   
    global $md5HashKey;
    $Argument = "a";
    
    $count = substr_count($md5HashKey,$Argument);
    
    $percent = $count/strlen($md5HashKey)*100; 
    
    print_r("Functie 3 De needle '" . $Argument . "' komt " . $percent . "% voor in de hash key 'd1fa402db91a7a93c4f414b8278ce073'" );    
    
}



Argument1();
Argument2();
Argument3();



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