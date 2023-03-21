-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2023 a las 03:23:05
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `IdEstuadiante` int(11) NOT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Genero` int(11) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `SwActivo` int(11) DEFAULT NULL,
  `IdMunicipio` int(11) DEFAULT NULL,
  `FechaHora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`IdEstuadiante`, `Nombres`, `Apellidos`, `Email`, `FechaNacimiento`, `Genero`, `Direccion`, `SwActivo`, `IdMunicipio`, `FechaHora`) VALUES
(1, 'Jhonnatan Julian', 'Calderon Moros', 'jhonatancalderon.227@gmail.com', '2002-02-07', 0, 'Calle 18 #31-52', 0, 1, '2023-03-20 21:11:14'),
(2, 'Mary Astrid ', 'Moros Ramirez', 'astridmoros0@gmail.com', '1982-08-06', 1, 'Calle 18 #31-52', 1, 2, '2023-03-20 21:15:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposmunicipios`
--

CREATE TABLE `tiposmunicipios` (
  `IdMunicipio` int(11) NOT NULL,
  `IdDepartamento` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiposmunicipios`
--

INSERT INTO `tiposmunicipios` (`IdMunicipio`, `IdDepartamento`, `Nombre`) VALUES
(1, 1, 'Bucaramanga'),
(2, 1, 'Barranca');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`IdEstuadiante`),
  ADD KEY `municipio` (`IdMunicipio`);

--
-- Indices de la tabla `tiposmunicipios`
--
ALTER TABLE `tiposmunicipios`
  ADD PRIMARY KEY (`IdMunicipio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `IdEstuadiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tiposmunicipios`
--
ALTER TABLE `tiposmunicipios`
  MODIFY `IdMunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `municipio` FOREIGN KEY (`IdMunicipio`) REFERENCES `tiposmunicipios` (`IdMunicipio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
