<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);
    require "calculos.php";
    ?>
    <style>
        .error{
            color:red;
        }
        .ole{
            color:green;
        }
    </style>
</head>
<body>
    <h2>Calculeitor con IVA</h2>
    <?php
    $tmp_precio = "";
    $tmp_iva = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // 1. Recogida de datos en variables temporales
        $tmp_precio = trim($_POST["precio"] ?? "");
        
        //OPCION 1:
        // if(isset($_POST["iva"])) $tmp_iva = $_POST["iva"];
        // else $tmp_iva = "";

        //OPCION 2:
        $tmp_iva = $_POST["iva"] ?? "";

        // 2. VALIDACIÓN DEL PRECIO
        if($tmp_precio == ""){
            //Nivel 1: Comprobar que no esté vacío
            $err_precio = "El precio es obligatorio";
        }else {
            //Nivel 2: Validar que sea un número (int o float)
            $tmp_precio_filtrado = filter_var($tmp_precio, FILTER_VALIDATE_FLOAT);
            if($tmp_precio_filtrado === FALSE){
                $err_precio = "El precio debe ser un número (entero o decimal)";
            } else {
                //Nivel 3: Validar que sea positivo
                if($tmp_precio_filtrado <= 0){
                    $err_precio = "El precio deber ser mayor a 0";
                } else {
                    //Nivel 4: Validar límite máximo de un precio (opcional pero recomendable)
                    if($tmp_precio_filtrado > 9999999.99){
                        $err_precio = "Tas pasao de caro socio";
                    } else {
                        // Si llego aquí todo es correcto, por tanto creo y asigno valor a mi variable definitiva
                        $precio = $tmp_precio_filtrado;
                    }
                }
            }
        }

        // 3. VALIDACIÓN DEL IVA con whitelist (lista blanca)
        $whitelist = ["general","reducido","superreducido"];
        if($tmp_iva == ""){
            //Nivel 1: Comprobar que no esté vacío
            $err_iva = "El tipo de IVA es obligatorio";
        } else {
            //Nivel 2: Validar contra la whitelist (protección contra manipulación del formulario)
            if(!in_array($tmp_iva, $whitelist)){
                $err_iva = "El tipo de IVA no es válido (sé lo que has intentado desgraciado)";
            } else {
                // Todo correcto
                $iva = $tmp_iva;
            }
        }
    }
    ?>

    <form action="" method="post">
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio" value="<?= htmlspecialchars($tmp_precio) ?>"> <!-- TENGO QUE VOLVER MÁS ADELANTE -->
        <?php 
        if(isset($err_precio)) echo "<span class='error'>$err_precio</span>";
        ?>
        <br><br>
        <label for="iva">IVA</label>
        <select name="iva" id="iva">
            <option disabled selected>-- ELIGE TIPO IVA --</option>
            <option value="general">GENERAL</option>
            <option value="reducido">REDUCIDO</option>
            <option value="superreducido">SUPERREDUCIDO</option>
        </select>
        <?php
        if(isset($err_iva)) echo "<span class='error'>$err_iva</span>";
        ?>
        <br><br>
        <input type="submit" value="CALCULAR PVP">
    </form>
    <?php
    if(isset($precio) && isset($iva)){
    ?>
        <h2 class="ole">Oleeee <?= calcularPVP($precio,$iva) ?>€</h2>
    <?php
    }
    ?>
</body>
</html>