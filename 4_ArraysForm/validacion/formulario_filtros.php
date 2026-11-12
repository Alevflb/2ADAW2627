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
        .error{
            color: red;
        }
        .acierto{
            color:green;
        }
    </style>
</head>
<body>
    <h3>Validación con filter_var()</h3>
    <?php
    /**
     * filter_var(): sirve para comprobar si un valor tiene el formato esperado y, si es así, devolverlo convertido al tipo correcto.
     * 
     * es la herramienta pensada para los datos de un formulario, que siempre SIEMPRE llegan cadenas.
     * 
     * Si el valor es válido, devuelve el valor ya convertido ("25" pasa a ser int(25)) y si no es válido, devuelve false
     * 
     * intval() siempre devuelve un dato, aunque no sea correcto (basura); filter_var() rechaza lo que no es o no se puede convertir a entero (ESTO EN EL CASO DE QUE APLIQUEMOS EL FILTRO DE ENTEROS)
     * 
     * FILTER_VALIDATE_INT
     * FILTER_VALIDATE_FLOAT
     * FILTER_VALIDATE_EMAIL
     * FILTER_VALIDATE_URL
     * FILTER_VALIDATE_BOOLEAN
     * 
     */
    ?>
    <form action="" method="get">
        <input type="text" name="entero" id=""><br>
        <input type="text" name="decimal" id=""><br>
        <input type="text" name="correo" id=""><br>
        <input type="text" name="url" id=""><br>
        <input type="text" name="booleano" id=""><br>

        <input type="submit" value="ENVIAR">
    </form>
    
</body>
</html>