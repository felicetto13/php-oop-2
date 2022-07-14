
<?php
require_once __DIR__."/products.php";
class Kennels extends Products{

    protected $size;

    function __construct($_title, $_price,$_size)
    {
        parent::__construct($_title,$_price);

        $this->setSize($_size);
    }


    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
}