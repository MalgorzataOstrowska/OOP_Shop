<?php

class Cart{
    private $customer;
    private $items;

    public function __construct(Customer $customer) {
        $this->customer =$customer;
        $this->items = [];
    }
    
    public function getCustomer()
    {
        return $this-> customer;
    }
    
    public function addCartItem(CartItem $items){
        $this->items[] = $items;
    }
    
    public function getCartItems(){
        return $this-> items;
    }    
    
    public function getTotalSum()
    {
        $sum = 0;

        foreach ($this->items as $item) {
            $sum += $item->getQuantity()->getValue() * $item->getProduct()->getPrice()->getPrice();
        }

        return $sum;
    }
}
