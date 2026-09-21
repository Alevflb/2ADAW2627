<?php
    $salto = "<br>";

    define("numPI", 3.1416);

    echo numPI.$salto;

    //TIPOS DE DATOS

    $var1 = 4; //int
    $var2 = 4.1; //float
    $var3 = "cuatro coma uno"; //String (cadena de chars)
    $var4 = true; //boolean
    $var5 = null; //nulo

    var_dump($var1); //función que me sirve para ver el tipo de dato de una variable y su valor
    var_dump($var2);
    var_dump($var3);
    echo $salto;
    // CONVERSIÓN DE TIPO DE DATOS

    // de X a int
    $cadena = "1abc2";
    echo "Mostrar el número en modo cadena: ";
    var_dump($cadena); // $cadena es un string
    $cadena = intval($cadena); // reescribir mi variable $cadena pasándolo a tipo entero
    var_dump($cadena);
    echo $salto;

    // de X a String
    $numero = 13.1;
    echo "Mostar el número decimal: $salto";
    var_dump($numero);
    $numero = strval($numero);
    var_dump($numero);

    // de X a float
    $entero = "1b3.1a";
    echo "$salto Mostrar el número entero: ";
    var_dump($entero);
    var_dump(floatval($entero));