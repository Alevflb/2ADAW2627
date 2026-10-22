<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Ejercicio 1</h3>
    <p>
        La biblioteca del insti tiene los siguientes libros: "El quijote", "1984", "Dune" y "Matilda"
    </p>
    <ol>
        <li>Crea la función "unirConComas($array)", que devuelva un texto con todos los valores separados por coma (sin coma al final). La usarás en el resto de ejercicios</li>
        <li>Añade "Momo", "Drácula" y "El perfume" al final de la biblioteca</li>
        <li>Se piden prestados Dune y Hamlet. Para cada petición, busca la posición del libro y si está, crea un array nuevo sin ese libro, de modo que no queden huecos y muestra lo siguiente: "Prestado: Dune" Y en caso de que el libro no lo tenga la biblioteca, "No disponible: Hamlet"</li>
        <li>Muestra la lista numerada (1. El Quijote, 2. 1984...), el total de libros y, en una sola línea, los libros en orden inverso (alfabéticamente)</li>
    </ol>
    <div style="background-color: lightcyan;">
    <?php
    function unirConComas($array):string{
        $texto = "";
        $primero = true;
        foreach($array as $valor){
            if(!$primero) $texto .= ", ";
            $texto .= $valor;
            $primero = false;
        }
        return $texto;
    }
    //echo unirConComas(["ale","pepe","juanito"]);

    $libros = ["El Quijote", "1984", "Dune", "Matilda"];

    array_push($libros, "Momo", "Drácula", "Frankestein"); //Forma 1
    // $libros[] = "Momo"; //Forma 2
    $peticiones = ["Dune", "Hamlet"];
    foreach($peticiones as $titulo){
        $encontrado = false;
        $posicion = -1;
        $i = 0;

        while($i < count($libros) && !$encontrado){ //en el caso en el q el libro esté en la biblio, saco su posición
            if($libros[$i] == $titulo){
                $encontrado = true;
                $posicion = $i;
            }
            $i++;
        }

        if($posicion != -1){
            echo "Prestado: ".$libros[$i];
            unset($libros[$posicion]);
        }else{
            echo "No disponible: $titulo";
        }
    }
    $libros = array_values($libros); // se usa cuando necesitamos resetear las posiciones del array (ya sea pq hay alguna posición que nos la hemos cargado o porque queremos pasar de un array asociativo a uno indexado)
    echo "<ol>";
    foreach($libros as $libro){
        echo "<li>$libro</li>";
    }
    echo "</ol>";
    //echo "<pre>"; print_r($libros); echo "</pre>";

    $total = count($libros);
    echo "<h3>Total de libros de mi biblioteca: $total</h3>";

    rsort($libros);
    echo unirConComas($libros)."<br>";
    ?>
    </div>

    <h3>Ejercicio 2</h3>
    <p>Una tienda informática guarda su stock en un array asociativo con la siguiente forma producto -> unidades:</p>
    <ol>
        <li>Crear un stock original en el que tengamos 12 teclados, cero ratones, 5 monitores, 3 webcams y 0 altavoces</li>
        <li>Crear una función "estadoStock(unidades)" que devuelva "Agotado" (0), "Pocas unidades" (1 a 3) o "Disponible" (más de 3). </li>
        <li>Crear una tabla inicial con tres columnas. La primera contendrá el nombre del producto, la segunda el número de unidades disponibles y el tercero el resultado de la función estadoStock. Además, si no quedan unidades, la fila tendrá el color de fondo rojo. Si quedan pocas, amarillo y si está disponible, azul.</li>
        <li>Llega un pedido de reposición: raton 10, webcam 2, micrófono 7. Suma las unidades a los productos existentes. Si el producto no existía antes, añádelo e indica en un echo "nuevo producto: Mircrófono"</li>
        <li>FALTA EL SUBAPARTADO DE COMPRAR PRODUCTOS LLAMANDO A LA FUNCIÓN COMPRAR</li>
        <li>Mostrar en la función de la tabla (si lo teneis hecho en una función y sino, creais la función), nada más terminar de crear la tabla entera, mostrar debajo el total de unidades de productos que tengo en mi tienda, el producto con más unidades.</li>
    </ol>

    <?php
    // $stock = [];
    // $stock["teclado"] = 12;

    $stock = ["teclado" => 12, "raton" => 0, "monitor" => 5, "webcam" => 3, "altavoz" => 0];

    function estadoStock($unidades){
        return match($unidades){
            0 => "Agotado",
            1,2,3 => "Pocas unidades",
            default => "Disponible"
        };
    }
    function mostrar($stock){
    ?>
    <table border="">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Unidades</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($stock as $nombre => $unidades){
                $color = match($unidades){
                    0 => "red",
                    1,2,3 => "yellow",
                    default => "lightblue"
                };
            ?>
            <tr style="background-color: <?php echo $color ?>;">
                <td><?php echo $nombre ?></td>
                <td><?php echo $unidades ?></td>
                <td><?php echo estadoStock($unidades) ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    }

    mostrar($stock);

    $reposicion = ["raton" => 10, "webcam" => 2, "microfono" => 7];
    function reponer($stock, $reposicion): array{
        foreach ($reposicion as $productoR => $undR) {
            // foreach ($stock as $productoS => $undS) {
            //     if($productoR == $productoS){           // si la clave de los dos arrays son la misma, significa que el producto ya estaba en mi stock, asiq lo q hago es añadirle a las unidades que ya había en el stock las que tenemos en la reposicion
            //         $stock[$productoR] = $undR + $undS;
            //     }else{
            //         $stock[$productoR] = $undR;
            //         echo "<p>Nuevo producto: $productoR</p>";
            //     }
            // }
            if(array_key_exists($productoR, $stock)){
                $stock[$productoR] += $undR;
            }else{
                $stock[$productoR] = $undR;
                echo "<p>Nuevo producto: $productoR</p>"; 
            }
        }

        return $stock;
    }

    $copia = reponer($stock, $reposicion);

    echo "<pre>"; print_r($copia); echo "</pre>";
    ?>

</body>
</html>