<?php

class Speedometer
{
   
        public const conversionKM = 1.609344;
        public const conversionMILE = 0.6215;

        public static function convertKmToMiles($km) {
            return $miles = $km * self::conversionMILE; 
        }

        public static function convertMilestoKm($miles) {
            return $km = $miles * self::conversionKM; 
        }

};

echo Speedometer::convertKmToMiles(10);
echo Speedometer::convertMilestoKm(10);
