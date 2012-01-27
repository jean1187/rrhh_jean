-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-01-2012 a las 15:24:11
-- Versión del servidor: 5.1.58
-- Versión de PHP: 5.3.6-13ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `rrhh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

CREATE TABLE IF NOT EXISTS `beneficiario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  `funcionario_id` int(11) DEFAULT NULL,
  `parentezco_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E8D0B617F5F88DB9` (`persona_id`),
  KEY `IDX_E8D0B617642FEB76` (`funcionario_id`),
  KEY `IDX_E8D0B6177CAC4034` (`parentezco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `beneficiario`
--

INSERT INTO `beneficiario` (`id`, `persona_id`, `funcionario_id`, `parentezco_id`) VALUES
(1, 21, 13, 1),
(2, 22, 7, 2),
(3, 23, 10, 5),
(4, 24, 2, 3),
(5, 25, 12, 4),
(6, 26, 14, 2),
(7, 27, 6, 1),
(8, 28, 4, 3),
(9, 29, 9, 4),
(10, 30, 2, 1),
(11, 31, 10, 5),
(12, 32, 3, 3),
(13, 33, 2, 3),
(14, 34, 15, 6),
(15, 35, 8, 3),
(16, 36, 13, 3),
(17, 37, 9, 3),
(18, 38, 1, 3),
(19, 39, 14, 2),
(20, 40, 6, 1),
(21, 41, 18, 1),
(22, 42, 6, 5),
(23, 43, 6, 5),
(24, 44, 20, 1),
(25, 45, 18, 6),
(26, 46, 6, 3),
(27, 47, 8, 3),
(28, 48, 16, 4),
(29, 49, 18, 6),
(30, 50, 14, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `sueldo` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `nombre`, `sueldo`) VALUES
(1, 'Tecnico II', 25777),
(2, 'Desarrollo de Aplicaciones', 15000),
(3, 'Analista I', 2802),
(4, 'Programador', 4494),
(5, 'jean', 1111),
(6, 'Confeccionista', 42307),
(7, 'Director', 2876),
(8, 'Secretario', 4781),
(9, 'Servicio General', 4671),
(10, 'Obrero1', 3270);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos_dependencia`
--

CREATE TABLE IF NOT EXISTS `cargos_dependencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargos_id` int(11) DEFAULT NULL,
  `dependencia_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_35C3C57DA4804C6` (`cargos_id`),
  KEY `IDX_35C3C57DDF2432B6` (`dependencia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cargos_dependencia`
--

INSERT INTO `cargos_dependencia` (`id`, `cargos_id`, `dependencia_id`) VALUES
(1, 1, 4),
(2, 2, 1),
(3, 3, 1),
(4, 4, 4),
(5, 5, 4),
(6, 6, 3),
(7, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_status`
--

CREATE TABLE IF NOT EXISTS `cat_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cat_status`
--

INSERT INTO `cat_status` (`id`, `nombre`) VALUES
(1, 'Academico'),
(2, 'Persona'),
(3, 'Documentos'),
(4, 'Lateralidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencia`
--

CREATE TABLE IF NOT EXISTS `dependencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direccion_id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D23000C8D0A7BD7` (`direccion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `dependencia`
--

INSERT INTO `dependencia` (`id`, `direccion_id`, `nombre`) VALUES
(1, 2, 'Desarrollo'),
(2, 1, 'Soporte Tecnico'),
(3, 3, 'Administracion de Personas'),
(4, 2, 'Soporte Tecnico'),
(12, 2, 'Soporte Tecnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id`, `nombre`) VALUES
(1, 'Tecnologia y Sistemas'),
(2, 'Recursos Humanos'),
(3, 'conaplan'),
(4, 'frfrfrfrf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_civil`
--

CREATE TABLE IF NOT EXISTS `estado_civil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estado_civil`
--

INSERT INTO `estado_civil` (`id`, `nombre`) VALUES
(1, 'Soltero(a)'),
(2, 'Casado(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_grupo`
--

CREATE TABLE IF NOT EXISTS `fos_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_AACF42CD5E237E06` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `fos_grupo`
--

INSERT INTO `fos_grupo` (`id`, `name`, `roles`) VALUES
(1, 'Roles-Basicos', 'a:4:{i:0;s:11:"ROLE_MEMBER";i:1;s:10:"ROLE_ADMIN";i:2;s:15:"ROL_SUPER_ADMIN";i:3;s:9:"ROLE_JEAN";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_user_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_B3C77447A76ED395` (`user_id`),
  KEY `IDX_B3C77447FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fos_user_user_group`
--

INSERT INTO `fos_user_user_group` (`user_id`, `group_id`) VALUES
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  `estado_civil_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `lateralidad_id` int(11) DEFAULT NULL,
  `tipo_funcionario_id` int(11) DEFAULT NULL,
  `fch_ingreso` date NOT NULL,
  `direccion_e` longtext,
  `contacto_e` longtext,
  `vivienda` tinyint(1) DEFAULT NULL,
  `vehiculo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7510A3CFF5F88DB9` (`persona_id`),
  KEY `IDX_7510A3CF75376D93` (`estado_civil_id`),
  KEY `IDX_7510A3CF6BF700BD` (`status_id`),
  KEY `IDX_7510A3CF9884F7AE` (`lateralidad_id`),
  KEY `IDX_7510A3CFE8FC24D6` (`tipo_funcionario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `funcionario`
--

INSERT INTO `funcionario` (`id`, `persona_id`, `estado_civil_id`, `status_id`, `lateralidad_id`, `tipo_funcionario_id`, `fch_ingreso`, `direccion_e`, `contacto_e`, `vivienda`, `vehiculo`) VALUES
(1, 1, 2, 3, 7, 3, '1999-07-20', NULL, NULL, 1, 0),
(2, 2, 2, 4, 8, 2, '2001-04-21', NULL, NULL, 0, 0),
(3, 3, 1, 4, 7, 3, '1990-09-25', NULL, NULL, 1, 0),
(4, 4, 2, 4, 7, 1, '1990-03-22', NULL, NULL, 0, 1),
(5, 5, 2, 4, 8, 2, '2009-08-12', NULL, NULL, 1, 1),
(6, 6, 1, 4, 7, 1, '1992-02-09', NULL, NULL, 0, 1),
(7, 7, 1, 3, 8, 1, '2009-07-08', NULL, NULL, 0, 0),
(8, 8, 1, 3, 7, 2, '2001-03-09', NULL, NULL, 1, 0),
(9, 9, 2, 3, 7, 1, '1989-07-05', NULL, NULL, 1, 1),
(10, 10, 1, 4, 8, 3, '1994-07-24', NULL, NULL, 0, 1),
(11, 11, 2, 3, 7, 2, '1989-09-20', NULL, NULL, 1, 0),
(12, 12, 1, 3, 7, 2, '2001-04-26', NULL, NULL, 1, 1),
(13, 13, 1, 4, 8, 3, '1993-05-01', NULL, NULL, 1, 1),
(14, 14, 1, 3, 7, 1, '1994-09-26', NULL, NULL, 0, 1),
(15, 15, 2, 3, 8, 3, '2004-04-10', NULL, NULL, 1, 1),
(16, 16, 2, 4, 7, 2, '2004-04-11', NULL, NULL, 1, 1),
(17, 17, 2, 4, 7, 3, '1993-12-11', NULL, NULL, 0, 1),
(18, 18, 2, 4, 7, 3, '2009-08-25', NULL, NULL, 0, 0),
(19, 19, 1, 4, 8, 3, '1989-01-04', NULL, NULL, 0, 1),
(20, 20, 1, 4, 8, 1, '2007-01-23', NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario_cargos_dependencia`
--

CREATE TABLE IF NOT EXISTS `funcionario_cargos_dependencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcionario_id` int(11) DEFAULT NULL,
  `cargos_dependencia_id` int(11) DEFAULT NULL,
  `sueldo` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AA4654A4642FEB76` (`funcionario_id`),
  KEY `IDX_AA4654A48E888E07` (`cargos_dependencia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `funcionario_cargos_dependencia`
--

INSERT INTO `funcionario_cargos_dependencia` (`id`, `funcionario_id`, `cargos_dependencia_id`, `sueldo`) VALUES
(1, 1, 1, NULL),
(2, 2, 4, 6892),
(3, 3, 2, 5671),
(4, 4, 4, 2293),
(5, 5, 7, 5058),
(6, 6, 6, 5848),
(7, 7, 7, 7099),
(8, 8, 3, 2143),
(9, 9, 6, 6577),
(10, 10, 1, NULL),
(11, 11, 4, NULL),
(12, 12, 6, 6794),
(13, 13, 2, 7066),
(14, 14, 5, 6903),
(15, 15, 1, 5171),
(16, 16, 1, 7951),
(17, 17, 6, 1428),
(18, 18, 5, 2667),
(19, 19, 1, 2537),
(20, 20, 2, 7435);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL,
  `uri` varchar(200) DEFAULT NULL,
  `roles` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7D053A933D8E604F` (`parent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_group`
--

CREATE TABLE IF NOT EXISTS `menu_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_FC6C67A2A76ED395` (`user_id`),
  KEY `IDX_FC6C67A2FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_academico`
--

CREATE TABLE IF NOT EXISTS `nivel_academico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `nivel_academico`
--

INSERT INTO `nivel_academico` (`id`, `nombre`) VALUES
(1, 'Ninguno'),
(2, 'Basico'),
(3, 'Medio'),
(4, 'Universitario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentezco`
--

CREATE TABLE IF NOT EXISTS `parentezco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `parentezco`
--

INSERT INTO `parentezco` (`id`, `nombre`) VALUES
(1, 'Padre'),
(2, 'Madre'),
(3, 'Hijo(a)'),
(4, 'Esposo(a)'),
(5, 'Conyugue'),
(6, 'Hermano(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE IF NOT EXISTS `permiso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT NULL,
  `funcionario_id` int(11) DEFAULT NULL,
  `motivo` longtext,
  `fch_solicitud` date DEFAULT NULL,
  `fch_permiso` date DEFAULT NULL,
  `fch_desde` datetime DEFAULT NULL,
  `fch_hasta` datetime DEFAULT NULL,
  `fch_final` datetime DEFAULT NULL,
  `fch_cre` datetime DEFAULT NULL,
  `fch_modif` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FD7AAB9E6BF700BD` (`status_id`),
  KEY `IDX_FD7AAB9E642FEB76` (`funcionario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id`, `status_id`, `funcionario_id`, `motivo`, `fch_solicitud`, `fch_permiso`, `fch_desde`, `fch_hasta`, `fch_final`, `fch_cre`, `fch_modif`) VALUES
(1, 6, NULL, 'ytutututy', '2011-04-03', '2009-03-04', NULL, '1970-05-31 00:00:00', NULL, NULL, '2007-01-30 00:00:00'),
(2, NULL, 1, 'hnkjhkhkh', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, 'julkjlkjkl', '2009-03-05', '2009-04-03', '2007-05-01 02:03:00', '2010-09-03 05:06:00', '2013-05-04 03:05:00', NULL, NULL),
(4, NULL, NULL, 'tetertert', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel_academico_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `tlf_celular` varchar(11) DEFAULT NULL,
  `tlf_habitacion` varchar(11) DEFAULT NULL,
  `direccion` longtext,
  `fch_cre` datetime NOT NULL,
  `fch_modif` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_51E5B69BC21F5FA8` (`nivel_academico_id`),
  KEY `IDX_51E5B69B6BF700BD` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nivel_academico_id`, `status_id`, `cedula`, `nombre`, `apellido`, `sexo`, `tlf_celular`, `tlf_habitacion`, `direccion`, `fch_cre`, `fch_modif`) VALUES
(1, 2, 3, NULL, 'Daniel', 'Molina Domínguez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(2, 3, 4, NULL, 'Haritz', 'Serrano Blanco', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(3, 1, 3, NULL, 'Guillermo', 'Romero González', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(4, 1, 4, NULL, 'Carlos', 'Gerrero Lozano', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(5, 4, 4, NULL, 'Miguel', 'Garrido Gutiérrez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(6, 2, 3, NULL, 'Iago', 'Marín Delgado', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(7, 2, 3, NULL, 'Pedro', 'Romero Hernández', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(8, 2, 4, NULL, 'Sergio', 'Prieto Martín', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(9, 1, 3, NULL, 'Oriol', 'Morales Castro', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(10, 2, 3, NULL, 'Ariel', 'Prieto Rodríguez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(11, 2, 3, NULL, 'Cayetano', 'Jiménez Delgado', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(12, 1, 3, NULL, 'Marc', 'Martín Sanz', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(13, 4, 4, NULL, 'Dimas', 'Lozano Torres', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(14, 2, 4, NULL, 'Bernardo', 'Martín Rodríguez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(15, 1, 3, NULL, 'Pere', 'Ruiz Morales', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(16, 4, 4, NULL, 'Miguel', 'Álvarez Cano', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(17, 1, 4, NULL, 'Jose', 'Moreno Vázquez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(18, 1, 3, NULL, 'Marc', 'Romero Sánchez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(19, 1, 3, NULL, 'Carlos', 'Gómez González', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(20, 3, 4, NULL, 'Moisés', 'Cortés Medina', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(21, 3, 4, NULL, 'Iván', 'Castillo Díaz', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(22, 3, 4, NULL, 'Rubén', 'Garrido Fernández', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(23, 4, 3, NULL, 'Albert', 'Martín Muñoz', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(24, 4, 3, NULL, 'Rebeca', 'Cano Marín', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(25, 2, 3, NULL, 'Eduardo', 'Martín López', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(26, 3, 4, NULL, 'Dimas', 'Iglesias Lozano', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(27, 4, 3, NULL, 'Vicente', 'Gil Iglesias', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(28, 3, 4, NULL, 'César', 'Blanco Hernández', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(29, 2, 4, NULL, 'Marc', 'Ramírez Fernández', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(30, 3, 3, NULL, 'Cristian', 'Muñoz Moreno', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(31, 1, 4, NULL, 'Alberto', 'Ramírez Gutiérrez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(32, 2, 4, NULL, 'Salvador', 'Jiménez Prieto', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(33, 4, 4, NULL, 'Benjamin', 'Álvarez Medina', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(34, 4, 3, NULL, 'Rebeca', 'Torres Blanco', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(35, 1, 3, NULL, 'Daniel', 'Martín Gutiérrez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(36, 1, 4, NULL, 'Jose', 'Rubio Suárez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(37, 3, 3, NULL, 'Antonio', 'Delgado Serrano', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(38, 1, 4, NULL, 'David', 'Rubio Sánchez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(39, 3, 4, NULL, 'Carles', 'Fernández Ortíz', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(40, 3, 4, NULL, 'Bernardo', 'Ramírez Santos', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(41, 3, 4, NULL, 'Alberto', 'Navarro Torres', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(42, 2, 4, NULL, 'Víctor', 'Torres Martínez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(43, 4, 4, NULL, 'Iván', 'Ramos Torres', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(44, 1, 3, NULL, 'César', 'Gutiérrez Castillo', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(45, 4, 4, NULL, 'Raúl', 'Suárez Santos', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(46, 4, 3, NULL, 'Bernardo', 'Castillo Jiménez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(47, 1, 3, NULL, 'Francisco', 'Cano Ortega', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(48, 2, 4, NULL, 'Fernando', 'González Domínguez', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(49, 3, 4, NULL, 'Jorge', 'Núñez Ramos', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00'),
(50, 4, 4, NULL, 'Iago', 'Díaz Martín', NULL, NULL, NULL, NULL, '2011-08-01 00:00:00', '2011-11-08 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reposo`
--

CREATE TABLE IF NOT EXISTS `reposo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcionario_id` int(11) DEFAULT NULL,
  `diagnostico` longtext,
  `fch_ini` date DEFAULT NULL,
  `fch_hasta` date DEFAULT NULL,
  `fch_cre` datetime DEFAULT NULL,
  `fch_modif` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_57518F29642FEB76` (`funcionario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_status_id` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7B00651C84A038D2` (`cat_status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `cat_status_id`, `nombre`) VALUES
(1, 1, 'Culminado'),
(2, 1, 'Sin Culminar'),
(3, 2, 'Activo(a)'),
(4, 2, 'Inactivo(a)'),
(5, 3, 'Anulado'),
(6, 3, 'Activo'),
(7, 4, 'Zurdo(a)'),
(8, 4, 'Derecho(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_funcionario`
--

CREATE TABLE IF NOT EXISTS `tipo_funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_funcionario`
--

INSERT INTO `tipo_funcionario` (`id`, `nombre`) VALUES
(1, 'Fijo(a)'),
(2, 'Contratado(a)'),
(3, 'Comision');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos`
--

CREATE TABLE IF NOT EXISTS `titulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `titulos`
--

INSERT INTO `titulos` (`id`, `nombre`) VALUES
(1, 'Ing en Informatica'),
(2, 'Lic en Contabilidad'),
(3, 'Ing Electrico'),
(4, 'mmmmm'),
(5, 'uuuuuu'),
(6, 'oooooo'),
(7, 'yyyyyyyyyyyyyyyyyyyyy'),
(8, 'trtrtrt'),
(9, 'iiiiiiiiiiiiiiiiiiiiiii'),
(10, 'hohohoho'),
(11, 'oooo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos_persona`
--

CREATE TABLE IF NOT EXISTS `titulos_persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulos_id` int(11) DEFAULT NULL,
  `persona_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4C5F002AFE7C2660` (`titulos_id`),
  KEY `IDX_4C5F002AF5F88DB9` (`persona_id`),
  KEY `IDX_4C5F002A6BF700BD` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `titulos_persona`
--

INSERT INTO `titulos_persona` (`id`, `titulos_id`, `persona_id`, `status_id`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 1),
(3, 2, 3, 1),
(4, 3, 4, 1),
(5, 3, 5, 2),
(6, 3, 6, 2),
(7, 3, 7, 2),
(8, 1, 8, 1),
(9, 2, 9, 1),
(10, 1, 10, 1),
(11, 1, 11, 1),
(12, 1, 12, 1),
(13, 3, 13, 1),
(14, 1, 14, 1),
(15, 2, 15, 2),
(16, 1, 16, 2),
(17, 3, 17, 2),
(18, 1, 18, 1),
(19, 1, 19, 1),
(20, 2, 20, 2),
(21, 1, 21, 1),
(22, 3, 22, 1),
(23, 1, 23, 2),
(24, 3, 24, 1),
(25, 3, 25, 1),
(26, 1, 26, 2),
(27, 3, 27, 2),
(28, 2, 28, 2),
(29, 3, 29, 1),
(30, 3, 30, 1),
(31, 3, 31, 1),
(32, 2, 32, 1),
(33, 1, 33, 1),
(34, 1, 34, 1),
(35, 2, 35, 1),
(36, 3, 36, 2),
(37, 3, 37, 1),
(38, 1, 38, 2),
(39, 2, 39, 1),
(40, 2, 40, 1),
(41, 1, 41, 2),
(42, 1, 42, 1),
(43, 1, 43, 2),
(44, 2, 44, 2),
(45, 1, 45, 1),
(46, 3, 46, 1),
(47, 1, 47, 2),
(48, 1, 48, 1),
(49, 2, 49, 2),
(50, 1, 50, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `username_canonical` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_canonical` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `algorithm` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2265B05D92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2265B05DA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `algorithm`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'admin1', 'admin1', 'john@example.com1', 'john@example.com1', 1, 'sha512', 'cmjs4xyrxl448cwc40s0g0o08488sos', '2c7bce80d504bc74061a3405293d12ad4f298f36cf3c95684fd6c861d4b1d6220977fa9a88aa8b73d7da8cc60afc2c61baf82ad2d0f70c8ff4c0d3bbf38d4966', '2012-01-27 15:05:52', 0, 0, NULL, '41u2y9vw5yww0o00808wkss4woss4swkggk84w0c44oo48kgk4', NULL, 'a:0:{}', 0, NULL),
(2, 'admin2', 'admin2', 'john@example.com2', 'john@example.com2', 1, 'sha512', '5ul6ec1vgpwkw4sg4c4wc44kw8wwskc', '224ce020daf1c70f95cf45bf162807892961d5bb934052212316948935e90800216090ca9c915e9354b7967ae7aecdd9f4e69c3d781b5051544e76ef978e3386', NULL, 0, 0, NULL, '1whe2z9hsbdws80ckkcowk8wg404skc8g0w0kskkc4cgk0soss', NULL, 'a:0:{}', 0, NULL),
(3, 'admin3', 'admin3', 'john@example.com3', 'john@example.com3', 1, 'sha512', '9j6cwimvmxgc4cg4084s0g0sw40soo8', 'a381a71fd6d6b503b9d4c6d8566ab52d6f6040ec890faff24d3214f3d4ef2cc78d21ac1b4f4b646b28051fcf8d742a79a5469315fb16909ea7004bd78bc58648', NULL, 0, 0, NULL, '517qikomc0g8g48cwwoscgs4wkcwskc44ogogw8oog4gkwo4k8', NULL, 'a:0:{}', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacaciones`
--

CREATE TABLE IF NOT EXISTS `vacaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcionario_id` int(11) DEFAULT NULL,
  `fch_ini` date DEFAULT NULL,
  `fch_hasta` date DEFAULT NULL,
  `fch_cre` datetime DEFAULT NULL,
  `fch_modif` datetime DEFAULT NULL,
  `tomadas` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CAA83E94642FEB76` (`funcionario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD CONSTRAINT `beneficiario_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `beneficiario_ibfk_2` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionario` (`id`),
  ADD CONSTRAINT `beneficiario_ibfk_3` FOREIGN KEY (`parentezco_id`) REFERENCES `parentezco` (`id`);

--
-- Filtros para la tabla `cargos_dependencia`
--
ALTER TABLE `cargos_dependencia`
  ADD CONSTRAINT `cargos_dependencia_ibfk_1` FOREIGN KEY (`cargos_id`) REFERENCES `cargos` (`id`),
  ADD CONSTRAINT `cargos_dependencia_ibfk_2` FOREIGN KEY (`dependencia_id`) REFERENCES `dependencia` (`id`);

--
-- Filtros para la tabla `dependencia`
--
ALTER TABLE `dependencia`
  ADD CONSTRAINT `dependencia_ibfk_1` FOREIGN KEY (`direccion_id`) REFERENCES `direccion` (`id`);

--
-- Filtros para la tabla `fos_user_user_group`
--
ALTER TABLE `fos_user_user_group`
  ADD CONSTRAINT `fos_user_user_group_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `fos_user_user_group_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `fos_grupo` (`id`);

--
-- Filtros para la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `funcionario_ibfk_2` FOREIGN KEY (`estado_civil_id`) REFERENCES `estado_civil` (`id`),
  ADD CONSTRAINT `funcionario_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `funcionario_ibfk_4` FOREIGN KEY (`lateralidad_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `funcionario_ibfk_5` FOREIGN KEY (`tipo_funcionario_id`) REFERENCES `tipo_funcionario` (`id`);

--
-- Filtros para la tabla `funcionario_cargos_dependencia`
--
ALTER TABLE `funcionario_cargos_dependencia`
  ADD CONSTRAINT `funcionario_cargos_dependencia_ibfk_1` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionario` (`id`),
  ADD CONSTRAINT `funcionario_cargos_dependencia_ibfk_2` FOREIGN KEY (`cargos_dependencia_id`) REFERENCES `cargos_dependencia` (`id`);

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`);

--
-- Filtros para la tabla `menu_group`
--
ALTER TABLE `menu_group`
  ADD CONSTRAINT `menu_group_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `menu_group_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `fos_grupo` (`id`);

--
-- Filtros para la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD CONSTRAINT `permiso_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `permiso_ibfk_2` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionario` (`id`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`nivel_academico_id`) REFERENCES `nivel_academico` (`id`),
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

--
-- Filtros para la tabla `reposo`
--
ALTER TABLE `reposo`
  ADD CONSTRAINT `reposo_ibfk_1` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionario` (`id`);

--
-- Filtros para la tabla `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`cat_status_id`) REFERENCES `cat_status` (`id`);

--
-- Filtros para la tabla `titulos_persona`
--
ALTER TABLE `titulos_persona`
  ADD CONSTRAINT `titulos_persona_ibfk_1` FOREIGN KEY (`titulos_id`) REFERENCES `titulos` (`id`),
  ADD CONSTRAINT `titulos_persona_ibfk_2` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `titulos_persona_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

--
-- Filtros para la tabla `vacaciones`
--
ALTER TABLE `vacaciones`
  ADD CONSTRAINT `vacaciones_ibfk_1` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionario` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
