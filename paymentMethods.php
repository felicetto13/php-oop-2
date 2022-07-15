<?php

trait PaymentMethods{

    private $paymentMethods = [];

    public function addPaymentMethod($_paymentMethod){
        $this->paymentMethods[] = $_paymentMethod;
    }

    

    /**
     * Get the value of paymentMethods
     */ 
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * Get the value of method
     */ 
    public function getPaymentMethod($i)
  {
    return $this->getPaymentMethods()[$i];
  }
}