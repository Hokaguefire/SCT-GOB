-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-09-2018 a las 05:26:27
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite`
--

DROP TABLE IF EXISTS `tramite`;
CREATE TABLE IF NOT EXISTS `tramite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `de` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `asunto` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `documento` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `entregado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `f_entregado` varchar(50) NOT NULL,
  `delegado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `f_delegado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `finalizado` varchar(50) NOT NULL,
  `observacion` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tramite`
--

INSERT INTO `tramite` (`id`, `de`, `asunto`, `fecha`, `documento`, `entregado`, `f_entregado`, `delegado`, `f_delegado`, `finalizado`, `observacion`) VALUES
(40, 'Gral. Pablo Benalcazar - FTE', 'CoordinaciÃ³n de Seguridad VP', '2018-08-03T08:00', 'OF-1110-FTE', 'Ing. Fabiola Bone', '2018-08-03T08:30', 'Abg. Luis Mendez', '2018-08-03T10:00', '2018-08-05T14:30', 'Se estableciÃ³ el protocolo de seguridad.'),
(41, 'Cap. Pedro Martinez - AE', 'CoordinaciÃ³n de Seguridad VP', '2018-08-03T08:00', 'OF-1101-AEE', 'Ing. Fabiola Bone', '2018-08-03T08:30', 'Abg. Luis Mendez', '2018-08-03T10:00', '2018-08-05T14:30', 'Se estableciÃ³ el protocolo de seguridad.'),
(42, 'Ing. Gabriel Arevalo - FAE', 'CoordinaciÃ³n de Seguridad VP', '2018-08-03T08:00', 'OF-1011-FAE', 'Ing. Fabiola Bone', '2018-08-03T08:30', 'Abg. Luis Mendez', '2018-08-03T10:00', '2018-08-05T14:30', 'Se estableciÃ³ el protocolo de seguridad.'),
(43, 'Cap. Manuel QuiÃ±Ã³nez - DGI', 'CoordinaciÃ³n de Seguridad VP', '2018-08-03T08:00', 'OF-0110-DGI', 'Unidad de Contabilidad', '2018-08-03T08:30', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `tipo`, `usuario`, `clave`) VALUES
(1, 'admin', 'Carol', 'abc'),
(2, 'user', 'Faby', '12345'),
(3, 'super', 'David', 'aes'),
(8, '', '', ''),
(7, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
