# Ejercicio login y control de acceso

## Control de acceso

### Implementar el endpoint GET

En el archivo `api/sesion/index.php`, por ejemplo con una sentencia `switch`,
definimos qué se ejecutará si el método de la petición HTTP es POST (lo que ya
teníamos hecho) o GET. En este último caso, comprobamos si existe una sesión
válida y si es así, devolvemos los datos del usuario, y si no devolvemos un
error 401 
