-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-06-2023 a las 22:41:28
-- Versión del servidor: 10.5.17-MariaDB
-- Versión de PHP: 8.0.28

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
-- Estructura de tabla para la tabla `tablasolicitudproyectos`
--

CREATE TABLE `tablasolicitudproyectos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `categoriaProyecto` varchar(50) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(82, 'Mauricio FernÃ¡ndez RamÃ­rez', 'morrisfdz2016@gmail.com', 'carros', 'carros 2');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(11, 'Eduardo', 'Empleado', 'Buen ambiente laboral', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablausuarios`
--

CREATE TABLE `tablausuarios` (
  `id` int(50) NOT NULL,
  `nombreUsuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `tablausuarios`
--
ALTER TABLE `tablausuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tablasolicitudproyectos`
--
ALTER TABLE `tablasolicitudproyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `tablatestimonios`
--
ALTER TABLE `tablatestimonios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tablausuarios`
--
ALTER TABLE `tablausuarios`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
