<?php
require_once __DIR__."/user.php";


class Customer extends User {

    private $registered;
    protected $sale;

    function __construct($_firstName,$_lastName,$_email,$registered)
    {
        parent::__construct($_firstName,$_lastName,$_email);
        $this->setRegistered($registered);
        $this->setSale($this->getRegistered());
    }
    


    /**
     * Get the value of registered
     */ 
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set the value of registered
     *
     * @return  self
     */ 
    public function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }

    /**
     * Get the value of sale
     */ 
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * Set the value of sale
     *
     * @return  self
     */ 
    public function setSale($sale)
    {
        if($sale === true){
            $this->sale = 20;
        }else{
            $this->sale = 0;
        }
        
        return $this;
        
    }
    
}