<?php 

class Product{
    private $name;
    protected $price;

    public function __construct($_name, $_price){
        $this->name = $_name;
        $this->price = $_price;
    }


    // SETTER

    public function setName($_name){
        $this->name = $_name;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }


    // GETTER

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }
}