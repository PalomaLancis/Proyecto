-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 14:18:10
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
-- Base de datos: `taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `Id` int(11) NOT NULL,
  `Idusuario` int(11) DEFAULT NULL,
  `Idmecanico` int(11) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  `Comentarios` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`Id`, `Idusuario`, `Idmecanico`, `Fecha`, `Estado`, `Comentarios`) VALUES
(1, 5, 3, '2022-11-11 16:00:00', 'Pendiente', 'Cambio de frenos'),
(2, 3, 3, '2022-11-08 14:38:00', 'Pendiente', 'Cambio de ruedas'),
(3, 1, 3, '2022-11-06 13:33:47', 'Pendiente', 'Cambio de aceite');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Foto` varchar(30) DEFAULT NULL,
  `Especialidad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`Id`, `Nombre`, `Apellido`, `Email`, `Foto`, `Especialidad`) VALUES
(1, 'Hanjara', NULL, 'Hanjara@gmail.com', NULL, 'Administradora del taller'),
(2, 'Erwin', NULL, 'Erwin@gmail.com', NULL, 'Cambio de piezas'),
(3, 'Chema', 'Lancis', 'Chema@gmail.com', NULL, 'Reparación completa de vehículos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Foto` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Contraseña` varchar(20) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Apellido`, `Foto`, `Email`, `Contraseña`, `Direccion`) VALUES
(1, 'pepita', 'palotes', 'usuario.png', 'pepita@gmail.com', '123', 'quinto pino'),
(2, 'pepito', 'grillo', 'usuario.png', 'pepito@hotmail.es', '123', 'aguas vivas'),
(3, 'julia', 'hernandez', 'usuario.png', 'julia@gmail.com', '123', 'eras alta'),
(4, 'juan', 'hernan', 'usuario.png', 'juan@gmail.com', '123', ' goya'),
(5, 'paloma', 'lancis', 'usuario.png', 'paloma@gmail.com', '123', 'compromiso de caspe'),
(6, 'Sara', 'Baras', 'usuario.png', 'sbaras@gmail.com', '123', 'avenida san jose');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Idusuario` (`Idusuario`),
  ADD KEY `Idmecanico` (`Idmecanico`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `fk_idmecanico` FOREIGN KEY (`Idmecanico`) REFERENCES `trabajadores` (`Id`),
  ADD CONSTRAINT `fk_idusuario` FOREIGN KEY (`Idusuario`) REFERENCES `usuarios` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
