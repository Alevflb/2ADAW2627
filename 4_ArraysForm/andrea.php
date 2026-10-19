Cada pedido tiene sus datos y una lista de líneas. Es decir, hay tres niveles: pedidos → líneas → datos de la línea.

$pedidos = [
    ["id" => 101, "cliente" => "Ana", "estado" => "enviado", "lineas" => [
        ["producto" => "Teclado", "precio" => 25, "cantidad" => 2],
        ["producto" => "Ratón", "precio" => 15, "cantidad" => 1]]],
    ["id" => 102, "cliente" => "Luis", "estado" => "pendiente", "lineas" => [
        ["producto" => "Monitor", "precio" => 180, "cantidad" => 1]]],
    ["id" => 103, "cliente" => "Ana", "estado" => "pendiente", "lineas" => [
        ["producto" => "Ratón", "precio" => 15, "cantidad" => 3],
        ["producto" => "Alfombrilla", "precio" => 8, "cantidad" => 2]]],
    ["id" => 104, "cliente" => "Marta", "estado" => "enviado", "lineas" => [
        ["producto" => "Teclado", "precio" => 25, "cantidad" => 1],
        ["producto" => "Monitor", "precio" => 180, "cantidad" => 2],
        ["producto" => "Ratón", "precio" => 15, "cantidad" => 1]]]
];

Añade a cada pedido las claves "articulos" (unidades totales) y "total" (suma de precio × cantidad de sus líneas).
Muestra una tabla con id, cliente, estado, artículos y total, ordenada de mayor a menor total.
Muestra los ids de los pedidos pendientes y el importe total pendiente de enviar.
Calcula el gasto de cada cliente y muéstralo de mayor a menor.
Calcula las unidades vendidas de cada producto y muestra el más vendido.

AYUDITAS QUE PUEDEN VENIR BIEN: array_column, array_multisort, array_filter (quedarse con las filas que cumplen algo), array_sum, arsort, array_key_first, implode. 
