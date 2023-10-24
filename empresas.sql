-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2023 a las 04:41:25
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`ID_E`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
