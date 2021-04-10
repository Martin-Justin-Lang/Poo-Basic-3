<?php

echo "<h1>Exercice Bike </h1>";

require_once 'Bicycle.php';
$bike = new Bicycle('yellow', 2);
echo $bike->forward();
var_dump($bike);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow', 2);

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black',2);

$tornado->forward();

Echo "<h1>Challenge car</h1>";

require_once 'Car.php';
$car = new Car ('yellow', 4, 'fuel');
var_dump($car);

/*
echo $car->forward();
echo '<br> Start: ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du car : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
*/

var_dump(car::ALLOWED_ENERGIES);

Echo "<h1>Challenge camion</h1>";

require_once 'Camion.php';
$camion = new Camion('red',5, 'diesel', 500, 18000);
var_dump($camion);

var_dump(Camion::ALLOWED_ENERGIES);

/*
echo "Le camion à une couleur " .$camion->getColor() ." , un nombre de  " .$camion->getNbSeats() ." places " . "et roule en " .$camion->getEnergy()."<br/>";
echo "La capacité maxi de son chargement est de " .$camion->getStorageCapacity() . " tonnes"."<br/>";
echo $camion->setLoad(50);
echo "Le camion est chargé à " .$camion->getLoad() ." tonnes" ." il est donc en " .$camion->camionIsFull() ."<br/>";
echo $camion->setLoad(100);
echo "Le camion est chargé à " .$camion->getLoad() ." tonnes" ." il est donc en " .$camion->camionIsFull();
*/

Echo "<h1>Challenge POO3 </h1>";
require_once 'MotorWay.php';
$ParisWay = new MotorWay();
$ParisWay->addVehicule($car);
$ParisWay->addVehicule($tornado);
$ParisWay->addVehicule($camion);
var_dump($ParisWay);

require_once 'ResidentialWay.php';
$ArmandRoad = new ResidentialWay();
$ArmandRoad->addVehicule($tornado);
$ArmandRoad->addVehicule($car);
$ArmandRoad->addVehicule($camion);
var_dump($ArmandRoad);

require_once 'PedestrianWay.php';
$littleArmandRoad = new PedestrianWay();
$littleArmandRoad->addVehicule($tornado);
$littleArmandRoad->addVehicule($car);
var_dump($littleArmandRoad);