<?php

require __DIR__ . '/lib/Ship.php';

$myShip = new Ship();
$myShip->setname('Jedi Fighter');
var_dump($myShip);
;

$myShip = new ship();
$myShip->getName ('TIE');

// echo 'Le nom du vaisseaux est : ' . $myShip->getName() . '<br>';

$mySecondShip = new Ship();
$mySecondShip->getName ("X-Wing Fighter");

// echo "Nom du vaisseau : " . $mySecondShip->getName() . '<br>'; 

$myShip->setWeaponPower(150);
$myShip->setStrength(10);
var_dump($myShip->getWeaponPower());
var_dump($myShip->getStrength());

// echo $myShip->getNameAndSpecs() . '<br>';
// echo $mySecondShip->getNameAndSpecs() . '<br>';

// Ces deux-là sont pareils :
echo $myShip->getNameAndSpecs() . '<br>';
echo $myShip->getNameAndSpecs(false) . '<br>';

// Celui-là est la version longue :
echo $myShip->getNameAndSpecs(true) . '<br>';


echo '<h1>Exercice chapitre 5</h1>';

$myShip1 = new ship();
$myShip1->setName('Jedi Super Greater');
$myShip1->setWeaponPower(150);
$myShip1->setSpatioDriveBooster(12);
$myShip1->setStrength(130);

$myShip2 = new ship();
$myShip2->setName('Android Extra Fighter');
$myShip2->setWeaponPower(400);
$myShip2->setSpatioDriveBooster(12);
$myShip2->setStrength(130);

$myShip3 = new Ship();
$myShip3->setName('Cargo Jumper');
$myShip3->setWeaponPower(150);
$myShip3->setSpatioDriveBooster(12);
$myShip3->setStrength(130);

echo $myShip1->getNameAndSpecs(false) . '<br>';
echo $myShip2->getNameAndSpecs(false) . '<br>';
echo $myShip3->getNameAndSpecs(false) . '<br>';

echo $myShip1->getNameAndSpecs(true) . '<br>';
echo $myShip2->getNameAndSpecs(true) . '<br>';
echo $myShip3->getNameAndSpecs(true) . '<br>';

echo '<h1> Chapitre 6 </h1>';

if($myShip1->doesThisShipHasMoreStrengthThanMe($myShip2)) {
    echo $myShip2->getName() . ' a plus de résistance.';
} else {
    echo $myShip1->getName() . ' a plus de résistance.';
};

echo '<h1> Chapitre 8 </h1>';


?>