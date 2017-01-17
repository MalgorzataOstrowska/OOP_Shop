<?php

class ProductPrice{
    
    private $price;
    
    public function __construct($price) {
        if(!(is_numeric($price) && $price > 0)){
            die('Wrong price');
        }
        $this->price = $price;
    }
    
    public function getPrice(){
        return $this->price;
    }
}