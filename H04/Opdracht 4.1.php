<?php

//Opdracht 1

function convertCelsiusToFahrenheit($insertCelsius){
    return $insertCelsius * 1.8 + 32;
}

 echo  "Fahrenheit : " . convertCelsiusToFahrenheit(32);

//Opdracht 2

echo "<br>";

function divideByThreePossible($numberSet){
    if($numberSet % 3 == 0) {
        $number = true;
        echo "It is possible ";
    } else {
        $number = false;
      echo "It is not possible ";
    }
    return $number;
}

echo divideByThreePossible(9);

//opdracht 3

echo  "<br>";

function returnStringsBackwards($stringInput){
    if(isset($stringInput)){
        echo strrev($stringInput);
    }
    else {
        echo "Geen woord ingevoerd";
    }
}

returnStringsBackwards("water");



