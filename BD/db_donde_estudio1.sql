-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2020 a las 11:51:32
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_donde_estudio1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `contrasena` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ID_admin` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`contrasena`, `correo`, `ID_admin`, `nombre`, `estado`) VALUES
('21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 1, 'admin', '1'),
('21232f297a57a5a743894a0e4a801fc3', 'jpmasterweb@gmail.com', 3, 'Juan Pablo Bedoya', '1'),
('21232f297a57a5a743894a0e4a801fc3', 'prueba2@gmail.com', 4, 'prueba2', '1'),
('21232f297a57a5a743894a0e4a801fc3', 'add@gmail.com', 5, 'prueba', '1'),
('21232f297a57a5a743894a0e4a801fc3', 'luis_pilco@gmail.com', 6, 'Luis Pilco', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `ID_mensaje` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`ID_mensaje`, `nombre`, `correo`, `telefono`, `mensaje`) VALUES
(1, 'lolo', 'lolo@gmail.com', 6567854, 'Este es el primer mensaje exitoso suerte :)'),
(2, 'Tasha Cuenca', 'tashaC@gmail.com', 75492380, 'Buenas, quisiera saber más sobre los tours, para min y mi universidad por favor.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `contrasena` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `CI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`contrasena`, `correo`, `ID_usuario`, `nombre`, `telefono`, `CI`) VALUES
('9d5e3ecdeb4cdb7acfd63075ae046672', 'kevinrojas1575@gmail.com', 1, 'Kevin Rojas', 60526424, 0),
('55add3d845bfcd87a9b0949b0da49c0a', 'jp@gmail.com', 2, 'Juan Pablo Bedoya Rodriguez', 67144235, 0),
('21232f297a57a5a743894a0e4a801fc3', 'raquel@gmail.com', 3, 'Raquel Petrona Perez Layme', 67342467, 0),
('21232f297a57a5a743894a0e4a801fc3', 'leo_sacari@gmail.com', 4, 'Leo Sacari', 75611980, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`ID_mensaje`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `ID_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
