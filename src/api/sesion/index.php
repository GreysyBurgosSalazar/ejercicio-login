<?php

$bbdd_servidor = 'localhost';
$bbdd_nombre = 'test_login';
$bbdd_user = 'root';
$bbdd_password = '';

try {
	$connexion = mysqli_connect($bbdd_servidor, $bbdd_user, $bbdd_password, $bbdd_nombre);
} catch (Exception $e) {
	http_response_code(500);
	die("Error: " . mysqli_connect_errno() . " " . mysqli_connect_error());
}

mysqli_query($connexion, 'SET NAMES utf8mb4');

$usuario = $_POST['nombre'];
$password = $_POST['password'];

$sql = "SELECT `usuarios`.`id`, 
       `usuarios`.`nombre`, 
       `roles`.`id` as `idRol`, 
       `roles`.`rol` 
	FROM `usuarios` 
		INNER JOIN `roles` ON `usuarios`.`rol` = `roles`.`id`
	WHERE `usuarios`.`nombre` = '$usuario' AND `usuarios`.`password` = '$password'";


$resultado = mysqli_query($connexion, $sql);

if(mysqli_affected_rows($connexion) === 1) {
	http_response_code(200);
} else {
	http_response_code(401);
}



echo "usuario: $usuario, password: $password";