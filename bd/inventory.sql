-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2023 a las 16:30:57
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
-- Estructura de tabla para la tabla `administrator_record`
--

CREATE TABLE `administrator_record` (
  `ID_Admin_Record` int(11) NOT NULL,
  `User_Name` varchar(255) DEFAULT NULL,
  `User_Img` longblob DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `User_Rut` int(11) DEFAULT NULL,
  `User_Password` int(11) DEFAULT NULL,
  `Emergency_User_Password` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Entry_Date` date DEFAULT NULL,
  `Online_Status` int(11) DEFAULT NULL,
  `Collaborative_Enabled` int(11) DEFAULT NULL,
  `Serv_Record_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrator_settings_page`
--

CREATE TABLE `administrator_settings_page` (
  `ID_Admin_Settings` int(11) NOT NULL,
  `Panel_Color` varchar(255) DEFAULT NULL,
  `Font_Type` varchar(255) DEFAULT NULL,
  `Font_Size` int(11) DEFAULT NULL,
  `Notification_Configuration` varchar(255) DEFAULT NULL,
  `User_Management` varchar(255) DEFAULT NULL,
  `Administrator_Record_ID` int(11) DEFAULT NULL,
  `Server_Record_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendar_table`
--

CREATE TABLE `calendar_table` (
  `ID` int(11) NOT NULL,
  `Tittle` text NOT NULL,
  `Description` text NOT NULL,
  `Start_Datetime` datetime NOT NULL,
  `End_Datetime` datetime DEFAULT NULL,
  `Server_Record_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category_data_table`
--

CREATE TABLE `category_data_table` (
  `ID_Category` int(11) NOT NULL,
  `Server_Record_ID` int(11) DEFAULT NULL,
  `Category_Type` varchar(255) DEFAULT NULL,
  `Total_Product_Units` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deleted_employees_and_administrators_data_table`
--

CREATE TABLE `deleted_employees_and_administrators_data_table` (
  `ID_Deleted` int(11) NOT NULL,
  `Server_Name` varchar(255) DEFAULT NULL,
  `Employee_or_Administrator_Name` varchar(255) DEFAULT NULL,
  `Manager` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Data_Deletion_Date` date DEFAULT NULL,
  `Entry_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deleted_product_data_table`
--

CREATE TABLE `deleted_product_data_table` (
  `ID_Deleted_Product` int(11) NOT NULL,
  `Employee_or_Administrator_Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deleted_supplier_data_table`
--

CREATE TABLE `deleted_supplier_data_table` (
  `ID_Deleted_Supplier` int(11) NOT NULL,
  `Server_Name` varchar(255) DEFAULT NULL,
  `Employee_or_Administrator_Name` varchar(255) DEFAULT NULL,
  `Manager` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Data_Deletion_Date` date DEFAULT NULL,
  `Entry_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee_record`
--

CREATE TABLE `employee_record` (
  `ID_Employee_Record` int(11) NOT NULL,
  `User_Name` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `User_Img` longblob DEFAULT NULL,
  `User_Rut` int(11) DEFAULT NULL,
  `User_Password` int(11) DEFAULT NULL,
  `Emergency_User_Password` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Entry_Date` date DEFAULT NULL,
  `Online_Status` int(11) DEFAULT NULL,
  `Admin_Record_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee_settings_page`
--

CREATE TABLE `employee_settings_page` (
  `ID_Emp_Settings` int(11) NOT NULL,
  `Panel_Color` varchar(255) DEFAULT NULL,
  `Font_Type` varchar(255) DEFAULT NULL,
  `Font_Size` int(11) DEFAULT NULL,
  `Notification_Configuration` varchar(255) DEFAULT NULL,
  `Employee_Record_ID` int(11) DEFAULT NULL,
  `Server_Record_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history_data_table`
--

CREATE TABLE `history_data_table` (
  `ID_History` int(11) NOT NULL,
  `Record_Date` datetime DEFAULT NULL,
  `Event_Type` varchar(255) DEFAULT NULL,
  `Event_Description` text DEFAULT NULL,
  `Service_Record_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message_consultation_table`
--

CREATE TABLE `message_consultation_table` (
  `ID_Consultation` int(11) NOT NULL,
  `Name` char(50) DEFAULT NULL,
  `Question` varchar(400) DEFAULT NULL,
  `Answer` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_data_table`
--

CREATE TABLE `product_data_table` (
  `ID_Product` int(11) NOT NULL,
  `Server_Record_ID` int(11) DEFAULT NULL,
  `Product_Name` varchar(255) DEFAULT NULL,
  `Bar_Code` int(11) DEFAULT NULL,
  `Number_of_Units` int(11) DEFAULT NULL,
  `Product_Img` longblob DEFAULT NULL,
  `Purchase_Price_Per_Unit` int(11) DEFAULT NULL,
  `Sale_Price_Per_Unit` int(11) DEFAULT NULL,
  `Expiry_Date` date DEFAULT NULL,
  `Entry_Date` date DEFAULT NULL,
  `Product_Info` varchar(255) DEFAULT NULL,
  `Category_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `server_record`
--

CREATE TABLE `server_record` (
  `ID_Server_Record` int(11) NOT NULL,
  `Server_Name` varchar(255) DEFAULT NULL,
  `Server_Image` longblob DEFAULT NULL,
  `Server_Password` int(11) DEFAULT NULL,
  `Emergency_Server_Password` int(11) DEFAULT NULL,
  `Platform_Use_Comment` text DEFAULT NULL,
  `System_Entry_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `storage_data_table`
--

CREATE TABLE `storage_data_table` (
  `ID_Storage` int(11) NOT NULL,
  `Server_Record_ID` int(11) DEFAULT NULL,
  `Category_ID` int(11) DEFAULT NULL,
  `Warehouse_Name` varchar(255) DEFAULT NULL,
  `Maximum_Capacity` int(11) DEFAULT NULL,
  `Current_Capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supplier_data_table`
--

CREATE TABLE `supplier_data_table` (
  `ID_Supplier` int(11) NOT NULL,
  `Serv_Record_ID` int(11) DEFAULT NULL,
  `Supplier_Name` varchar(255) DEFAULT NULL,
  `Supplier_Phone` int(11) DEFAULT NULL,
  `Supplier_Image` longblob DEFAULT NULL,
  `Supplied_Product_Type` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Entry_Date` date DEFAULT NULL,
  `Last_Assistance_Date` date DEFAULT NULL,
  `Product_and_Cost_Info` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrator_record`
--
ALTER TABLE `administrator_record`
  ADD PRIMARY KEY (`ID_Admin_Record`),
  ADD KEY `Server_Record_ID` (`Serv_Record_ID`);

--
-- Indices de la tabla `administrator_settings_page`
--
ALTER TABLE `administrator_settings_page`
  ADD PRIMARY KEY (`ID_Admin_Settings`),
  ADD KEY `Administrator_Record_ID` (`Administrator_Record_ID`),
  ADD KEY `Server_Record_ID` (`Server_Record_ID`);

--
-- Indices de la tabla `calendar_table`
--
ALTER TABLE `calendar_table`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Server_Record_ID` (`Server_Record_ID`);

--
-- Indices de la tabla `category_data_table`
--
ALTER TABLE `category_data_table`
  ADD PRIMARY KEY (`ID_Category`),
  ADD KEY `Server_Record_ID` (`Server_Record_ID`);

--
-- Indices de la tabla `employee_record`
--
ALTER TABLE `employee_record`
  ADD PRIMARY KEY (`ID_Employee_Record`),
  ADD KEY `Administrator_Record_ID` (`Admin_Record_ID`);

--
-- Indices de la tabla `employee_settings_page`
--
ALTER TABLE `employee_settings_page`
  ADD PRIMARY KEY (`ID_Emp_Settings`),
  ADD KEY `Employee_Record_ID` (`Employee_Record_ID`),
  ADD KEY `Server_Record_ID` (`Server_Record_ID`);

--
-- Indices de la tabla `history_data_table`
--
ALTER TABLE `history_data_table`
  ADD PRIMARY KEY (`ID_History`),
  ADD KEY `Service_Record_ID` (`Service_Record_ID`);

--
-- Indices de la tabla `product_data_table`
--
ALTER TABLE `product_data_table`
  ADD PRIMARY KEY (`ID_Product`),
  ADD KEY `Server_Record_ID` (`Server_Record_ID`),
  ADD KEY `Category_ID` (`Category_ID`);

--
-- Indices de la tabla `server_record`
--
ALTER TABLE `server_record`
  ADD PRIMARY KEY (`ID_Server_Record`);

--
-- Indices de la tabla `storage_data_table`
--
ALTER TABLE `storage_data_table`
  ADD PRIMARY KEY (`ID_Storage`),
  ADD KEY `Server_Record_ID` (`Server_Record_ID`),
  ADD KEY `Category_ID` (`Category_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
