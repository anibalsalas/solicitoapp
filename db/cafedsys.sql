-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2023 a las 20:10:15
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafedsys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `idform` int(11) NOT NULL,
  `area_solicita` text NOT NULL,
  `nom_area` text NOT NULL,
  `modo_contrato` text NOT NULL,
  `nombres` text NOT NULL,
  `usuario_dominio` text NOT NULL,
  `acceso_siga` text,
  `acceso_siaf` text,
  `acceso_sigauser` text NOT NULL,
  `acceso_sigapersonal` text NOT NULL,
  `tramite_doc` text NOT NULL,
  `correo` text NOT NULL,
  `carpeta_compartida` text NOT NULL,
  `impresora_scaner` text NOT NULL,
  `fecha_registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formato`
--

INSERT INTO `formato` (`idform`, `area_solicita`, `nom_area`, `modo_contrato`, `nombres`, `usuario_dominio`, `acceso_siga`, `acceso_siaf`, `acceso_sigauser`, `acceso_sigapersonal`, `tramite_doc`, `correo`, `carpeta_compartida`, `impresora_scaner`, `fecha_registro`) VALUES
(1, 'Seleccionar :', '', 'locador', '', 'no', 'Seleccionar:', 'Seleccionar:', 'Seleccionar:', '0', '', 'no', 'no', '', '2023-03-24'),
(2, 'Seleccionar :', '', 'locador', '', 'no', 'Seleccionar:', 'Seleccionar:', 'Seleccionar:', '0', '', 'no', 'no', '', '2023-03-24'),
(3, 'Seleccionar :', '', 'locador', '', 'no', 'Seleccionar:', 'Seleccionar:', 'Seleccionar:', '0', '', 'no', 'no', '', '2023-03-24'),
(4, 'gerencia', 'Gerencia General', 'locador', 'asd', 'si', 'logistica', 'mantenimiento,registro,procesos,consultas,reportes', 'logistica', '0', '', 'no', 'no', '', '2023-03-24'),
(5, 'Seleccionar :', '', 'locador', '', 'no', 'Seleccionar:', NULL, 'Seleccionar:', '0', '', 'no', 'no', '', '2023-03-24'),
(6, 'Seleccionar :', '', 'locador', '', 'no', 'Seleccionar:', NULL, 'Seleccionar:', '0', '', 'no', 'no', '', '2023-03-24'),
(7, 'Seleccionar :', '', 'locador', '', 'no', 'Seleccionar:', NULL, 'Seleccionar:', '0', '', 'no', 'no', '', '2023-03-24'),
(8, 'Seleccionar :', '', 'locador', '', 'no', 'Seleccionar:', NULL, 'Seleccionar:', '0', '', 'no', 'no', '', '2023-03-24'),
(9, 'Seleccionar :', '', 'locador', '', 'no', 'Seleccionar:', NULL, 'Seleccionar:', '0', '', 'no', 'no', '', '2023-03-24'),
(10, 'gerencia', 'zxc', 'cas', 'zxczxc', 'si', 'patrimonio', NULL, 'logistica', '0', '', 'no', 'no', '', '2023-03-24'),
(11, 'gerencia', 'Gerencia General', 'locador', 'asd', 'si', 'consultas', 'registro,consultas,procesos,consultas,consultas,procesos,procesos,procesos,reportes', 'procesos,consultas,transmision', '0', '', 'si', 'si', '', '2023-03-27'),
(12, 'gerencia', 'Gerencia Desarrollo Educativo', 'locador', 'salas ', 'si', 'reportes,transmision,transmision', 'registro,reportes,reportes,procesos,reportes', 'consultas,transmision,transmision', 'procesos,transmision', '', 'no', 'no', '', '2023-03-27'),
(13, 'gerencia', 'Gerencia General', 'cas', 'prueba', 'si', 'bienescorrientes,tesoreria', 'registro-admin,transmision-admin,procesos-conta,consultas-conta,reportes-conta,procesos-procesopresu,consultas-procesopresu,transmision-procesopresu,registro-pagoplanilla,procesos-pagoplanilla,consultas-concilia', 'logistica-sigauser,provision-sigauser,tesoreria-sigauser', 'marcacion-sigapersonal,reportes-acceso_sigapersonal', '', 'no', 'si', '', '2023-03-27'),
(14, 'Seleccionar :', '', 'locador', '', 'no', '', NULL, '', '', '', 'no', 'no', 'si', '2023-03-27'),
(15, 'gerencia', 'gere', 'cas', 'asd', 'no', 'utilitarios,configuracion', 'registro-admin,procesos-admin,transmision-conta,consultas-procesopresu,registro-pagoplanilla,procesos-concilia,consultas-concilia', 'logistica-sigauser,provision-sigauser,tesoreria-sigauser,ingresos-sigauser', 'marcacion-sigapersonal,asistencia-acceso_sigapersonal,remuneraciones-acceso_sigapersonal,vacaciones-acceso_sigapersonal,reportes-acceso_sigapersonal', '', 'no', 'si', 'no', '2023-03-27'),
(16, 'gerencia', 'gere', 'cas', 'asd', 'no', 'utilitarios,configuracion', 'registro-admin,procesos-admin,transmision-conta,consultas-procesopresu,registro-pagoplanilla,procesos-concilia,consultas-concilia', 'logistica-sigauser,provision-sigauser,tesoreria-sigauser,ingresos-sigauser', 'marcacion-sigapersonal,asistencia-acceso_sigapersonal,remuneraciones-acceso_sigapersonal,vacaciones-acceso_sigapersonal,reportes-acceso_sigapersonal', '', 'no', 'si', 'no', '2023-03-27'),
(17, 'gerencia', 'gere', 'cas', 'asd', 'no', 'utilitarios,configuracion', 'registro-admin,procesos-admin,transmision-conta,consultas-procesopresu,registro-pagoplanilla,procesos-concilia,consultas-concilia', 'logistica-sigauser,provision-sigauser,tesoreria-sigauser,ingresos-sigauser', 'marcacion-sigapersonal,asistencia-acceso_sigapersonal,remuneraciones-acceso_sigapersonal,vacaciones-acceso_sigapersonal,reportes-acceso_sigapersonal', '', 'no', 'si', 'si', '2023-03-27'),
(18, 'gerencia', 'gere', 'cas', 'asd', 'no', 'utilitarios,configuracion', 'registro-admin,procesos-admin,transmision-conta,consultas-procesopresu,registro-pagoplanilla,procesos-concilia,consultas-concilia', 'logistica-sigauser,provision-sigauser,tesoreria-sigauser,ingresos-sigauser', 'marcacion-sigapersonal,asistencia-acceso_sigapersonal,remuneraciones-acceso_sigapersonal,vacaciones-acceso_sigapersonal,reportes-acceso_sigapersonal', '', 'no', 'si', 'si', '2023-03-27'),
(19, 'gerencia', 'asd', 'locador', 'asdasd', 'no', '', NULL, '', '', '', 'no', 'no', 'no', '2023-03-27'),
(20, 'Seleccionar :', '', 'locador', 'ksksks', 'no', 'configuracion', 'reportes-conta', '', '', '', 'no', 'no', 'no', '2023-03-27'),
(21, 'Seleccionar :', '', 'locador', 'sss', 'no', '', NULL, '', '', '', 'no', 'no', 'no', '2023-03-27'),
(22, 'gerencia', 'Gerencia de AdministraciÃ³n', 'cas', 'asdasd', 'si', 'ppr', 'consultas-conta,reportes-procesopresu,reportes-pagoplanilla,transmision-concilia', 'tesoreria-sigauser', '', '', 'no', 'no', 'no', '2023-03-27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`idform`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formato`
--
ALTER TABLE `formato`
  MODIFY `idform` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
