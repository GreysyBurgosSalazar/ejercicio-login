# Ejercicio login y control de acceso

## Todos los usuarios

Para obtener todos los usuarios debemos editar el archivo `usuarios.get.inc`
para que consulte la base de datos y obtenga los datos de los usuarios y los
incluya en el array de salida.

La conexión a la base de datos ya la teníamos en el archivo `sesion/index.php`,
sería conveniente extraerla a un archivo propio para incluirla siempre que la
necesitemos.