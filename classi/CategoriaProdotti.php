<?php

require_once __DIR__ . "/Products.php";



class productDetail extends Product{
    protected $category;

    public function __construct($_name, $_price, $_category){
        $this->category = $_category;

        parent::__construct($_name, $_price);
    }

    // SETTER
    public function setCategory($_category){
        $this->category = $_category;
    }
    // /SETTER
    


    // GETTER
    public function getCategory(){
        return $this->category;
    }

    // /GETTER

}
