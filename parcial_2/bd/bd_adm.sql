-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2025 a las 19:13:45
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portal_inm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abl`
--

CREATE TABLE `abl` (
  `id_abl` int(11) NOT NULL,
  `enero` varchar(45) DEFAULT NULL,
  `febrero` varchar(45) DEFAULT NULL,
  `marzo` varchar(45) DEFAULT NULL,
  `abril` varchar(45) DEFAULT NULL,
  `mayo` varchar(45) DEFAULT NULL,
  `junio` varchar(45) DEFAULT NULL,
  `julio` varchar(45) DEFAULT NULL,
  `agosto` varchar(45) DEFAULT NULL,
  `sepriembre` varchar(45) DEFAULT NULL,
  `octubre` varchar(45) DEFAULT NULL,
  `noviembre` varchar(45) DEFAULT NULL,
  `diciembre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

CREATE TABLE `agentes` (
  `id_agente` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `documento` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `inmobiliaria` varchar(45) NOT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `agentes`
--

INSERT INTO `agentes` (`id_agente`, `nombre`, `apellido`, `documento`, `telefono`, `inmobiliaria`, `fk_usuario`) VALUES
(1, 'Tomas', 'Aguirre', '42820296', '1155768026', 'New Oro Propiedades', 2),
(2, 'Matias', 'Aguirre', '1234567890', '47743637', 'New Oro Propiedades', 3),
(3, 'Mario', 'Aguirre', '22694744', '47743637', 'New Oro Propiedades', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `id_alquiler` int(11) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `moneda` varchar(45) NOT NULL,
  `contrato_inicio` date NOT NULL,
  `contrato_final` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_depto` int(11) NOT NULL,
  `calle` varchar(45) NOT NULL,
  `altura` varchar(45) NOT NULL,
  `piso` varchar(45) NOT NULL,
  `unidad` varchar(45) NOT NULL,
  `barrio` varchar(45) NOT NULL,
  `localidad` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `fk_expensa` int(11) NOT NULL,
  `fk_abl` int(11) NOT NULL,
  `codigo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_depto`, `calle`, `altura`, `piso`, `unidad`, `barrio`, `localidad`, `estado`, `fk_expensa`, `fk_abl`, `codigo`) VALUES
(1, 'Federico Lacroze', '1982', '10', '10', 'Palermo', 'CABA', 'Alquilado', 0, 0, 'lacroze1982'),
(2, 'Jufre', '88', '3', 'C', 'Villa Crespo', 'CABA', 'Alquilado', 0, 0, 'jufre88');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expensa`
--

CREATE TABLE `expensa` (
  `id_expensa` int(11) NOT NULL,
  `enero` varchar(45) DEFAULT NULL,
  `febrero` varchar(45) DEFAULT NULL,
  `marzo` varchar(45) DEFAULT NULL,
  `abril` varchar(45) DEFAULT NULL,
  `mayo` varchar(45) DEFAULT NULL,
  `junio` varchar(45) DEFAULT NULL,
  `julio` varchar(45) DEFAULT NULL,
  `agosto` varchar(45) DEFAULT NULL,
  `sepriembre` varchar(45) DEFAULT NULL,
  `octubre` varchar(45) DEFAULT NULL,
  `noviembre` varchar(45) DEFAULT NULL,
  `diciembre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inquilinos`
--

CREATE TABLE `inquilinos` (
  `id_inquilino` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `documento` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `fk_depto` int(11) NOT NULL,
  `fk_alquiler` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `inquilinos`
--

INSERT INTO `inquilinos` (`id_inquilino`, `nombre`, `apellido`, `documento`, `telefono`, `correo`, `fk_depto`, `fk_alquiler`, `fk_usuario`) VALUES
(1, 'Max', 'Verstappen', '1000000', '1122334455', 'max@gmail.com', 1, 1, 90),
(3, 'Charles', 'Leclerc', '1000001', '1199887766', 'charles@gmail.com', 2, 1, 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pagos` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `comprobante` varchar(45) DEFAULT NULL,
  `descripcion` tinytext DEFAULT NULL,
  `fk_inquilino` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `fk_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `correo`, `clave`, `fk_rol`) VALUES
(2, 'tomasignaguirre@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(3, 'matiasaguirre@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(4, 'lidia@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abl`
--
ALTER TABLE `abl`
  ADD PRIMARY KEY (`id_abl`),
  ADD UNIQUE KEY `id_expensa_UNIQUE` (`id_abl`);

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`id_agente`),
  ADD UNIQUE KEY `id_agente_UNIQUE` (`id_agente`);

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`id_alquiler`),
  ADD UNIQUE KEY `id_alquiler_UNIQUE` (`id_alquiler`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_depto`),
  ADD UNIQUE KEY `id_depto_UNIQUE` (`id_depto`);

--
-- Indices de la tabla `expensa`
--
ALTER TABLE `expensa`
  ADD PRIMARY KEY (`id_expensa`),
  ADD UNIQUE KEY `id_expensa_UNIQUE` (`id_expensa`);

--
-- Indices de la tabla `inquilinos`
--
ALTER TABLE `inquilinos`
  ADD PRIMARY KEY (`id_inquilino`),
  ADD UNIQUE KEY `id_inquilino_UNIQUE` (`id_inquilino`),
  ADD UNIQUE KEY `documento_UNIQUE` (`documento`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pagos`),
  ADD UNIQUE KEY `id_pagos_UNIQUE` (`id_pagos`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`),
  ADD UNIQUE KEY `id_rol_UNIQUE` (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD UNIQUE KEY `id_usuarios_UNIQUE` (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abl`
--
ALTER TABLE `abl`
  MODIFY `id_abl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `agentes`
--
ALTER TABLE `agentes`
  MODIFY `id_agente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `id_alquiler` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_depto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `expensa`
--
ALTER TABLE `expensa`
  MODIFY `id_expensa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inquilinos`
--
ALTER TABLE `inquilinos`
  MODIFY `id_inquilino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pagos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
