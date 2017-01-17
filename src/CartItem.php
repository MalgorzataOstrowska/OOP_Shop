<?php

class CartItem{
    private $product;
    private $quantity;
    
    public function __construct(Product $product, Quantity $quantity) {
        $productQuanitiy =  $product->getQuantity()->getQuantyty();
        $cartItemQuanitiy =  $quantity->getQuantyty();
        
        if($cartItemQuanitiy >$productQuanitiy){
            //die('Nie mozna zamowic wiecej niz jest');
            
            $quantity = new Quantity($productQuanitiy);
        }
        
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