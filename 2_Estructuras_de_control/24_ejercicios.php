<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Ejercicio 1. Crea una función llamada edad que haciendo uso de la estructura de control switch muestre por pantalla si una persona es menor de edad, adulta, jubilada o anciana. adulta va de 18 a 67 años, jubilada de 67 hasta los 80 y anciana de 80 en adelante. Hacer una llamada a la función con un número random del 1 al 100. IMPORTANTE: Controlar que el número NUNCA pueda ser negativo.</p>

    <?php 
    function calcularEdad(int $edad):string{

        switch(true){
            case $edad<18:
                return "Menor de edad";
                
            case $edad>=18 && $edad<67:
                return "adulto";
                
            case $edad>=67 && $edad<80:
                return "jubilao";
                
            default:
                return "anciano";
        }

    }
    echo calcularEdad(66);
    ?>

    <p>
        Ejercicio 2. Crear una función llamada notas que contenga un parámetro decimal. Si la nota es menor que 5, se mostrará por pantalla la palabra "suspenso". Si la nota está entre 5 y 6, se mostrará "Aprobado", si está entre 7 y 8 --> "Notable" y si es 9 o 10 --> "Sobresaliente".
    </p>

    <p>
        Ejercicio 3. Crear una función llamada meses que, dependiendo del número que entre y haciendo uso del match, devolverá el nombre del mes correspondiente. IMPORTANTE!! Controlad que el número no sea menor a 1 o mayor a 12
    </p>

    <p>
        Ejercicio 4. Crea una función llamada calculadora que tenga 3 parámetros. Dos número y un string. Usar un switch para mostrar el resultado de la operación correspondiente. Las operaciones aceptadas serán: suma, resta, división y exponente.
    </p>
    <?php

        function calculadora(float $num1, float $num2, string $op):float{
            if($num2 == 0 && $op == "division"){
                return -1;
            }else{
                return match($op){
                    "suma" => $num1+$num2,
                    "resta" => $num1-$num2,
                    "exponente" => $num1**$num2,
                    "division" => $num1/$num2,
                    default => -1
                };
            }

        }
    ?>

    <p>
        Ejercicio 5. Crea una función llamada analizarNumero(int $n, int $min, int $max):string que:
        - Devuelva "fuera de rango" si n es menor que el rango minimo o n es mayor que el rango máximo
        - Si está dentro del rango, indicar si es par o impar y además, si está en los bordes (n = min o n=max) o en el interior
    </p>
    <p>
        Ejercicio 6: Crea una función llamada calcularEnvio(float $peso, bool $express, bool $internacional):string que determinará e ltupo de tarifa usando un match:
            
            - si el envío es internacional, express y pesa 2kilos o menos, la tarifa es "Express internacional ligero"

            - si el envío es internacional pero no es express, la tarifa es "Estándar internacional"

            - si el envío no es internacional, es express y pesa cinco kilos o más la tarifa es "Express nacional"

            - si el envío no es internacional y no es express, la tarifa es "Estándar nacional"

            - en cualquier otro caso, "Caso no contemplado"

        Devuelve además un precio base distinto para cada caso (elige tú mismo las cantidades). El texto final debe ser tal que así: "Tarifa: X -- Precio: Y€".
    </p>
    <h3>Ejercicio 7</h3>
    <p>
        Validación de fecha: Crear una función que se llame validarFecha($dia, $mes, $annio) => devuelve un string.
        Devolverá un string informando si la fecha introducida es anterior a la actual, posterio a la actual o es la fecha de hoy

        Además, antes de hacer dicho cálculo, hay que comprobar que la fecha introducida es válida.

        NOTA: no metáis fechas anteriores a 1970

        checkdate(mes, dia, annio) comprobar que la fecha tiene el formato correcto
        
        date("Y-m-d") => para que me de la fecha actual
        date(annio, mes, dia) => devuelve la fecha en formato date
        strtotime(formato date) => el número de segundos que han pasado desde 1970 hacia delante
    </p>

    <?php
        // OPERADOR TERNARIO
        // (condicion) ? (si se cumple la condicion) : (si no se cumple)
        // Ejemplo: 
        $n = rand();
        echo ($n%2==0) ? "$n es par" :"$n es impar";
    ?>
</body>
</html>