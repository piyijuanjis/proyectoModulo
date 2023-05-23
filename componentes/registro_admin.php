<?php
include("conexion.php");

if (isset($_POST['enviar_formulario'])) {
    if (strlen($_POST['introducir_nombre']) >= 1 && strlen($_POST['introducir_contrasena']) >= 1) {
        $usuario = trim($_POST['introducir_nombre']);
        $password = trim($_POST['introducir_contrasena']);
        $consulta = "INSERT INTO usuario_pass (USUARIO, PASSWORD) VALUES ('$usuario', '$password')";
        $resultado = mysqli_query($conexion, $consulta);
        
        if ($resultado) {
            ?>
            <h3 class="ok">¡Te has registrado correctamente!</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">¡Ups! Ha ocurrido un error</h3>
            <?php
        }
    }
}
?>

