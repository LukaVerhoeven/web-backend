<?php
class percent {
public $absolute;
public $relative;
public $hundred;
public $nominal;
    
public function __construct ($new, $unit){
    $absolute = $new /$unit;
    $relative = $absolute -1;
    $hundred = $absolute * 100;
    
    if($absolute >1){ $nominal = "positive";}
    else if ($absolute =1){ $nominal = "status-quo";}
    else {$nominal = "negative";}
 
    $this->formatNumber($absolute);
    $this->formatNumber($relative);
    $this->formatNumber($hundred);
    
}

public function formatNumber($number) {
    
   return round($number , 2);
    
}
    
}

?>