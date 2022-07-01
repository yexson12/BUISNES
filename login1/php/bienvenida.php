<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    window.location =  "../index.php";
    </script>
  ';
    session_destroy();
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenidos al cielo hijos de p***</h1>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>