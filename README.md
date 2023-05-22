# Ejercicio login y control de acceso

## Mejorar la arquitectura

Ahora mismo el proyecto es plenamente funcional, sin embargo, la actual
configuración no es ni mucho menos la ideal, ya que resultará difícil de
escalar. Para empezar, conforme la aplicación crezca la cantidad de endpoints
que necesitaremos será cada vez más difícil de manejar, e incluso imposible en
el caso de ciertos parámetros que se nos pasen por el path. Además, hay ciertas
partes del código que se repetirán innecesariamente, como la conexión a la base
de datos, y que deberíamos extraer a un, o unos, archivo e importarlos después
donde se necesiten.

### Gestión de usuarios

Para ver cómo funcionaría la nueva arquitectura vamos a crear una página de
gestión de usuarios que:

- Solo sea accesible por usuarios con rol administrador.
- Permita realizar las operaciones típicas (_CRUD_, crear, leer, actualizar y
  borrar) para los usuarios de la aplicación.

Creamos la página `app/usuarios.html` y la maquetamos basándonos en la de
bienvenida.