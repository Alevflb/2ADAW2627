<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Subapartado 1</h2>
    <p>Dado los datos que aparecen en la pizarra, crear un array bidimensional indexado con los datos de todos los viajes que tiene mi empresa de autobuses. Añadir dos viajes más en el que el primer viaje tenga como destino "Torremolinos" y el segundo viaje tenga como origen "Málaga"</p>
    <h2>Subapartado 2</h2>
    <p>Manteniendo el orden original de mi array, enseña en el navegador gracias a la funcion print_r el array ordenado por duración de más largo a más corto</p>
    <h2>Subapartdo 3</h2>
    <p>Gracias a una función llamada tabla() crea una tabla con la siguiente estructura:</p>
    <table border="">
        <thead>
            <tr>
                <th>Origen</th>
                <th>Destino</th>
                <th>Duración</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            ...
        </tbody>
    </table>
    <p>
        Si el precio del viaje es menor o igual a cero, se mostrará "Viaje no disponible". <br>
        Si el precio está comprendido desde 1 (inclusive) hasta 10 sin incluir, se coloreará la fila entera de color azul. <br>
        Si el precio está comprendido desde 10 (inclusive) hasta 15 sin incluir, se coloreará la fila entera de color verde. <br>
        Si el precio es mayor o igual a 15, se coloreará de morado.
    </p>
    <h2>Subapartado 4</h2>
    <p>Modifica la función tabla para que sea capaz de recibir dos parámetros. Uno que indique la columna (en formato entero) y otro que indique el tipo de ordenación. tabla(0,SORT_DESC); La función ahora deberá de mostrar la tabla pero con los datos del array ordenados según la columna y el tipo de ordenación</p>
    <h2>Subapartado 5</h2>
    <p>
        Modifica la tabla de la función para que contenga una columna más llamada tipo. Que dependiendo de la duración de cada viaje, contendrá una cadena u otra.
    </p>
    <ul>
        <li>Duración <= 30 --- Corta distancia</li>
        <li>Duración > 30 && <= 120 -- Media distancia</li>
        <li>Duracion > 120 -- Larga distancia</li>
    </ul>
</body>
</html>