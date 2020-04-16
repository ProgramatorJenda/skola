<?php

/**
 * Zkontroluje návratné hodnoty
 */
declare (strict_types=1);

/**
 * Abstraktní třída, která musí být děděna 
 */
abstract class ustrednySuchanek implements iustrednySuchanek {

    /**
     * Nastavení Protected proměnné
     * @author Jan Suchánek
     * @var Int 
     */
    protected $napetiSuchanek;

    /**
     * Funkce která získá hodnotu napěti
     * @author Jan Suchánek
     * @return Int
     */
    function getNapetiSuchanek(): int {
        return $this->napetiSuchanek;
    }

    /**
     * Funkce která nastaví hodnotu napětí
     * @author Jan Suchánek
     * @param Int $napetiSuchanek
     */
    function setNapetiSuchanek(int $napetiSuchanek) {
        $this->napetiSuchanek = $napetiSuchanek;
    }

}
