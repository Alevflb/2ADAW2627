<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $salto = "<br>";
        //1. ARRAY INDEXADO: claves numéricas automática desde 0
        $frutas = []; //creamos un array vacío
        $frutas = ["Manzana", "Pera", "Piña"]; //creamos un array con valores ya predefinidos
        echo $frutas[0].$salto;
        //echo $frutas; no podemos hacer un echo de un array entero
        echo "<pre>".print_r($frutas)."</pre>";

        echo "<pre>";
        print_r($frutas);
        echo "</pre>";

        var_dump($frutas);

        echo $frutas[9];

        //2. ARRAYS ASOCIATIVOS: son arrays cuya particularidad es que accedemos a los valores de dichos arrays a través de claves y no por posiciones
        $personas = ["2adaw"=>"Samu","2bdaw"=>"Menganito","2mkt"=>"Fulanita","2com"=>"Fulgencio"];
        echo $salto.$personas["2adaw"].$salto;

        //Como meter valores nuevos a mi array ya creado de antes
        $personas["2tresde"] = "Vini";
        echo "<pre>";
        print_r($personas);
        echo "</pre>";

        $personas[] = "Lamine";
        $personas[] = "Nico";
        $personas["2adaw"] = "Lamine";
        echo "<pre>";
        print_r($personas);
        echo "</pre>";

        //3. AÑADIR, MODIFICAR Y ELIMINAR ELEMENTOS DENTRO DE UN ARRAY
        print_r($frutas);
        $frutas[] = "Coco";
        $frutas[9] = "Platano";
        $frutas[] = "Banana";
        print_r($frutas);

        echo $salto;

        unset($frutas[0]); //CARGARME EL VALOR Y LA POSICIÓN DENTRO DE UN ARRAY
        print_r($frutas);
        //unset($frutas);
        //echo "$salto Mostrando abajo el array frutas$salto";
        //print_r($frutas);
        $frutas[1] = "Sandía";
        print_r($frutas);

        //count($array) => sirve para sacar el tamaño de un array
        echo "$salto Tamaño del array frutas: ".count($frutas)." Tamaño del array personas: ".count($personas).$salto;

        //array_values($array)
        echo "<pre>";
        print_r(array_values($frutas));
        echo "</pre>";
        $frutas = array_values($frutas); //ordenar el propio array frutas

        $personas = array_values($personas); //transoformar el array ASOCIATIVO personas a un array INDEXADO ordenador por posiciones
        echo "<pre>";
        print_r($personas);
        echo "</pre>";

        //4. COMPROBAR CLAVES
        $animales = ["mamifero" => "gato", "reptiles" => "serpiente", "aves" => "albatro", "peces" => "martillo"];
        // isset($variable) => si la función tiene algún valor distinto de nulo
        var_dump(isset($animales["anfibio"]));
        // array_key_exists(clave a probar, $array)=> si existe esa clave en el array
        var_dump(array_key_exists("mamifero",$animales));
        var_dump(array_key_exists("anfibio",$animales));

        // operador de fusión nulo => ?? sirve para comprobar si una variable tiene un valor distinto de nulo y, además, en el caso en el que dicha variable tenga valor nulo, se mostrará un valor alternativo
        echo $animales["anfibio"] ?? "no existe $salto";
        // echo (2<3) ? "hola" : "adios";
        $animales["anfibio"] = "rana";
        echo $animales["anfibio"] ?? "no existe $salto";

        echo $salto;
        //5. COMPARACIÓN
        $a = ["uno" => 1, "dos" => 2];
        $b = ["dos" => 2, "uno" => 1];

        var_dump($a == $b); //true: mismas asociaciones clave-valor
        var_dump($a === $b); //false: el orden de inserción de claves-valores es distinto
        echo $salto;
        $a = [1,2];
        $b = ["1","2"];
        var_dump($a == $b); //true: pq son los mismos valores
        var_dump($a === $b); //false: pq aunq tengan los mismos valores, tienen tipos distintos

        $p1 = ["Ana","Luis"];
        $p2 = ["Luis", "Ana"];
    ?>
</body>
</html>