-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2023 a las 04:41:34
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID_I`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
