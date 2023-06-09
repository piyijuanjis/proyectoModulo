<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <title>Espacio interior</title>
</head>

<body>

    <header class="hero hero3">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__titulo">Espacio interior</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="index.html" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="sobrenosotros.html" class="nav__links">Sobre nosotros</a>
                </li>
                <li class="nav__items">
                    <a href="contacto.html" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="" class="nav__links">Nuestros trabajos</a>
                </li>
                <li class="nav__items">
                    <a href="blog.html" class="nav__links">Blog</a>
                </li>
                <li class="nav__items">
                    <a href="" id="inicioDeSesion" class="nav__links"><img src="imagenes/iniciosesion.svg"></a>
                </li>

                <img src="imagenes/salirmenu.svg" class="nav__close">
            </ul>
            <div class="nav__menu">
                <img src="imagenes/menu.svg" class="nav__img">
            </div>
        </nav>
        <section class="hero__container container">
            <h1 class="hero__title">Tu empresa de decoración interior</h1>
            <p class="hero__paragraph">Ofrecemos un servicio integral de decoración de interiores que abarca desde la
                planificación hasta la ejecución, asegurando que cada detalle sea perfecto y que cada proyecto sea
                único.</p>
        </section>
    </header>

    <main>

        <aside id="miModal" class="modal">
            <div class="modal__contenido">
                <span class="modal__cerrar">&times;</span>
                <!-- contenido del modal aquí -->
                <h2 class="subtitle">Iniciar sesión</h2>
                <form action="submeter-formulario.php" class="form__imputs1" method="post">

                    <p>
                        <label for="email" class="colocar_email">Email
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="email" name="introducir_email" id="email" required="obligatorio"
                            class="form__imput" placeholder="Escribe tu Email">
                    </p>

                    <p>
                        <label for="contrasena" class="colocar_contrasena">Contraseña
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="password" name="introducir_contrasena" class="form__imput" id="contrasena"
                            required="obligatorio" placeholder="Introduce tu Contraseña">
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
            <h2 class="subtitle">Solicita un presupuesto personalizado para la decoración de tu hogar u oficina</h2>
            <p class="about paragraph">En Espacio Interior, nos encanta ayudar a nuestros clientes a crear espacios
                únicos y personalizados que reflejen su estilo y necesidades. Si estás buscando transformar tu hogar
                o
                lugar de trabajo en un espacio acogedor y funcional, has llegado al lugar indicado. Completa el
                siguiente formulario para recibir un presupuesto personalizado que se ajuste a tus requerimientos y
                presupuesto. ¡Estamos ansiosos por comenzar a trabajar contigo y hacer realidad tus ideas de
                decoración!
            </p>
        </section>

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
    

    </main>


    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Espacio Interior</h2>
                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="index.html" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="sobrenosotros.html" class="nav__links">Sobre nosotros</a>
                    </li>
                    <li class="nav__items">
                        <a href="contacto.html" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="" class="nav__links">Nuestros trabajos</a>
                    </li>
                    <li class="nav__items">
                        <a href="blog.html" class="nav__links">Blog</a>
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
                <a href="#" class="footer__icons"><img src="imagenes/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="imagenes/instagram.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="imagenes/twitter.svg" class="footer__img"></a>
            </div>
            <h3 class="footer__copyright">Derechos reservados &copy; Piyi Juanjis</h3>
        </section>
    </footer>


    <script src="js/app.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/modal.js"></script>

    
</body>

</html>