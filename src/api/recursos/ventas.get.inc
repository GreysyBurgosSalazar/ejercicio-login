<?php
if (!isset($peticion)) {
    http_response_code(500);
    die();
}

require_once 'includes/connexion.php';
if (!isset($connexion)) die();

if (count($peticion->parametrosPath()) > 0) {
    if($peticion->parametrosPath()[1] === 'paginas') {
        $cantidad = $peticion->parametrosQuery()['cantidad'];
        $sql = 'SELECT COUNT(`id`) AS `total` FROM `ventas`';

        $result = mysqli_query($connexion, $sql);

        $total = mysqli_fetch_assoc($result)['total'];
        $paginas =ceil($total/$cantidad);
        $salida['paginas'] = $paginas;
    }
} else {
    $cantidad = $peticion->parametrosQuery()['cantidad'];
    $pagina = $peticion->parametrosQuery()['pagina'] * $cantidad;

    $sql = "SELECT * FROM `ventas` ORDER BY `fecha`, `id` LIMIT $pagina, $cantidad";

    $result = mysqli_query($connexion, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $salida[] = $row;
    }
}
