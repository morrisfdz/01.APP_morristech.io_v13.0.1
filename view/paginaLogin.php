<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="Images/LogoNegroMT.png" type="image/x-icon">

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="CSS/GeneralStyles.css">
  <link rel="stylesheet" href="CSS/LogIn.css">

  <!-- ===== BOX ICONS ===== -->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- https://boxicons.com/ -->

  <!--==================== CSS ====================-->

  <link rel="stylesheet" href="../view/CSS/TableStyles.css">

<title>morrictech.io-LogIn-Admin</title>


</head>


<body>

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


  <div class="header">

    <!--Content before waves-->
    <div class="inner-header flex">
      <!--Just the logo.. Don't mind this-->

      <h3>Login</h3>
    </div>

    <!--Waves Container-->
    <div>
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
          <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
          <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
      </svg>
    </div>
    <!--Waves end-->

  </div>
  <!--Header ends-->

  <!--Content starts-->

  <div class="content flex">
  <h2>Iniciar sesión</h2>
    <form method="POST" action="">
      <input type="text" name="nombreUsuario" placeholder="Nombre de usuario" onfocus="this.placeholder = ''"
        onblur="this.placeholder = 'NombreUsuario'" />
      <input type="password" name="contrasena" placeholder="Contraseña" onfocus="this.placeholder = ''"
        onblur="this.placeholder = 'Contraseña'" />
      <button class="login-btn">Iniciar sesión</button>
    </form>


    <p>¿Eres administrador y no tienes usuario/cotraseña?</p>

    <p>Comunicate a: mauricio.fernandez.ramirez@cuc.cr</p>


    <!--Content ends-->

    </div>




    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="JS/GeneralScripts.js"></script>
</body>