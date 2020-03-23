<?php


include 'ustredny/iustrednySuchanek.php';
include 'ustredny/ustrednySuchanek.php';
include 'ustredny/ustrednaSuchanek.php';



//Nastavení napětí
$napetiSuchanek = 12;   

//Instance nové třídy
$newSuchanek = new ustrednaSuchanek();

//Statické vypsání konstanty TYPE
var_dump($newSuchanek::TYPE);

//Nastavení Napeti ve funkci
$newSuchanek->setNapetiSuchanek($napetiSuchanek);

//Vypsání Napeti pomocí var_dump()
var_dump($newSuchanek->getNapetiSuchanek());