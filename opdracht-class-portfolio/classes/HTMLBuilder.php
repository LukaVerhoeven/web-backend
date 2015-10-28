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
        
        include "html/".$this->header.".php";
    }
    
    public function buildBody() {
        include "html/".$this->footer.".php";   
    }
        public function buildFooter(){
        include "html/".$this->body.".php";
        $jsScripts = "js/script.js";
    }
    
}

?>