<?php
class Radioprogramma {
    private $Programmanaam = "";
    private $Omschrijving = "";

      function getProgramma(){
        return array("naam" => $this->Programmanaam,
                     "omschrijving" => $this->Omschrijving);
    }
    function getOmschrijving(){
          return $this->Omschrijving;
    }
    function setProgramma($p){
          $this->Programmanaam = $p;
    }
    function setOmschrijving($o){
          $this->Omschrijving = $o;
    }
}
class Liedjes {
    private $nummer = "";
    private $artiest = "";

    function getLiedjes(){
        return array("nummer" => $this->nummer,
                     "artiest" => $this->artiest);
    }
    function setNummer($n){
        $this->nummer = $n;
    }
    function setArtiest($a){
        $this->artiest = $a;
    }
}

$ditprogramma = new Radioprogramma();
$ditprogramma->setProgramma("dxd" . "ldl");
$ditprogramma->setOmschrijving("Where the magic happends" . "wowa");
foreach ($ditprogramma -> getProgramma() as $p){
    echo $p . "<br>";
}

$nieuwLiedje = new Liedjes();
$nieuwLiedje->setNummer("wowa");
$nieuwLiedje->setArtiest("Lady Gaga");
foreach ($nieuwLiedje ->getLiedjes() as $n){
    echo $n . "<br>";
}