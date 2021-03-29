<?php

echo "<h1>Exercice Bike </h1>";

require_once 'Bicycle.php';
$bike = new Bicycle('yellow');
var_dump($bike);
$bike->dump();


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');

$tornado->forward();

Echo "<h1>Challenge car</h1>";

require_once 'Car.php';
$car = new Car ('yellow', 4, 'diesel');
var_dump($car);
$car->dump();

echo $car->start();
echo '<br> Start: ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du car : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
