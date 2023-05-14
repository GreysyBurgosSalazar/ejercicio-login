# Ejercicio login y control de acceso

## Validar el usuario contra la base de datos

Para verificar que el usuario es auténtico, debemos consultar la base de datos y
obtener si existe algún registro con esos valores para `nombre` y `password`

### Crear y ejecutar la consulta

Definimos una consulta SQL, para comprobar que se corresponde con lo que
necesitamos podemos usar una herramienta como la consola de SQL de phpMyAdmin y
comprobar que funciona y devuelve lo que tiene que devolver.

Utilizando la función `mysqli_quiery()` ejecutamos la consulta.