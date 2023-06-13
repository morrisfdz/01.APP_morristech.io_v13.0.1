<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="Images/LogoNegroMT.png" type="image/x-icon">


    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="https://dev.dakidarts.com/wixa/assets/css/swiper-bundle.min.css">


    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="https://dev.dakidarts.com/wixa/assets/css/styles.css">
    <link rel="stylesheet" href="Styles.css">

    <title>morrictech.io</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav_logo">MorrisTech</a>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list grid">

                    <!-- 
                    - Historia/principal         100%
                    - Productos                  100%
                    - Empresas                   100%
                    - Proyectos                  100%
                    - Equipo                     100%
                    - Formulario contacto        90%
                    - Testimonios                100%
                    -->


                    <li class="nav_item">
                        <a href="paginaPrincipal.php #Principal" class="nav_link active-link">
                            <i class="uil uil-estate nav_icon"></i> Principal
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="paginaPrincipal.php #Conocenos" class="nav_link">
                            <i class="uil uil-user nav_icon"></i> Conocenos
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="paginaPrincipal.php #Productos" class="nav_link">
                            <i class="uil uil-suitcase-alt nav_icon"></i> Productos
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="paginaPrincipal.php #Proyectos" class="nav_link">
                            <i class="uil uil-scenery nav_icon"></i> Proyectos
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="paginaPrincipal.php #Testimonios" class="nav_link">
                            <i class="uil uil-location-arrow nav_icon"></i> Testimonios
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="paginaPrincipal.php #Contactanos" class="nav_link">
                            <i class="uil uil-location-arrow nav_icon"></i> Contactanos
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="paginaAdministracion.php" class="nav_link">
                            <i class="uil uil-location-arrow nav_icon"></i> Administración
                        </a>
                    </li>
                </ul>
                <i class="uil uil-multiply nav_close" id="nav-close"></i>
            </div>
            <div class="nav_btns">
                <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav_toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>

    </header>




    <!--==================== LECTURA DE BD DE proyectos ====================-->
    <br><br><br><br><br>
    <h2 class="section_title">Informacion de formulario de proyectos</h2>
    <div class="contact_container container grid">
        <div class="table-wrapper">
            <div class="table-container">

                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Categoría del Proyecto</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once '../config.php';
                        require_once '../model/formularioProyecto.php';

                        $formularioProyecto = new formularioProyecto($conn);
                        $solicitudes = $formularioProyecto->obtenerSolicitudes();

                        foreach ($solicitudes as $solicitud) {
                            echo '<tr>';
                            echo '<td>' . $solicitud['id'] . '</td>';
                            echo '<td>' . $solicitud['nombre'] . '</td>';
                            echo '<td>' . $solicitud['correo'] . '</td>';
                            echo '<td>' . $solicitud['categoriaProyecto'] . '</td>';
                            echo '<td>' . $solicitud['descripcion'] . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    <!--==================== FOOTER ====================-->
    <footer class="footer ">
        <div class="footer_bg">
            <div class="footer_container container grid">
                <div>
                    <h1 class="footer_title">MorricTech</h1>
                    <span class="footer_subtitle">Empresa de desarrollo web</span>
                </div>
                <ul class="footer_links">
                    <li>
                        <a href="#Productos" class="footer_link">Productos</a>
                    </li>
                    <li>
                        <a href="#Proyectos" class="footer_link">Proyectos</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer_link"></a>
                    </li>
                </ul>
                <div class="footer_socials">
                    <a href="https://www.facebook.com/profile.php?id=100009462886476" target="_blank"
                        class="footer_social">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer_social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://github.com/morrisfdz" target="_blank" class="footer_social">
                        <i class="uil uil-github-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer_copy">&#169; CUC - II - 2023 <a class="footerd">Desarrollado
                    por MorrisTech</a></p>
        </div>

    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup_icon"></i>
    </a>

    <script src="https://dev.dakidarts.com/wixa/assets/js/swiper-bundle.min.js"></script>
    <script src="https://dev.dakidarts.com/wixa/assets/js/main.js"></script>

</body>

</html>