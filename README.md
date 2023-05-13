# Ejercicio login y control de acceso

## Crear la estructura del proyecto

Empezaremos por crear la estructura del proyecto:

````
ejercicio-login/
|--bbdd/    //Directorio para los scripts de migración y backup de la base de datos
|  |--datos_ejemplo.sql
|  |--datos_inicio.sql
|  |--estructura.sql
|--doc/     //Directorio para la documentación de la aplicación
|  |--api.yaml
|--src/     //Directorio para el código fuente. Lo que se ha de publicar en el servidor.
|  |--api/
|  |  |--index.php
|  |--app/
|  |  |--index.html
|  |--index.html
|--.gitignore
|--README.md
````

Aunque para facilitar el trabajo tengamos todo el proyecto en el
directorio `htdocs`, si pasamos a producción el proyecto, solo deberíamos subir
al servidor el contenido del directorio `src`
