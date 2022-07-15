<?php
require_once __DIR__."/validatorCardExpiring.php";
class Card
{
    use ValidatorExpiringDate;
    private $cardNumber;
    private $cardExpiringDate;

    function __construct($_cardNumber, $_cardExpiringDate)
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
        $this->validateExpiring($cardExpiringDate);
        $this->cardExpiringDate = $cardExpiringDate;

        return $this;
    }

    public function validatePayment()
    {
        $expiration = DateTime::createFromFormat("m/y", $this->cardExpiringDate);
        $now = new DateTime("now");

        return $expiration > $now;
    }
}
