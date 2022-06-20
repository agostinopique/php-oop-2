<?php
require_once __DIR__ . "/Clienti.php";

class CreditCard extends Client{
    protected $cardNumber;
    protected $cardExpiration;
    protected $cardValidation;
    

    public function __construct($_name, $_surname, $_registration, $_cardNumber, $_expirationDate){
        $this -> cardNumber = $_cardNumber;
        $this -> cardExpiration = $_expirationDate;
        $this -> cardValidation = $this->cardValidation();

        parent::__construct($_name, $_surname, $_registration);
    }

    // SETTER 
    public function setCreditCard($_creditCard){
        $this -> creditCard = $_creditCard;
    }

    private function cardValidation(){
        if($this->cardExpiration < date("d/m/Y")){
            return "Carta non valida";
        } else {
            return "Carta abilitata all'acquisto";
        }
    }

    // GETTER
    public function getName(){
        return $this->name;
    }


    public function getCardData(){
        $cardInfo = [];

        $cardInfo["Numero carta"] = $this->cardNumber;
        $cardInfo["Data di scadenza"] = $this->cardExpiration;
        $cardInfo["Stato carta"] = $this->cardValidation;

        return $cardInfo;
    }


}
