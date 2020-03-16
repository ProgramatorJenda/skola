<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jablotron
 *
 * @author uzivatel
 */
class Jablotron {

    public $gsmmodule = 1;
    public $radia;
    public $napajeni;
    public $baterie;
    public $pocetsbernic;

    function _construct(XiaomiBattery\Baterie12V3A $baterie) {
        $this->napajeni = $baterie;
    }

    function getBaterie() {
        return $this->baterie;
    }

    function setBaterie(XiaomiBattery\Baterie12V3A $baterie) {
        $this->baterie = $baterie;
    }

    function getGsmmodule() {
        return $this->gsmmodule;
    }

    function getRadia() {
        return $this->radia;
    }

    function getNapajeni() {
        return $this->napajeni;
    }

    function getPocetsbernic() {
        return $this->pocetsbernic;
    }

    function setGsmmodule($gsmmodule) {
        $this->gsmmodule = $gsmmodule;
    }

    function setRadia($radia) {
        $this->radia = $radia;
    }

    function setNapajeni($napajeni) {
        $this->napajeni = $napajeni;
    }

    function setPocetsbernic($pocetsbernic) {
        $this->pocetsbernic = $pocetsbernic;
    }

}
$gsmmodule = 1;
function pocetgsm($gsmmodule) {
    if($gsmmodule == 1) {
        return "Pocet je vporadku";
    } else {
        return "Spatny pocet gsm";
    }
        
 }
 echo pocetgsm($gsmmodule);
 echo "<br><br>";
$ustredny = array (1 => "Ja101k", 2 => "Ja106k");
$ustredna = 2;
var_dump($ustredna);
$jablotrony = array("101", "103", "106", "108");
echo 'Jablotrony';  
foreach ($jablotrony as $hodnota){
    echo $hodnota;"<br>";
}
$hezkaustredna = "Ja miluju jablotron.";
echo mb_strtoupper($hezkaustredna);
