<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 
<?php 
     
    $nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));
    $telefono = trim(htmlspecialchars($_REQUEST["telefono"], ENT_QUOTES, "UTF-8"));
    $email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));
    $incidencia = trim(htmlspecialchars($_REQUEST["incidencia"], ENT_QUOTES, "UTF-8"));

    $nombre_archivo = "logs.txt"; 
 
    /*

    if(file_exists($nombre_archivo))
    {
        $mensaje = "El Archivo $nombre_archivo se ha modificado";
    }
 
    else
    {
        $mensaje = "El Archivo $nombre_archivo se ha creado";
    }

    */
 
    if($archivo = fopen($nombre_archivo, "a"))
    {
        if(fwrite($archivo, "Fecha: ". date("d m Y H:m:s"). " | Nombre: ". $nombre. 
        " | Teléfono: ". $telefono. " | Email: ". $email. " | Incidencia: ". $incidencia. "\n"))
        {
            echo "Se ha tramitado su incidencia correctamente";
        }
        else
        {
            echo "Ha habido un problema al tramitar su incidencia";
        }
 
        fclose($archivo);
    }
 
 ?>