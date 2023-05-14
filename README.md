# Ejercicio login y control de acceso

## Validar el usuario contra la base de datos

Para verificar que el usuario es auténtico, debemos consultar la base de datos y
obtener si existe algún registro con esos valores para `nombre` y `password`

### Conectarnos a la base de datos

El primer paso será establecer en PHP una conexión a la base de datos,
utilizando la función `mysqli_connect()`
