# Ejercicio login y control de acceso

## Controlar las peticiones en el servidor

### Procesar peticiones.

A partir de ahora, en `api/index.php` recibiremos todas las peticiones que no se
correspondan con ningún archivo ni directorio, y es ahí dónde deberemos
procesarlas, obteniendo el recurso solicitado, los parámetros, etc.

Para obtener esta información usaremos la clase `PeticionREST` del
archivo `api/includes/PeticionREST.inc`.