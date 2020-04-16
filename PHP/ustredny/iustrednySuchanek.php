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
     * @param int $napetiSuchanek
     */
    function setNapetiSuchanek(int $napetiSuchanek);
}
