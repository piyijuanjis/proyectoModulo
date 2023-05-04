<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <title>Espacio interior</title>
</head>

<body>

    <header class="hero hero2">
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
                    <a href="formulario.php" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="presupuesto.html" class="nav__links">presupuesto</a>
                </li>
                <li class="nav__items">
                    <a href="blog.php" class="nav__links">Blog</a>
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
                <form action="php/comprueba_login.php" class="form__imputs1" method="post">

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

        <section class="servicios container">
            <h2 class="subtitle">Blog</h2>
            <p class="about paragraph">Artículos y consejos sobre tendencias de decoración, técnicas de diseño,
                soluciones creativas y otras ideas relacionadas con el tema. Los artículos incluyen fotografías y una
                descripción que ilustran ejemplos prácticos.</p>

            <div class="servicios__table">

                <div class="servicios__element">
                    <h3 class="servicios__servicios">Cocina</h3>
                    <p class="servicios__name">Cocina moderna con isla central de mármol, armarios blancos, vajilla
                        expuesta y ventana que proporciona iluminación natural.</p>
                    <div class="servicios__items">
                        <img src="imagenes/cocina.jpg" class="servicios__foto">
                    </div>
                    <a href="#" class="servicios__cta">Ver artículo</a>
                </div>

                <div class="servicios__element">
                    <h3 class="servicios__servicios">Salón</h3>
                    <p class="servicios__name">Cocina moderna con isla central de mármol, armarios blancos, vajilla
                        expuesta y ventana que proporciona iluminación natural.</p>
                    <div class="servicios__items">
                        <img src="imagenes/salon.jpg" class="servicios__foto">
                    </div>
                    <a href="blog.html" class="servicios__cta">Ver artículo</a>
                </div>

                <div class="servicios__element">
                    <h3 class="servicios__servicios">Salón</h3>
                    <p class="servicios__name">Salón acogedor con paredes beige, sofá cómodo, iluminación suave y
                        estantería rústica llena de libros y adornos.</p>
                    <div class="servicios__items">
                        <img src="imagenes/salon1.jpg" class="servicios__foto">
                    </div>
                    <a href="blog.html" class="servicios__cta">Ver artículo</a>
                </div>

                <div class="servicios__element">
                    <h3 class="servicios__servicios">Salón</h3>
                    <p class="servicios__name">Cocina moderna con isla central de mármol, armarios blancos, vajilla
                        expuesta y ventana que proporciona iluminación natural.</p>
                    <div class="servicios__items">
                        <img src="imagenes/salon2.jpg" class="servicios__foto">
                    </div>
                    <a href="blog.html" class="servicios__cta">Ver artículo</a>
                </div>

                <div class="servicios__element">
                    <h3 class="servicios__servicios">Salón</h3>
                    <p class="servicios__name">Cocina moderna con isla central de mármol, armarios blancos, vajilla
                        expuesta y ventana que proporciona iluminación natural.</p>
                    <div class="servicios__items">
                        <img src="imagenes/salon3.jpg" class="servicios__foto">
                    </div>
                    <a href="blog.html" class="servicios__cta">Ver artículo</a>
                </div>

                <div class="servicios__element">
                    <h3 class="servicios__servicios">Salón</h3>
                    <p class="servicios__name">Cocina moderna con isla central de mármol, armarios blancos, vajilla
                        expuesta y ventana que proporciona iluminación natural.</p>
                    <div class="servicios__items">
                        <img src="imagenes/salon.jpg" class="servicios__foto">
                    </div>
                    <a href="blog.html" class="servicios__cta">Ver artículo</a>
                </div>

                <div class="servicios__element">
                    <h3 class="servicios__servicios">Salón</h3>
                    <p class="servicios__name">Cocina moderna con isla central de mármol, armarios blancos, vajilla
                        expuesta y ventana que proporciona iluminación natural.</p>
                    <div class="servicios__items">
                        <img src="imagenes/salon1.jpg" class="servicios__foto">
                    </div>
                    <a href="blog.html" class="servicios__cta">Ver artículo</a>
                </div>

                <?php
        // Conexión a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "espacio_interior");

        // Consulta para obtener los artículos
        $query = "SELECT * FROM guardar_blog ORDER BY fecha DESC";
        $resultado = mysqli_query($conexion, $query);

        // Iteración sobre los resultados de la consulta
        while ($fila = mysqli_fetch_array($resultado)) {
            $titulo = $fila["titulo"];
            $descripcion = $fila["mensaje"];
            $imagen = $fila["imagen"];
            $url = "articulo.php?id=" . $fila["id"];

            // Creación del elemento HTML para cada artículo
            echo '<div class="servicios__element">
                    <h3 class="servicios__servicios">' . $titulo . '</h3>
                    <p class="servicios__name">' . $descripcion . '</p>
                    <div class="servicios__items">
                        <img src="imagenesBlog/' . $imagen . '" class="servicios__foto">
                    </div>
                    <a href="' . $url . '" class="servicios__cta">Ver artículo</a>
                  </div>';
        }

        // Cierre de la conexión a la base de datos
        mysqli_close($conexion);
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
                        <a href="formulario.php" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="presupuesto.html" class="nav__links">presupuesto</a>
                    </li>
                    <li class="nav__items">
                        <a href="blog.php" class="nav__links">Blog</a>
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
    <script src="js/galeria.js"></script>
</body>

</html>