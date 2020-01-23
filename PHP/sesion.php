<?php
    // La sesión se guarda en el lado del servidor.
    session_start();
    $_SESSION['nombre_sesion'] = 'valor';
?>

<a href="sesion2.php">sesion</a>