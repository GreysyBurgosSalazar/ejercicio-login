# Ejercicio login y control de acceso

## Recoger la petición en el servidor

PHP dispone de unas variables
predefinidas (https://www.php.net/manual/es/reserved.variables.php) que, entre
otras cosas nos permiten acceder de forma sencilla a los parámetros que se
envían en la petición HTTP

- `$_GET`: es un array asociativo que contiene los parámetros enviados en la
  query de la URL
- `$_POST`: es un array asociativo que contiene los parámetros incluidos en el
  body, si están formateados como datos de formulario

Podemos usar el array `$_POST` para recuperar los parámetros que se nos pasan.
