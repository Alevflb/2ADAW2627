<?php
$equipito = $_POST["nombre"];
    $equipos = [
        "leones"    => ["nombre" => "Leones FC",      "ganados" => 5, "empatados" => 2, "perdidos" => 1, "gf" => 15, "gc" => 7],
        "aguilas"   => ["nombre" => "Águilas United", "ganados" => 5, "empatados" => 2, "perdidos" => 1, "gf" => 13, "gc" => 8],
        "tiburones" => ["nombre" => "Tiburones CF",   "ganados" => 4, "empatados" => 3, "perdidos" => 1, "gf" => 12, "gc" => 6],
        "osos"      => ["nombre" => "Osos Athletic",  "ganados" => 3, "empatados" => 2, "perdidos" => 3, "gf" => 9,  "gc" => 9],
        "lobos"     => ["nombre" => "Lobos SD",       "ganados" => 3, "empatados" => 2, "perdidos" => 3, "gf" => 10, "gc" => 11],
        "halcones"  => ["nombre" => "Halcones CD",    "ganados" => 1, "empatados" => 1, "perdidos" => 6, "gf" => 7,  "gc" => 14],
        "toros"     => ["nombre" => "Toros RC",       "ganados" => 0, "empatados" => 2, "perdidos" => 6, "gf" => 6,  "gc" => 17]
    ];
    $indexado = [
       0 => [1,3,4,5],
       1 => [2,9,8,6]
    ];

    $indexado[0][4] = "holi";

    print_r($indexado);

    foreach($equipos as $clave => $equipo){
        $equipos[$clave]["puntos"] = $equipo["ganados"]*3 + $equipo["empatados"];
        $equipos[$clave]["dif"] = $equipo["gf"] - $equipo["gc"];
        
    }
    $ptos = array_column($equipos, "puntos");
    $nombre = array_column($equipos, "nombre");

    array_multisort($ptos, SORT_DESC, $nombre, SORT_ASC, $equipos);
?>
<table>
    <tr>
        <th>Pos</th>
        <th>Equipo</th>
        <th>..</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php
    $pos = 1;
    
    foreach($equipos as $clave => $equipo){
        if($equipito == $clave) $colorcito = "yellow";
        else $colorcito = "white";
        ?>
        <tr style="background-color: <?= $colorcito ?>;">
            <td><?= $pos ?></td>
            <td><?= $equipo["nombre"] ?></td>
            <td><?= $equipo["ganados"] ?></td>
            <td><?= $equipo["empatados"] ?></td>
            <td><?= $equipo["perdidos"] ?></td>
            <td><?= $equipo["dif"] ?></td>
            <td><?= $equipo["puntos"] ?></td>
        </tr>
        <?php
        $pos++;
    }

    $arr = ["nombre" => "ale", "apellido" => "fulgencio"];
    sort($arr);
    ?>
</table>