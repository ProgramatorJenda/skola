<?php

/**
 * Abstraktní třída, která musí být děděna 
 */

abstract class ustrednySuchanek implements iustrednySuchanek {
    
/**
 * Nastavení Protected proměnné 
 * @var Int 
 */
    protected $napetiSuchanek;
            
/**
 * Funkce která získá hodnotu napěti
 * @return Int
 */
    function getNapetiSuchanek() {
        return $this->napetiSuchanek;
    }
/**
 * Funkce která nastaví hodnotu napětí
 * @param Int $napetiSuchanek
 */
    function setNapetiSuchanek($napetiSuchanek) {
        $this->napetiSuchanek = $napetiSuchanek;
    }


}
