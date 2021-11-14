<?php

require_once("vehicle.php");

class Car extends Vehicle implements LightableInterface

{
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats, $energy);
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
