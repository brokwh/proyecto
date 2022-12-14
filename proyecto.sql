-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2022 a las 21:50:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID` int(16) NOT NULL,
  `nombre` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_pro`
--

CREATE TABLE `cat_pro` (
  `idCat` int(16) NOT NULL,
  `idPro` int(16) NOT NULL,
  `nombre` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clie_ord`
--

CREATE TABLE `clie_ord` (
  `idOrd` int(16) NOT NULL,
  `idCLiente` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clie_res`
--

CREATE TABLE `clie_res` (
  `idRes` int(16) NOT NULL,
  `idCLiente` int(16) NOT NULL,
  `cedula` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacion`
--

CREATE TABLE `estacion` (
  `id` int(16) NOT NULL,
  `nombre` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopago`
--

CREATE TABLE `estadopago` (
  `id` int(16) NOT NULL,
  `nombre` int(16) NOT NULL,
  `estadoMetodo` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(16) NOT NULL,
  `nombre` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estadoMenu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id` int(16) NOT NULL,
  `estadoMesa` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id`, `estadoMesa`) VALUES
(6, 'Ocupada'),
(7, 'Ocupada'),
(8, 'Ocupada'),
(9, 'Ocupada'),
(10, 'Libre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodopago`
--

CREATE TABLE `metodopago` (
  `id` int(16) NOT NULL,
  `nombre` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estadoMetodo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(16) NOT NULL,
  `precioTotal` int(16) NOT NULL,
  `fechaHora` date NOT NULL,
  `numeroMesa` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id`, `precioTotal`, `fechaHora`, `numeroMesa`) VALUES
(2, 123, '2022-10-04', 7),
(3, 23, '2022-10-04', 8),
(4, 231, '2022-10-04', 9),
(5, 89, '2022-10-04', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ord_mesa`
--

CREATE TABLE `ord_mesa` (
  `idMesa` int(16) NOT NULL,
  `idOrden` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(16) NOT NULL,
  `estadoPago` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_metodo`
--

CREATE TABLE `pago_metodo` (
  `idPago` int(16) NOT NULL,
  `idMetodoP` int(16) NOT NULL,
  `nombreMetodo` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_ord`
--

CREATE TABLE `pago_ord` (
  `idPago` int(16) NOT NULL,
  `idOrden` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pertenece`
--

CREATE TABLE `pertenece` (
  `idMenu` int(16) NOT NULL,
  `idProduc` int(16) NOT NULL,
  `nombreProducto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(16) NOT NULL,
  `nombre` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(16) NOT NULL,
  `celiaco` tinyint(1) NOT NULL DEFAULT 0,
  `vegano` tinyint(1) NOT NULL DEFAULT 0,
  `vegetariano` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `tipo`, `precio`, `celiaco`, `vegano`, `vegetariano`) VALUES
(23, 'pizza', 'Plato', 120, 0, 0, 0),
(24, 'Coca-cola', 'Bebida', 54, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pro_ord`
--

CREATE TABLE `pro_ord` (
  `idPro` int(16) NOT NULL,
  `idOrden` int(16) NOT NULL,
  `descripcion` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cantidadProductos` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `realiza`
--

CREATE TABLE `realiza` (
  `idEst` int(16) NOT NULL,
  `idProduc` int(16) NOT NULL,
  `nombreProducto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `cedula` int(8) NOT NULL,
  `ID` int(15) NOT NULL,
  `telefonoCliente` int(16) NOT NULL,
  `fechaHora` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `res_mesa`
--

CREATE TABLE `res_mesa` (
  `idMesa` int(16) NOT NULL,
  `idRes` int(16) NOT NULL,
  `cedula` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `res_ord`
--

CREATE TABLE `res_ord` (
  `cedula` int(16) NOT NULL,
  `idRes` int(16) NOT NULL,
  `idOrd` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(24) NOT NULL,
  `tipo` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `estadoRecuperar` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `tipo`, `pass`, `pin`, `estadoRecuperar`) VALUES
(76, 'admin@admin', 'Administrador', '1234', NULL, 0),
(77, 'mozo@mozo', 'Mozo', '', 1234, 0),
(78, 'gerente@gerente', 'Gerente', '1234', NULL, 0),
(79, 'cocina@cocina', 'Cocina', '', 1234, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `cat_pro`
--
ALTER TABLE `cat_pro`
  ADD KEY `FK_idCat` (`idCat`),
  ADD KEY `FK_idPro` (`idPro`),
  ADD KEY `FK_nombrePro` (`nombre`) USING BTREE;

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clie_ord`
--
ALTER TABLE `clie_ord`
  ADD KEY `idOrd` (`idOrd`,`idCLiente`),
  ADD KEY `idCLiente` (`idCLiente`);

--
-- Indices de la tabla `clie_res`
--
ALTER TABLE `clie_res`
  ADD KEY `idRes` (`idRes`,`idCLiente`,`cedula`),
  ADD KEY `cedula` (`cedula`),
  ADD KEY `idCLiente` (`idCLiente`);

--
-- Indices de la tabla `estacion`
--
ALTER TABLE `estacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadopago`
--
ALTER TABLE `estadopago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  ADD PRIMARY KEY (`id`,`nombre`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ord_mesa`
--
ALTER TABLE `ord_mesa`
  ADD KEY `idMesa` (`idMesa`,`idOrden`),
  ADD KEY `idOrden` (`idOrden`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago_metodo`
--
ALTER TABLE `pago_metodo`
  ADD KEY `idPago` (`idPago`,`idMetodoP`,`nombreMetodo`),
  ADD KEY `idMetodoP` (`idMetodoP`),
  ADD KEY `nombreMetodo` (`nombreMetodo`) USING BTREE;

--
-- Indices de la tabla `pago_ord`
--
ALTER TABLE `pago_ord`
  ADD KEY `idPago` (`idPago`,`idOrden`),
  ADD KEY `idOrden` (`idOrden`);

--
-- Indices de la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD KEY `idMenu` (`idMenu`,`idProduc`,`nombreProducto`),
  ADD KEY `idProduc` (`idProduc`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`,`nombre`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `pro_ord`
--
ALTER TABLE `pro_ord`
  ADD KEY `idPro` (`idPro`,`idOrden`),
  ADD KEY `idOrden` (`idOrden`);

--
-- Indices de la tabla `realiza`
--
ALTER TABLE `realiza`
  ADD KEY `idEst` (`idEst`,`idProduc`,`nombreProducto`),
  ADD KEY `idProduc` (`idProduc`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`ID`,`cedula`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `res_mesa`
--
ALTER TABLE `res_mesa`
  ADD KEY `idRes` (`idRes`,`idMesa`,`cedula`),
  ADD KEY `idMesa` (`idMesa`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `res_ord`
--
ALTER TABLE `res_ord`
  ADD KEY `cedula` (`cedula`,`idRes`,`idOrd`),
  ADD KEY `idRes` (`idRes`),
  ADD KEY `idOrd` (`idOrd`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estacion`
--
ALTER TABLE `estacion`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadopago`
--
ALTER TABLE `estadopago`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cat_pro`
--
ALTER TABLE `cat_pro`
  ADD CONSTRAINT `FK_Cat_id` FOREIGN KEY (`idCat`) REFERENCES `categoria` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Pro_id` FOREIGN KEY (`idPro`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cat_pro_ibfk_1` FOREIGN KEY (`nombre`) REFERENCES `producto` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clie_ord`
--
ALTER TABLE `clie_ord`
  ADD CONSTRAINT `clie_ord_ibfk_1` FOREIGN KEY (`idOrd`) REFERENCES `orden` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clie_ord_ibfk_2` FOREIGN KEY (`idCLiente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clie_res`
--
ALTER TABLE `clie_res`
  ADD CONSTRAINT `clie_res_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `reserva` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clie_res_ibfk_2` FOREIGN KEY (`idCLiente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clie_res_ibfk_3` FOREIGN KEY (`idRes`) REFERENCES `reserva` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pago_metodo`
--
ALTER TABLE `pago_metodo`
  ADD CONSTRAINT `pago_metodo_ibfk_1` FOREIGN KEY (`idPago`) REFERENCES `pago` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pago_metodo_ibfk_2` FOREIGN KEY (`idMetodoP`) REFERENCES `metodopago` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pago_metodo_ibfk_3` FOREIGN KEY (`nombreMetodo`) REFERENCES `metodopago` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD CONSTRAINT `pertenece_ibfk_1` FOREIGN KEY (`idMenu`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pertenece_ibfk_2` FOREIGN KEY (`idProduc`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pro_ord`
--
ALTER TABLE `pro_ord`
  ADD CONSTRAINT `pro_ord_ibfk_1` FOREIGN KEY (`idPro`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pro_ord_ibfk_2` FOREIGN KEY (`idOrden`) REFERENCES `orden` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `realiza`
--
ALTER TABLE `realiza`
  ADD CONSTRAINT `realiza_ibfk_1` FOREIGN KEY (`idEst`) REFERENCES `estacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `realiza_ibfk_2` FOREIGN KEY (`idProduc`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `res_mesa`
--
ALTER TABLE `res_mesa`
  ADD CONSTRAINT `res_mesa_ibfk_1` FOREIGN KEY (`idMesa`) REFERENCES `mesa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `res_mesa_ibfk_2` FOREIGN KEY (`idRes`) REFERENCES `reserva` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `res_mesa_ibfk_3` FOREIGN KEY (`cedula`) REFERENCES `reserva` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `res_ord`
--
ALTER TABLE `res_ord`
  ADD CONSTRAINT `res_ord_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `reserva` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `res_ord_ibfk_2` FOREIGN KEY (`idRes`) REFERENCES `reserva` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `res_ord_ibfk_3` FOREIGN KEY (`idOrd`) REFERENCES `orden` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
