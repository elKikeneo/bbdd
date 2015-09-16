-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-09-2015 a las 09:30:19
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `m108_agenda`
--
CREATE DATABASE IF NOT EXISTS `m108_agenda` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `m108_agenda`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE IF NOT EXISTS `contactos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `foto` tinytext NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `apellidos`, `telefono`, `email`, `foto`, `id_categoria`) VALUES
(1, 'Pablo', 'Martinez', '685478154', 'pablo@gmail.com', 'http://www.sintetia.com/wp-content/uploads/2012/05/Foto-perfil-300x300.jpg', 0),
(2, 'Ana', 'Soria', '654785415', 'anso@gmail.com', 'http://www.fondospedia.com/fondos/fondo-perfil-de-megan-fox.jpg', 0),
(3, 'Elena', 'Naranjo', '687459645', 'elena@cice.es', 'https://u.ph.edim.co/c991/28148141_1_140.jpg', 0),
(5, 'Carmen', 'Soria', '654645645', 'elena@cice.es', 'https://u.ph.edim.co/c991/28148141_1_140.jpg', 0),
(8, 'TomÃ¡s', 'Gomez', '654789456', 'gsilvau@gmail.com', 'http://comuni-k.net/pagina/wp-content/uploads/2013/09/avatar.png', 0),
(9, 'Anabel', 'Sal', '67894561', '', 'http://comuni-k.net/pagina/wp-content/uploads/2013/09/avatar.png', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
