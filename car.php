<?php

require_once("vehicle.php");

class Car extends Vehicle

{
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats, $energy);
    }
}
