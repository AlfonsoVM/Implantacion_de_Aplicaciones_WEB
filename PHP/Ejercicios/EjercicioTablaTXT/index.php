<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Formulario</title>
</head>
<body>
  <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div>
      <span>Subir archivo TXT:</span>
      <pre>
Formato:

Cantidad * Precio = Total
3,2,x,
4,7,b,
4,5,y
      </pre>
      <input type="file" name="uploadedFile" />
    </div>
<br>
    <input type="submit" name="uploadBtn" value="Subir" />
  </form>
</body>
</html>
