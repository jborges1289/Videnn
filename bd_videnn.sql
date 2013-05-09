-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2013 a las 07:04:51
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_videnn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(20) NOT NULL DEFAULT '',
  `descripcion` varchar(200) DEFAULT '',
  `precio_unitario` float NOT NULL,
  `url_imagen` varchar(100) DEFAULT '',
  `id_tipo_p` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_tipo_p` (`id_tipo_p`),
  KEY `id_tipo_p_2` (`id_tipo_p`),
  KEY `id_tipo_p_3` (`id_tipo_p`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `descripcion`, `precio_unitario`, `url_imagen`, `id_tipo_p`) VALUES
(1, 'Lona 1', 'Esto es una descripcion', 50, 'img\\lonas\\lona1.jpg', 3),
(2, 'Lona 2', 'Esto es una descripcion', 60, 'img\\lonas\\lona2.jpg', 3),
(3, 'Boton 1', 'Esto es una descripcion', 20, 'img\\botones\\pines1.jpg', 1),
(4, 'Boton 2', 'Esto es una descripcion', 22, 'img\\botones\\pines2.jpg', 1),
(5, 'Estructura 1', 'Esto es una descripcion', 500, 'img\\estructuras\\estruc1.jpg', 4),
(6, 'Estructura 2', 'Esto es una descripcion', 700, 'img\\estructuras\\estruc2.jpg', 4),
(7, 'Espectacular 2', 'Esto es una descripcion', 1200, 'img\\espectaculares\\espec1.jpg', 2),
(8, 'Espectacular 1', 'Esto es una descripcion', 1000, 'img\\espectaculares\\espec2.jpg', 2),
(9, 'Offset 1', 'Esto es una descripcion', 30, 'img\\offset\\offset1.jpg', 5),
(10, 'Offset 2', 'Esto es una descripcion', 25, 'img\\offset\\offset2.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE IF NOT EXISTS `tipo_producto` (
  `nombre_tipo` varchar(50) NOT NULL,
  `id_tipo_p` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_tipo_p`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`nombre_tipo`, `id_tipo_p`) VALUES
('Botones/Pines', 1),
('Espectaculares', 2),
('Lonas', 3),
('Toldos/Estructuras', 4),
('Offset', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(60) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(100) NOT NULL DEFAULT '',
  `usuario` varchar(20) NOT NULL DEFAULT '',
  `contrasenia` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_tipo_p`) REFERENCES `tipo_producto` (`id_tipo_p`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
