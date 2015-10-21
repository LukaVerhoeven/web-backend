<?php
class Animals{
    protected $name;
    protected $gender;
    protected $health;
    public function __construct($Name,$Gender,$Health){
        $this->name = $Name;
        $this->gender = $Gender;
        $this->health = $Health;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getGender(){
        return $this->gender;   
    }
    
    public function getHealth(){
        return $this->health;   
    }
    
    public function changeHealth($healthPoints){
        $this->health+= $healthPoints;
    }
    
    public function doSpecialMove(){
        return "walk";
    }
}
?>