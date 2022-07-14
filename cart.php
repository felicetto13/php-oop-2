<?php
require_once __DIR__."/cardPayment.php";
require_once __DIR__."/ccustomer.php";
class Cart {
    private $products=[];
    private $card = [];
    
    public function addProduct($product){
        $this->products[]=$product;

    }
    public function removeProduct(){

    }
    public function getTotal (){
        $currentYear = new DateTime("now");
        $currentYear = $currentYear->format("Y");
        if($cardExpiringDate < $currentYear){

        }
    }
}