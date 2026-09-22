<?php

    //ESTRUCTURA DE UN SWITCH

    // switch(valor de una variable){
    //     case primer posible valor:
    //         ......
    //         break;
    //     case segundo posible valor:
    //         ......
    //         break;
    //     default:
    //         ......
    // }

    function operando($operacion){
        switch($operacion){
            case 1:
                echo "La operación escogida es la suma<br>";
                break;
            case 2:
                echo "La operación escogida es la resta<br>";
                break;
            case 3:
                echo "La operación escogida es la multiplicación<br>";
                break;
            case 4:
                echo "La operación escogida es la división<br>";
                break;
            default:
                echo "La operación escogida es el módulo<br>";
        }
    }

    operando(rand(1,5));
    operando(rand(1,5));
    operando(rand(1,5));
    operando(rand(1,5));
    operando(rand(1,5));

    // un switch en el que entre como cadena el día de la semana, de lunes a viernes, mi switch imprimirá por pantalla dentro de un párrafo: "me encantan los X". Si me entra la palabra "finde" entonces devolveré un "VAMOOOOS"
    $dia = "lunes";
    switch($dia){
        case "finde":
            echo "<p>VAMOOOO</p>";
            break;
        default:
            echo "<p>me encantan los $dia</p>";
    }

    switch($dia){
        case "lunes":
        case "martes":
        case "miercoles":
        case "jueves":
        case "viernes":
            echo "<p> me encantan los $dia</p>";
            break;
        default:
            echo "<p>VAMOOOO</p>";
    }

    // vamos a tratar con dos números: en el PRIMER CASE entraremos si y solo si el primer número es mayor o igual al segundo O el segundo número es menor o igual a 2. SEGUNDO CASE entraremos si y solo si el primer número es menor que el segundo Y el segundo es igual a cinco veces el primero entre dos. Tendremos en DEFAULT en cuyo pondremos "no se cumple ninguna de las otras dos condiciones"

    function condiciones($a, $b){

        switch(true){
            case ($a >= $b || $b <= 2):
                echo "<p>primera condicion</p>";
                break;
            case (($a<$b) && ($b == ($a*5)/2)):
                echo "<p>segunda condicion</p>";
                break;
            default:
                echo "<p>no se cumple ninguna de las otras dos condiciones</p>";
        }
    }

    // COMPROBAR CON SWITCH SI UN NÚMERO ALEATORIO DEL 1 AL 100 ES PAR O IMPAR
    // EL SWITCH DEVOLVERÁ UN ECHO ESPECIFICANDO LA PARIDAD DENTRO DE UNA ETIQUETA H3

    $num = rand(1,100);
    switch($num){
        case ($num%2 == 0):
            echo "<h3>El número $num es par</h3>";
            break;
        default:
            echo "<h3>El número $num es impar</h3>";
    }

    if(8 == true){
        echo "holaaaaaaaaasdasdasdaskifjnasñfnasmfksa";
    }
    $num = rand(1,100);
    $num = $num%2;
    switch($num){
        case 0:
            echo "par";
            break;
        default:
        echo "impar";
    }