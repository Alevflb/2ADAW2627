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
    <p>Sin convertirlo en cadena ni array, recorre las cifras de un número entero entre 0 y 999999 generado de manera aleatoria. Calcula la cantidad de cifras que tiene el número, la suma de sus cifras, la cifra mayor, la menor y el número de ceros que contiene. Devolver una cadena como la siguiente: "Para 4050: cuatro cifras, suma 9, mayor 5, menor 0, 2 ceros" Corrige Samu CORREGIDO</p>
    <h3>Ejercicio 10</h3>
    <p>VERSIÓN 1: Crea una función que dependiendo del parámetro que se le pase, dibujará un triángulo más o menos grande. El parámetro indicará el tamaño del triángulo. Altura mínima 3 (obligatorio)Corrige Ale CORREGIDO</p>
    <p>VERSIÓN 2: Triángulo invertido Corrige RafaC CORREGIDO</p>
    <h3>Ejercicio 11</h3>
    <p>
        EL DE TABLA CON CUADRADO CUBO.. 
    </p>
<?php
    function tablita(int $n){
    ?>
    <table border="">
        <thead>
            <tr>
                <th>Numero</th>
                <th>Cuadrado</th>
                <th>Cubo</th>
                <th>Signo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $color = 1;
            for($i=$n;$i>=-$n;$i--){
                if($i!=0){
            ?>
            <tr 
            <?php
                if($color%2!=0) echo "style='background-color:lightblue'";
                else echo "style='background-color:pink'"; 
                $color++;
            ?>
            >
                <td><?php echo $i; ?></td>
                <td><?=  pow($i,2); ?></td>
                <td><?=  pow($i,3); ?></td>
                <td>
                    <?php
                        // if($i>0) echo "Positivo";
                        // else echo "Negativo";

                        echo ($i>0) ? "Positivo" : "Negativo";
                    ?>
                </td>
            </tr>
            <?php 
            }   
            }
            ?>
        </tbody>
    </table>
    <?php
    }
    tablita(4);
    ?>
</body>
</html>