<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="Images/LogoNegroMT.png" type="image/x-icon">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">

    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="CSS/GeneralStyles.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!--==================== CSS ====================-->

    <link rel="stylesheet" href="../view/CSS/TableStyles.css">

    <title>morrictech.io-Admin</title>
</head>

<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="paginaPrincipal.php #Principal" class="nav__logo">MorrisTech</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="paginaPrincipal.php #Principal" class="nav__link active"><i
                                class='bx bxs-home-alt-2'></i> Principal</a></li>
                    <li class="nav__item"><a href="paginaPrincipal.php #Empresa" class="nav__link"><i
                                class='bx bxs-user-account'></i> Conocenos</a></li>
                    <li class="nav__item"><a href="paginaPrincipal.php #Productos" class="nav__link"><i
                                class='bx bxs-shopping-bag'></i> Productos</a></li>
                    <li class="nav__item"><a href="paginaPrincipal.php #Contactanos" class="nav__link"><i
                                class='bx bxs-notepad'></i> Contactanos</a></li>
                    <li class="nav__item"><a href="paginaLogin.php" class="nav__link"><i class='bx bxs-log-in'></i>
                            Iniciar Sesión (Administrador)</a></li>
                    <li class="nav__item"><a href="paginaAdministracion.php" class="nav__link"><i
                                class='bx bx-table'></i> TablaPrueba</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <!--==================== LECTURA DE BD DE proyectos ====================-->

    <br><br><br><br>
    <div>
        <h1 class="section_title">Tipo de Cambio del Dólar</h1>
        <div id="exchange-rate"></div>
    </div>

    <br><br><br><br>

    <div>
        <h2 class="section_title">Informacion de formulario de proyectos</h2>
        <div class="contact_container container grid">
            <div class="table-wrapper">
                <div class="table-container">

                    <table id="tablaSolicitudes" class="styled-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Categoría del Proyecto</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

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

    <!--==================== SCRIPTS ====================-->
    <script src="JS/ScriptAJAX.js"></script>

    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="JS/GeneralScripts.js"></script>

    <!-- Brinda el tipo de cambio actual -->
    <script src="JS/ScriptTipoDeCambio.js"></script>
</body>

</html>