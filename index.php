<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio1</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="formulario">
        <h1>Inicio de sesión</h1>
        <form action="validar.php" method="post">
            <div class="username">
                <input type="text" name="name" required>
                <label>Nombre de usuario</label>
            </div>
            <div class="username">
                <input type="password" name="password" required>
                <label>Contraseña</label>
            </div>
                <input type="submit" value="ingresar">
            <div class="registrarse">
                ¿No tienes una cuenta?<a href="registro.php">Registrarse</a>
            </div>
        </form>

    </div>
    <?php
        include("registrar.php");
    ?>
</body>
</html>