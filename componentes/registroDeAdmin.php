<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>

<body>
    <?php
    include("componentes/registro_admin.php");
    ?>

    <section class="container about">
        <h2 class="subtitle">Bienvenido al registro de administradores</h2>
    </section>

    <section class="formulario">
        <div class="container">
            <form class="form__imputs1" method="post">

                <p>
                    <label for="nombre" class="colocar_nombre">Usuario
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" class="form__imput" placeholder="Escribe tu usuario">
                </p>

                <p>
                    <label for="contrasena" class="colocar_contrasena">Contraseña
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="password" name="introducir_contrasena" id="contrasena" required="obligatorio" class="form__imput" placeholder="Escribe tu contraseña">
                </p>

                <button type="submit" name="enviar_formulario" class="form__submit" id="enviar">
                    <p>Enviar</p>
                </button>

                <p class="aviso">
                    <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>

            </form>

        </div>

    </section>

    <script src="js/menu.js"></script>
    <script src="js/modal.js"></script>


</body>

</html>