<?php
//CONTROL DE SESION; SI LA SESION NO ESTA INICIADA TE LLEVA A LA
//PAGINA DE LOGIN, EN CASO CONTRARIO, MUESTRA EL CONTENIDO.
session_start();
if (empty($_SESSION['nombreUsuario']) && empty($_SESSION['estado'])) {
    header('location: formuLogin.php?error=Sesion finalizada');
} else {
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administración</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div>

    <div><h2>Página Principal</h2></div>

    <div>
        <a href='logout.php'>Cerrar Sesión</a>
    </div>
    
    <div style="width: 300px ;margin: 0 auto">
        <div><a href='variables.php'>Variables meteorológicas</a></div>
        <div><a href='sensores.php'>Sensores</a></div>
        <div><a href='estaciones.php'>Estaciones meteorológicas</a></div>
    </div>
</div>
</body>
</html>


<!--NO OLVIDARSE DE ESTO AL FINAL, ES EL FIN DEL ELSE DE ARRIBA DEL TODO-->
<?php
}
?>