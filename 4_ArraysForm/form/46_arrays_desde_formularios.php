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
    <form action="" method="post">
        <input type="hidden" name="formularios" value="ej1">
        <fieldset>
            <legend>Notitas</legend>
            <label for="">Nota 1:</label>
            <input type="number" name="nota[]" required>
            <label for="">Nota 2:</label>
            <input type="number" name="nota[]" required>
            <label for="">Nota 3:</label>
            <input type="number" name="nota[]" required>
        </fieldset>
        <fieldset>
            <legend>Intereses para el próximo curso</legend>
            <label>PHP</label>
            <input type="checkbox" name="intereses[]" value="php">
            <label>JS</label>
            <input type="checkbox" name="intereses[]" value="js">
        </fieldset>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){ //entro si y solo si se ha enviado datos a través de un formulario con el método POST
            if(isset($_POST["formularios"]) && $_POST["formularios"] == "ej1"){ //entro si y solo si se ha rellenado los datos del formulario de las notas

            print_r($_POST["nota"]);
            print_r($_POST["intereses"]);

            }
        }
    ?>
</body>
</html>