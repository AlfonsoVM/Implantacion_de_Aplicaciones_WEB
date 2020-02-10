<?php
session_start();

$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Subir')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // sanitize file-name
    $newFileName = "datos" . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('txt');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = './uploaded_files/';
      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='Archivo subido correctamente.';
      }
      else 
      {
        $message = 'Error al subir el archivo. Asegurate de que el directorio tiene permisos de escritura.';
      }
    }
    else
    {
      $message = 'La subida falló. Tipos de archivos disponibles: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'Hubo algún error en la subida del archivo. Por favor, preste atención al siguiente error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}
$_SESSION['message'] = $message;
header("Location: table.php");
?>