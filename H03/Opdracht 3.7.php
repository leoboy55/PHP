<?php

$alle["De Spartelkuikens"] = 25;
$alle["De Waterbuffels"] = 32;
$alle["Plonsmderin"] = 11;
$alle["Bommetje"] = 23;
$afbeelding = "<img src='Sources/zwemmer.jpg'>";


   foreach ($alle as $label => $waarde) {
    $totaleplaatjes = $waarde / 5;
    $afgerondGetal = floor($totaleplaatjes);


    echo   $label . " : " . $waarde;
    afgerondGetallen($afgerondGetal,$afbeelding);
    echo "<br>";

}

function afgerondGetallen($afgerondGetal,$afbeelding) {
    while ($afgerondGetal > 0) {
        echo $afbeelding;
        $afgerondGetal--;

    }
}
?>











