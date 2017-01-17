<?php

class Quantity{
    
    private $quantity;
    
    public function __construct($quantity) {
        if(!(is_numeric($quantity) && $quantity > 0)){
            die('Wrong price');
        }
        $this->quantity = $quantity;
    }
    
    public function getQuantyty(){
        return $this->quantity;
    }
}

