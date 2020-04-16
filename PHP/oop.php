<?php

/**
 * Inkludovani ostatních souboru 
 * @author Jan Suchánek
 */
include 'ustredny/iustrednySuchanek.php';
include 'ustredny/ustrednySuchanek.php';
include 'ustredny/ustrednaSuchanek.php';



/**
 * Atribut na nastaveni napeti
 * @author Jan Suchánek
 */
$napetiSuchanek = 12;

/**
 * Instance nové třídy
 * @author Jan Suchánek
 */
$newSuchanek = new ustrednaSuchanek();

/**
 * Statické vypsání konstanty TYPE
 * @author Jan Suchánek
 */
var_dump($newSuchanek::TYPE);

/**
 * Nastavení napeti ve funkci
 * @author Jan Suchánek
 */
$newSuchanek->setNapetiSuchanek($napetiSuchanek);

/**
 * Vypsaní napeti pomoci var_dump()
 * @author Jan Suchánek
 */
var_dump($newSuchanek->getNapetiSuchanek());
