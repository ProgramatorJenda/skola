<?php

/**
 * Inkludovani ostatních souboru 
 */
include 'ustredny/iustrednySuchanek.php';
include 'ustredny/ustrednySuchanek.php';
include 'ustredny/ustrednaSuchanek.php';



/**
 * Atribut na nastaveni napeti
 */
$napetiSuchanek = 12;

/**
 * Instance nové třídy
 */
$newSuchanek = new ustrednaSuchanek();

/**
 * Statické vypsání konstanty TYPE
 */
var_dump($newSuchanek::TYPE);

/**
 * Nastavení napeti ve funkci
 */
$newSuchanek->setNapetiSuchanek($napetiSuchanek);

/**
 * Vypsaní napeti pomoci var_dump()
 */
var_dump($newSuchanek->getNapetiSuchanek());
