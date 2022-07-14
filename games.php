<?php
require_once __DIR__."/products.php";
class Game extends Products {

    protected $category;
    
    function __construct($_title, $_price,$_category)
    {
        parent::__construct($_title,$_price);

        $this->setCategory($_category);
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}

?>