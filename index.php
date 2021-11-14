<?php

// require_once ("MotorClass.php");
// require_once ("residentialClass.php");
// require_once ("pedestrianClass.php");
require_once ("car.php");

// $MotorWay = new MotorWay([], 4, 130);
// // var_dump($MotorWay);

// $PedestrianWay = new PedestrianWay([], 1, 10);
// // var_dump($PedestrianWay);

// $ResidentialWay = new ResidentialWay([], 2, 50);
// // var_dump($ResidentialWay);

$HomerCar = new car ("yellow", "2", "electric");
// var_dump($HomerCar);

try {
    echo $HomerCar->start();
} catch (Exception $e) {    
    $HomerCar->setParkBrake();
} finally {
    echo "Ma voiture roule comme un donut";
}