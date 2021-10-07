<?php

class broodje {

    private $naamBrood;
    private $meelSoort;
    private $vormBrood;
    private $gewichtBrood;


    function __construct($naamBrood ,$meelSoort, $vormBrood, $gewichtBrood){
        $this->naamBrood = $naamBrood;
        $this->meelSoort = $meelSoort;
        $this->vormBrood = $vormBrood;
        $this->gewichtBrood = $gewichtBrood;
    }

    function getNaamBrood(){
        return $this->naamBrood;
    }
    function setNaamBrood($naambrood){
        $this->naamBrood = $naambrood;
    }

    function getMeelSoort(){
        return $this->meelSoort;
    }
    function setMeelSoort($meelSoort){
        $this->meelSoort = $meelSoort;
    }
    function getVormBrood(){
        return $this->vormBrood;
    }
    function setVormBrood($vormBrood){
        $this->vormBrood = $vormBrood;
    }
    function getGewichtsBrood (){
        return $this->gewichtBrood;
    }
    function setGewichtsBrood($gewichtBrood){
        return $this->gewichtBrood = $gewichtBrood;
    }
}
