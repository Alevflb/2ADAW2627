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
            unset($libros[$i]);
        }
    }
    ?>
    </div>
</body>
</html>