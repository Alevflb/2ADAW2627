<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    ini_set("display_errors",1);
    error_reporting(E_ALL);
    ?>
</head>
<body>
    <?php
    ?>
    <h3>Ejercicio 1</h3>
    <p>Crea un formulario que contenga dos campos de texto; el primero recogerá una serie de número separados por comas y el segundo recogerá el orden en el que se mostrará dicha cadena. Usar el método post en el formulario. Usar explode e implode para este ejercicio. NO USAR ARRAY_MULTISORT()</p>
    <form action="" method="post">
        <input type="hidden" name="formularios" value="ej1">
        <input type="text" name="numeros" id="">
        <input type="text" name="orden" id="">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["formularios"]) && $_POST["formularios"] == "ej1"){
            $numeros = $_POST["numeros"];
            $orden = $_POST["orden"];

            $arr = [];
            for($i = 0; $i<strlen($numeros); $i++){
                $numeroActual = "";
                while($numeros[$i] != "," && $i < strlen($numeros)){
                    $numeroActual .= $numeros[$i];
                    $i++;
                }
                $arr[] = $numeroActual;
            }
            print_r($arr);

            //$cadena = "";
            switch($orden){
                case "asc":
                    sort($arr);
                    break;
                case "desc":
                    rsort($arr);
                    break;
            }
            echo "<p>";
            for($i = 0; $i<count($arr); $i++){
                if($i<count($arr)-1) echo $arr[$i].",";
                else echo $arr[$i];
            }
            echo "</p>";
        }
    }
    ?>
    <h3>Ejercicio 2</h3>
    <p>Crear un formulario POST con un campo de texto que recoja el nombre de una fruta. Internamente crear un array de frutas. El objetivo de este formulario es ver si la fruta introducida en el formulario está en nuestro array creado anteriormente.</p>
    <form action="" method="post">
        <input type="hidden" name="formularios" value="ej2">
        <input type="text" name="fruta" id="">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["formularios"]) && $_POST["formularios"] == "ej2"){    
            
        $fruta = $_POST["fruta"];
        $frutas = ["pera", "sandia", "melocoton", "mandarina", "uva", "melon", "uva"];
        
        $solucion = array_search($fruta, $frutas);
        
        //$solcion = "echo hola";
        echo ($solucion > -1) ? "La $fruta sa encontrao en la posición $solucion" : "La $fruta no sa encontrao :(((( " ;

        }
    }
    ?>  
    <h3>Ejercicio conjuntos (ENTREGAR)</h3>
    <p>Crea un formulario con dos campos de texto en el que introducirás los elementos de dos conjuntos separados por una coma. Hacer la operación de unión, intersección y las dos diferencias y mostrar cada resultado en formato cadena</p>
    <p>Por ejemplo: conjunto 1: 1,2,3,7,1 conjunto 2: 4,9,5,1 Unión: 1,2,3,4,7,9,5,1 Intersección: 1 Conjunto 1 - Conjunto 2: 2,3,7 Conjunto 2 - Conjunto 1: 4,9,5</p>
    <form action="" method="post">
        <input type="hidden" name="formularios" value="ej3">
        <input type="text" name="A">
        <input type="text" name="B">
        <input type="submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["formularios"]) && $_POST["formularios"] == "ej3"){
            //recojo las dos cadenas
            $a = $_POST["A"];
            $b = $_POST["B"];
            //paso las cadenas a arrays para poder manejar los elementos de cada conjunto
            $a = explode(",",$a);
            $b = explode(",", $b);
            //print_r($a);
            //elimino los elementos repetidos de cada conjunto
            $a = array_unique($a);
            $a = array_values($a);

            $b = array_unique($b);
            $b = array_values($b);
            //print_r($a);

            // UNIÓN
            $union = $a;

            for($i = 0; $i<count($b); $i++){
                $candidato = $b[$i];
                $repetido = false;
                for($j = 0; $j<count($union); $j++){
                    if($candidato == $union[$j]) $repetido = true;
                }
                if(!$repetido) $union[] = $candidato; 
            }

            //INTERSECCIÓN
            function interseccion(array $a, array $b):array{
            $inter = [];
            for($i = 0; $i<count($b); $i++){
                for($j = 0; $j<count($a); $j++){
                    if($b[$i] == $a[$j]) $inter[] = $b[$i];
                }
            }
            return $inter;
            }
            //print_r($inter);

            //DIFERENCIAS
            function diferencia(array $a, array $b):array{
                $solucion = [];    
                $interseccion = interseccion($a,$b); // tengo los elementos comunes de los dos conjuntos
                for($i = 0; $i<count($a); $i++){
                    $esta = false;
                    for($j = 0; $j<count($interseccion); $j++){
                        //$a[$i] == $inter[$j] $esta = true
                        if($a[$i] == $interseccion[$j]) $esta = true;
                    }
                    if(!$esta) $solucion[] = $a[$i];
                }
                return $solucion;
            }
            print_r(diferencia($a,$b));
            print_r(diferencia($b,$a));
        }
    }
    ?>
    <h3>Ejercicio 4</h3>
    <p>Introduce las notas de varias asignaturas de un solo estudiante y obtén las siguientes estadísticas: Total de notas // Nota máxima // Nota mínima // Media aritmética // El número de aprobados // el número de suspensos</p>
    <p>En el formulario tendremos dos campos de texto, en el primero definiremos el nombre de las asignaturas separadas por comas y en el segundo las notas de cada asignatura separadas por coma. Para trabajar este ejercicio, teneis que construir un array asociativo donde las claves son el nombre de cada asignatura y el valor es la nota de dicha asignatura. Después de mostrar todas las estadísticas, mostrar una tabla con tres columnas. Asignatura || Nota || Calificación. Mostrar la fila en verde si esta aprobao y en rojo si ha suspendido la asignatura</p>

    <h3>Ejercicio 5</h3>
    <p>Dado un array bidimensional, crear un formulario con dos listas deslpegables en el que en la primera lista se especifique a través de qué columna vamos a ordenar y la segunda especificará el orden que se aplicará</p>
    <form action="tabla.php" method="post">
        <input type="hidden" name="ejercicios" value="ej5">
        <select name="columna">
                    <option disabled selected>ELIGE COLUMNA</option>
                    <option value="id">ID</option>
                    <option value="nombre">NOMBRE</option>
                    <option value="salario">Salario</option>
        </select>
        <select name="orden">
                    <option disabled selected>ELIGE ORDEN</option>
                    <option value="asc">ASCEDENTE</option>
                    <option value="desc">DESCENDENTE</option>      
        </select>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>