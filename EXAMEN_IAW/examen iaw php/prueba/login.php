<?php
    //Destruir sesion
    session_unset();
    session_destroy();

    //Recoger las variables del formulario
    $usuario = trim(htmlspecialchars($_REQUEST["usuario"], ENT_QUOTES, "UTF-8"));
    $contrasena = trim(htmlspecialchars($_REQUEST["contraseña"], ENT_QUOTES, "UTF-8"));

    //Conexíon a la base de datos USUARIO - CONTRASEÑA - BASE DE DATOS
    $conexion = mysqli_connect("localhost", "root", "", "examen")
    or die("Problemas en la conexion");
    
    //CONSULTA PARA SABER SI COINCIDEN LAS CREDENCIALES CON ALGUN USUARIO DE LA BASE DE DATOS
    $consulta = "SELECT * FROM usuarios
                 WHERE usuario='$usuario' AND contraseña='$contrasena'";

//  CONTRASEÑA ENCRIPTADA
//   $contraseña = md5($_POST['contraseña']);


    //COMPROBACION ENTRE CONEXION Y CONSULTA
    $registros = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
    $count = mysqli_num_rows($registros);
    //SI NINGUNA FILA COINCIDE = ERROR, EN CASO CONTRARIO,
    //INICIA SESION CON EL USUARIO
    if ($count != 1) {
        header('location: formuLogin.php?errorU=Usuario o Contraseña Incorrecta');
    } else {
        //ESTABLECER LA SESION
        session_start();
        $_SESSION['nombreUsuario'] = $usuario; 
        $_SESSION['estado'] = 'Autenticado';
        //PÁGINA A LA QUE QUIERES QUE TE LLEVE CUANDO INICIES SESION
        header('location: inicio.php');
    }
?>