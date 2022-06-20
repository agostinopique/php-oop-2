<?php
require_once __DIR__ . "/products.php";

$petShopProducts = [];

// $dogFood = new Product("Croccantini per cani", "14,99");
// $catFood = new Product("Umido per gatti", "9,99");




class productDetail extends Product{
    private $category;
    private $animalType;

    public function __construct($_name, $_price, $_category, $_animalType){
        $this->category = $_category;
        $this->animalType = $_animalType;

        parent::__construct($_name, $_price);
    }

    // SETTER
    public function setCategory($_category){
        $this->category = $_category;
    }

    public function setAnimalType($_animalType){
        $this->animalType = $_animalType;
    }
    // /SETTER
    


    // GETTER
    public function getCategory(){
        return $this->category;
    }

    public function getAnimalType(){
        return $this->animalType;
    }
    // /GETTER

    public function gatherData(){
        $dataArr = [];

        $dataArr[] = $this->category;
        $dataArr[] = $this->animalType;

        return $dataArr;
    }

}

$dogFood = new productDetail("Croccantini per cani", "14,99", "Cibo", "Cane");
$catGame = new productDetail("Gomitolo", "3.99", "Gioco", "Gatto");
$catFood = new productDetail("Umido in scatola", "3.99", "Cibo", "Gatto");

$petShopProducts[] = $dogFood;
$petShopProducts[] = $catGame;
$petShopProducts[] = $catFood;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Products</title>
</head>
<body>
    <?php foreach($petShopProducts as $product): var_dump($product) ?>
    <div>
        <h2><?php echo $product->getName() ?></h2>
        <p><?php echo $product->getPrice() ?> &euro;</p>
        <ul>
            <?php ?>
            <li></li>
            <?php ?>
        </ul>
    </div>
    <?php endforeach; ?>
</body>
</html>