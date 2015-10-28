<?php
function __autoload($class_name) {
    include "classes/" . $class_name . ".php";
}
$head = "header.partial";   
$body = "Body.partial"; 
$footer = "footer.partial"; 


$newhtml = new HTMLBuilder($head,$body,$footer);
$newhtml->buildHeader();    
$newhtml->buildBody();
$newhtml->buildFooter();

function findFiles($dir,$file) {
    
    return glob($dir. "/*." . $file);
}

function BuildJsLinks(){
    findFiles(js,"js");
}  


?>