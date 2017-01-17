<?php

class Cart{
    private $customer;
    
    public function __construct(Customer $customer) {
        $this->customer =$customer;
    }
    
    public function getCustomer()
    {
        return $this-> customer;
    }
}
