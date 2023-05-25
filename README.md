# Ejercicio login y control de acceso

## Controlar las peticiones en el servidor

### Arquitectura modular

Para facilitar el desarrollo es recomendable plantear una arquitectura modular,
separando el código en distintos archivos que nos faciliten su escritura,
mantenimiento y escalado. Hay varias opciones, una es crear un archivo por cada
recurso que gestione nuestra API e importarlo a `index.php` según el recurso
solicitado.