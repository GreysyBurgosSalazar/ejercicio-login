# Ejercicio login y control de acceso

## Controlar las peticiones en el servidor

Puesto que no existe el endpoint `usuarios` en el servidor, la petición nos
devuelve un error `404`. Podríamos crear uno, de forma similar a como hicimos
con `sesion`, pero esa solución no nos valdrá si queremos procesar peticiones de
la forma `usuarios/{id}`.

Vamos a ver como podemos hacer para capturar y procesar cualquier petición que
se haga a la API.

### Redirigir peticiones no resueltas.

En la carpeta `api` creamos un archivo `.htaccess`. Estos archivos permiten
modificar la configuración del servidor Apache para un directorio concreto.
En este caso en ese archivo recogerá todas las peticiones que no se correspondan
con un archivo o un directorio y las redirigirá al `index.php`.