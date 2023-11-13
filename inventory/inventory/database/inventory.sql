-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2023 a las 17:06:42
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
-- Base de datos: `inventory`
--

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
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_11_214305_create_registro_servidors_table', 1),
(3, '2023_11_11_214322_create_tabla_calendarios_table', 1),
(4, '2023_11_11_214408_create_tabla_datos_categorias_table', 1),
(5, '2023_11_11_214420_create_tabla_datos_historials_table', 1),
(6, '2023_11_11_214434_create_tabla_datos_productos_table', 1),
(7, '2023_11_11_214525_create_tabla_datos_productos_eliminados_table', 1),
(8, '2023_11_11_214616_create_tabla_datos_proveedores_table', 1),
(9, '2023_11_11_214643_create_tabla_datos_proveedores_eliminados_table', 1),
(10, '2023_11_11_214725_create_tabla_datos_trabajadores_eliminados_table', 1),
(11, '2023_11_11_214812_create_tabla_mensaje_consultas_table', 1),
(12, '2023_11_11_214347_create_tabla_datos_almacenamientos_table', 2),
(13, '2023_11_11_214103_create_registro_administradors_table', 3),
(14, '2023_11_11_214130_create_registro_empleados_table', 4),
(15, '2023_11_11_213958_create_pagina_ajuste_administradors_table', 5),
(16, '2023_11_11_214036_create_pagina_ajuste_empleados_table', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_ajuste_administradors`
--

CREATE TABLE `pagina_ajuste_administradors` (
  `ID_Ajuste_Adm` int(10) UNSIGNED NOT NULL,
  `Color_Panel` varchar(255) DEFAULT NULL,
  `Fuente_de_letra` varchar(255) DEFAULT NULL,
  `Tamaño_de_letra` int(11) DEFAULT NULL,
  `Configuracion_Notificaciones` varchar(255) DEFAULT NULL,
  `Gestion_de_Usuarios` varchar(255) DEFAULT NULL,
  `ID_Registro_Administrador` int(10) UNSIGNED DEFAULT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_ajuste_empleados`
--

CREATE TABLE `pagina_ajuste_empleados` (
  `ID_Ajuste_Emp` int(10) UNSIGNED NOT NULL,
  `Color_Panel` varchar(255) DEFAULT NULL,
  `Fuente_de_letra` varchar(255) DEFAULT NULL,
  `Tamaño_de_letra` int(11) DEFAULT NULL,
  `Configuracion_Notificaciones` varchar(255) DEFAULT NULL,
  `ID_Registro_Empleados` int(10) UNSIGNED DEFAULT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_administradors`
--

CREATE TABLE `registro_administradors` (
  `ID_Registro_Administrador` int(10) UNSIGNED NOT NULL,
  `Nombre_Usuario` varchar(255) DEFAULT NULL,
  `Img_Usuario` blob DEFAULT NULL,
  `Tipo` varchar(255) DEFAULT NULL,
  `rut_usuario` int(11) DEFAULT NULL,
  `Contrasena_Usuario` int(11) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Fecha_ingreso_al_Sistema` date DEFAULT NULL,
  `En_linea` int(11) DEFAULT NULL,
  `Habilitado_el_Colaborativo` int(11) DEFAULT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_empleados`
--

CREATE TABLE `registro_empleados` (
  `ID_Registro_Empleados` int(10) UNSIGNED NOT NULL,
  `Nombre_Usuario` varchar(255) DEFAULT NULL,
  `Tipo` varchar(255) DEFAULT NULL,
  `Imagen_Usuario` blob DEFAULT NULL,
  `rut_usuario` int(11) DEFAULT NULL,
  `Contraseña_Usuario` int(11) DEFAULT NULL,
  `Contraseña_Emergencia_Usuario` int(11) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `Teléfono` int(11) DEFAULT NULL,
  `Fecha_ingreso_al_Sistema` date DEFAULT NULL,
  `En_línea` int(11) DEFAULT NULL,
  `ID_Registro_Administrador` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_servidors`
--

CREATE TABLE `registro_servidors` (
  `ID_Registro_Servidor` int(10) UNSIGNED NOT NULL,
  `Nombre_Servidor` varchar(255) DEFAULT NULL,
  `Imagen_Servidor` blob DEFAULT NULL,
  `Contrasena_Servidor` int(11) DEFAULT NULL,
  `Comentario_Uso_Plataforma` text DEFAULT NULL,
  `Fecha_ingreso_al_Sistema` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_calendarios`
--

CREATE TABLE `tabla_calendarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_almacenamientos`
--

CREATE TABLE `tabla_datos_almacenamientos` (
  `ID_Almacenamiento` int(10) UNSIGNED NOT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `ID_Categorias` int(10) UNSIGNED DEFAULT NULL,
  `Nombre_Bodeguera` varchar(255) DEFAULT NULL,
  `Capacidad_Maxima` int(11) DEFAULT NULL,
  `Capacidad_Actual` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_categorias`
--

CREATE TABLE `tabla_datos_categorias` (
  `ID_Categorias` int(10) UNSIGNED NOT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `Tipo_de_Categoria` varchar(255) DEFAULT NULL,
  `Producto_Total_unidad` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_historials`
--

CREATE TABLE `tabla_datos_historials` (
  `ID_Historial` int(10) UNSIGNED NOT NULL,
  `Fecha_Registro` datetime DEFAULT NULL,
  `Tipo_Evento` varchar(255) DEFAULT NULL,
  `Descripcion_Evento` text DEFAULT NULL,
  `ID_Registro_Servicio` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_productos`
--

CREATE TABLE `tabla_datos_productos` (
  `ID_Product` int(10) UNSIGNED NOT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `Nombre_Producto` varchar(255) DEFAULT NULL,
  `Codigo_Barra` int(11) DEFAULT NULL,
  `Numero_de_Unidades` int(11) DEFAULT NULL,
  `Imagen_Producto` blob DEFAULT NULL,
  `Precio_Comprado_por_Unidad` int(11) DEFAULT NULL,
  `Precio_Venta_por_Unidad` int(11) DEFAULT NULL,
  `Fecha_de_Caducacion` date DEFAULT NULL,
  `Fecha_Ingreso_al_Sistema` date DEFAULT NULL,
  `Informacion_Producto` varchar(255) DEFAULT NULL,
  `ID_Categorias` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_productos_eliminados`
--

CREATE TABLE `tabla_datos_productos_eliminados` (
  `ID_R` int(10) UNSIGNED NOT NULL,
  `Nombre_Empleado_o_Administrador` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_proveedores`
--

CREATE TABLE `tabla_datos_proveedores` (
  `ID_Proveedor` int(10) UNSIGNED NOT NULL,
  `ID_Registro_Servidor` int(10) UNSIGNED DEFAULT NULL,
  `Nombre_Proveedor` varchar(255) DEFAULT NULL,
  `Telefono_Proveedor` int(11) DEFAULT NULL,
  `Imagen_Proveedor` blob DEFAULT NULL,
  `Tipo_de_Producto_que_abastece` varchar(255) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Fecha_De_Ingreso` date DEFAULT NULL,
  `Fecha_De_Ultima_Vez_Que_Ayudo_Abastecer` date DEFAULT NULL,
  `Informacion_de_Productos_y_Costos` varchar(600) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_proveedores_eliminados`
--

CREATE TABLE `tabla_datos_proveedores_eliminados` (
  `ID_R` int(10) UNSIGNED NOT NULL,
  `Nombre_Servidor` varchar(255) DEFAULT NULL,
  `Nombre_Empleado_o_Administrador` varchar(255) DEFAULT NULL,
  `Encargado` varchar(255) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Fecha_de_Dato_Eliminado` date DEFAULT NULL,
  `Fecha_De_Ingreso` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_datos_trabajadores_eliminados`
--

CREATE TABLE `tabla_datos_trabajadores_eliminados` (
  `ID_R` int(10) UNSIGNED NOT NULL,
  `Nombre_Servidor` varchar(255) DEFAULT NULL,
  `Nombre_Empleado_o_Administrador` varchar(255) DEFAULT NULL,
  `Encargado` varchar(255) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Fecha_de_Dato_Eliminado` date DEFAULT NULL,
  `Fecha_De_Ingreso` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_mensaje_consultas`
--

CREATE TABLE `tabla_mensaje_consultas` (
  `ID_Consulta` int(10) UNSIGNED NOT NULL,
  `Nombre` char(50) DEFAULT NULL,
  `Pregunta` varchar(400) DEFAULT NULL,
  `Respuesta` varchar(400) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagina_ajuste_administradors`
--
ALTER TABLE `pagina_ajuste_administradors`
  ADD PRIMARY KEY (`ID_Ajuste_Adm`),
  ADD KEY `pagina_ajuste_administradors_id_registro_administrador_foreign` (`ID_Registro_Administrador`),
  ADD KEY `pagina_ajuste_administradors_id_registro_servidor_foreign` (`ID_Registro_Servidor`);

--
-- Indices de la tabla `pagina_ajuste_empleados`
--
ALTER TABLE `pagina_ajuste_empleados`
  ADD PRIMARY KEY (`ID_Ajuste_Emp`),
  ADD KEY `pagina_ajuste_empleados_id_registro_empleados_foreign` (`ID_Registro_Empleados`),
  ADD KEY `pagina_ajuste_empleados_id_registro_servidor_foreign` (`ID_Registro_Servidor`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `registro_administradors`
--
ALTER TABLE `registro_administradors`
  ADD PRIMARY KEY (`ID_Registro_Administrador`),
  ADD KEY `registro_administradors_id_registro_servidor_foreign` (`ID_Registro_Servidor`);

--
-- Indices de la tabla `registro_empleados`
--
ALTER TABLE `registro_empleados`
  ADD PRIMARY KEY (`ID_Registro_Empleados`),
  ADD KEY `registro_empleados_id_registro_administrador_foreign` (`ID_Registro_Administrador`);

--
-- Indices de la tabla `registro_servidors`
--
ALTER TABLE `registro_servidors`
  ADD PRIMARY KEY (`ID_Registro_Servidor`);

--
-- Indices de la tabla `tabla_calendarios`
--
ALTER TABLE `tabla_calendarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla_datos_almacenamientos`
--
ALTER TABLE `tabla_datos_almacenamientos`
  ADD PRIMARY KEY (`ID_Almacenamiento`),
  ADD KEY `tabla_datos_almacenamientos_id_registro_servidor_foreign` (`ID_Registro_Servidor`),
  ADD KEY `tabla_datos_almacenamientos_id_categorias_foreign` (`ID_Categorias`);

--
-- Indices de la tabla `tabla_datos_categorias`
--
ALTER TABLE `tabla_datos_categorias`
  ADD PRIMARY KEY (`ID_Categorias`),
  ADD KEY `tabla_datos_categorias_id_registro_servidor_foreign` (`ID_Registro_Servidor`);

--
-- Indices de la tabla `tabla_datos_historials`
--
ALTER TABLE `tabla_datos_historials`
  ADD PRIMARY KEY (`ID_Historial`),
  ADD KEY `tabla_datos_historials_id_registro_servicio_foreign` (`ID_Registro_Servicio`);

--
-- Indices de la tabla `tabla_datos_productos`
--
ALTER TABLE `tabla_datos_productos`
  ADD PRIMARY KEY (`ID_Product`),
  ADD KEY `tabla_datos_productos_id_registro_servidor_foreign` (`ID_Registro_Servidor`),
  ADD KEY `tabla_datos_productos_id_categorias_foreign` (`ID_Categorias`);

--
-- Indices de la tabla `tabla_datos_productos_eliminados`
--
ALTER TABLE `tabla_datos_productos_eliminados`
  ADD PRIMARY KEY (`ID_R`);

--
-- Indices de la tabla `tabla_datos_proveedores`
--
ALTER TABLE `tabla_datos_proveedores`
  ADD PRIMARY KEY (`ID_Proveedor`),
  ADD KEY `tabla_datos_proveedores_id_registro_servidor_foreign` (`ID_Registro_Servidor`);

--
-- Indices de la tabla `tabla_datos_proveedores_eliminados`
--
ALTER TABLE `tabla_datos_proveedores_eliminados`
  ADD PRIMARY KEY (`ID_R`);

--
-- Indices de la tabla `tabla_datos_trabajadores_eliminados`
--
ALTER TABLE `tabla_datos_trabajadores_eliminados`
  ADD PRIMARY KEY (`ID_R`);

--
-- Indices de la tabla `tabla_mensaje_consultas`
--
ALTER TABLE `tabla_mensaje_consultas`
  ADD PRIMARY KEY (`ID_Consulta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `pagina_ajuste_administradors`
--
ALTER TABLE `pagina_ajuste_administradors`
  MODIFY `ID_Ajuste_Adm` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagina_ajuste_empleados`
--
ALTER TABLE `pagina_ajuste_empleados`
  MODIFY `ID_Ajuste_Emp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_administradors`
--
ALTER TABLE `registro_administradors`
  MODIFY `ID_Registro_Administrador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_empleados`
--
ALTER TABLE `registro_empleados`
  MODIFY `ID_Registro_Empleados` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_servidors`
--
ALTER TABLE `registro_servidors`
  MODIFY `ID_Registro_Servidor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_calendarios`
--
ALTER TABLE `tabla_calendarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_almacenamientos`
--
ALTER TABLE `tabla_datos_almacenamientos`
  MODIFY `ID_Almacenamiento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_categorias`
--
ALTER TABLE `tabla_datos_categorias`
  MODIFY `ID_Categorias` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_historials`
--
ALTER TABLE `tabla_datos_historials`
  MODIFY `ID_Historial` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_productos`
--
ALTER TABLE `tabla_datos_productos`
  MODIFY `ID_Product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_productos_eliminados`
--
ALTER TABLE `tabla_datos_productos_eliminados`
  MODIFY `ID_R` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_proveedores`
--
ALTER TABLE `tabla_datos_proveedores`
  MODIFY `ID_Proveedor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_proveedores_eliminados`
--
ALTER TABLE `tabla_datos_proveedores_eliminados`
  MODIFY `ID_R` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_datos_trabajadores_eliminados`
--
ALTER TABLE `tabla_datos_trabajadores_eliminados`
  MODIFY `ID_R` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_mensaje_consultas`
--
ALTER TABLE `tabla_mensaje_consultas`
  MODIFY `ID_Consulta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagina_ajuste_administradors`
--
ALTER TABLE `pagina_ajuste_administradors`
  ADD CONSTRAINT `pagina_ajuste_administradors_id_registro_administrador_foreign` FOREIGN KEY (`ID_Registro_Administrador`) REFERENCES `registro_administradors` (`ID_Registro_Administrador`),
  ADD CONSTRAINT `pagina_ajuste_administradors_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `pagina_ajuste_empleados`
--
ALTER TABLE `pagina_ajuste_empleados`
  ADD CONSTRAINT `pagina_ajuste_empleados_id_registro_empleados_foreign` FOREIGN KEY (`ID_Registro_Empleados`) REFERENCES `registro_empleados` (`ID_Registro_Empleados`),
  ADD CONSTRAINT `pagina_ajuste_empleados_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `registro_administradors`
--
ALTER TABLE `registro_administradors`
  ADD CONSTRAINT `registro_administradors_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `registro_empleados`
--
ALTER TABLE `registro_empleados`
  ADD CONSTRAINT `registro_empleados_id_registro_administrador_foreign` FOREIGN KEY (`ID_Registro_Administrador`) REFERENCES `registro_administradors` (`ID_Registro_Administrador`);

--
-- Filtros para la tabla `tabla_datos_almacenamientos`
--
ALTER TABLE `tabla_datos_almacenamientos`
  ADD CONSTRAINT `tabla_datos_almacenamientos_id_categorias_foreign` FOREIGN KEY (`ID_Categorias`) REFERENCES `tabla_datos_categorias` (`ID_Categorias`),
  ADD CONSTRAINT `tabla_datos_almacenamientos_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `tabla_datos_categorias`
--
ALTER TABLE `tabla_datos_categorias`
  ADD CONSTRAINT `tabla_datos_categorias_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `tabla_datos_historials`
--
ALTER TABLE `tabla_datos_historials`
  ADD CONSTRAINT `tabla_datos_historials_id_registro_servicio_foreign` FOREIGN KEY (`ID_Registro_Servicio`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `tabla_datos_productos`
--
ALTER TABLE `tabla_datos_productos`
  ADD CONSTRAINT `tabla_datos_productos_id_categorias_foreign` FOREIGN KEY (`ID_Categorias`) REFERENCES `tabla_datos_categorias` (`ID_Categorias`),
  ADD CONSTRAINT `tabla_datos_productos_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);

--
-- Filtros para la tabla `tabla_datos_proveedores`
--
ALTER TABLE `tabla_datos_proveedores`
  ADD CONSTRAINT `tabla_datos_proveedores_id_registro_servidor_foreign` FOREIGN KEY (`ID_Registro_Servidor`) REFERENCES `registro_servidors` (`ID_Registro_Servidor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
