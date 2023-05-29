<?php
if (!isset($peticion)) {
	http_response_code(500);
	die();
}

// Incluir el archivo de conexión a la BBDD.
// Verificamos la variable $connexion para ocultar errores en PHPStorm
// ¡¡¡¡¡El path se debe especificar a partir de api/index.php,
// ya que el archivo se ejecutará ahí!!!!!
require_once 'includes/connexion.php';
if (!isset($connexion)) die();

$salida['metodo'] = 'GET';

die('[
    {
    "id": 1,
    "nombre": "admin",
    "idRol": 1,
    "rol": "administrador"
  },
  {
    "id": 2,
    "nombre": "user",
    "idRol": 2,
    "rol": "usuario"
  }
]');