-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2019 a las 23:59:25
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bluebook`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idAlumno` int(5) NOT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `idUsuario` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idAlumno`, `curso`, `idUsuario`) VALUES
(1, 'ASIR', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id` int(2) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `inicio` date NOT NULL,
  `final` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `id` int(5) NOT NULL,
  `accion` varchar(100) NOT NULL,
  `usuario` int(5) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`id`, `accion`, `usuario`, `fecha`) VALUES
(1, 'Subir', 2, '2019-06-06'),
(2, 'Subir', 2, '2019-06-06'),
(3, 'Subir', 1, '2019-06-07'),
(4, 'Subir', 1, '2019-06-07'),
(5, 'Alta usuario', 2, '2019-06-18'),
(6, 'Modificar usuario', 2, '2019-06-18'),
(7, 'Alta usuario', 2, '2019-06-18'),
(8, 'Alta usuario', 2, '2019-06-18'),
(9, 'Alta usuario', 2, '2019-06-18'),
(10, 'Alta usuario', 2, '2019-06-18'),
(11, 'Alta usuario', 2, '2019-06-18'),
(12, 'Alta usuario', 2, '2019-06-18'),
(13, 'Subir', 2, '2019-06-18'),
(14, 'Subir', 2, '2019-06-18'),
(15, 'Subir', 2, '2019-06-18'),
(16, 'Subir', 2, '2019-06-18'),
(17, 'Subir', 2, '2019-06-18'),
(18, 'Subir', 2, '2019-06-18'),
(19, 'Subir', 2, '2019-06-18'),
(20, 'Subir', 2, '2019-06-18'),
(21, 'Calificar', 2, '2019-06-18'),
(22, 'Calificar', 2, '2019-06-18'),
(23, 'Calificar', 2, '2019-06-18'),
(24, 'Modificar usuario', 2, '2019-06-18'),
(25, 'Alta usuario', 2, '2019-06-18'),
(26, 'Alta usuario', 2, '2019-06-18'),
(27, 'Alta usuario', 2, '2019-06-18'),
(28, 'Modificar usuario', 2, '2019-06-18'),
(29, 'Subir', 3, '2019-06-18'),
(30, 'Calificar', 3, '2019-06-18'),
(31, 'Calificar', 3, '2019-06-18'),
(32, 'Eliminar', 3, '2019-06-18'),
(33, 'Modificar usuario', 3, '2019-06-18'),
(34, 'Modificar usuario', 3, '2019-06-18'),
(35, 'Alta usuario', 3, '2019-06-18'),
(36, 'Eliminar', 3, '2019-06-18'),
(37, 'Subir', 3, '2019-06-18'),
(38, 'Eliminar', 3, '2019-06-18'),
(39, 'Eliminar', 3, '2019-06-18'),
(40, 'Alta curso', 3, '2019-06-18'),
(41, 'Alta curso', 3, '2019-06-18'),
(42, 'Alta curso', 3, '2019-06-18'),
(43, 'Alta curso', 3, '2019-06-18'),
(44, 'Alta curso', 3, '2019-06-18'),
(45, 'Alta curso', 3, '2019-06-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `idProfesor` int(5) NOT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `idUsuario` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idProfesor`, `curso`, `idUsuario`) VALUES
(1, 'ASIR, DAW', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `idProyecto` int(5) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `nota` int(2) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `alumno` int(5) DEFAULT NULL,
  `profesor` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`idProyecto`, `nombre`, `descripcion`, `nota`, `year`, `url`, `alumno`, `profesor`) VALUES
(1, 'Gestion de proyectos de un sitio web', 'Mi proyecto.', 7, '2019', 'archivos/Gestion_de_proyectos_de_un_sitio_web_de_prueba.pdf', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellido`, `pass`, `email`, `imagen`, `rol`) VALUES
(1, 'Salva', 'Barea', '1234', 'salvabarea@gmail.com', 'img/hm3.jpg', 'alumno'),
(2, 'Javier', 'Delgado', '1234', 'javierdelgado@gmail.com', 'img/hm3.jpg', 'profesor'),
(3, 'admin', '', '1234', 'admin@jacaranda.es', '', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idAlumno`),
  ADD KEY `fk_alumno` (`idUsuario`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`idProfesor`),
  ADD KEY `fk_profesor` (`idUsuario`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`idProyecto`),
  ADD KEY `fk_proyecto1` (`alumno`),
  ADD KEY `fk_proyecto2` (`profesor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idAlumno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `idProfesor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `idProyecto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alumno` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `fk_profesor` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `fk_proyecto1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`idAlumno`),
  ADD CONSTRAINT `fk_proyecto2` FOREIGN KEY (`profesor`) REFERENCES `profesor` (`idProfesor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
