# Ejercicio login y control de acceso

### Refinar la arquitectura

Podemos mejorar la arquitectura separando, no solo por recurso, sino también por
método. Además, podemos incluir en el archivo `index.php` todos los procesos que
sean comunes a las peticiones que vamos a procesar, como comprobar que el
usuario está identificado, preparar los encabezados de respuesta, etc.