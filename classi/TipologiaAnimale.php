<?php
require_once __DIR__ . "/CategoriaProdotti.php";

class AnimalType extends productDetail{
    private $animalType;

    public function __construct($_name, $_price, $_category, $_animalType){
        $this->animalType = $_animalType;

        parent::__construct($_name, $_price, $_category);
    }

    // SETTER
    public function setAnimalType($_animalType){
        $this -> animalType = $_animalType;
    }   
    // /SETTER

    // GETTER
    public function getAnimalType(){
        return $this -> animalType;
    }
    // /GETTER

    public function gatherData(){
        $dataArr = [];

        $dataArr["Categoria"] = $this->category;
        $dataArr["Tipo di Animale"] = $this->animalType;

        return $dataArr;
    }
}