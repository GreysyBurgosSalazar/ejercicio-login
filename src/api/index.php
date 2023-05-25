<?php
require_once 'includes/PeticionREST.inc';

$peticion = new PeticionREST('api');

$recurso = $peticion->recurso();

$salida = [];

// importar el archivo que procesa el recurso
require_once "recursos/$recurso.php";

echo json_encode($salida);