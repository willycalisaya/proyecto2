<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="formulario">
        <h1>registro</h1>
        <form method="post">
            <div class="username">
                <input type="text" name="name" required>
                <label>Nombre de usuario</label>
            </div>
            <div class="username">
                <input type="password" name="password" required>
                <label>Contraseña</label>
            </div>
            <div class="username">
                <input type="email" name="email" required>
                <label>Correo</label>
            </div>
            <div class="registrarse2">
                <input class="bnt" name="register" type="submit" value="registrarse">
            </div>
            <div class="registrarse">
                ¿Ya tienes una cuenta?:<a href="index.php">iniciar sesion</a>
            </div>
        </form>
    </div>
    <?php
        include("registrar.php");
    ?>
</body>
</html>