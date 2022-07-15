<?php
require_once __DIR__."/products.php";
require_once __DIR__."/cardPayment.php";
require_once __DIR__."/customer.php";
class Cart {
    public $products=[];

    public function addProduct($product){
        $this->products[]=$product;
    }
    public function removeProduct(){

    }
    public function getProducts(){
        /* var_dump($this->products); */
        foreach ($this->products as $product) {
            return $product;
        }
        
    }
    public function getTotal ($cardExpiringDate,$sale){
        $currentYear = new DateTime("now");
        $currentYear = $currentYear->format("Y");
        $totale = 0;
        $i=0;
        $products = $this->getProducts();/* 
        var_dump($products); */
        if(count($products)>0){
            for ($i=0; $i < count($products); $i++) { 
                $price= $products[$i]->getPrice(); 
            $totale += $price;
            }
        }
        if($cardExpiringDate < $currentYear){
            return "Non puo effetturare transazioni";
        }else{
            return $totale-($totale*$sale/100);
        }
    }
}