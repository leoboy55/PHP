<?php
class BroodjesOverzicht
{
    private $broodjes;

    function __construct()
    {
        $this->broodjes = [
            new broodje("pistolet", "tarwe", "rond", 1000),
            new broodje("stokbrood", "mais", "vierkant", 500),
            new broodje("bolletje", "wit", "snee", 100),
           ];
    }

    function voegBroodjeToe($naamBrood, $meelSoort, $vormBrood, $gewichtBrood)
    {
        $newbroodje = new broodje($naamBrood, $meelSoort, $vormBrood, $gewichtBrood);
        array_push($this->broodjes, $newbroodje);
    }

    function getBroodjeslijst()
    {
        return $this->broodjes;
    }

    function verwijderLijst()
    {
        unset($this->broodjes);
    }

    function getIndex(){
       $index = 0;
    }

    function verwijderRij($index)
    {
        if(isset($_POST['delete'])){
            unset($this->broodjes[$index]);
        }
    }
}
