<?php
/* Comprobar que hay una sesión creada y que contiene un campo 'user' */
session_start();
if(!isset($_SESSION['user'])) {
    // si no existe redirigir al login
    header('Location: ../');
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area privada</title>
    <link rel="stylesheet" href="../global.css">
</head>
<body>

<header>
    <div id="welcome">Bienvenido:&nbsp;<span id="user-name"><?php echo $_SESSION['user']['nombre'] ?></span></div>
</header>

</body>
</html>