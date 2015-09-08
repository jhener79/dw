-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2015 a las 06:39:24
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `precio` varchar(10) DEFAULT NULL,
  `unidades` varchar(10) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `FECHA` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `usuario`, `descripcion`, `precio`, `unidades`, `img`, `FECHA`) VALUES
(1, 'Marcadores', 'marcadores para pintar en cualquier superfice', '23', '4', 'imagenes/crayones.jpg', '2015-09-08'),
(2, 'plumas', 'plumas de colores tinta china', '233', '56', 'imagenes/plumas.jpg', '2015-09-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosdelibreria`
--

CREATE TABLE IF NOT EXISTS `usuariosdelibreria` (
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariosdelibreria`
--

INSERT INTO `usuariosdelibreria` (`nombre`, `usuario`, `email`, `contra`) VALUES
('marisel', 'mary', 'notengo', 'mimi'),
('marisel', 'mary', 'asasasd', 'a'),
('ana', 'serra', 'notengo', 'a'),
('juan', 'gamer', 'david10531988@gmail.com', 'a'),
('david', 'n', 'd', 'a'),
('jose', 'competidos', 'd', '1'),
('estefano', 'jugador', 'este@gmail.com', '172522ec1028ab781d9dfd17eaca4427'),
('marlen', 'sdf', 'asdf', 'c'),
('joel', 'mate', 'david10531988@gmail.com', '3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
