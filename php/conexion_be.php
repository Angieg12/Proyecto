<?php
 
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $db = "login_register_db";

    $conexion = new mysqli ($servername, $user, $pass, $db);
   /* if($conexion ->connect_errno){
        die("Conexion fallida" . $conexion ->connect_errno);
    }else{
        echo "Conectado exitosamente a la base de datos";
    }*/

?>
