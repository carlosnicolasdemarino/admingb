-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-04-2020 a las 15:45:56
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u666073011_gestion`
--
CREATE DATABASE IF NOT EXISTS `u666073011_gestion` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `u666073011_gestion`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(5) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechacmp` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `importe` float DEFAULT NULL,
  `mes` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `tipo`, `fechacmp`, `importe`, `mes`) VALUES
(1, 'Supermercado', '30/03', 5266.24, 'Marzo'),
(2, 'Viaje cuota 1', '', 8848, 'Marzo'),
(3, 'Comida guaus', '', 1400, 'Marzo'),
(4, 'Supermercado', '05/04', 0, 'Marzo'),
(6, 'Viaje cuota 2', '', 6020, 'Abril'),
(7, 'Viaje cuota 3', '', 6020, 'Junio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(10) NOT NULL,
  `detalle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `importe` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mes` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cuota` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pago` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tarjeta` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `detalle`, `importe`, `mes`, `cuota`, `pago`, `tarjeta`) VALUES
(141, 'Tubi prestamo lili', '3400', 'Abril', '-', '', ''),
(203, 'Mastercard Vuelo $ 38,024.04 , 6 cuotas', '6337.34', 'Abril', '2', '', 'Si'),
(204, 'EscolarCin $3450 3 cuotas', '1150', 'Abril', '2', '', 'Si'),
(205, 'Unicef', '337', 'Abril', '-', '', 'Si'),
(206, 'Emergencias', '5596.4', 'Abril', '-', '', 'Si'),
(207, 'Hostinger', '929', 'Abril', '-', '', 'Si'),
(208, 'Mi claro', '863.12', 'Abril', '-', '', 'Si'),
(209, 'Dominio Google', '700', 'Abril', '-', '', 'Si'),
(210, 'Spotify Mastercard', '333.33', 'Abril', '-', '', 'Si'),
(211, 'Netflix', '450', 'Abril', '-', '', 'Si'),
(212, 'Auriculares Fravega 6 cuotas ultima cuota', '766.50', 'Abril', '6', '', 'Si'),
(213, 'Antina Factura de Febrero', '2185', 'Abril', '-', '', 'Si'),
(214, 'Celular pantalla $8470, 2 cuotas ultma cuota', '4235', 'Abril', '2', '', 'Si'),
(215, 'Cole $30216 , 12 cuotas', '2.518.37', 'Abril', '2', '', 'Si'),
(216, 'Cole $30216 , 12 cuotas', '2.518.37', 'Abril', '2', '', 'Si'),
(217, 'Tia marta celular, $844.99 mastercard', '844.99', 'Abril', '-', '', 'Si'),
(218, 'Don web hosting ', ' 252.89', 'Abril', '-', '', 'Si'),
(219, 'Hostinger Tubi mejora', '2249', 'Abril', '-', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas2`
--

CREATE TABLE `cuentas2` (
  `id` int(10) NOT NULL,
  `detalle` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `importe` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mes` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cuota` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pago` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tarjeta` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(10) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fechavto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechavto2` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `importe` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mes` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pago` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `tipo`, `fechavto`, `fechavto2`, `importe`, `mes`, `pago`) VALUES
(91, 'Arba', '05/03', '', '892.50', 'Febrero', 'Si'),
(92, 'Edenor', '11/03', '16/03', '2.521.13', 'Febrero', 'Si'),
(93, 'Gas', '12/03', '', '1377.37', 'Febrero', 'Si'),
(94, 'Modem', '02/03', '09/03', '1110.11', 'Febrero', 'Si'),
(95, 'Municipal', '12/03', '25/03', '163.90', 'Febrero', 'Si'),
(96, 'Telefono', '25/03', '', '340', 'Febrero', 'Si'),
(97, 'Modem', '01/04', '08/04', '1110.11', 'Marzo', 'Si'),
(98, 'Gas', '06/04', '', '1377.37', 'Marzo', 'Si'),
(99, 'Telefono', '', '', '', 'Marzo', ''),
(100, 'Arba', ' 14/04', '', '798.60', 'Marzo', 'Si'),
(101, 'Edenor', '15/04', '', '1123.78', 'Marzo', 'Si'),
(102, 'Municipal', '13/04', '', '1342.35', 'Marzo', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supermercado`
--

CREATE TABLE `supermercado` (
  `id` int(10) NOT NULL,
  `producto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio_final` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `nombre`, `apellido`) VALUES
(1, 'gaston', 'ns2b7bfqbf', 'gaston', 'barbaccia'),
(2, 'ale', '1234', 'cristina', 'romero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuentas2`
--
ALTER TABLE `cuentas2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `supermercado`
--
ALTER TABLE `supermercado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT de la tabla `cuentas2`
--
ALTER TABLE `cuentas2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `supermercado`
--
ALTER TABLE `supermercado`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
