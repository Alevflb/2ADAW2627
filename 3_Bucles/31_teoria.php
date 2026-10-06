<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bucles</h1>
    <p>Un bucle repite un bloque de código tantas veces como nosotros queramos, el número de iteraciones dependerá de la condición que definamos y cómo interactúa dicha condición con la variable booleana o iterativa</p>
    <?php
    //1. WHILE
    $numero = 5;
    while($numero <= 12){
        echo "El valor de numero es: $numero<br>";
        $numero+=2;
    }
    echo $numero."<br>";

    //2. DO-WHILE
    //partiendo del número 9 hacia abajo (hasta llegar al cero sin incluir), mostrar por navegador en una línea para cada uno todos los número pares
    $n = 9;
    if($n%2 != 0) $n--;
    do{
        echo "$n es par<br>";
        $n-=2;
    }while($n>0);

    //3. FOR
    for($i = 0; $i<=10; $i++){
        echo "<p id='parrafo$i'>Estamos en el párrafo número $i</p>";
    }

    //4. BUCLES ANIDADOS

    for ($i=0; $i < 4; $i++) { 
        for ($j=0; $j < 4; $j++) { 
            echo "[$i,$j]";
        }
        echo "<br>";
    }

    //5. FOREACH
    // sirve para iterar los elementos de un array tanto asociativo como indexado
    $nombres = ["12312323A" => "Ana","12312323B" => "Luis","12312323C" => "Marta","12312323D"=> "Paquito","12312323E" => "Emilio"];
    foreach($nombres as $patata){
        echo $patata."<br>";
    }

    $deportes = ["baloncesto"=>"lebron", "futbol"=>"Messi/CR7", "tenis"=>"federer", "MMA"=>"nurmagomedov"];

    foreach($deportes as $clave => $valor){
        if($clave != "MMA")
            echo "<p>En el $clave el rey es $valor</p>";
        else 
            echo "<p>En la $clave el rey es $valor</p>";
    }

    //6. GENERAR HTML CON UN BUCLE
    echo "<h2>Generar una lista HTML con un bucle</h2>";
    echo $numero = 1;
    ?>
    <ul>
        <?php 
            while($numero<=10){
        ?>
        <li>Mi número es el <?php echo $numero ?></li>
        <?php
            $numero ++;
            }
        ?>
    </ul>
</body>
</html>