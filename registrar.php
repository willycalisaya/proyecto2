<?php

include("conexion.php");

if (isset($_POST['register'])){
    if(
        strlen($_POST['name']) >=1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >=1 
        ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $consulta = "INSERT INTO datos(nombre,email,contraseña)
                VALUES('$name','$email','$password')";
            $resultado = mysqli_query($conex,$consulta);
            if($resultado){
            ?>
                <h3 class="success"> Registro completado</h3>
            <?php
            } else{
            ?>
                <h3 class="error"> Hay un error </h3>
            <?php
            }   
        } else {
            ?>
                <h3 class="error"> faltan completar los campos </h3>
            <?php
        }
}
?>
