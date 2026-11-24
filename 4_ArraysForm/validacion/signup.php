<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);
    ?>
    <style>
        .olee{
            color:lightblue;
        }
        .fallito{
            color:tomato;
        }
    </style>
</head>
<body>
    <?php
        $nombre = "";
        $email = "";
        $edadTexto = "";
        $errores = [];

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            // 1. Recoger y quitar espacios de los extremos
            $nombre = trim($_POST["nombre"] ?? "");
            $email = trim($_POST["correo"] ?? "");
            $edadTexto = trim($_POST["edad"] ?? "");

            // 2. Validar: cada error se añade al array, no se para en el primer error que se encuentre
            if($nombre == ""){
                $errores[] = "El nombre es obligatorio";
            }
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $errores[] = "El correo no es válido";
            }
            $edad = filter_var($edadTexto, FILTER_VALIDATE_INT);
            if($edad === false || $edad < 0 || $edad > 118){
                $errores[] = "La edad tiene que ser un número entero entre 0 y 118";
            }

            // 3. Mostar el resultado o la lista de errores
            if(count($errores) == 0){
                echo "<p class='olee'>Datos válidos: ".htmlspecialchars($nombre).", ".htmlspecialchars($email).", ".htmlspecialchars($edad)."</p>";
            }else{
                ?>
                <ul class="fallito">
                    <?php
                        foreach($errores as $error){
                            echo "<li>$error</li>";  
                        }
                    ?>
                </ul>
            <?php
            }
        }
    ?>
    <h2>Lista de errores y conservación de valores</h2>
    <ul>
        <li>Los errores se guardan en un array y se muestran todos juntos, en lugar de parar en el primero</li>
        <li>Si hay errores en el formulario, se conserva lo que se escribió anteriormente gracias al atributo value para que el cliente no tenga que volver a escribir todo</li>
    </ul>
    <form action="" method="post">
        <label for="nombre">Nombre: </label><input type="text" name="nombre" value="<?= htmlspecialchars($nombre) ?>"><br>
        <label for="correo">Email: </label><input type="text" name="correo" value="<?= htmlspecialchars($email) ?>"><br>
        <label for="edad">Edad: </label><input type="text" name="edad" value="<?= htmlspecialchars($edad ?? "") ?>"><br>
        <input type="submit" value="Valideichon">
    </form>
</body>
</html>