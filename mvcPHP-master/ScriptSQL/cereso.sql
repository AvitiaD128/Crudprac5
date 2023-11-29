-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2023 a las 18:18:47
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
-- Base de datos: `cereso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detpreso`
--

CREATE TABLE `detpreso` (
  `IdPreso` int(11) NOT NULL,
  `Altura` float(10,2) NOT NULL,
  `Compleccion` varchar(50) NOT NULL,
  `Tes` varchar(50) NOT NULL,
  `Peso` float(10,2) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `FechaN` date NOT NULL,
  `Condena` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `detpreso`
--

INSERT INTO `detpreso` (`IdPreso`, `Altura`, `Compleccion`, `Tes`, `Peso`, `Nombre`, `FechaN`, `Condena`) VALUES
(3, 1.80, 'musculosa', 'de piel morena', 80.00, 'Jose Beltran', '1998-09-20', '123'),
(9, 123.00, '12312', '3123', 123.00, '123', '2023-11-03', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sentencias`
--

CREATE TABLE `sentencias` (
  `IdPreso` int(3) NOT NULL,
  `Causa De Sentencia` varchar(200) NOT NULL,
  `Descripcion del sujeto` varchar(100) NOT NULL,
  `No.Del Caso` int(255) NOT NULL,
  `Sentencia` varchar(100) NOT NULL,
  `Tiempo De Sentencia` varchar(50) NOT NULL,
  `Fecha Juicio` date NOT NULL,
  `No.Celda` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `sentencias`
--

INSERT INTO `sentencias` (`IdPreso`, `Causa De Sentencia`, `Descripcion del sujeto`, `No.Del Caso`, `Sentencia`, `Tiempo De Sentencia`, `Fecha Juicio`, `No.Celda`) VALUES
(3, 'caminaba por la calle cuando de un momento para otro salio corriendo a patear abuelitas', 'Alto Fornido tes moreno pelo castaño cara rectangular con un bigote', 1234, 'Encierro en el Cereso 128', '5 años', '2023-09-13', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_prisioneros`
--

CREATE TABLE `tbl_prisioneros` (
  `id_preso` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `motEnc` varchar(500) NOT NULL,
  `fechaN` date NOT NULL,
  `estado` varchar(50) NOT NULL,
  `direccion` varchar(70) NOT NULL,
  `sexo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tbl_prisioneros`
--

INSERT INTO `tbl_prisioneros` (`id_preso`, `nombre`, `apellido`, `motEnc`, `fechaN`, `estado`, `direccion`, `sexo`) VALUES
(0, '21', '123', '123123', '2212-03-12', '122312', '12312', '3313'),
(3, 'Jose ', 'Beltran Avilas', 'Golpear Abuelitas', '1998-09-12', 'CHIHUAHUA', 'calle deming 543 praderas del sur', 'masculino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detpreso`
--
ALTER TABLE `detpreso`
  ADD PRIMARY KEY (`IdPreso`);

--
-- Indices de la tabla `tbl_prisioneros`
--
ALTER TABLE `tbl_prisioneros`
  ADD PRIMARY KEY (`id_preso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detpreso`
--
ALTER TABLE `detpreso`
  MODIFY `IdPreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
