# Ejercicio login y control de acceso

## Crear la sesión

Con `session_start()` creamos una sesión de PHP, y mediante la variable
predefinida `$_SESSION` podremos leer y escribir datos a la sesión.
En nuestro caso, si el usuario existe en la BBDD, iniciaremos la sesión y
almacenaremos en esta sus datos.