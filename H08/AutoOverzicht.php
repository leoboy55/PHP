<?php

class AutoOverzicht {

    private $autoos;

    function __construct() {
        $this->autoos = [
            new Auto('Audi', ' type S ', 10000 ,  " <img src='Sources/audi.jpg'>" . "<br>"),
            new Auto('Tesla', ' model X ', 40000 ,  " <img src='Sources/tesla.jpg'>" . "<br>"),
            new Auto('Ferrari', ' Porretino ', 80000 ,  "<img src ='Sources/ferrari.jpg'>" . "<br>"),
        ];
    }

    function voegAutoToe($merk, $type, $prijs, $url) {
        $newAuto = new Auto($merk, $type, $prijs, $url);
        $this->autoos[] = $newAuto;
    }

    function getAutoLijst() {
        return $this->autoos;
    }

    function getGefilterdeLijst($minPrijs, $maxPrijs , $merkAuto) {
        $gefilterdeLijst = [];

        foreach ($this->autoos as $auto){
            if($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs && in_array($auto->getMerk(),$merkAuto))
            $gefilterdeLijst[] = $auto;
        }
        return $gefilterdeLijst;
    }
}






