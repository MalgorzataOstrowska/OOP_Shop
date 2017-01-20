<?php

class Quantity{
    
    private $quantity;
    
    public function __construct($quantity) {
        if(!(is_numeric($quantity) && $quantity > 0)){
            die('Wrong quantity: '.$quantity);
        }
        $this->quantity = $quantity;
    }
    
    
    public function getValue(){
        return $this->quantity;
    }
    
   
}

