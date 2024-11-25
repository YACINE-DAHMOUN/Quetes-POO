<?php

require_once 'Car.php';

// Instanciation de plusieurs voitures
$car1 = new Car('blue', 5, 'gasoline'); // Voiture bleue avec 5 sièges, à essence
$car2 = new Car('red', 2, 'electric');  // Voiture rouge avec 2 sièges, électrique

// Démarrer les voitures
echo $car1->start(); // "The car has started."
echo PHP_EOL;
echo"<br>";
echo $car2->start(); // "The car has started."
echo PHP_EOL;
echo"<br>";
// Avancer les voitures
echo $car1->forward(60); // "The car is moving forward at 60 km/h."
echo PHP_EOL;
echo"<br>";

echo $car2->forward(80); // "The car is moving forward at 80 km/h."
echo PHP_EOL;
echo"<br>";

// Freiner les voitures
echo $car1->brake(); // "The car has stopped."
echo PHP_EOL;
echo"<br>";

echo $car2->brake(); // "The car has stopped."
echo PHP_EOL;

// Afficher les propriétés
echo "Car 1 color: " . $car1->getColor() . PHP_EOL; // "blue"
echo "<br>";
echo "Car 2 energy type: " . $car2->getEnergyType() . PHP_EOL; // "electric"
