<?php

/* Datos para la conexión a la BBDD
   Pueden variar según el entorno en el que se ejecute el script */
$bbdd_servidor = 'localhost';
$bbdd_nombre = 'test_login';
$bbdd_user = 'root';
$bbdd_password = '';

/* Conectarnos a la BBDD */
try {
	$connexion = mysqli_connect($bbdd_servidor, $bbdd_user, $bbdd_password, $bbdd_nombre);
} catch (Exception $e) {
	/* Comprobamos que no se haya producido un error, si es así,
   devolvemos un código 500 y cortamos el script con un mensaje de error */
	http_response_code(500);
	die("Error: " . mysqli_connect_errno() . " " . mysqli_connect_error());
}

/* Establecemos el charset para la conexión,
   para evitar problemas con acentos y otros carateres */
mysqli_query($connexion, 'SET NAMES utf8mb4');

$usuario = $_POST['nombre'];
$password = $_POST['password'];

/* Sentencia SQL */
$sql = "SELECT `usuarios`.`id`, 
       `usuarios`.`nombre`, 
       `roles`.`id` as `idRol`, 
       `roles`.`rol` 
	FROM `usuarios` 
		INNER JOIN `roles` ON `usuarios`.`rol` = `roles`.`id`
	WHERE `usuarios`.`nombre` = '$usuario' AND `usuarios`.`password` = '$password'";


$resultado = mysqli_query($connexion, $sql);


echo "usuario: $usuario, password: $password";