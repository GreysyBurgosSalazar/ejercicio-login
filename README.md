# Ejercicio login y control de acceso

## Control de acceso por rol

Debemos modificar el control de acceso para que, además de comprobar que el
usuario se halla autentificado, se pueda restringir el acceso a ciertas páginas
según el rol del usuario.

En este caso, para minimizar los cambios, vamos a añadir atributos
personalizados a la etiqueta `<script>` y luego acceder a esos atributos dentro
del archivo `control-acceso.js`.