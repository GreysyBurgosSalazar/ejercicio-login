# Ejercicio login y control de acceso

## Recoger la información del usuario

Debemos recoger la información que ha introducido el usuario en el formulario y
que esta es válida. En nuestro caso, debemos asegurarnos que el usuario ha
introducido un nombre y una contraseña, para lo cual, usaremos el atributo
HTML `required`.
El navegador realizará una validación previa al envío del formulario, es decir,
si no se cumplen los requisitos ni siquiera se produce el evento `submit`.