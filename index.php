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


$clienti = [];

$cliente1 = new CreditCard("Cosimo", "Rucellai", "10/05/2019", 132121356565, "30/06/2022");
$cliente2 = new CreditCard("Ugo", "Foscolo", "", 31518451545, "23/06/2025");
$cliente3 = new CreditCard("Giacomo", "Leopardi", "10/05/2019", 64121598651, "16/10/2020");
$cliente4 = new CreditCard("Giovanni", "delle Bande Nere", "10/05/2019", 79541325549135, "30/06/2040");


$clienti[] = $cliente1;
$clienti[] = $cliente2;
$clienti[] = $cliente3;
$clienti[] = $cliente4;

// var_dump($clienti);



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

    <div class="d-flex justify-center prodotti">

        <?php foreach($clienti as $cliente): ?>
        <div>

            <h2><?php echo $cliente->getFullName() ?></h2>

            <?php if($cliente->getRegistration() != null){?>
                <p>Data di registrazione: <?php echo $cliente->getRegistration() ?></p>
                <p>Sconto applicato al carrello: <?php echo $cliente->getDiscount() ?> &percnt;</p>
            <?php } else {?>
                <p>Cliente Guest</p>
            <?php } ?>
                <ul class="dati_carte">
                    <?php foreach($cliente->getCardData() as $key => $data): ?>
                    <li><?php echo "$key : $data" ?></li>
                    <?php endforeach; ?>
                </ul>
        </div>
        <?php endforeach; ?>

    </div>
</body>
</html>