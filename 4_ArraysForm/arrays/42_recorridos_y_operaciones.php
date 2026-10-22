<?php

    $notas = ["Ana" => 7, "Leo" => 9, "Samu" => 3, "Alba" => 10];

    // modificar el array usando su clave
    foreach($notas as $nombre => $nota){
        $notas[$nombre] = $nota-1;
    }

    echo "<pre>";
    print_r($notas);
    echo "</pre>";

    $notas = [4,6,1,10,9,9];
    // foreach($notas as $pos => $valor){
    //     echo "posicion: $pos nota: $valor<br>";
    // }

    for($i = 0; $i<count($notas); $i++){
        echo "posicion: $i nota:".$notas[$i]."<br>";
    }

    //FUNCIONES PARA TRABAJAR CON ARRAYS
    /**
     * sort() rsort() asort() arsort() ksort() krsort()
    */
    $notas = ["Ana" => 7, "Leo" => 9, "Samu" => 3, "Alba" => 10];
    
    // sort() => convierte el array a un array indexado y ordena de menor a mayor
    $copia = $notas;
    sort($copia);
    echo "<pre>sort:";
    print_r($copia);
    echo "</pre>";

    // rsort() => convierte el array a un arrray indexado y ordena de mayor a menor
    $copia = $notas;
    rsort($copia);
    echo "<pre>rsort:";
    print_r($copia);
    echo "</pre>";

    // asort() => ordena por valores de menor a mayor RESPETANDO LAS CLAVES
    $copia = $notas;
    asort($copia);
    echo "<pre>asort:";
    print_r($copia);
    echo "</pre>";

    // haced vosotros el arsort() :D

    //probad también el ksort() y krsort() y decidme que hacen


    $numeros = [10, 10, 20, 30, 20, 10, 10];
    if(in_array(10,$numeros)){                  //in_array(numeroquebuscamos, array) devuelve un booleano especificando si el número que hemos metido como parámetro se ha encontrado dentro del array o no
        echo "El nueve sa encontrao<br>";
    }else{
        echo "El nueve no sa encontrao<br>";
    }

    $posicion = array_search(10,$numeros);      //array_search(numeroquebuscamos, array) devuelve la posición del número encontrado dentro del array. Si se repite el número, devolverá la primera vez que se encuentre
    echo $posicion;

    $trozo = array_slice($numeros, 3, 2);       //array_slice(array, dondeempiezo, cuantoscojo) devuelve un array tomando como referencia el array pasado como parámetro empezando en la posición "dondeempiezo" y añado "cuantoscojo" elementos del array original
    print_r($trozo);

    $patata = array_values(array_unique($numeros));
    echo "<br>";
    print_r($patata);

    // explode(separador, cadena) => devuelve un array a partir de una cadena, usando como separador para crear cada elemento del array el pasado como parámetro
    
    $palabras = explode(",", "manzana,pera,lichi,tomate,donen sangre,como os desangreis y no hayais donado os acordareis sinverguenzas, #yoDono");

    print_r($palabras);

    //implode(separador, array) devuelve una cadena a partir de los elementos del array separados por el separador
    $cadena = implode(" || ", $palabras);
    echo "<br>".$cadena;
?>