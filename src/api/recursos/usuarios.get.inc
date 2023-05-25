<?php
if (!isset($peticion)) {
	http_response_code(500);
	die();
}

require_once 'includes/connexion.php';
if (!isset($connexion)) die();

// sentencia para obtener los datos de los usuarios
$sql = "SELECT `usuarios`.`id`, 
       `usuarios`.`nombre`, 
       `roles`.`id` as `idRol`, 
       `roles`.`rol` 
	FROM `usuarios` 
		INNER JOIN `roles` ON `usuarios`.`rol` = `roles`.`id`";

// ejecutar la sentencia
$result = mysqli_query($connexion, $sql);

// volcar los registros a la salida como arrays asociativos
while ($row = mysqli_fetch_assoc($result)) {
	$salida[] = $row;
}