<?php
class percent {
public $absolute;
public $relative;
public $hundred;
public $nominal;
    
public function __construct ($new, $unit){
    $this->absolute = $new /$unit;
    $this->relative = $this->absolute -1;
    $this->hundred = $this->absolute * 100;
    
    if($this->absolute >1){ $this->nominal = "positive";}
    else if ($this->absolute =1){ $this->nominal = "status-quo";}
    else {$this->nominal = "negative";}
 
    $this->formatNumber($this->absolute);
    $this->formatNumber($this->relative);
    $this->formatNumber($this->hundred);
    
}

public function formatNumber($number) {
    
   return round($number , 2);
    
}


    
}

?>