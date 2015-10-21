<?php

$artikels = array(array("titel" => "Titel artikel 1" , "text" => "text van artikel 1" , "tags" => array("tag 1 van artikel 1")),
                  array("titel" => "Titel artikel 2" , "text" => "text van artikel 2" ,"tags"=> array("tag 1 van artikel 2", "tag 2 van artikel 2")),
                  array("titel" => "Titel artikel 3" , "text" => "text van artikel 3" ,"tags"=> array("tag 1 van artikel 3", "tag 2 van artikel 3","tag 3 van artikel 3"))    
    );
    
     // var_dump($artikels );

include "view\header-partial.html";
include "view\body-partial.html";

foreach( $artikels as $artikelnummer => $artikel):

echo "<h4>" .$artikel["titel"] . "</h4>";

echo "<h5>" .$artikel["text"] . "</h5>" ;
foreach( $artikel["tags"] as $tagnummer => $tag):
echo "<h6>" .$tag . "</h6>" ;
endforeach;
endforeach;

include "view\footer-partial.html";

?>




