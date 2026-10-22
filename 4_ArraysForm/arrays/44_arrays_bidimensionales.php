<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // un array bidimensional tiene como característica que cada elemento del array principal contiene otro array
    $videojuegos = [
        ["Silksong", "Metroidvania", 20], //0
        ["Elden Ring", "Souls", 60],    // 1
        ["Lego Batman", "Lego", 20],    // 2
        ["Cyberpunk", "RPG", 70]        // 3
    ];
    //echo $videojuegos[3][2];

    $videojuegos[] = ["DSIII", "Souls", 40];

    foreach($videojuegos as $videojuego){
        foreach($videojuego as $caracteristicas){
            echo $caracteristicas." ";
        }
        echo "<br>";
    }

    for($i = 0; $i<count($videojuegos); $i++){
        for($j = 0; $j<count($videojuegos[$i]); $j++){
            echo $videojuegos[$i][$j]." ";
        }
        echo "<br>";
    }

    foreach($videojuegos as $jueguito){
        list($titulo, $categoria, $precio) = $jueguito; //list() sirve para sacar los elementos de un array INDEXADO siempre y cuando conozcamos la estructura del array
        echo "<p>$titulo: $precio €</p>";
    }
    echo "<pre>"; print_r($videojuegos); echo "</pre>";
    $personas = [
        "Ana" => ["dni" => "12341234A", "edad" => 23],
        "Alberto" => ["dni" => "12341234C", "edad" => 29],
        "Samu" => ["dni" => "12341234Z", "edad" => 19]
    ];

    // Ana: dni->12341234A || edad->23
    $resultado = "";
    foreach($personas as $nombre => $informacion){
        $resultado.="<p>$nombre: ";
        $tam = 0;
        foreach($informacion as $clave => $valor){
            if($tam != count($informacion)-1){
                $resultado .= $clave."->".$valor." || ";
                $tam++;
            }else{
                $resultado .= $clave."->".$valor;
            }
                
            echo "</p>";
        }
    }
    echo $resultado;

    // Sacar en un array indexado la columna de las categorías del array videojuegos y en otro array, la columna de los precios 

    $categorias = [];
    $precios = [];

    for($i = 0; $i<count($videojuegos) ; $i++){
        list($nombre, $cat, $precio) = $videojuegos[$i];
        array_push($categorias, $cat);
        //$categorias[] = $cat;
        $precios[] = $precio;
    }
    print_r($categorias);
    echo "<br>";

    $categorias = array_column($videojuegos, 1);
    $precios = array_column($videojuegos, 2);

    echo "<pre>"; print_r($videojuegos); echo "</pre>";
    array_multisort($categorias, SORT_ASC,$precios, SORT_DESC, $videojuegos);
    echo "<pre>"; print_r($videojuegos); echo "</pre>";

    
    ?>
</body>
</html>