<?php
/*
 * Comprobar que están definidas las variables que vamos a necesitar.
 * Si no es así, es que el script no se ha importado a index.php, y cortamos
 * su ejecución.
 */
if(!isset($peticion)) {
	http_response_code(500);
	die();
}


switch ($peticion->metodo()) {
	case 'GET':
		// Código para petición GET
		break;
	case 'POST':
		// Código para petición POST
		break;
	case 'PUT':
		// Código para petición PUT
		break;
	case 'DELETE':
		// Código para petición DELETE
		break;
	default:
		// El método HTTP no está soportado, error 405 y cortamos el script
		http_response_code(405);
		die();
}