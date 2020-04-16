<?php

/**
 * @author Jan Suchánek
 * V interface se implenetuji funkce
 */
interface iustrednySuchanek {

    /**
     * @author Jan Suchánek
     * Funkce na dodani napeti, musi se implementovat
     */
    function getNapetiSuchanek();

    /**
     * @author Jan Suchánek
     * @param string $napetiSuchanek
     */
    function setNapetiSuchanek(string $napetiSuchanek);
}
