<?php
// ejecutar un código distinto según el método de la petición HTTP
switch ($_SERVER['REQUEST_METHOD']) {
	// método GET
	case 'GET':
		// iniciamos la sesión
		session_start();
		// si no existe el campo 'user', es que no hay sesión válida
		if(!isset($_SESSION['user'])) {
			http_response_code(401);
		} else {
			http_response_code(200);
			header('Access-Control-Allow-Origin: *');
			header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE');
			header('Content-Type: application/json; charset=utf-8');
			// devolvemos el contenido de la sesión
			echo json_encode($_SESSION ['user']);
		}
		break;
	// método POST
	case 'POST':
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

		if (mysqli_affected_rows($connexion) === 1) {
			$registro = mysqli_fetch_assoc($resultado);

			// Iniciar la sesión
			session_start();
			// Almacenar los datos del usuario en la sesión
			$_SESSION['user'] = $registro;

			$salida = [];
			$salida['id'] = $registro['id'];
			$salida['nombre'] = $registro['nombre'];
			$salida['rol'] = $registro['rol'];

			http_response_code(200);

			header('Access-Control-Allow-Origin: *');
			header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE');
			header('Content-Type: application/json; charset=utf-8');

			echo json_encode($salida);
		} else {
			http_response_code(401);
		}
		break;
	default:
		http_response_code(405);
}
