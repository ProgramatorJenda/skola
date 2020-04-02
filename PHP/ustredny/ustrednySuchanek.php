<?php

/**
 * Abstraktní třída, která musí být děděna 
 */

abstract class ustrednySuchanek implements iustrednySuchanek {
    
/**
 *
 * @var Int 
 */
    protected $napetiSuchanek;
            
/**
 * 
 * @return Int
 */
    function getNapetiSuchanek() {
        return $this->napetiSuchanek;
    }
/**
 * 
 * @param Int $napetiSuchanek
 */
    function setNapetiSuchanek($napetiSuchanek) {
        $this->napetiSuchanek = $napetiSuchanek;
    }


}
