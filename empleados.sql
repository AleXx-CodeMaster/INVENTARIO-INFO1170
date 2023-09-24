-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2023 a las 04:41:17
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID_N`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
