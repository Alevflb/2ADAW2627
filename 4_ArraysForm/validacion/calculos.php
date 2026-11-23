<?php
/**
 * CREAR TRES CONSTANTES DONDE EL NOMBRE SEA EL TIPO DE IVA Y SU VALOR EL NÚMERO POR EL QUE MULTIPLICAR EL PRECIO PARA QUE ME DE EL PVP
 * 
 * GENERAL => 1.21
 * REDUCIDO => 1.1
 * SUPERREDUCIDO => 1.04 
 */

define("GENERAL", 1.21);
define("REDUCIDO", 1.1);
define("SUPERREDUCIDO", 1.04);

function calcularPVP(int | float $precio, string $iva):float{
    return match($iva){
        "general" => $precio * GENERAL,
        "reducido" => $precio * REDUCIDO,
        "superreducido" => $precio * SUPERREDUCIDO
    };
}
