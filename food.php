<?php
require_once __DIR__."/products.php";

class Food extends Products{

    protected $expirationDate;

    function __construct($_title, $_price,$_expirationDate)
    {
        parent::__construct($_title,$_price);
        $this->setExpirationDate($_expirationDate);

    }


    /**
     * Get the value of expirationDate
     */ 
    public function getExpirationDate()
    {
        $date = new DateTime($this->expirationDate);
        return $date->format("d/m/Y");
    }

    /**
     * Set the value of expirationDate
     *
     * @return  self
     */ 
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }
}