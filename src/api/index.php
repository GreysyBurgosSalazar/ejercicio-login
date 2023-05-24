<?php
// incluimos la clase PeticionesREST
require_once 'includes/PeticionREST.inc';

// creamos la instancia de la petición.
$peticion = new PeticionREST('api');

// obtenemos el recurso solicitado
$recurso = $peticion->recurso();

// creamos un array que nos servirá para guardar todos los datos que queramos
// enviar en la respuesta.
$salida = [];

// por ejemplo, podemos devolver el recurso solicitado
$salida['recurso'] = $recurso;

// enviamos la salida formateada como JSON
echo json_encode($salida);