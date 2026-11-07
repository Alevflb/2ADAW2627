<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket de compra</title>

    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #999; padding: 6px 10px; }
        th { background-color: #f3d36b; }
    </style>

    <!-- Copiadlo si quereis pa que tenga un poquito de estilos y no quede tan feilla la tabla  -->
</head>

<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recoger los datos del formulario
    $cantidadManzanas = $_POST["manzanas"];
    $cantidadLeche    = $_POST["leche"];
    $cantidadPan      = $_POST["pan"];
    $cantidadCerveza  = $_POST["cerveza"];
    $cantidadRefresco = $_POST["refresco"];
    $cantidadRaton    = $_POST["raton"];

    $productos = [
        ["nombre" => "Manzanas",          "precio" => 1.50,  "categoria" => "Alimentación", "iva" => 4,  "cantidad" => $cantidadManzanas],
        ["nombre" => "Leche",             "precio" => 0.90,  "categoria" => "Alimentación", "iva" => 4,  "cantidad" => $cantidadLeche],
        ["nombre" => "Pan",               "precio" => 1.20,  "categoria" => "Alimentación", "iva" => 4,  "cantidad" => $cantidadPan],
        ["nombre" => "Cerveza",           "precio" => 2.50,  "categoria" => "Bebidas",      "iva" => 10, "cantidad" => $cantidadCerveza],
        ["nombre" => "Refresco",          "precio" => 1.80,  "categoria" => "Bebidas",      "iva" => 10, "cantidad" => $cantidadRefresco],
        ["nombre" => "Ratón inalámbrico", "precio" => 25.00, "categoria" => "Electrónica",  "iva" => 21, "cantidad" => $cantidadRaton],
    ];

    // creo todas las variables auxiliares para cálculos de subtotal, con descuento, con iva aplicado.. y una última auxiliar booleana para saber si al menos me ha llegao un producto
    $totalSinDescuento = 0;
    $totalDescuentos   = 0;
    $totalIva          = 0;
    $hayProductos      = false; // para saber si ha comprado algo

    // empiezo creando la cabecera de la tablita y a medida que voy creando la tablita, voy calculando los diferentes datos. por que? todo a la vez? pq necesito recorrer el array bidimensional para saber que tipo de producto es cada uno, que iva aplicarle y que descuento aplicarle segun lo que me llega del form y segun lo que tengo en la matriz
    ?>
    <table>
        <tr>
            <th>Producto</th>
            <th>Categoria</th>
            <th>Cantidad</th>
            <th>Precio unidad</th>
            <th>Subtotal</th>
            <th>Descuento</th>
            <th>IVA</th>
            <th>Total</th>
        </tr>
    <?php
    // vamos ahora a sacar todos los datos de cada producto
    foreach ($productos as $producto) {

        // si no ha pedido nada de este producto, no lo ponemos en el ticket
        if ($producto["cantidad"] > 0) {
            $hayProductos = true;

            // subtotal = cantidad x precio
            $subtotal = $producto["cantidad"] * $producto["precio"];

            // descuento por cantidad: 20% si 10 o más, 10% si 5 o más
            if ($producto["cantidad"] >= 10) {
                $porcentajeDescuento = 20;
            } elseif ($producto["cantidad"] >= 5) {
                $porcentajeDescuento = 10;
            } else {
                $porcentajeDescuento = 0;
            }
            $descuento = $subtotal * $porcentajeDescuento / 100;

            // el IVA se calcula sobre el precio YA descontado
            $baseProducto = $subtotal - $descuento;
            $iva = $baseProducto * $producto["iva"] / 100;

            $totalProducto = $baseProducto + $iva;

            // Sumamos a los totales del ticket
            $totalSinDescuento = $totalSinDescuento + $subtotal;
            $totalDescuentos   = $totalDescuentos + $descuento;
            $totalIva          = $totalIva + $iva;

            // aqui pinto la fila de cada producto con echos en vez de desde html porque estoy usando la funcion number_format para el truncar los decimales, tb se puede sacar la fila desde html intercalando codigo php dentro de cada celda, lo que prefirais
            echo "<tr>";
            echo "<td>" . $producto["nombre"] . "</td>";
            echo "<td>" . $producto["categoria"] . "</td>";
            echo "<td>" . $producto["cantidad"] . "</td>";
            echo "<td>" . number_format($producto["precio"], 2) . " €</td>";
            echo "<td>" . number_format($subtotal, 2) . " €</td>";
            echo "<td>-" . number_format($descuento, 2) . " € (" . $porcentajeDescuento . "%)</td>";
            echo "<td>" . number_format($iva, 2) . " € (" . $producto["iva"] . "%)</td>";
            echo "<td><strong>" . number_format($totalProducto, 2) . " €</strong></td>";
            echo "</tr>";
        }
    }
    ?>
    </table>
    
    <?php
    if ($hayProductos) {
        $baseImponible = $totalSinDescuento - $totalDescuentos;
        $totalFinal    = $baseImponible + $totalIva;

        echo "<h2>Resumen</h2>";
        echo "<p>Subtotal (sin descuentos): " . number_format($totalSinDescuento, 2) . " €</p>";
        echo "<p>Descuentos aplicados: -" . number_format($totalDescuentos, 2) . " €</p>";
        echo "<p>Base imponible: " . number_format($baseImponible, 2) . " €</p>";
        echo "<p>IVA: " . number_format($totalIva, 2) . " €</p>";
        echo "<h4>TOTAL A PAGAR: " . number_format($totalFinal, 2) . " €</h4>";
    } else {
        echo "<p style='color:red'>No has comprado ningún producto.</p>";
    }
} else {
    echo "<p style='color:red'>Primero rellena el formulario.</p>";
}
?>

    <p><a href="cesta.html">Volver a la cesta</a></p>
</body>

</html>
