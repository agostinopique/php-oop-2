<?php 

class Client{
    public static $id = 0;
    protected $name;
    protected $surname;
    protected $registration;


    public function __construct($_name, $_surname, $_registration){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->registration = $_registration;
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

    // GETTER
    public function getFullName(){
        return $this->name . ' ' . $this->surname;
    }
}