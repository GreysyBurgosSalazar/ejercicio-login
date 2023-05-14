# Ejercicio login y control de acceso

## Control de acceso

### Control de acceso en el servidor

Una opción para controlar el acceso a una página es hacerlo en el servidor,
antes de enviar la página al cliente. La página debe ser un archivo PHP y estar
alojada en el mismo servidor que la API.
Incluimos un script en la página que compruebe si existe la sesión y si no es
así, redireccionamos al login.