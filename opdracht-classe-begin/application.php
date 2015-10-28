<?php


function __autoload($class_name) {
    include "classes/" . $class_name . ".php";
}
$new = 150;
$unit = 100;
$Percent = new percent($new,$unit);
var_dump($Percent);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Document</title>
    <style>
    td{
     border : 1px black solid;   
    }
    </style>
</head>
<body>
   <p>hoeveel procent is <?= $new ?> van <?= $unit ?></p>
   <table>
       <tr>
           <td>absolute</td>
           <td><?= $Percent->absolute?></td>
       </tr>
       
       <tr>
           <td>relative</td>
           <td><?= $Percent->relative ?></td>
       </tr>
       <tr>
           <td>hundred</td>
           <td><?= $Percent->hundred ?></td>

       </tr>
       <tr>
           <td>nominal</td>
           <td><?= $Percent->nominal ?></td>

       </tr>
       
   </table>
    
</body>
</html>
