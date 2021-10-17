<?php

// require_once 'Bicycle.php';
// require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
// var_dump($bicycle);

$car = new Car('green', 4, 'electric');
// var_dump($car);

$truck = new Truck('grey', 3, 'fuel', 10);
$truck->setLoad(55);
var_dump($truck);