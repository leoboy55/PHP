<?php

$leeftijd = 2;
$bedrag = 10;
if($leeftijd > 65) {
   $bedrag = $bedrag * 0.5;
}
if($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}
if($leeftijd < 3){
    $bedrag = 0;
}
echo $bedrag;
