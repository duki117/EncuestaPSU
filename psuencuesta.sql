-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2022 a las 20:00:03
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `psuencuesta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativo`
--

CREATE TABLE `administrativo` (
  `Id_uaa` varchar(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `PrimApe` varchar(20) NOT NULL,
  `SegApe` varchar(20) NOT NULL,
  `Activo` varchar(1) NOT NULL,
  `Centro` varchar(30) NOT NULL,
  `Dpto` varchar(30) NOT NULL,
  `Sexo` varchar(1) NOT NULL,
  `Fecha_nac` date NOT NULL,
  `Fecha_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumoalcohol`
--

CREATE TABLE `consumoalcohol` (
  `Id_psu` varchar(10) DEFAULT NULL,
  `Resultado` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumodrogas`
--

CREATE TABLE `consumodrogas` (
  `Id_psu` varchar(10) DEFAULT NULL,
  `Resultado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `Id_uaa` varchar(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `PrimApe` varchar(20) NOT NULL,
  `SegApe` varchar(20) NOT NULL,
  `Activo` varchar(1) NOT NULL,
  `Centro` varchar(30) NOT NULL,
  `Dpto` varchar(30) NOT NULL,
  `Sexo` varchar(1) NOT NULL,
  `Fecha_nac` date NOT NULL,
  `Fecha_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE `encuestas` (
  `ID_Encuesta` int(11) NOT NULL,
  `Clave_Carrera` varchar(50) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `Id_uaa` varchar(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `PrimApe` varchar(20) NOT NULL,
  `SegApe` varchar(20) NOT NULL,
  `Sexo` varchar(1) NOT NULL,
  `Carrera` varchar(50) NOT NULL,
  `Semestre` varchar(20) NOT NULL,
  `Fecha_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `malestarpsicologico`
--

CREATE TABLE `malestarpsicologico` (
  `Id_psu` varchar(10) DEFAULT NULL,
  `Resultado` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `Codigo` varchar(6) NOT NULL,
  `Pregunta_c` varchar(360) DEFAULT NULL,
  `Fecha_reg` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `Cdg_prgta` varchar(6) DEFAULT NULL,
  `Id_psu` varchar(10) DEFAULT NULL,
  `Respuesta` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgosuicida`
--

CREATE TABLE `riesgosuicida` (
  `Id_psu` varchar(10) DEFAULT NULL,
  `Resultado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD PRIMARY KEY (`Id_uaa`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`Id_uaa`);

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`ID_Encuesta`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`Id_uaa`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`Codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `ID_Encuesta` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
