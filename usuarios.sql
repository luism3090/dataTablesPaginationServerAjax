-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2017 a las 00:57:08
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `polizas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(10) unsigned NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL,
  `estado` char(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidos`, `email`, `password`, `fecha_registro`, `fecha_actualizacion`, `estado`) VALUES
(1, 'root', 'root', 'super_usuario@outlook.com', 'superRoot', '2017-07-02 00:00:01', NULL, '1'),
(2, 'Luis', 'Mora', 'luis_mora@hotmail.com', '123452', '2017-07-02 00:00:02', '2017-07-19 11:54:20', '1'),
(3, 'Erick', 'Torres', 'eric_torres@hotmail.com', '12345', '2017-07-02 00:00:03', '2017-07-19 11:26:50', '1'),
(4, 'Juan', 'Luna', 'juan_luna@hotmail.com', '12345', '2017-07-02 00:00:04', NULL, '1'),
(5, 'Luis', 'Molina', 'luisame@outlook.com', '12345', '2017-07-02 00:00:05', '2017-07-17 12:33:19', '1'),
(6, 'Raúl', 'Fernandez', 'raul@hotmail.com', '12345', '2017-07-02 00:00:06', NULL, '1'),
(7, 'Ana', 'García', 'ana@hotmail.com', '12345', '2017-07-02 00:00:07', NULL, '1'),
(8, 'Luz', 'Moreno', 'luz@hotmail.com', '12345', '2017-07-02 00:00:08', NULL, '1'),
(9, 'Roberto', 'Huerta', 'roberto@hotmail.com', '12345', '2017-07-02 00:00:09', NULL, '1'),
(10, 'Veronica', 'Herrera', 'vero@hotmail.com', '12345', '2017-07-02 00:00:10', NULL, '1'),
(11, 'Joaquin', 'Sanchez', 'joaquin@hotmail.com', '12345', '2017-07-02 00:00:11', NULL, '1'),
(12, 'Angel', 'López', 'angel@hotmail.com', '12345', '2017-07-02 00:00:12', NULL, '1'),
(13, 'Marco', 'Suarez', 'marco@hotmail.com', '12345', '2017-07-19 13:37:39', NULL, '1'),
(14, 'Hugo', 'Camo', 'hugo@hotmail.com', '12345', '2017-07-19 13:51:31', NULL, '1'),
(16, 'Alberto', 'Garcia', 'alberto@hotmail.com', '12345', '2017-07-19 14:03:21', '2017-07-19 14:08:11', '1'),
(17, 'Benito', 'Moreno', 'benito@hotmail.com', '12345', '2017-07-19 14:05:53', '2017-07-19 14:09:04', '1'),
(18, 'Carmen', 'Rincon', 'carmen@hotmail.com', '12345', '2017-07-19 14:06:18', '2017-07-24 17:39:54', '1'),
(19, 'Angelica', 'Hernandez', 'angelica@hotmail.com', '12345', '2017-07-19 14:10:42', '2017-07-24 17:33:47', '1'),
(20, 'Daniel', 'Aguilar', 'dani@hotmail.com', '12345', '2017-07-26 12:40:13', NULL, '1');

