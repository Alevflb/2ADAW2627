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
</head>
<body>
<?php
/**
 * Nombre: obligatorio, mas de 3 caracteres y menos de 40
 * Correo: obligatorio, formato correo
 * Edad: obligatorio, formato entero, mayor a 18, menor a 80
 * 
 * Taller: lista desplegable creando una whitelist (extra: guardar la opción anterior del cliente trabajando con el atributo selected) (PHP desde cero // JS para principiantes // El maravillo y fabuloso mundo de github)
 * Turno: (Mañana/Tarde) Lo mismo que taller pero con radios
 * 
 * Condiciones: obligatorio que esté marcado y guardar el marcado en el caso que el cliente lo haya marcado anteriormente
 */


    $tmp_nombre = "";
    $tmp_correo = "";
    $tmp_edad = "";
    $talleres = ["php", "js", "git"];
    $turnos = ["maniana", "tarde"];
    $tmp_taller = "";
    $tmp_turno = "";


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tmp_nombre = trim($_POST["nombre"] ?? "");
        $tmp_correo = trim($_POST["correo"] ?? "");
        $tmp_edad = trim($_POST["edad"] ?? "");

        $tmp_taller = $_POST["taller"] ?? "";
        $tmp_turno = $_POST["turno"] ?? "";

        $acepta = isset($_POST["condiciones"]);

        if($tmp_nombre == ""){
            $err_nombre = "Rellena guarro";
        }else{
            $nombre = $tmp_nombre;
        }

        if($tmp_correo == "" || filter_var($tmp_correo, FILTER_VALIDATE_EMAIL) === false){
            $err_correo = "Liada del correo";
        }else{
            $correo = $tmp_correo;
        }

        if($tmp_taller == "" || !in_array($tmp_taller, $talleres)){
            $err_taller = "Liadon histórico (taller)";
        }else{
            $taller = $tmp_taller;
        }

        if($tmp_turno == "" || !in_array($tmp_turno, $turnos)){
            $err_turno = "Liadon histórico (turnos)";
        }else{
            $turno = $tmp_turno;
        }

    }
?>

    <form action="" method="post">
        <input type="text" name="nombre" id="" value="<?= htmlspecialchars($tmp_nombre) ?>">
        <?php
        if(isset($err_nombre)) echo $err_nombre;
        ?>
        <br>
        <input type="text" name="correo" id="" value="<?= htmlspecialchars($tmp_correo) ?>"><br>
        <input type="text" name="edad" id="" value="<?= htmlspecialchars($tmp_edad) ?>"><br>
        <select name="taller" id="">
            <option>--Elige un taller--</option>
            <option value="php" <?= ($tmp_taller == "php") ? "selected" : "" ?>>php</option>
            <option value="js" <?= ($tmp_taller == "js") ? "selected" : "" ?>>js</option>
            <option value="git" <?= ($tmp_taller == "git") ? "selected" : "" ?>>git</option>
        </select>
        <fieldset>
            <legend>Turnitooooooooos</legend>
            <input type="radio" name="turno" value="maniana">Mañana <br>
            <input type="radio" name="turno" value="tarde">Tarde<br>
        </fieldset>
        <input type="checkbox" name="condiciones" id=""> Acepta condiciones (ni te lo has leido socio)
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>