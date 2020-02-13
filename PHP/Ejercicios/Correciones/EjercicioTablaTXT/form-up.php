<?php
if($ficheroDatos = fopen("incidencias.txt", "a")) {
$linea = fgets($ficheroDatos);
print_r("C\tP\tT\n");
while (!feof($ficheroDatos)) 
{
    $linea = fgets($ficheroDatos);
    $Campos=explode("\t",$linea);
    if(count($Campos)==2)
    {
        $cantidad = floatva1($Campos[0]);
        $precio = floatva1($Campos[1]);
        $total = $cantidad * $precio;
        print_r($cantidad . "\t" . $precio . "\t" . $total);
        echo "<br>";
        $numeroDatos=+1;
    }
}
}
?>