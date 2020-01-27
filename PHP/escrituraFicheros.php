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
    
    // Escribir en un fichero:
    $fichero = fopen("datos.txt","w");
    fwrite($fichero, "Practica");
    fwrite($fichero," y aprenderás.");
    fclose($fichero);
    // Para ver el resultado:
    $fichero = file_get_contents("datos.txt");
    print_r($fichero);
    
    echo "<br>-----------------------------<br>";

    // Escribir todo el contenido de una vez:
    $texto = "Sigue practicando.";
    file_put_contents("datos2.txt", $texto);

    // Para ver el resultado:
    $fichero = file_get_contents("datos2.txt");
    print_r($fichero);
    
    echo "<br>-----------------------------<br>";    
    
    echo "</pre>";
 ?>
 </body>
</html>