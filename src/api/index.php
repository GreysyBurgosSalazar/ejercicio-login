<?php
require_once 'includes/PeticionREST.inc';

$peticion = new PeticionREST('api');

$recurso = $peticion->recurso();

$salida = [];

// archivo a importar según el recurso solicitado
$file = "recursos/$recurso.php";
// comprobar que existe, si no, devolver error 400
if(!file_exists($file)) {
	http_response_code(400);
	die();
}
// importar el archivo
require_once $file;

echo json_encode($salida);