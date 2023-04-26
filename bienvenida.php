<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
        <script>
            alert("Se debe iniciar sesión para acceder a esta página");
            window.location = "index.php";
        </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
<center>
    <br>
    <hr>
    <h1><strong><font size="20" color = #74ED0E>Bienvenido a Retrogamer</font></strong></h1>
    <hr>
    <br>
    <img src= "assets/images/gamer.jpg" width="600" height="600">
 </center>
 <br>   
 <hr>
    <a href="php/cerrar_sesion.php"><strong><font size="5" color = "red">Cerrar Sesión</font></strong></a>
<hr>
</body>
</html>