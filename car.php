<?php

require_once("vehicle.php");

final class car extends vehicle

{
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct( $color, $nbSeats, $energy);
    }
}
