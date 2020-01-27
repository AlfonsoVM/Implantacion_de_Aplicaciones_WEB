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
    $fecha = "11/26/2020";
    $formateada= date("Y-m-d",strtotime( $fecha));
    echo $formateada . "<br>";

    echo "<pre>";
    // Fecha actual:
    echo date("Y-m-t") . "<br>";

    print_r(getdate(time())) . "<br>";

    echo time() . "<br>";

    print_r(localtime(time()));
   

    // sumar o restar tiempo a una fecha:
    // Importante poner en formato americano año-mes-día:
    $futuro = strtotime('+30 day', strtotime("2020-10-16"));
    $fechaFuturo = date("Y-m-d", $futuro);
    
    echo $fechaFuturo . "<br>";

    // Fecha actual:
    echo date("d/m/Y H:i:s") . "<br>"; 
    echo "</pre>";
 ?>
 </body>
</html>