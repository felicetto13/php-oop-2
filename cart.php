<?php
trait Cart {
    public $products=[];

    public function addProduct(...$product){
        array_push($this->products,...$product);
    }
    public function removeProduct(){

    }
    public function getProducts(){
        
        
            return $this->products;
        
        
    }
    public function getTotal (){
        
        $totale = 0;
        foreach($this->products as $product){
            $totale += $product->getPrice();
        }
        return $totale;
        
    }
    public function checkout($_indexPaymentMethod){
        //prendere metodo di pagamento
            $method = $this->getPaymentMethod(($_indexPaymentMethod));
            var_dump($method);
        //prendere il totale
            $total = $this->getTotal();
        //ritornare lo sconto
            $discount = $this->getSale();
        //Calcolare il totale con lo sconto
            $totalWithDiscount = $total - ($total * $discount / 100);  
        //Controllare che il metodo di pagamento sia valido
        var_dump($method->validatePayment());   
        if($method->validatePayment()){
            echo "il pagamento è andato a buon fine";

        }else {
            echo "pagamento non riuscito";
        }

        var_dump($total);
            return $totalWithDiscount;
    }
}