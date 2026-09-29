<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Con while, reccore desde 150 hasta 0. Muestra los pares con no sean múltiplos de 6. Calcula su cantidad, su suma y la media.</p>
    <?php
        $n = 150;
        $acum = 0;
        $suma = 0;
        while($n>=0){
            
            if($n%6!=0 && $n%2 == 0){
                echo $n."<hr>";
                $acum++;
                $suma+=$n;
            }
        
            $n--;
        }
        echo "El número de pares no mult 6 es: $acum La suma es: $suma y la media es: ".($suma/$acum)."<br>";
    ?>
    <h2>Ejercicio 2</h2>
    <p>Recorre desde 1 hasta 200 con un while, seleccionando los múltiplos de 7 que no sean múltiplos de 3. Muestra cada seleccionado en un li dentro de una lista ordenada. Cuando hayas acabado de mostrar todos, fuera de la lista, enseña la cantidad de números que hay, su suma y su media: Corrige maikel angel CORREGIDO</p>

    <h2>Ejercicio 3</h2>
    <p>Empiezas 0€ y ahorras 40€ a la semana hasta alcanzar o superar los 4K€.</p>
    <p>VERSIÓN 1: Calcula cuántas semanas debes de estar ahorrando para llegar o superar los 4K</p>
    <p>VERSIÓN 2: Añadir un gasto de 20€ cada cuarta semana para ir a cenar contigo mismo. Calcular cuántas semanas debe estar ahorrando para llegar a los 4K Y por cada semana que pase, mostrar en un párrafo el dinero aportado, el gastado y lo ahorrado hasta ese momento: Corrige: Miguelito CORREGIDO</p>
    <h3>Ejercicio 4</h3>
    <p>Genera números enteros del 1 al 20 con un do-while y acumúlalos. Si superas el 100 sin haber alcanzado exactamente el número 100 entonces el bucle termina y tienes que mostrar el número en el que te has quedado y dibujar la fuente de la frase en rojo si es par y en azul si impar. En el caso en el que hayas llegado exactamente al 100, entonces seguirás iterando hasta llegar o sobrepasar el 150. En este caso colorearás en verde la frase final si el número es par y en morado si es impar: Corrige samuelito CORREGIDO</p>
    <h3>Ejercicio 5</h3>
    <p>Crea una función que reciba un número y dos límites eenteros. Rechaza límites invertidos. Recorre el intervalo con for y muestra solo las operaciones cuyo resultado sea par; calcula cuántas has mostrado y la suma de sus resultados. Corrige Andrew CORREGIDO</p>
    <?php
        function mult($n , $min, $max){

        }
    ?>
    <h3>Ejercicio 6</h3>
    <p>En una función sin parámetros, y gracias a un random para saber hasta donde iteramos (random del 100 al 150), calcular la media más alta entre los siguientes grupos: múltiplos de tres, múltiplos de 5, múltiplos de 3 y de 5 y el resto. Corrige Antonio CORREGIDO</p>
    <h3>Ejercicio 7</h3>
    <p>Crear una función que calcule con un for la suma de los siguientes números 1 -2 +3 -4 + ... hasta n. Acepta enteros de 0 hasta 100 y rechaza otros valores que estén fuera de ese rango. La función devolverá la suma anterior y una comparación con la suma normal del 1 hasta n. Corrige Alba CORREGIDO</p>
    <h3>Ejecicio 8</h3>
    <p>Crea la función factorial($n) para enteros de 0 a 15, rechazando valores fuera de ese parámetros. Corrige Chakib CORREGIDO</p>
    <h3>Ejercicio 9</h3>
    <p>Sin convertirlo en cadena ni array, recorre las cifras de un número entero entre 0 y 999999 generado de manera aleatoria. Calcula la cantidad de cifras que tiene el número, la suma de sus cifras, la cifra mayor, la menor y el número de ceros que contiene. Devolver una cadena como la siguiente: "Para 4050: cuatro cifras, suma 9, mayor 5, menor 0, 2 ceros" Corrige Samu</p>
    <h3>Ejercicio 10</h3>
    <p>VERSIÓN 1: Crea una función que dependiendo del parámetro que se le pase, dibujará un triángulo más o menos grande. El parámetro indicará el tamaño del triángulo. Altura mínima 3 (obligatorio)</p>
    <p>VERSIÓN 2: Triángulo invertido</p>
    <hr><hr>
    <h2>A partir de aquí, cada párrafo es un ejercicio</h2>
    <p>Recibe una base entera entre 2 y 10, un exponente entero entre 0 y 10 y un límite entero positivo. Rechaza datos fuera de esos rangos. Calcula la potencia multiplicando paso a paso con while, pero detente antes de que la siguiente multiplicación supere el límite. Muestra valor alcanzado, multiplicaciones realizadas y si completaste el exponente. Para base 3, exponente 4 y límite 50: valor 27 y tres multiplicaciones. Para exponente 0, resultado 1 y cero multiplicaciones. No uses pow() ni **.</p>
    <p>Invierte un entero no negativo de hasta seis cifras usando operaciones numéricas. Muestra original, invertido y si es palíndromo. Además, calcula cuántos ceros finales del original se pierden al invertirlo. Para 1200: invertido 21 y dos ceros perdidos; para 1221: palíndromo y ninguno. Define el caso 0 como invertido 0, palíndromo y cero ceros perdidos.</p>
    <p>Recibe un entero de 0 a 999999. Suma sus cifras y repite el proceso con el resultado hasta obtener una sola cifra. Muestra cada suma y cuenta las transformaciones. Para 9875: 29, 11, 2; tres transformaciones. Si el número inicial ya tiene una cifra, no realices transformaciones. Resuélvelo con bucles; no uses fórmulas ni conviertas el número en cadena.</p>
    <p>Desde 200 hacia abajo busca el primer número divisible entre 7 pero no entre 5, sin bajar de un límite inferior configurable. Cuenta también el candidato que produce el éxito. número 196, cinco comprobaciones y distancia 4.  198 no hay coincidencia y se comprueban tres números.</p>
    <p>Recorre desde 1 hasta un máximo configurable. Selecciona los números divisibles entre 3 o entre 5, pero no entre ambos. Termina cuando hayas seleccionado diez o hayas agotado el intervalo. Muestra seleccionados, suma y número de candidatos examinados. Con máximo 100, el décimo seleccionado es 24 y se han examinado 24 candidatos. Con máximo 10, informa de que solo has encontrado cinco.</p>
    <p>Genera números entre 1 y 50 hasta conseguir tres consecutivos dentro de [20,30] o completar 20 intentos. Una salida del rango reinicia la racha. Muestra número, racha actual y mayor racha alcanzada; al final explica por qué termina. La condición del bucle debe controlar ambos motivos. Prueba con un valor fijo dentro del rango y con otro fuera. La mayor racha no debe perderse al reiniciar la actual.</p>
    <p>Genera entre 15 y 25 alumnos y notas enteras entre 1 y 20. Notas superiores a 10: «Nota no disponible», excluidas de las estadísticas. Para válidas: 1–4 suspenso (color de fondo de la fila en rojo), 5–6 aprobado(color de fondo de la fila en naranja), 7–8 notable (color de fondo de la fila en verde) y 9–10 sobresaliente(color de fondo de la fila en azul). Una fila por alumno. En el pie indica notas válidas e inválidas, media, mínima, máxima y porcentaje de aprobados sobre las válidas. Si no hay válidas, no calcules media ni porcentaje y muestra «Sin notas válidas» para los extremos. Prueba todas inválidas y todas aprobadas.</p>
    <p>Genera la tabla HTML de la versión con gastos del ejercicio de ahorro: una fila por semana y columnas semana, aportación, gasto y saldo. Añade una columna con lo que falta para la meta, sin mostrar cantidades negativas. En el pie muestra aportaciones totales, gastos totales y saldo final. Comprueba aportaciones menos gastos igual a saldo. Si la meta es 0, muestra «Meta alcanzada inicialmente» y totales cero.</p>
    <p>Con altura configurable de 1 a 10 dibuja filas de longitud 1, 2, ..., altura usando números consecutivos desde 1. Al final de cada fila muestra su suma; al final del dibujo, cantidad de números y suma total. Para altura 3: filas «1», «2 3», «4 5 6», con sumas 1, 5 y 15; cantidad 6 y total 21.</p>
    ><p>Genera bloques de cinco enteros de 1 a 20. Termina tras un bloque completo cuando el total supere 200 o hayas completado diez bloques. Muestra en una tabla los cinco valores realmente sumados, suma del bloque, media del bloque y total acumulado. Informa del motivo final; si se cumplen ambos límites a la vez, indica ambos. Prueba fijando todos los valores en 1: diez bloques y total 50; fijándolos en 20: tres bloques y total 300.</p>
    <p>Busca las cinco primeras parejas (p, p+2) en las que ambos sean primos, examinando p desde 2 hasta un máximo configurable. Haz una función esPrimo($n) que compruebe divisores con una condición que termine al encontrar uno; devuelve el resultado después del bucle. Recuerda que 0 y 1 no son primos. Con máximo 100: (3,5), (5,7), (11,13), (17,19), (29,31). Termina al completar cinco parejas o agotar el límite.</p>
    <p>Para cada entero de 2 a 100 calcula la suma de sus divisores positivos excluido él mismo. Clasifícalo como deficiente si la suma es menor, perfecto si es igual y abundante si es mayor. Muestra número, suma y clasificación, y el total de cada grupo. Comprueba que los tres contadores suman 99. Los perfectos del intervalo son 6 y 28.</p>
</body>
</html>