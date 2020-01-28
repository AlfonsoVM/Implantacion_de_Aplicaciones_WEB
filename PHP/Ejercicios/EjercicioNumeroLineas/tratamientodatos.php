<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tratamiento</title>
</head>
<body>
<?php
// Leer de línea en línea:
    $fichero = file("fichero.txt");
    foreach($fichero as $num_linea => $linea)
    {
       echo "Número de línea: " . $num_linea . " Contenido: " . $linea;
    }
    echo "</pre>";
?>
</body>
</html>
