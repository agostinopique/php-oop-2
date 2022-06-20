<?php 

class Client{
    public static $id = 0;
    protected $name;
    protected $surname;
    protected $registration;
    private $discount;


    public function __construct($_name, $_surname, $_registration){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->registration = $_registration;
        $this->discount = $this->setDiscount();
        self::$id++;
    }

    // SETTER
    public function setName($_name){
        $this -> name = $_name;
        $this->getFullName();
    }
    
    public function setSurname($_surname){
        $this -> surname = $_surname;
        $this->getFullName();
    }

    private function setDiscount(){
        if($this->registration != null){
            return $this->discount = 20;
        } 
    }

    // GETTER
    public function getFullName(){
        return $this->name . ' ' . $this->surname;
    }

    public function getRegistration(){
        return $this->registration;
    }

    public function getDiscount(){
        return $this->discount;
    }

}