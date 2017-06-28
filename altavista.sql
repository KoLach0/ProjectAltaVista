-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2017 a las 18:42:44
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `altavista`
--
CREATE DATABASE IF NOT EXISTS `altavista` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `altavista`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartamentos`
--

CREATE TABLE IF NOT EXISTS `apartamentos` (
`id_apartamentos` int(11) NOT NULL,
  `numero_apto` int(11) NOT NULL,
  `torre` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='			' AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `apartamentos`
--

INSERT INTO `apartamentos` (`id_apartamentos`, `numero_apto`, `torre`) VALUES
(1, 10, '1'),
(2, 20, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
`id_pagos` int(11) NOT NULL,
  `id_apartamento` int(11) NOT NULL,
  `tipo_pago` int(11) NOT NULL,
  `referencia` varchar(45) NOT NULL,
  `valor` int(11) NOT NULL,
  `fecha` varchar(25) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `url_documento` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pagos`, `id_apartamento`, `tipo_pago`, `referencia`, `valor`, `fecha`, `estado`, `url_documento`) VALUES
(1, 1, 1, '', 100000, '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqueaderos`
--

CREATE TABLE IF NOT EXISTS `parqueaderos` (
`id_parqueadero` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `parqueaderos`
--

INSERT INTO `parqueaderos` (`id_parqueadero`, `estado`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id_roles` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_roles`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Residente'),
(3, 'Guardia'),
(4, 'Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE IF NOT EXISTS `solicitudes` (
`id_solicitude` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `id_parqueadero` int(11) NOT NULL,
  `fecha_solicitud` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id_solicitude`, `id_vehiculo`, `id_parqueadero`, `fecha_solicitud`) VALUES
(2, 1, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE IF NOT EXISTS `tipo_pago` (
`id_tipo_pago` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_pago`
--

INSERT INTO `tipo_pago` (`id_tipo_pago`, `nombre`) VALUES
(1, 'Efectivo'),
(2, 'Cheque'),
(3, 'Tarjeta Credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vehiculo`
--

CREATE TABLE IF NOT EXISTS `tipo_vehiculo` (
`id_tipo_vehiculo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_vehiculo`
--

INSERT INTO `tipo_vehiculo` (`id_tipo_vehiculo`, `nombre`) VALUES
(1, 'Automovil'),
(2, 'Motocicleta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `fechaNacimiento` varchar(25) NOT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'Activo',
  `contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `nombre`, `apellido`, `fechaNacimiento`, `correo`, `estado`, `contraseña`) VALUES
(100000000, 'Rubena', 'Sinsuegra', '', 'rubena@hotmail.com', 'Activo', '1010'),
(1023032311, 'Nicolas', 'Albarracin', '', 'kolachito@hotmail.com', 'Activo', '2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_has_apartamentos`
--

CREATE TABLE IF NOT EXISTS `usuarios_has_apartamentos` (
  `usuarios_cedula` int(11) NOT NULL,
  `apartamentos_id_apartamentos` int(11) NOT NULL,
  `residente` varchar(2) NOT NULL,
  `propietario` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios_has_apartamentos`
--

INSERT INTO `usuarios_has_apartamentos` (`usuarios_cedula`, `apartamentos_id_apartamentos`, `residente`, `propietario`) VALUES
(100000000, 1, 'NO', 'SI'),
(1023032311, 1, 'SI', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_has_roles`
--

CREATE TABLE IF NOT EXISTS `usuarios_has_roles` (
  `usuarios_cc` int(11) NOT NULL,
  `roles_idroles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios_has_roles`
--

INSERT INTO `usuarios_has_roles` (`usuarios_cc`, `roles_idroles`) VALUES
(100000000, 1),
(1023032311, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE IF NOT EXISTS `vehiculos` (
`id_vehiculo` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `tipo_vehiculo` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `placa` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `id_usuarios`, `tipo_vehiculo`, `marca`, `placa`) VALUES
(1, 1023032311, 1, 'Chevrolet', 'A15SB');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
 ADD PRIMARY KEY (`id_apartamentos`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
 ADD PRIMARY KEY (`id_pagos`), ADD KEY `fk_tipo_pago_pagos_idx` (`tipo_pago`), ADD KEY `fk_apartamento_pagos_idx` (`id_apartamento`);

--
-- Indices de la tabla `parqueaderos`
--
ALTER TABLE `parqueaderos`
 ADD PRIMARY KEY (`id_parqueadero`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id_roles`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
 ADD PRIMARY KEY (`id_solicitude`), ADD KEY `fk_parqueaderos_solicitudes_idx` (`id_parqueadero`), ADD KEY `fk_vehiculos_solicitudes_idx` (`id_vehiculo`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
 ADD PRIMARY KEY (`id_tipo_pago`);

--
-- Indices de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
 ADD PRIMARY KEY (`id_tipo_vehiculo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `usuarios_has_apartamentos`
--
ALTER TABLE `usuarios_has_apartamentos`
 ADD PRIMARY KEY (`usuarios_cedula`,`apartamentos_id_apartamentos`), ADD KEY `fk_usuarios_has_apartamentos_usuarios1_idx` (`usuarios_cedula`), ADD KEY `fk_apartamento_has_usuarios_idx` (`apartamentos_id_apartamentos`);

--
-- Indices de la tabla `usuarios_has_roles`
--
ALTER TABLE `usuarios_has_roles`
 ADD PRIMARY KEY (`usuarios_cc`,`roles_idroles`), ADD KEY `fk_usuarios_has_roles_roles1_idx` (`roles_idroles`), ADD KEY `fk_usuarios_has_roles_usuarios_idx` (`usuarios_cc`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
 ADD PRIMARY KEY (`id_vehiculo`), ADD KEY `fk_usuarios_vehiculos_idx` (`id_usuarios`), ADD KEY `fk_tipo_vehiculo_vehiculos_idx` (`tipo_vehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
MODIFY `id_apartamentos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
MODIFY `id_pagos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `parqueaderos`
--
ALTER TABLE `parqueaderos`
MODIFY `id_parqueadero` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
MODIFY `id_solicitude` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
MODIFY `id_tipo_pago` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
MODIFY `id_tipo_vehiculo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
ADD CONSTRAINT `fk_apartamento_pagos` FOREIGN KEY (`id_apartamento`) REFERENCES `apartamentos` (`id_apartamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_tipo_pago_pagos` FOREIGN KEY (`tipo_pago`) REFERENCES `tipo_pago` (`id_tipo_pago`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
ADD CONSTRAINT `fk_parqueaderos_solicitudes` FOREIGN KEY (`id_parqueadero`) REFERENCES `parqueaderos` (`id_parqueadero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_vehiculos_solicitudes` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`id_vehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios_has_apartamentos`
--
ALTER TABLE `usuarios_has_apartamentos`
ADD CONSTRAINT `fk_apartamento_has_usuarios` FOREIGN KEY (`apartamentos_id_apartamentos`) REFERENCES `apartamentos` (`id_apartamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_usuarios_has_apartamentos_usuarios1` FOREIGN KEY (`usuarios_cedula`) REFERENCES `usuarios` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios_has_roles`
--
ALTER TABLE `usuarios_has_roles`
ADD CONSTRAINT `fk_usuarios_has_roles_roles1` FOREIGN KEY (`roles_idroles`) REFERENCES `roles` (`id_roles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_usuarios_has_roles_usuarios` FOREIGN KEY (`usuarios_cc`) REFERENCES `usuarios` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
ADD CONSTRAINT `fk_tipo_vehiculo_vehiculos` FOREIGN KEY (`tipo_vehiculo`) REFERENCES `tipo_vehiculo` (`id_tipo_vehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_usuarios_vehiculos` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
