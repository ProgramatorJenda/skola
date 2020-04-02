<?php

/**
 * Abstraktní třída, která musí být děděna 
 */

abstract class ustrednySuchanek implements iustrednySuchanek {
    
/**
 * Nastaveni protected proměnné
 */
    protected $napetiSuchanek;
            
/**
 * Funkce pro získání napětí
 */
    function getNapetiSuchanek() {
        return $this->napetiSuchanek;
    }
/**
 * Funkce která nastaví hodnotu napětí
 */
    function setNapetiSuchanek($napetiSuchanek) {
        $this->napetiSuchanek = $napetiSuchanek;
    }


}
