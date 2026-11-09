<form action="" method="post">
    <input type="hidden" name="ejercicios" value="ej1">
    <input type="text" name="bruto" id="">
    <input type="submit" value="CALCULAR NETO">
</form>
<?php

    // CREAR UN FORMULARIO CON UN SOLO CAMPO NUMÉRICO (MI SALARIO BRUTO)=> Cuando se envíe el formulario aparecerá un error si lo que me llega es un número negativo o una cadena y si se envía un valor numérico posivito, aparecerá una tabla debajo del formulario con una sola línea con las siguientes columnas: BRUTO || NETO || Impuesto total || Número de tramos

    // echo min(2, 10);
    // echo max(2, 10);

    // foreach($tramos as $tramo){
    //     list($minimo, $maximo, $porcentaje) = $tramo;
    //     echo "Rango minimo: $minimo | Rango máximo: $maximo | Porcentaje: $porcentaje <br>";

    // }
    // PARA 90K => 58599.86 (NETO)
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST["ejercicios"]) && $_POST["ejercicios"] == "ej1"){

    
    
    function irpf($bruto){
        $tramos = [
        [0, 12450, 0.19],
        [12450, 20200, 0.24],
        [20200, 35200, 0.30],
        [35200, 60000, 0.37],
        [60000, 300000, 0.45],
        [300000, INF, 0.47]
    ];

    $impuesto = 0;
    $numTramos = 0;

    foreach($tramos as $tramo){

        // [0, 12450, 0.19]
        //list($min, $max, $porcentaje) = $tramo;
        $min = $tramo[0];
        $max = $tramo[1];
        $porcentaje = $tramo[2];

        if($bruto > $min){ //para poder entrar a cualquier tramo, mi bruto tiene que superar el mínimo

        $base = min($bruto, $max) - $min;

        $impuesto += $base * $porcentaje;
        $numTramos++;
        }
    }
    ?>
    <table border="">
        <tr>
            <th>BRUTO</th>
            <th>NETO</th>
            <th>IMPUESTO TOTAL</th>
            <th>NUMERO TRAMOS</th>
        </tr>
        <tr>
            <td><?= $bruto ?></td>
            <td><?= ($bruto-$impuesto) ?></td>
            <td><?=  $impuesto ?></td>
            <td><?= $numTramos ?></td>
        </tr>
    </table>
    <?php
    }

    irpf(90000);

    //modificación: ahora la función devolverá un array bidimensional donde los arrays unidimensionales son asociativos y tienen dos claves; la primera clave llamada "tramo" guarda el número del tramo por el que vamos y la segunda clave llamada "impuesto" va recogiendo el total de impuestos acumulados en cada tramo. 
    function irpf2($bruto):array{
    return [];
    }

    }
    }
?>