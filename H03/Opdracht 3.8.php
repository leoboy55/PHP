<?php



$kappersagenda = array ("Mevr. Pietersen" => 09.15, "Mevr. Willems" => 09.30, " " => 09.45, "Paul van den Broek" => 10.00, "Karel de Meeuw" => 10.15, "" => 10.30);

print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $afspraak => $tijd) {
    if($afspraak == "" || $afspraak == " ") {
        echo("<li>".$tijd."</li>");
    }
}
print("</ul>");