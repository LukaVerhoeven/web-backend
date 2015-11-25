<?php

class HTMLBuilder {
 
    public $header;
    public $body;
    public $footer;
    
    public function __construct ($Header, $Body , $Footer){
        
        $this->header = $Header;
        $this->body = $Body;
        $this->footer = $Footer;
    }
    
    public function buildHeader(){        
        $cssLinks = $this->buildCssLinks("global.css");
        include "html/".$this->header.".php";
    }
    
    public function buildFooter() {
        $jsScripts = $this->buildJsLinks("script.js"); 
        include "html/".$this->footer.".php";  
         
    }

    public function buildBody(){

        include "html/".$this->body.".php";
       
    }

    public function buildJsLinks($jsfile){
        return '<script src="js/' . $jsfile . '"></script>';

    }

    public function buildCssLinks($cssfile){
        return '<link rel="stylesheet" type="text/css" href="css/' . $cssfile . '">';
    }
    
}

?>