<?php
    // VARIABLES GLOBALES, LOCALES Y ESTÁTICAS

    // VARIABLE LOCAL: Se crea dentro de una función y sólo podemos usarla dentro de esta

    function mostrarAlumno(){
        $nombre = "Mónica";
        echo "Desde dentro de la función: $nombre <br>";
    }

    mostrarAlumno();
    // echo $nombre; al ser una variable local definida dentro de la función mostrarAlumno(), no se puede usar desde fuera de dicha función

    // $nombre = "Paquito";
    // echo $nombre;

    // VARIABLE GLOBAL: Se crean fuera de las funciones, se puede acceder a ellas en todas las partes del fichero gracias a la palabra reservada "global"

    $modulo = "Desarrollo web en entorno servidor";

    function mostrarCurso(){
        global $modulo;
        echo "Desde dentro de la función: $modulo<br>";
    }

    mostrarCurso();

    $numerito = 1;
    function sumar(){
        global $numerito;
        $numerito += 2;
    }
    sumar();
    echo $numerito."<br>";

    // VARIABLES ESTÁTICAS

    function contadorConLocal(){
        $cont = 0;
        $cont++;
        echo "Cont local: $cont <br>";
    }
    contadorConLocal(); //
    contadorConLocal(); //
    contadorConLocal(); //
    contadorConLocal(); //
    contadorConLocal(); //
    function contadorConEstatica(){
        static $cont = 0;
        $cont++;
        echo "Cont local: $cont <br>";
    }
    contadorConEstatica();
    contadorConEstatica();
    contadorConEstatica();
    contadorConEstatica();
    contadorConEstatica();
    contadorConEstatica();

    // Crear una función que duplique el valor de una variable local incializada en dos hasta que el resultado de las llamadas a la misma función sea 1024

    function duplicar(){
        static $res = 2;
        echo $res."<br>";
        $res*=2;
    }

    duplicar(); //2
    duplicar(); //4
    duplicar(); //8
    duplicar(); //16
    duplicar();
    duplicar();
    duplicar();
    duplicar();
    duplicar();
    duplicar();
