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
    <p>Por ejemplo: conjunto 1: 1,2,3,7 conjunto 2: 4,9,5,1 Unión: 1,2,3,4,7,9,5,1 Intersección: 1 Conjunto 1 - Conjunto 2: 2,3,7 Conjunto 2 - Conjunto 1: 4,9,5</p>
</body>
</html>