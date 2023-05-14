# Ejercicio login y control de acceso

## Validar el usuario contra la base de datos

Para verificar que el usuario es auténtico, debemos consultar la base de datos y
obtener si existe algún registro con esos valores para `nombre` y `password`

### Recuperar y validar el resultado

Usando la función `mysqli_affected_rows()` podemos sabre cuantos resultados
devuelve la consulta, si solo es uno, es que el usuario existe y es correcto.