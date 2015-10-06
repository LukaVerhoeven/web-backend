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
   $hashkey = $GLOBALS['md5HashKey'];
    $Argument = "8";
    
    $count = substr_count($hashkey,$Argument);
    
    $percent = $count/strlen($hashkey)*100; 
    
    print_r("Functie 2: De needle '" . $Argument . "' komt " . $percent . "% voor in de hash key 'd1fa402db91a7a93c4f414b8278ce073'"."<br>" );    
    
}

function Argument3 ($hashkey){   
    $Argument = "a";
    
    $count = substr_count($hashkey,$Argument);
    
    $percent = $count/strlen($hashkey)*100; 
    
    print_r("Functie 3 De needle '" . $Argument . "' komt " . $percent . "% voor in de hash key 'd1fa402db91a7a93c4f414b8278ce073'" );    
    
}



Argument1();
Argument2();
Argument3($md5HashKey);



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