<?php
require_once __DIR__ . "/classi/TipologiaAnimale.php";
require_once __DIR__ . "/classi/ClientCreditCard.php";

$petShopProducts = [];

$dogFood = new AnimalType("Croccantini per cani", "14,99", "Cibo", "Cani");
$catGame = new AnimalType("Gomitolo", "3.99", "Gioco", "Gatto");
$catFood = new AnimalType("Umido in scatola", "3.99", "Cibo", "Cane");
$dogCrate = new AnimalType("Cuccia di paglia", "19,99", "Cuccia", "Gatto");

$petShopProducts[] = $dogFood;
$petShopProducts[] = $catGame;
$petShopProducts[] = $catFood;
$petShopProducts[] = $dogCrate;

$cliente = new CreditCard("franco", "franchetto", "10/05/2019", 132121356565, "30/06/2022");

var_dump($cliente);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Pet Products</title>
</head>

<body>
    <div class="d-flex justify-center prodotti">

        <?php foreach($petShopProducts as $product): ?>
        <div>
            <h2><?php echo $product->getName() ?></h2>
            <p><?php echo $product->getPrice() ?> &euro;</p>
            <ul>
                <?php foreach($product->gatherData() as $key => $data): ?>
                <li><?php echo "$key : $data" ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endforeach; ?>

    </div>
</body>
</html>