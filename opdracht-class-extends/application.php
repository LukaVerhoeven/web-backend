<?php
function __autoload($class_name) {
    include "classes/" . $class_name . ".php";
}
$dieren= array(array("name"=>"tijger","gender"=>"male","health"=>"100"),array("name"=>"eend","gender"=>"female","health"=>"40"),array("name"=>"worm","gender"=>"unisex","health"=>"2"));
$tijger = new Animals($dieren[0]["name"],$dieren[0]["gender"],$dieren[0]["health"]);
$eend = new Animals($dieren[1]["name"],$dieren[1]["gender"],$dieren[1]["health"]);
$worm = new Animals($dieren[2]["name"],$dieren[2]["gender"],$dieren[2]["health"]);

$lions = array(array("name"=>"Simba","gender"=>"male","health"=>"999", "species"=>"disney leeuw"))
$Leeuw1 new Lion($lions[0]["name"],$lions[0]["gender"],$lions[0]["health"],$lions[0]["species"]);


var_dump($dieren[0]["name"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    h1{
        color:white;
        padding:20px;
        padding-left :30px;
        border-radius:7px;
        background-color:#656565;
         width:45%;
        font-size:25px;   
    }
</style>
<body>
   <h1>Instanties van de Animal class</h1>
   
   <p><?= $tijger->getName() ?> is van het gleslacht <?= $tijger->getGender() ?> en heeft momenteel <?= $tijger->getHealth() ?> levenspunten (special move:<?= $tijger->doSpecialMove() ?> ) </p>
     <p><?= $eend->getName() ?> is van het gleslacht <?= $eend->getGender() ?> en heeft momenteel <?= $eend->getHealth() ?> levenspunten (special move:<?= $eend->doSpecialMove() ?> ) </p>
       <p><?= $worm->getName() ?> is van het gleslacht <?= $worm->getGender() ?> en heeft momenteel <?= $worm->getHealth() ?> levenspunten (special move:<?= $worm->doSpecialMove() ?> ) </p>
   
   <h1>Specifieke dierenklassen die gebaseerd zijn op de Animal class</h1>
   
    <p>De special move van <?= $Leeuw1->getName() ?> :<?= $Leeuw1->doSpecialMove()?> ) </p>
   
   
   <h1>Leeuwen</h1>
   <h1>Zebra's</h1>
    
</body>
</html>