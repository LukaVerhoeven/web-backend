<?php
class Zebra extends Animals{
    protected $species;
     public function __construct($name , $gender , $health , $species){
        parent::__construct($name, $gender , $health);
        $this->species = $species;
        
    }
    function getSpecies(){
     return $this->species;   
    }   
    
    
}

?>