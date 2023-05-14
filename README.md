# Ejercicio login y control de acceso

## Control de acceso

Ahora mismo, si se accede directamente a cualquier página del sitio, aunque sea
de acceso restringido (i.e. `app/index.html`) podremos conseguirlo sin necesidad
de identificarnos. Para evitar esto podemos bien exigir la identificación en
cada página restringida o bien implementar un sistema que permita "recordar" si
el usuario está autentificado y permitir el acceso solo si es así. Para esto
usaremos sesiones de PHP (ver https://www.php.net/manual/es/book.session.php)
Esto nos servirá, también, para mantener información entre distintas páginas. 