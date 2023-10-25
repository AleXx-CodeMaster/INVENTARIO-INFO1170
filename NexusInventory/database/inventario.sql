-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2023 a las 04:35:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID_A`, `Nombre`, `Contrasena`, `Fecha`, `ID_N`) VALUES
(1, 'Alexis', 'CargarX2', '2023-09-27', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_C` int(3) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Telefono` int(10) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID_N` int(10) NOT NULL,
  `Oficio` varchar(30) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Salario` int(10) NOT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `ID_E` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID_N`, `Oficio`, `Contrasena`, `Fecha_Nacimiento`, `Salario`, `Correo`, `ID_E`) VALUES
(1, 'Programador', 'CoNtrasena957', '2023-09-20', 55000, NULL, 0),
(213382926, 'Conserje', 'Kalamardo12', '2003-07-16', 150000, NULL, 0);

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
  `Cant_Empleados` int(10) DEFAULT NULL,
  `Contrasena` varchar(50) DEFAULT NULL,
  `Jefe` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`ID_E`, `Nombre`, `Fecha_Creacion`, `Tipo_Negocio`, `Cant_Empleados`, `Contrasena`, `Jefe`) VALUES
(30902890, 'MaxPlus', '2010-09-10', 'Venta y Compra de domicilios', 130, NULL, NULL),
(60789213, 'Locosells', '2012-03-24', 'Venta de vehiculos usados', 25, NULL, NULL);

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
VALUES(old.ID_E,old.Nombre,old.Fecha_Creacion,old.Tipo_Negocio,old.Cant_Empleados,CURRENT_DATE)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_F` int(3) NOT NULL,
  `Factura` varchar(100) DEFAULT NULL,
  `Fecha_In` date NOT NULL,
  `Precio_Total` int(10) NOT NULL,
  `Total` int(10) NOT NULL,
  `Deuda` int(10) NOT NULL,
  `ID_E` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `ID_I` int(6) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Tipo_Producto` varchar(100) NOT NULL,
  `Prod_foto` varchar(500) DEFAULT NULL,
  `Categoria` char(50) DEFAULT NULL,
  `Proveedor` varchar(100) DEFAULT NULL,
  `Ex_Incial` int(20) DEFAULT NULL,
  `Ex_Actual` int(20) DEFAULT NULL,
  `Precio_C` int(10) DEFAULT NULL,
  `Precio_V` int(10) DEFAULT NULL,
  `Fecha_Entry` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `Contrasena` varchar(100) DEFAULT NULL,
  `Fecha_Modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `log_administrador`
--

INSERT INTO `log_administrador` (`ID_A`, `ID_N`, `Nombre`, `Fecha`, `Contrasena`, `Fecha_Modificacion`) VALUES
(1, 1, 'Alexis', '0000-00-00', '0000-0', '2023-09-27'),
(1, 1, 'Alexis', '0000-00-00', '0000-0', '2023-09-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_calendarios`
--

CREATE TABLE `log_calendarios` (
  `ID_F` int(3) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Recordatorio` varchar(50) DEFAULT NULL,
  `Fecha_Modificiacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `log_calendarios`
--

INSERT INTO `log_calendarios` (`ID_F`, `Fecha`, `Recordatorio`, `Fecha_Modificiacion`) VALUES
(1, '2022-03-10', 'Alguna wea', '2023-09-27'),
(1, '2022-03-10', 'Alguna wea', '2023-09-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_empleados`
--

CREATE TABLE `log_empleados` (
  `ID_N` int(9) DEFAULT NULL,
  `Oficio` varchar(30) DEFAULT NULL,
  `Contrasena` varchar(100) DEFAULT NULL,
  `Fecha_Modificacion` date DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Salario` int(10) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `ID_E` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `log_empleados`
--

INSERT INTO `log_empleados` (`ID_N`, `Oficio`, `Contrasena`, `Fecha_Modificacion`, `Fecha_Nacimiento`, `Salario`, `Correo`, `ID_E`) VALUES
(1, 'Programador', 'CoNtrasena957', '0000-00-00', '2023-09-27', NULL, NULL, NULL),
(213382926, 'Conserje', 'Kalamardo12', '2003-07-16', '2023-09-27', NULL, NULL, NULL);

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
  `Fecha_Modificacion` date DEFAULT NULL,
  `Contrasena` varchar(50) DEFAULT NULL,
  `Jefe` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `log_empresas`
--

INSERT INTO `log_empresas` (`ID_E`, `Nombre`, `Fecha_Creacion`, `Tipo_Negocio`, `Cant_Empleados`, `Fecha_Modificacion`, `Contrasena`, `Jefe`) VALUES
(309028902, 'MaxPlus', '2010-09-10', 'Venta y Compra de domicilios', 40, '2023-09-27', NULL, NULL),
(309028902, 'MaxPlus', '2010-09-10', 'Venta y Compra de domicilios', 40, '2023-09-27', NULL, NULL),
(30902890, 'MaxPlus', '2010-09-10', 'Venta y Compra de domicilios', 40, '2023-09-27', NULL, NULL),
(30902890, 'MaxPlus', '2010-09-10', 'Venta y Compra de domicilios', 150, '2023-09-27', NULL, NULL),
(30902890, 'MaxPlus', '2010-09-10', 'Venta y Compra de domicilios', 150, '2023-09-27', NULL, NULL),
(60789213, 'Locosells', '2012-03-24', 'Venta de vehiculos usados', 25, '2023-09-27', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_entries`
--

CREATE TABLE `log_entries` (
  `id` int(11) NOT NULL,
  `ID_N` int(11) DEFAULT NULL,
  `correo_electronico` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `log_entries`
--

INSERT INTO `log_entries` (`id`, `ID_N`, `correo_electronico`, `created_at`, `updated_at`) VALUES
(1, 1231313, 'alexismonsalve@gmail.com', '2023-10-24 05:25:56', '2023-10-24 05:25:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_items`
--

CREATE TABLE `log_items` (
  `ID_I` int(9) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Tipo_Producto` varchar(100) DEFAULT NULL,
  `Fecha_Modificacion` date DEFAULT NULL,
  `Categoria` int(2) DEFAULT NULL,
  `Prod_Foto` varchar(100) DEFAULT NULL,
  `Proveedor` varchar(100) DEFAULT NULL,
  `Ex_Incial` int(20) DEFAULT NULL,
  `Ex_Actual` int(20) DEFAULT NULL,
  `Precio_C` int(10) DEFAULT NULL,
  `Precio_V` int(10) DEFAULT NULL,
  `Fecha_Entry` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_C`);

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
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID_F`),
  ADD KEY `ID_E` (`ID_E`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID_I`);

--
-- Indices de la tabla `log_entries`
--
ALTER TABLE `log_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `log_entries`
--
ALTER TABLE `log_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`ID_N`) REFERENCES `empleados` (`ID_N`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`ID_E`) REFERENCES `empresas` (`ID_E`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
