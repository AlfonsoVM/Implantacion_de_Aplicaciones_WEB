﻿ <?php
  session_unset();
  session_destroy();
  $usuario = trim(htmlspecialchars($_REQUEST["usuario"], ENT_QUOTES, "UTF-8"));
  $contrasena = trim(htmlspecialchars($_REQUEST["contraseña"], ENT_QUOTES, "UTF-8"));

  $conexion = mysqli_connect("localhost", "root", "", "examen")
    or die("Problemas en la conexion");
   // Hay que comprobar antes si ya hay un usuario registrado con el mismo nombre
   // o correo
   $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario'";
   $registros = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
   $count = mysqli_num_rows($registros);

   $registrar =  "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuario', '$contrasena')";
   
   if ($count != 0) {
    header('location: formuRegistro.php?errorR=El usuario ya existe');
   } else {
    mysqli_query($conexion, $registrar) or die(mysqli_error($conexion));
    header('location: formuRegistro.php?correctoR=El usuario fue creado con exito');
   }
 ?>