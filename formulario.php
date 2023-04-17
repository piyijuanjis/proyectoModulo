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
    <section class="formulario">
        <div class="container">
            <form class="form__imputs1" method="post">



                <p>
                    <label for="nombre" class="colocar_nombre">Nombre
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" class="form__imput" placeholder="Escribe tu nombre">
                </p>

                <p>
                    <label for="email" class="colocar_email">Email
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="email" name="introducir_email" id="email" required="obligatorio" class="form__imput" placeholder="Escribe tu Email">
                </p>

                <p>
                    <label for="telefono" class="colocar_telefono">Teléfono
                    </label>
                    <input type="tel" name="introducir_telefono" class="form__imput" id="telefono" placeholder="Escribe tu teléfono">
                </p>


                <p>
                    <label for="asunto" class="colocar_asunto">Asunto
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="introducir_asunto" class="form__imput" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
                </p>

                <p>
                    <label for="mensaje" class="colocar_mensaje">Mensaje
                        <span class="obligatorio">*</span>
                    </label>
                    <textarea name="introducir_mensaje" class="form__imput1" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea>
                </p>

                <button type="submit" name="enviar_formulario" class="form__submit" id="enviar">
                    <p>Enviar</p>
                </button>

                <p class="aviso">
                    <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>

            </form>
            <?php
            include("formulario_contacto.php");
            ?>

        </div>
    </section>
</body>

</html>