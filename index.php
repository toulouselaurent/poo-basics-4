<?php

require "Bike.php";
require "Car.php";
require "Truck.php";
require "MotorWay.php";
require "Skateboard.php";
require "PedestrianWay.php";
require "ResidentialWay.php";


$car = new Car('green', 4, 4, 'electric');


var_dump($car);

$car->setParkBrake(true);

try {
     echo $car->start();   
} catch(Exception $e) {
    // code to manage exceptions
    echo $e->getMessage(). " mais je l'enlève pour que ";
} finally {
    echo "ma voiture roule comme un donut";
}
