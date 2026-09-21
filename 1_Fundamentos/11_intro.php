<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola</h1>
    <!-- Parte estática de mi web -->
    <p>Esto es una intro de PHP</p>
    <p>Este texto es HTML puro, no tiene na de CSS ni JS ni PHP..</p>
    <p>
    <?php 
    $salto = "<br>";
    echo "hola";
    ?>
    </p>

    <?php
    echo "<p>hola</p>";
    
    echo date("d/m/Y H:i:s");
    
    echo "<br>";

    $lenguaje = "PHP";
    $ciclo = "DAW";

    echo "El lenguaje de backend que aprenderemos este año será ".$lenguaje.$salto;
    echo "El lenguaje de backend que aprenderemos este año será $lenguaje $salto";

    // $1var = 1; NO SE PUEDE EMPEZAR POR NÚMERO EL NOMBRE DE LAS VARIABLES
    $_1var = 1; // USAR BARRA ESTÁ ACEPTADO
    ?>
</body>
</html>