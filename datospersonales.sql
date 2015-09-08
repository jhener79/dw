-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2015 a las 06:21:30
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE IF NOT EXISTS `datospersonales` (
  `nif` varchar(10) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `pais` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datospersonales`
--

INSERT INTO `datospersonales` (`nif`, `nombre`, `apellido`, `edad`, `pais`) VALUES
('2342342d', 'Pablo', 'Flores', 23, ''),
('50199368w', 'Juan', 'gomez', 18, ''),
('51982457B', 'elena', 'martin', 27, ''),
('234234q', 'mario', 'arana', 34, ''),
('13132d', 'pedro', 'laz', 64, ''),
(NULL, NULL, NULL, NULL, 'guatemala'),
('23213', 'pedro', 'cruz', 56, 'brasil'),
('24234', 'joel', 'ramos', 56, 'brasil');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
