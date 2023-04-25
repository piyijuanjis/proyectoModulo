<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/mediaqueries.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <title>Espacio interior</title>
</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION["introducir_email"])) {
        header("location:index.html");
    }
    ?>

    <header class="hero hero5">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__titulo">Espacio interior</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="cierre.php" class="nav__links"><img src="../imagenes/exit.svg"></a>
                </li>
                <img src="../imagenes/salirmenu.svg" class="nav__close">
            </ul>
            <div class="nav__menu">
                <img src="../imagenes/menu.svg" class="nav__img">
            </div>
        </nav>
        <section class="hero__container container">
            <h1 class="hero__title">Bienvenido a la zona de administración</h1>
            <p class="hero__paragraph">Esta zona es exclusiva para administradores.</p>
        </section>
    </header>

    <main>

        <aside id="miModal" class="modal">
            <div class="modal__contenido">
                <span class="modal__cerrar">&times;</span>
                <!-- contenido del modal aquí -->
                <h2 class="subtitle">Iniciar sesión</h2>
                <form action="php/comprueba_login.php" class="form__imputs1" method="post">

                    <p>
                        <label for="email" class="colocar_email">Email
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="email" name="introducir_email" id="email" required="obligatorio" class="form__imput" placeholder="Escribe tu Email">
                    </p>

                    <p>
                        <label for="contrasena" class="colocar_contrasena">Contraseña
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="password" name="introducir_contrasena" class="form__imput" id="contrasena" required="obligatorio" placeholder="Introduce tu Contraseña">
                    </p>

                    <p class="aviso">
                        <span class="obligatorio"> * </span>los campos son obligatorios.
                    </p>

                    <button type="submit" name="enviar_formulario" class="form__submit" id="enviar">
                        <p>Acceder</p>
                    </button>

                    <p class="aviso">¿Aún no tienes cuenta? <a href="inicioSesion.html">Crea tu cuenta ya</a></p>

                </form>
            </div>
        </aside>


        <section class="container about">
            <h2 class="subtitle">Formularios de contacto</h2>
            <div class="form-container">
                <?php
                include("conexion.php");
                if (isset($_GET['eliminar'])) {
                    $id = $_GET['eliminar'];
                    $eliminar = "DELETE FROM formulario_contacto WHERE id = $id";
                    mysqli_query($conexion, $eliminar);
                }

                if ($conexion) {
                    $consulta = "SELECT * FROM formulario_contacto";
                    $resultado = mysqli_query($conexion, $consulta);
                    if ($resultado) {
                        while ($row = $resultado->fetch_array()) {
                            $id = $row['id'];
                            $nombre = $row['nombre'];
                            $email = $row['email'];
                            $telefono = $row['telefono'];
                            $asunto = $row['asunto'];
                            $mensaje = $row['mensaje'];
                            $fecha = $row['fecha'];
                ?>
                            <div>
                                <h2><?php echo $nombre; ?></h2>
                                <div>
                                    <p>
                                        <b>Nº cliente: </b> <?php echo $id; ?><br>
                                        <b>Email: </b><?php echo $email; ?><br>
                                        <b>Teléfono: </b><?php echo $telefono; ?><br>
                                        <b>Asunto: </b><?php echo $asunto; ?><br>
                                        <b>Mensaje: </b><?php echo $mensaje; ?><br>
                                        <b>Fecha: </b><?php echo $fecha; ?><br>
                                    </p>
                                </div>
                                <a class="ctaEliminar" href="?eliminar=<?php echo $id; ?>">Eliminar</a>
                                <a class="ctaResponder" href="mailto:<?php echo $email; ?>" class="btn btn-primary">Responder</a>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
        </section>


        <section class="presupuesto">
            <div class="presupuesto__container container">
                <div class="presupuesto__texts">
                    <h2 class="subtitle">¿Dónde estamos?</h2>
                    <p class="presupuesto__paragraph">Nuestra
                        ubicación central nos permite trabajar con clientes en toda la región, brindando servicios de
                        diseño de interiores de alta calidad y soluciones personalizadas para hogares, oficinas y
                        espacios comerciales.

                        Nuestras instalaciones están diseñadas para brindar un ambiente cómodo y acogedor a nuestros
                        clientes. Desde el momento en que ingresas a nuestra oficina, te sentirás como en casa. Contamos
                        con una amplia variedad de muestras de materiales y productos para que puedas ver y tocar, así
                        como también para inspirarte en la creación de tu propio espacio de ensueño.</p>
                </div>

                <figure class="presupuesto__picture">
                    <div class="mapa" id="map"></div>
                </figure>
            </div>
        </section>

        <section class="servicios container">

            <div class="servicios__table">

                <div class="servicios__element">
                    <h3 class="servicios__servicios">NUESTRA EXPERIENCIA</h3>
                    <div class="servicios__items">
                        <p class="servicios__features">Con más de 20 años de experiencia en el campo de la decoración de
                            interiores, podemos decir con orgullo que hemos visto todo y hecho todo. Nuestro equipo de
                            profesionales altamente capacitados ha trabajado en una amplia variedad de proyectos de
                            decoración de interiores, desde hogares hasta oficinas y espacios comerciales.</p>
                    </div>

                </div>

                <div class="servicios__element servicios__element--best">
                    <h3 class="servicios__servicios">ESPECIALISTAS EN</h3>
                    <div class="servicios__items">
                        <p class="servicios__features">Nos especializamos en diseños modernos y elegantes que combinan
                            la funcionalidad con la belleza. Nos esforzamos por crear espacios únicos que reflejen la
                            individualidad de nuestros clientes. Para lograrlo, trabajamos con una amplia variedad de
                            estilos y materiales de decoración, desde lo tradicional hasta lo contemporáneo, pasando por
                            lo rústico y lo minimalista.</p>
                    </div>

                </div>

                <div class="servicios__element">
                    <h3 class="servicios__servicios">NUESTROS SERVICIOS</h3>
                    <div class="servicios__items">
                        <p class="servicios__features">Ofrecemos una amplia variedad de servicios de decoración de
                            interiores para satisfacer las necesidades de nuestros clientes. Desde el diseño de espacios
                            interiores hasta la selección de colores y materiales, nuestro equipo
                            trabaja con nuestros clientes para crear soluciones personalizadas que reflejen su
                            estilo y personalidad.</p>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Espacio Interior</h2>
                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="cierre.php" class="nav__links"><img src="../imagenes/exit.svg"></a>
                    </li>
                </ul>
            </nav>
            <form class="footer__form">
                <h2 class="footer__newsletter">Nos ponemos en contacto contigo</h2>
                <div class="footer__imputs">
                    <input type="email" name="Email" placeholder="Email:" class="footer__imput">
                    <input type="submit" value="Empieza tu decoración ya" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="../imagenes/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="../imagenes/instagram.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="../imagenes/twitter.svg" class="footer__img"></a>
            </div>
            <h3 class="footer__copyright">Derechos reservados &copy; Piyi Juanjis</h3>
        </section>
    </footer>


    <script src="../js/app.js"></script>
    <script src="../js/mapa.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/modal.js"></script>
</body>

</html>