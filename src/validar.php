<?php
include("src/conexion.php");

$name1 = $_POST['name'];
$password1 = $_POST['password'];

$consulta1 = "SELECT * FROM datos where nombre='$name1' and contraseña='$password1'";
$resultado1 = mysqli_query($conex, $consulta1);

$filas = mysqli_num_rows($resultado1);

if ($filas) {
    header("location:src/inicio.php");
} else {
    include("index.php");
    ?>
    <h3 class="error">Error de autenticación</h3>
    <?php
}

mysqli_free_result($resultado1);
mysqli_close($conex);
?>