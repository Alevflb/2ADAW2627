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
    if($_SERVER["REQUEST_METHOD"] === "POST"){ // aqui dentro va a estar la solución de los dos ejercicios
        if(isset($_POST["ejercicios"]) && $_POST["ejercicios"] == "ej1"){ // aqui va la solución del ejericcio 1
            $peliculas = [
                "inception" => [
                    "titulo" => "Inception",
                    "genero" => "Ciencia Ficción",
                    "precio_dia" => 3.50
                ],
                "parasite" => [
                    "titulo" => "Parasite",
                    "genero" => "Thriller",
                    "precio_dia" => 3.00
                ],
                "interstellar" => [
                    "titulo" => "Interstellar",
                    "genero" => "Ciencia Ficción",
                    "precio_dia" => 3.50
                ],
                "joker" => [
                    "titulo" => "Joker",
                    "genero" => "Drama",
                    "precio_dia" => 2.50
                ],
                "avengers" => [
                    "titulo" => "Avengers: Endgame",
                    "genero" => "Acción",
                    "precio_dia" => 4.00
                ]
            ];
            //$alquiler = $peliculas;
            $alquiler = [];
            $total_general = 0;
            $hayAlgo = false;
            //$dias_inception = $_POST["inception"];
            foreach($peliculas as $clave => $pelicula){
                // echo $clave;
                $dias = $_POST[$clave];
                if(is_numeric($dias) && $dias > 0){
                    $hayAlgo = true;
                    $alquiler[$clave] = [
                        "titulo" => $pelicula["titulo"],
                        "genero" => $pelicula["genero"],
                        "precio_dia" => $pelicula["precio_dia"],
                        "dias" => $dias,
                        "subtotal" => $dias*$pelicula["precio_dia"]
                    ];
                    $total_general+= $dias*$pelicula["precio_dia"];
                    //$pelicula[$clave]["total_precio_dia"] = calculo;
                }
            }
            if($hayAlgo){
        ?>
        <table border="3">
            <tr>
                <th>Peli</th>
                <th>Genero</th>
                <th>Precio x Día</th>
                <th>Días</th>
                <th>Subtotal</th>
            </tr>
            <?php
                foreach($alquiler as $peli){
            ?>
            <tr>
                <td><?= $peli["titulo"] ?></td>
                <td><?= $peli["genero"] ?></td>
                <td><?= $peli["precio_dia"] ?></td>
                <td><?= $peli["dias"] ?></td>
                <td><?= $peli["subtotal"] ?></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="4"><b>TOTAL A PAGAR</b></td>
                <td><?= $total_general. " €" ?></td>
            </tr>
        </table>
        <?php
            }else{
                echo "no ma llegao na :(";
            }
        }

        if(isset($_POST["ejercicios"]) && $_POST["ejercicios"] == "ej2"){
            $alumnos = [
                ["nombre" => "Lucia",  "grupo" => "DAW", "nota" => 8.5,  "faltas" => 2],
                ["nombre" => "Marcos", "grupo" => "DAM", "nota" => 6,    "faltas" => 5],
                ["nombre" => "Andrea", "grupo" => "DAW", "nota" => 9.2,  "faltas" => 0],
                ["nombre" => "Pablo",  "grupo" => "DAM", "nota" => 4.5,  "faltas" => 12],
                ["nombre" => "Carmen", "grupo" => "DAW", "nota" => 6,    "faltas" => 3],
                ["nombre" => "Hugo",   "grupo" => "DAM", "nota" => 8.5,  "faltas" => 1],
                ["nombre" => "Sara",   "grupo" => "DAW", "nota" => 3.8,  "faltas" => 14],
                ["nombre" => "Diego",  "grupo" => "DAM", "nota" => 7.25, "faltas" => 4],
                ["nombre" => "Alba",   "grupo" => "DAW", "nota" => 8.5,  "faltas" => 1],
                ["nombre" => "Bruno",  "grupo" => "DAM", "nota" => 6,    "faltas" => 7]
            ];
            $listado = [];
            //$filtro = $_POST["filtro"] ?? "todos";
            $filtro = $_POST["filtro"];

            if($filtro != "todos" && $filtro != "daw" && $filtro != "dam"){
                echo "<p style='color:red'>Filtro mal hecho sinverwensa</p>";
            }
            //echo $filtro;
            foreach($alumnos as $alumnito){
                if($filtro == "todos" || $filtro == $alumnito["grupo"]){
                    $listado[] = $alumnito;
                }
            }

            $col_nota = array_column($listado, "nota");
            $col_nombre = array_column($listado, "nombre");
            array_multisort($col_nota, SORT_DESC, $col_nombre, SORT_ASC, $listado);

            // faltaría hacer la tabla con la media, nota más alta, posición.. etc
        }
    }
    ?>
</body>
</html>