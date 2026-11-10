<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        pre{
            background-color: grey;
        }
    </style>
</head>
<body>
    <h1>1. isset, empty, trim y htmlspecialchars</h1>
    <p>
        Antes de validar un formulario hay que tener claras tres ideas: cómo saber si un dato existe o está vacío, cómo limpiar los espacios de los extremos y cómo mostrar en la página un texto que ha escrito el usuario sin que lo interprete como HTML
    </p>
    <?php
    $valor = "0";
    var_dump(isset($valor)); // true: pq la variable ya existe
    var_dump(empty($valor)); // true: Cuidao! sale verdadero pq es un valor recogido dentro de la lista de "valores vacíos"
    unset($valor);
    var_dump(isset($valor)); 
    var_dump(empty($valor));
    ?>
    <table border="2">
        <tr>
            <th>Valor $x</th>
            <th>isset($x)</th>
            <th>empty($x)</th>
        </tr>
        <?php
        $pruebita = [
            ["null", null, false],
            ['"" (cadena vacía)', "", false],
            ['"0" (cadena con un cero)', "0", true],
            ["0", 0, true],
            ["false", false, false],
            ["[] (array vacío)", [], false],
            ['" " (un espacio en blanco)', " ", true],
            ['"0.0"', "0.0", false],
            ['"hola"', "hola", false]
        ];
        foreach($pruebita as $prueba){
            $x = $prueba[1];
            echo "<tr>";
            echo "<td>". $prueba[0] . "</td>";
            echo "<td>". (isset($x) ? "true" : "false") . "</td>";
            echo "<td>". (empty($x) ? "true" : "false") . "</td>";
            echo "</tr>";
        }
        ?>
        <tr>
            <td>Variable no definida</td>
            <td>false</td>
            <td>true</td>
        </tr>
    </table>
    <form action="" method="get">
        <input type="text" name="nombre" id="">
        <input type="submit" value="ENVIAR">
    </form>
    
    <?php
    $nombre = $_GET["nombre"];
    $nombre = trim($nombre);

   // echo "<pre>". $_GET["nombre"]."</pre>";
   // echo "<pre>". $nombre."</pre>";
    $nombre = htmlspecialchars($nombre);
    echo "<pre>". $nombre."</pre>";
    // <script>alert('Holiiii');</script> document.body.innerHTML = "<h1>Sitio Jakiado</h1></script>"; <b onmouseover=alert('Hooooliiiiii')>Acercate bebito...</b>
    ?>
    
</body>
</html>