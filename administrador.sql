-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2023 a las 04:41:02
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
