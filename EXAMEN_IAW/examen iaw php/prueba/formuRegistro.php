<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formuRegistro</title>
</head>
<body>
    <form action="registro.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Usuario" id="usuario" name="usuario" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Contraseña" id="contraseña" name="contraseña" required="required">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Registrarse">
        </div>
        <!--ERROR DE LOGIN-->
        <?php
                if (isset($_REQUEST["errorR"])) {
                    print "<p style='color: red'> $_REQUEST[errorR] </p>";
                } elseif (isset($_REQUEST["correctoR"])) {
                    print "<p style='color: green'> $_REQUEST[correctoR] </p>";
                }
		?>
    </form>	
    <a href="formuLogin.php">Inicia Sesión </a>
</body>
</html>