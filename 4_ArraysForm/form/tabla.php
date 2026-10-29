<?php
    //print_r($_POST);
    $empleados = [
        [1,"paquito", 900],
        [2,"sebas",1800],
        [3,"lucas",1000],
        [4,"maria", 4210],
        [6,"josefa",9500],
        [5,"lucia",2200],
        [7,"roberto",1221],
        [8,"nico",550],
        [9,"rafa",420]
    ];
    //echo "<pre>"; print_r($_SERVER); echo "</pre>";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["ejercicios"]) && $_POST["ejercicios"] == "ej5"){
            //Para controlar que se escoja una opción de la lista desplegable, voy a ver en el array post si existe la clave de la lista
            if(isset($_POST["columna"]) && isset($_POST["orden"])){
                //array_column
                //array_multisort
                //mostrar en formato tabla html
            }else{
                echo "<p style='color:red'>Selecciona cosas pordios</p>";
            }
        }
    }
?>