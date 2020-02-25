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

<h1>INCIDENCIAS</h1>

    <div>
        <a href='logout.php'>Cerrar Sesión</a>
    </div>
    
    <form action="incidencias.php" method=get>
    
     
  
  <br>
  Nombre:     
  <input type="text" id="nombre" name="nombre" required>
  <br><br>
  Teléfono: 
  <input type="tel" id="telefono" name="telefono" pattern="\d{9}">
  <br><br>
  Email: 
  <input type="text" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>        </tr>
  <br><br>
  Incidencia: <br>
  <textarea name="incidencia" id="incidencia"  required></textarea>
  <br><br>
  <input type="Submit" id="btn_enviar" name="btn_enviar" value=" Enviar ">  
</form>
</div>
</body>
</html>


<!--NO OLVIDARSE DE ESTO AL FINAL, ES EL FIN DEL ELSE DE ARRIBA DEL TODO-->
<?php
}
?>