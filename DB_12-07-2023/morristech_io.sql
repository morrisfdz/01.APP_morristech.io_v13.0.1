-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-07-2023 a las 03:23:59
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `morristech.io`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaauditorialogin`
--

CREATE TABLE `tablaauditorialogin` (
  `id` int(11) NOT NULL,
  `nombreUsuario` varchar(255) NOT NULL,
  `tiempoLogin` datetime NOT NULL,
  `estadoLogin` enum('Correcto','Incorrecto') NOT NULL,
  `bloqueado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tablaauditorialogin`
--

INSERT INTO `tablaauditorialogin` (`id`, `nombreUsuario`, `tiempoLogin`, `estadoLogin`, `bloqueado`) VALUES
(1, 'Mauricio', '2023-07-06 19:10:48', 'Correcto', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablasolicitudproyectos`
--

CREATE TABLE `tablasolicitudproyectos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `categoriaProyecto` varchar(50) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tablasolicitudproyectos`
--

INSERT INTO `tablasolicitudproyectos` (`id`, `nombre`, `correo`, `categoriaProyecto`, `descripcion`) VALUES
(1, 'pamela', 'morrisfdz2016@gmail.com', 'carros', 'zdsf'),
(2, 'dalia', 'dali@gmail.com', 'emprendedora', 'emprendimiento'),
(3, 'pamela', 'morrisfdz2016@gmail.com', 'carros', 'zdsf'),
(4, 'pruebaNombre', 'PruebaCorreo@gmail.com', 'proyectoPrueba', 'Esto es una prueba'),
(5, 'Edith', 'edi@gmail.com', 'Figuras de porcelana', 'Emprendimiento de figuras de porcelana'),
(6, 'Marcos', 'Marcos@gmail.com', 'Chofer', 'Chofer de la cervecerÃ­a de CR'),
(58, 'Jeison', 'jei@gmail.com', 'jefe', 'Prueba Jefe.'),
(59, 'Jeison', 'jei@gmail.com', 'jefe', 'Prueba Jefe.'),
(60, 'Jeison', 'jei@gmail.com', 'jefe', 'Prueba Jefe.'),
(61, 'Jorklin', 'jork@gmail.com', 'Estudiante TI', 'Prueba '),
(62, 'luisk', 'luisk@gmail.com', 'estudiante ti', 'prueba'),
(71, 'luisk', 'luisk@gmail.com', 'estudiante ti', 'prueba'),
(78, 'Arturo', 'arturo@gmail.com', 'TI', 'TI 2024'),
(79, 'pamela', 'pam@gmail.com', 'Finanzas', 'finanzas v2'),
(80, 'pamela', 'pam@gmail.com', 'Finanzas', 'finanzas v2'),
(81, 'pamela', 'pam@gmail.com', 'Finanzas', 'finanzas v2'),
(82, 'Mauricio FernÃ¡ndez RamÃ­rez', 'morrisfdz2016@gmail.com', 'carros', 'carros 2'),
(83, 'prueba 07', 'morrisfdz2016@gmail.com', 'proyecto prueba 7', 'quiero un proyecto asÃ­:'),
(84, 'prueba 6-7-2023', 'prueba67@gmail.com', 'Prueba proyecto', 'Esta es la prueba del 6-7-2023'),
(85, 'Adrian', 'agp_PROG5@gmail.com', 'Profesor', 'Proyecto, prueba'),
(86, 'prueba AJAX 12-7', 'ajax@gmail.com', 'prueba ajax', 'Esta es la prueba de carga'),
(87, 'prueba AJAX 12-7', 'ajax@gmail.com', 'prueba ajax', 'Esta es la prueba de carga'),
(88, 'prueba AJAX 12-7', 'ajax@gmail.com', 'prueba ajax', 'Esta es la prueba de carga 2'),
(89, 'prueba AJAX 12-7', 'ajax@gmail.com', 'prueba ajax', 'Esta es la prueba de carga 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablatestimonios`
--

CREATE TABLE `tablatestimonios` (
  `id` int(11) NOT NULL,
  `nombreTestimonio` varchar(50) NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `comentario` text NOT NULL,
  `calificacion` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tablatestimonios`
--

INSERT INTO `tablatestimonios` (`id`, `nombreTestimonio`, `puesto`, `comentario`, `calificacion`) VALUES
(1, 'Mauricio', 'CEO', 'Esto es una prueba', 5),
(2, 'Margarita', 'Jefe', 'Muy responsables', 5),
(4, 'Pamela', 'Contabilidad', 'Buena Empresa', 5),
(7, 'Daniel', 'Gerente', 'Bien', 4),
(9, 'dalia', 'Sub Gerente', 'muy organizados', 5),
(10, 'Grace', 'Empleada', 'Buenos beneficios', 3),
(11, 'Eduardo', 'Empleado', 'Buen ambiente laboral', 5),
(14, 'Adrian', 'profesor', 'Falta', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tablaauditorialogin`
--
ALTER TABLE `tablaauditorialogin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tablasolicitudproyectos`
--
ALTER TABLE `tablasolicitudproyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tablatestimonios`
--
ALTER TABLE `tablatestimonios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tablaauditorialogin`
--
ALTER TABLE `tablaauditorialogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tablasolicitudproyectos`
--
ALTER TABLE `tablasolicitudproyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `tablatestimonios`
--
ALTER TABLE `tablatestimonios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
