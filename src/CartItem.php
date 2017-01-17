<?php

class CartItem{
    private $product;
    private $quantity;
    
    public function __construct(Product $product, Quantity $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }
    
    /**
     * 
     * @return Product
     */
    public function getProduct(){
        return $this->product;
    }
    
    /**
     * 
     * @return Quantity
     */
    public function getQuantity(){
        return $this->quantity;
    }
}