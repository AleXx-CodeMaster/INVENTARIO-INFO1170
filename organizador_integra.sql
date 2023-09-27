-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2023 a las 20:01:51
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `organizador_integra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID_A` int(2) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  `ID_N` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `administrador`
--
DELIMITER $$
CREATE TRIGGER `tr_administrador_delete` BEFORE DELETE ON `administrador` FOR EACH ROW INSERT INTO log_administrador
VALUES(old.ID_A,old.ID_N,old.Nombre,old.Fecha,old.Contrasena,CURRENT_DATE)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_administrador_insert` AFTER INSERT ON `administrador` FOR EACH ROW INSERT INTO log_administrador
VALUES(new.ID_A,new.ID_N,new.Nombre,new.Contrasena,new.Fecha,CURRENT_DATE)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_administrador_update` AFTER UPDATE ON `administrador` FOR EACH ROW INSERT INTO log_administrador
VALUES(old.ID_A,old.ID_N,old.Nombre,old.Contrasena,old.Fecha,CURRENT_DATE)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `ID_F` int(3) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Recordatorio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `calendario`
--
DELIMITER $$
CREATE TRIGGER `tr_calendario_delete` BEFORE DELETE ON `calendario` FOR EACH ROW INSERT INTO log_calendarios
VALUES(old.ID_F,old.Fecha,old.Recordatorio,CURRENT_DATE)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_calendario_insert` AFTER INSERT ON `calendario` FOR EACH ROW INSERT INTO log_calendarios
VALUES(new.ID_F,new.Fecha,new.Recordatorio,CURRENT_DATE)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_calendario_update` BEFORE UPDATE ON `calendario` FOR EACH ROW INSERT INTO log_calendarios
VALUES(old.ID_F,old.Fecha,old.Recordatorio,CURRENT_DATE)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID_N` int(9) NOT NULL,
  `Oficio` varchar(30) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Salario` int(10) NOT NULL,
  `Historial_Salario` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`Historial_Salario`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID_N`, `Oficio`, `Contrasena`, `Fecha_Nacimiento`, `Salario`, `Historial_Salario`) VALUES
(1, 'Programador', 'CoNtrasena957', '0000-00-00', 55000, '60000');

--
-- Disparadores `empleados`
--
DELIMITER $$
CREATE TRIGGER `tr_empleados_delete` BEFORE DELETE ON `empleados` FOR EACH ROW INSERT INTO log_empleados
VALUES(old.ID_N,old.Oficio,old.Contrasena,old.Fecha_Nacimiento,CURRENT_DATE)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_empleados_insert` AFTER INSERT ON `empleados` FOR EACH ROW INSERT INTO log_empleados
VALUES(new.ID_N,new.Oficio,new.Contrasena,new.Fecha_Nacimiento,CURRENT_DATE)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_empledos_update` BEFORE UPDATE ON `empleados` FOR EACH ROW INSERT INTO log_empleados
VALUES(old.ID_N,old.Oficio,old.Contrasena,old.Fecha_Nacimiento,CURRENT_DATE)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `ID_E` int(9) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Fecha_Creacion` date DEFAULT NULL,
  `Tipo_Negocio` varchar(100) DEFAULT NULL,
  `Cant_Empleados` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `empresas`
--
DELIMITER $$
CREATE TRIGGER `tr_empresas_delete` BEFORE DELETE ON `empresas` FOR EACH ROW INSERT INTO log_empresas
VALUES(old.ID_E,old.Nombre,old.Fecha_Creacion,old.Tipo_Negocio,old.Cant_Empleados,CURRENT_DATE)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_empresas_insert` AFTER INSERT ON `empresas` FOR EACH ROW INSERT INTO log_empresas
VALUES(new.ID_E,new.Nombre,new.Fecha_Creacion,new.Tipo_Negocio,new.Cant_Empleados,CURRENT_DATE)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_empresas_update` BEFORE UPDATE ON `empresas` FOR EACH ROW INSERT INTO log_empresas
VALUES(old.ID_E,old.Nombre,new.Fecha_Creacion,new.Tipo_Negocio,new.Cant_Empleados,CURRENT_DATE)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `ID_I` int(6) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Cantidad` int(2) NOT NULL,
  `Tipo_Producto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `items`
--
DELIMITER $$
CREATE TRIGGER `tr_items_delete` BEFORE DELETE ON `items` FOR EACH ROW INSERT INTO log_items
VALUES(old.ID_I,old.Nombre,old.Cantidad,old.Tipo_Producto,CURRENT_DATE)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_items_insert` AFTER INSERT ON `items` FOR EACH ROW INSERT INTO log_items
VALUES(new.ID_I,new.Nombre,new.Cantidad,new.Tipo_Producto,CURRENT_DATE)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_items_update` BEFORE UPDATE ON `items` FOR EACH ROW INSERT INTO log_items
VALUES(old.ID_I,old.Nombre,old.Cantidad,old.Tipo_Producto,CURRENT_DATE)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_administrador`
--

CREATE TABLE `log_administrador` (
  `ID_A` int(2) DEFAULT NULL,
  `ID_N` int(9) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Contrasena` varchar(6) DEFAULT NULL,
  `Fecha_Modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_calendarios`
--

CREATE TABLE `log_calendarios` (
  `ID_F` int(3) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Recordatorio` varchar(50) DEFAULT NULL,
  `Fecha_Modificiacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_empleados`
--

CREATE TABLE `log_empleados` (
  `ID_N` int(9) DEFAULT NULL,
  `Oficio` varchar(30) DEFAULT NULL,
  `Contrasena` varchar(100) DEFAULT NULL,
  `Fecha_Modificacion` date DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_empresas`
--

CREATE TABLE `log_empresas` (
  `ID_E` int(9) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Fecha_Creacion` date DEFAULT NULL,
  `Tipo_Negocio` varchar(100) DEFAULT NULL,
  `Cant_Empleados` int(10) DEFAULT NULL,
  `Fecha_Modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_entry`
--

CREATE TABLE `log_entry` (
  `ID` int(3) NOT NULL,
  `ID_N` int(9) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Fecha_Ingreso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_items`
--

CREATE TABLE `log_items` (
  `ID_I` int(9) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Cantidad` int(2) DEFAULT NULL,
  `Tipo_Producto` varchar(100) DEFAULT NULL,
  `Fecha_Modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_A`),
  ADD KEY `ID_N` (`ID_N`);

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`ID_F`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID_N`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`ID_E`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID_I`);

--
-- Indices de la tabla `log_entry`
--
ALTER TABLE `log_entry`
  ADD PRIMARY KEY (`ID`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`ID_N`) REFERENCES `empleados` (`ID_N`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
