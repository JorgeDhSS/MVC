-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-03-2022 a las 05:43:11
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc`
--
CREATE DATABASE IF NOT EXISTS `mvc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mvc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `matricula` int(5) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidoP` varchar(255) DEFAULT NULL,
  `apellidoM` varchar(255) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `calle` varchar(255) DEFAULT NULL,
  `colonia` varchar(255) DEFAULT NULL,
  `codigoPostal` int(5) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `matricula`, `nombre`, `apellidoP`, `apellidoM`, `telefono`, `correo`, `calle`, `colonia`, `codigoPostal`, `fechaNacimiento`) VALUES
(1, 11111, 'jorge', 'dom', 'her', '123456789', 'example@mail.com', 'example_street', 'colonia_example', 12345, '2016-10-01'),
(2, 15135, 'bmnm', 'bnnk.', 'bhjk.l', '1234567890', 'mail@mail.com', 'ghjkl', 'gjhjk.', 78025, '1970-01-01'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01'),
(4, 84263, 'fhgj,k', 'vbmn,', 'noejorve', '147896325', 'kfmfm@knoider.com', 'joopbro', 'noioidf', 85236, '2022-04-02'),
(5, 85236, 'mdfiooi', 'ioig', 'nioit', '1234567890', 'mgnrtioi@lmiboi.com', 'nioigo', 'ioiij', 9890, '1970-01-01'),
(6, 15139, 'nmop', 'iknrneroi', 'niorgio', '987654213', 'ikfiojdf@kngniot.com', 'fnuerehiure', 'nirreio', 98201, '1970-01-01'),
(7, 34567, 'dfgjjklk', 'ghkjlñl', '', '1234567890', 'nnubfbue@kninerio.com', '', 'gfhhkj', 89563, '1970-01-01'),
(8, 34565, 'dfgjjklk', 'ghkjlñl', '', '1234567890', 'nnubfbue@kninerio.com', '', 'gfhhkj', 89563, '1970-01-01'),
(9, 34565, 'dfgjjklk', 'ghkjlñl', '', '1234567890', 'nnubfbue@kninerio.com', '', 'gfhhkj', 89563, '1970-01-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
