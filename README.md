# Ejercicio login y control de acceso

## Petición de todos los usuarios

Cuando se cargue la página de usuarios deberemos hacer una petición a la API
para obtener todos los usuarios y poder dibujar la tabla. Debemos tener cuidado,
ya que se debe ejecutar una vez se haya validado la sesión.

Para facilitar la modularidad del código, crearemos una clase `UsuariosModel`
como interfaz para la API de usuarios.