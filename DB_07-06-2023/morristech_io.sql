-- phpMyAdmin SQL Dump
CREATE TABLE `tablasolicitudproyectos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `categoriaProyecto` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`));


-- Inserta los datos iniciales
INSERT INTO `tablasolicitudproyectos` (`id`, `nombre`, `correo`, `categoriaProyecto`, `descripcion`) VALUES
(1, 'pamela', 'morrisfdz2016@gmail.com', 'carros', 'zdsf'),
(2, 'dalia', 'dali@gmail.com', 'emprendedora', 'emprendimiento'),
(3, 'pamela', 'morrisfdz2016@gmail.com', 'carros', 'zdsf'),
(4, 'pruebaNombre', 'PruebaCorreo@gmail.com', 'proyectoPrueba', 'Esto es una prueba');



CREATE TABLE `tablatestimonios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` int NOT NULL,
  `puesto` int NOT NULL,
  `comentario` int NOT NULL,
  `calificacion` int NOT NULL,
  PRIMARY KEY (`id`));

