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

$salida['metodo'] = 'POST';