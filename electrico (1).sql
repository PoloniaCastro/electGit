-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-02-2019 a las 18:49:04
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `electrico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `id_anun` int(5) NOT NULL,
  `titulo_anun` varchar(30) NOT NULL,
  `descripcion_anun` varchar(100) NOT NULL,
  `direccion_anun` varchar(30) NOT NULL,
  `telefono_anun` int(9) NOT NULL,
  `nombre_clien_anun` varchar(30) NOT NULL,
  `id_ciu` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciu` int(5) NOT NULL,
  `nombre_ciu` varchar(20) NOT NULL,
  `id_reg` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciu`, `nombre_ciu`, `id_reg`) VALUES
(0, 'Arica', 0),
(1, 'Putre', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_esp` int(5) NOT NULL,
  `nombre_esp` varchar(30) NOT NULL,
  `descripcion_esp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id_reg` int(5) NOT NULL,
  `nombre_reg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id_reg`, `nombre_reg`) VALUES
(0, 'Arica y Parinacota'),
(1, 'Tarapacá'),
(2, 'Antofagasta'),
(3, 'Atacama'),
(4, 'Coquimbo'),
(5, 'Valparaíso'),
(6, 'O\'Higgins'),
(7, 'Maule'),
(8, 'Ñuble'),
(9, 'Biobío'),
(10, 'Araucanía'),
(11, 'Los Ríos'),
(12, 'Los Lagos'),
(13, 'Aysén'),
(14, 'Magallanes'),
(15, 'Santiago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(5) NOT NULL,
  `nombre_usu` varchar(20) NOT NULL,
  `apellido_usu` varchar(20) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `correo_usu` varchar(40) NOT NULL,
  `telefono_usu` int(9) NOT NULL,
  `contrasenia_usu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nombre_usu`, `apellido_usu`, `direccion`, `correo_usu`, `telefono_usu`, `contrasenia_usu`) VALUES
(3, 'Polonia', 'Castro', 'Valpo', 'polo@algo.com', 911111111, '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_ciudad`
--

CREATE TABLE `usuario_ciudad` (
  `id_usu` int(5) NOT NULL,
  `id_ciu` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_ciudad`
--

INSERT INTO `usuario_ciudad` (`id_usu`, `id_ciu`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 1),
(5, 0),
(6, 0),
(7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_especialidad`
--

CREATE TABLE `usuario_especialidad` (
  `id_usu` int(5) NOT NULL,
  `id_esp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id_anun`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciu`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_esp`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_reg`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id_anun` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id_esp` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id_reg` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
