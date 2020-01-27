<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="UTF-8">
 <title>Javascript</title>
 </head>
 <body>
 <script type="text/javascript" src="app.js">    
 </script>
 <?php    
    echo "<pre>";
    
    // Recorrido carácter a carácter:
    $fichero = fopen ( "fichero.txt", "r");
    print_r($fichero);
    echo "<br>";
    while(!feof($fichero))
    {
       echo fgetc($fichero);       
    }
    fclose($fichero);
    echo "<br>-----------------------------<br>";

    // Leer todo el contenido de una vez:
    $fichero = file_get_contents("fichero.txt");
    print_r($fichero);
    echo "<br>-----------------------------<br>";

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