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
        
   if(file_exists("datos.txt"))
      echo "El fichero existe.";
   else
      echo "El fichero no existe.";

   echo "<br>";
   
   if(is_dir("datos.txt"))
      echo "Es un directorio.";
   else
      echo "No es un directorio.";
    
    echo "</pre>";
 ?>
 </body>
</html>