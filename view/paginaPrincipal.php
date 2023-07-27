<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="Images/LogoNegroMT.png" type="image/x-icon">

    <!-- ===== Manifiesto (PWA) ===== -->
    <link rel="manifest" href="manifiesto.json">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="CSS/GeneralStyles.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- https://boxicons.com/ -->

    <title>morrictech.io</title>
</head>




<!--===== SERVICE WORKER =====-->
<script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker
        .register('service-worker.js')
        .then(registration => {
          console.log('Service Worker registrado con éxito:', registration.scope);
        })
        .catch(error => {
          console.log('Error al registrar el Service Worker:', error);
        });
    });
  }
</script>






<body>
    <!--==================== HEADER ====================-->
    <!-- 
    - Historia/principal         100%
    - Productos                  100%
    - Empresas                   100%
    - Proyectos                  100%
    - Equipo                     100%
    - Formulario contacto        100%
    - Testimonios                100%
    -->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="paginaPrincipal.php #Principal" class="nav__logo">MorrisTech</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">

                    <li class="nav__item"><a href="paginaPrincipal.php #Principal" class="nav__link active"><i class='bx bxs-home-alt-2'></i> Principal</a></li>
                    <li class="nav__item"><a href="paginaPrincipal.php #Empresa" class="nav__link"><i class='bx bxs-user-account'></i> Conocenos</a></li>
                    <li class="nav__item"><a href="paginaPrincipal.php #Productos" class="nav__link"><i class='bx bxs-shopping-bag'></i> Productos</a></li>
                    <!--<li class="nav__item"><a href="paginaPrincipal.php #Proyectos" class="nav__link"><i class='bx bxs-chalkboard' ></i> Proyectos</a></li>-->
                    <!--<li class="nav__item"><a href="paginaPrincipal.php #Testimonios" class="nav__link"><i class='bx bxs-book-heart'></i> Testimonios</a></li>-->
                    <li class="nav__item"><a href="paginaPrincipal.php #Contactanos" class="nav__link"><i class='bx bxs-notepad' ></i> Contactanos</a></li>
                    <li class="nav__item"><a href="paginaLogin.php" class="nav__link"><i class='bx bxs-log-in'></i> Iniciar Sesión (Administrador)</a></li>
                    <li class="nav__item"><a href="paginaAdministracion.php" class="nav__link"><i class='bx bx-table'></i> TablaPrueba</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="l-main">
        <section class="home" id="home">
            <div class="home__container bd-grid">

                <div class="home__scroll">
                    <a href="#Empresa" class="home__scroll-link"><i class='bx bx-up-arrow-alt'></i>Empresa</a>
                </div>

                <img src="Images/LogoBlancoMT.png" alt="" class="home__img">
            </div>
        </section>

        <!--==================== PRINCIPAL ====================-->

        <section class="about section" id="Empresa">
            <h2 class="section-title">Empresa</h2>

            <div class="about__container bd-grid">

                <div class="about__img">
                    <img src="Images/FotoPersonal.jpg" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle">Hola, somos MorrisTech</h2>
                    <span class="about__profession">Empresa de desarrollo de software</span>
                    <p class="about__text">Empresa de desarrollo web creada en el Segundo cuadtrimestre del
                        2023 para el curso de programación 5
                        con el fin de diseñar sitios web y aplicaciones que cubran las necesidades de nuestros
                        clientes</p>

                    <div class="about__social">
                        <a href="https://github.com/morrisfdz" target="_blank" class="about__social-icon"><i
                                class='bx bxl-github'></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PRODUCTOS ====================-->

        <section class="portfolio section" id="Productos">
            <h2 class="section-title">Productos</h2>

            <div class="portfolio__container bd-grid">

                <div class="portfolio__img">
                    <img src="../view/Images//Productos/Product_1.jpg">
                    <p>Aplicación de Finanzas personales</p>
                </div>

                <div class="portfolio__img">
                    <img src="../view/Images//Productos/Product_2.jpg">
                    <p>Aplicación Bancaria</p>
                </div>

                <div class="portfolio__img">
                    <img src="../view/Images//Productos/Product_3.jpg">
                    <p>Sofware para taller automotríz</p>
                </div>

                <div class="portfolio__img">
                    <img src="../view/Images//Productos/Product_4.jpg">
                    <p>Aplicación de música en streaming</p>
                </div>


            </div>






        </section>



        <!--===== SKILLS =====-->
        <section class="skills section" id="Conocenos">
            <h2 class="section-title">Conocenos</h2>

            <div class="skills__container bd-grid">
                <div class="skills__box">
                    <h3 class="skills__subtitle">Desarrollo Front End</h3>
                    <span class="skills__name">Html</span>
                    <span class="skills__name">Css</span>
                    <span class="skills__name">Javascript</span>
                    <span class="skills__name">React</span>

                    <h3 class="skills__subtitle">Desarrollo Backend End</h3>
                    <span class="skills__name">PHP</span>
                    <span class="skills__name">Java</span>
                    <span class="skills__name">Python</span>
                    <span class="skills__name">.NET</span>
                    <span class="skills__name">VisualBasic</span>
                    <span class="skills__name">C#</span>
                </div>
            </div>
        </section>

        <!--===== PORTFOLIO =====
        <section class="portfolio section" id="portfolio">
            <h2 class="section-title">Portfolio</h2>

            <div class="portfolio__container bd-grid">
                <div class="portfolio__img">
                    <img src="assets/img/work1.jpg" alt="">

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name">View details</a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="assets/img/work2.jpg" alt="">

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name">View details</a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="assets/img/work3.jpg" alt="">

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name">View details</a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="assets/img/work4.jpg" alt="">

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name">View details</a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="assets/img/work5.jpg" alt="">

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name">View details</a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="assets/img/work6.jpg" alt="">

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name">View details</a>
                    </div>
                </div>
            </div>
        </section>
        -->


        <!--===== Testimonios =====-->
        <!--<h2 class="section-title">Testimonios</h2>


        <section class="contact section" id="contact">

            <div class="contact__container bd-grid">

                <div class="contact__info">
                    <h2 class="section_subtitle">¿Quieres dejar tu comentario?</h2>
                    <br>

                    <span class="section_subtitle">Permitenos saber que piensas sobre nuestra empresa</span>
                </div>


                Formulario de testimonios---------COMENTAR
                <form action="../controller/index.php" method="POST" class="contact__form">

                    <div class="contact_inputs">
                        <div class="contact_content">
                            <label for="nombreTestimonio" class="contact_label">Nombre</label>
                            <input type="text" name="nombreTestimonio" class="contact__input" required>
                        </div>
                        <div class="contact_content">
                            <label for="puesto" class="contact_label">Puesto</label>
                            <input type="text" name="puesto" class="contact__input" required>
                        </div>
                        <div class="contact_content">
                            <label for="calificacion" class="contact_label">Calificacion</label>
                            <input type="number" min="1" max="5" name="calificacion" class="contact__input" required>
                        </div>
                    </div>
                    <div class="contact_content">
                        <label for="comentario" class="contact_label">Comentario</label>
                        <textarea name="comentario" cols="0" rows="3" class="contact__input" required></textarea>
                    </div>
                    <div>
                        <input type="submit" class="contact__button" value="Agregar testimonio">
                    </div>
                </form>

            </div>
        </section>
        -->


        <!--==================== CONTACTANOS ====================-->

        <section class="contact section" id="Contactanos">
            <h2 class="section-title">Contactanos</h2>

            <div class="contact__container bd-grid">
                <div class="contact__info">
                    <h3 class="contact__subtitle">Llamanos</h3>
                    <span class="contact__text">(+506) 7111-6249</span>

                    <h3 class="contact__subtitle">Correo</h3>
                    <span class="contact__text">mauricio.fernandez.ramirez@cuc.cr</span>

                    <h3 class="contact__subtitle">Ubicación</h3>
                    <span class="contact__text">Guadalupe de Cartago, Costa Rica</span>
                </div>

                <form action="../controller/index.php" method="POST" class="contact__form">

                    <div class="contact__inputs">
                        <input for="nombre" placeholder="Nombre" class="contact__input" type="text" name="nombre"
                            required>


                        <input for="correo" placeholder="Correo" class="contact__input" type="mail" name="correo"
                            required>

                        <input for="categoriaProyecto" placeholder="Categoría del Proyecto" class="contact__input"
                            type="text" name="categoriaProyecto" required>


                    </div>

                    <textarea for="descripcion" placeholder="Descripción del proyecto" class="contact__input"
                        type="text" name="descripcion" cols="0" rows="10" required></textarea>

                    <input type="submit" value="Enviar" class="contact__button">
                </form>
            </div>
        </section>
    </main>

    <!--===== FOOTER =====-->
    <footer class="footer section">
        <div class="footer__container bd-grid">
            <div class="footer__data">
                <h2 class="footer__title">MorricTech</h2>
                <p class="footer__text">Empresa de desarrollo web</p>
            </div>

            <div class="footer__data">
                <h2 class="footer__title">EXPLORA</h2>
                <ul>
                    <li><a href="#Principal" class="footer__link">Principal</a></li>
                    <li><a href="#Conocenos" class="footer__link">Conocenos</a></li>
                    <li><a href="#Productos" class="footer__link">Productos</a></li>
                    <li><a href="#Proyectos" class="footer__link">Proyectos</a></li>
                    <li><a href="#Testimonios" class="footer__link">Testimonios</a></li>
                    <li><a href="#Contactanos" class="footer__link">Contactanos</a></li>
                    <li><a href="paginaAdministracion.php" class="footer__link">Administración</a></li>
                </ul>
            </div>

            <div class="footer__data">
                <h2 class="footer__title">SÍGUENOS</h2>
                <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
            </div>


        </div>
    </footer>

    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="JS/GeneralScripts.js"></script>

    <!-- ===== Service Worker (PWA) ===== -->
    <script src="JS/ServiceWorker.js"></script>

</body>

</html>