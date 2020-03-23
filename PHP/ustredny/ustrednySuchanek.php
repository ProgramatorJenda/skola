<?php


abstract class ustrednySuchanek implements iustrednySuchanek {
    
    //Nastavení Protected proměnné
    protected $napetiSuchanek;
            
    //Funkce pro získání napěti
    function getNapetiSuchanek() {
        return $this->napetiSuchanek;
    }

    //Funkce která nastaví hodnotu napětí
    function setNapetiSuchanek($napetiSuchanek) {
        $this->napetiSuchanek = $napetiSuchanek;
    }


}
