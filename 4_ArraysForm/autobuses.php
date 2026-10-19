<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Subapartado 1</h2>
    <p>Dado los datos que aparecen en la pizarra, crear un array bidimensional indexado con los datos de todos los viajes que tiene mi empresa de autobuses. Añadir dos viajes más en el que el primer viaje tenga como destino "Torremolinos" y el segundo viaje tenga como origen "Málaga"</p>
    <?php
        $autobuses = [
            ["Málaga", "Ronda", 100, 15],
            ["Churriana", "Málaga", 20, 3],
            ["Málaga", "Granada", 90, 12],
            ["Torremolinos", "Málaga", 30, 3.5]
        ];

        $autobuses[] = ["Benalmádena", "Torremolinos", 10, 2.5];
        array_push($autobuses, ["Málaga", "Velez", 35, 6]);


    ?>
    <h2>Subapartado 2</h2>
    <p>Manteniendo el orden original de mi array, enseña en el navegador gracias a la funcion print_r el array ordenado por duración de más largo a más corto</p>
    <?php
    $copia = $autobuses;

    $duracion = array_column($copia, 2);
    array_multisort($duracion, SORT_DESC, $copia);

    echo "<pre>";print_r($copia);echo "</pre>";
    ?>

    <h2>Subapartdo 3</h2>
    <p>Gracias a una función llamada tabla() crea una tabla con la siguiente estructura:</p>
    <!-- <table border="">
        <thead>
            <tr>
                <th>Origen</th>
                <th>Destino</th>
                <th>Duración</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            ...
        </tbody>
    </table> -->
    <p>
        Si el precio del viaje es menor o igual a cero, se mostrará "Viaje no disponible". <br>
        Si el precio está comprendido desde 1 (inclusive) hasta 10 sin incluir, se coloreará la fila entera de color azul. <br>
        Si el precio está comprendido desde 10 (inclusive) hasta 15 sin incluir, se coloreará la fila entera de color verde. <br>
        Si el precio es mayor o igual a 15, se coloreará de morado.
    </p>

    <?php
        function tabla(int $col, $orden){
            global $autobuses;

            $col = array_column($autobuses, $col);
            array_multisort($col, $orden , $autobuses)
            ?>
    <table border="">
        <thead>
            <tr>
                <th>Origen</th>
                <th>Destino</th>
                <th>Duración</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
        <?php
            for($i = 0; $i<count($autobuses); $i++){
                $precio = $autobuses[$i][3];
                $frase = "";
                switch(true){
                    case $precio <= 0:
                        $color = "red";
                        $frase .= "No disponible";
                        break;
                    case $precio>=1 && $precio<10:
                        $color = "lightblue";
                        break;
                    case $precio>=10 && $precio<15:
                        $color = "yellowgreen";
                        break;
                    default:
                        $color = "purple";

                }
                echo "<tr style='background-color:$color'>";

                for($j = 0; $j<count($autobuses[$i]); $j++){
                    // if($precio <= 0){
                    //     echo "<td>$frase</td>";
                    // }else{
                    //     echo "<td>".$autobuses[$i][$j]."</td>";
                    // }
                    
                    echo ($precio <= 0) ? "<td>$frase</td>" :  "<td>".$autobuses[$i][$j]."</td>";

                   // $variable = "echo 'hola'";
                }
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
    <?php
        }
        tabla(0, SORT_ASC);
    ?>
    <h2>Subapartado 4</h2>
    <p>Modifica la función tabla para que sea capaz de recibir dos parámetros. Uno que indique la columna (en formato entero) y otro que indique el tipo de ordenación. tabla(0,SORT_DESC); La función ahora deberá de mostrar la tabla pero con los datos del array ordenados según la columna y el tipo de ordenación</p>
    <h2>Subapartado 5</h2>
    <p>
        Modifica la tabla de la función para que contenga una columna más llamada tipo. Que dependiendo de la duración de cada viaje, contendrá una cadena u otra.
    </p>
    <ul>
        <li>Duración <= 30 --- Corta distancia</li>
        <li>Duración > 30 && <= 120 -- Media distancia</li>
        <li>Duracion > 120 -- Larga distancia</li>
    </ul>
</body>
</html>