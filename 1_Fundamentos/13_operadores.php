<?php
    $salto = "<br>";
    $num1 = 14;
    $num2 = 20;

    echo "Suma: ". ($num1+$num2).$salto;

    echo "Resta: ".($num2-$num1).$salto;

    echo "Multiplicación: ".($num1*$num2).$salto;

    // División y resto
 
    // Incremento y decremento (post y pre)
    $num3 = $num2++; //postincremento
    echo "Valor de num3: $num3 Valor de num2: $num2 $salto";

    $num3 = ++$num2; //preincremento
    echo "Valor de num3: $num3 Valor de num2: $num2 $salto";

    //HACED VOSOTROS LO MISMO PERO CON EL DECREMENTO


    //OPERADORES LÓGICOS

    echo "Es num1 mayor que 10?: ".($num1>10).$salto;
    echo "Es num3 mayor o igual a 3 O es num3 menor que num2?: ".(($num3>=3)||($num3<$num2)).$salto;
    echo "Es num3 igual a num2 Y es num1 menor que num2?: ".(($num3 == $num2)&&($num1<$num2)).$salto;

    $numero = 12;
    $cadena = "12";
    $estricto = $numero === $cadena; // el comparador "débil" (o ==) compara únicamente valores entre dos variables mientras que el comparador "estricto" (o ===) compara tanto valor como tipo 
    echo $estricto.$salto;

    echo "num1 y num2 NO son iguales: ".!($num1==$num2).$salto;