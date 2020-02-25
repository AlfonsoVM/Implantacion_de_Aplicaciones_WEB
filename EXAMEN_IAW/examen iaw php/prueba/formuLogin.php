<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormuLogin</title>
</head>
<body>
    <form action="login.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Usuario" id="usuario" name="usuario" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Contraseña" id="contraseña" name="contraseña" required="required">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Iniciar Sesión">
        </div>
        <!--ERROR DE LOGIN-->
        <?php
                if (isset($_REQUEST["errorU"])) {
                    print "<p style='color: red'> $_REQUEST[errorU] </p>";
                }
		?>
    </form>	
    <a href="formuRegistro.php">Regístrate</a>
</body>
</html>