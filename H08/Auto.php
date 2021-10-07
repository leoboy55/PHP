<?php

class Auto {
    private $merk;
    private $type;
    private $prijs;
    private $url;

    function __construct($merk, $type, $prijs, $url){
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->url = $url;
    }
    function getMerk(){
        return $this->merk;
    }
    function getType(){
        return $this->type;
    }
    function getPrijs(){
        return $this->prijs;
    }
    function getUrl(){
        return $this->url;
    }
    function setMerk($merk){
        $this->merk = $merk;
    }
    function setType($type){
        $this->type = $type;
    }
    function setPrijs($prijs){
        $this->prijs = $prijs;
    }
    function setUrl($url){
        $this->url = $url;
    }
}





