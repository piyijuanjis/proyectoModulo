<?php

    include("conexion.php");

    if (isset($_POST['register'])) {
        if (strlen($_POST['name']) >=1 && strlen($_POST['email']) >=1 ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $consulta = "INSERT INTO datos (nombre, email,etc...) VALUES ('$name', '$email')";
            $resultado = mysqli_query($conexion,$consulta);
            if ($resultado) {
                ?>
                <h3 class="ok">¡Te has inscrito correctamente!</h3>
                <?php
            }else{
                ?>
                <h3 class="bad">¡!ups ha ocurrido un error</h3>
                <?php
            }
        }
        # code...
    }


?>