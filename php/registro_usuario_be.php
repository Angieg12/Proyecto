<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena']; 
     //Encriptamiento de contraseña
    $contrasena = hash('sha512', $contrasena);
    
    $query = "INSERT INTO usuarios(nombre_completo, correo_electronico, usuario, contrasena)
             VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    
    //verificar que el correo no se repita en la BD
    $verifica_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico ='$correo'");

    if(mysqli_num_rows($verifica_correo) > 0){
      echo'
        <script>
          alert("Este correo ya está registrado, intente nuevamente");
          window.location = "../index.php";
        </script>
      ';
      exit();
    }

    //verificar que el nombre de usuario no se repita en la BD
     $verifica_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario'");

      if(mysqli_num_rows($verifica_usuario) > 0){
         echo'
           <script>
             alert("Este usuario ya está registrado, intente con uno diferente");
             window.location = "../index.php";
           </script>
          ';
       exit();
     }
    

    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo '
          <script>
            alert("usuario almacenado exitosamente");
            window.location = "../index.php"
          </script>
        ';
    }else{
        echo '
          <script>
            alert("usuario no almacenado");
            window.location = "../index.php"
          </script>
        ';
    }

    mysqli_close($conexion);
?>