-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2023 a las 04:41:09
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`ID_F`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
