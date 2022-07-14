<?php

class Card {
    private $cardNumber;
    private $cardExpiringDate;

    function __construct($_cardNumber,$_cardExpiringDate)
    {
        $this->setCardNumber($_cardNumber);
        $this->setCardExpiringDate($_cardExpiringDate);
    }
    /**
     * Get the value of cardNumber
     */ 
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */ 
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get the value of cardExpiringDate
     */ 
    public function getCardExpiringDate()
    {
        return $this->cardExpiringDate;
    }

    /**
     * Set the value of cardExpiringDate
     *
     * @return  self
     */ 
    public function setCardExpiringDate($cardExpiringDate)
    {
        $this->cardExpiringDate = $cardExpiringDate;

        return $this;
    }
}