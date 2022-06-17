-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-06-2019 a las 23:19:55
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admintik_yamil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Maquinolas`
--

CREATE TABLE `Maquinolas` (
  `id` int(11) NOT NULL,
  `NumeroPC` varchar(255) NOT NULL DEFAULT '0',
  `Cede` varchar(255) NOT NULL DEFAULT '1',
  `Status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Maquinolas`
--

INSERT INTO `Maquinolas` (`id`, `NumeroPC`, `Cede`, `Status`) VALUES
(1, '1', '1', '0'),
(2, '2', '1', '0'),
(3, '3', '1', '0'),
(4, '1', '2', '0'),
(5, '2', '2', '0'),
(6, '3', '2', '0'),
(7, '1', '3', '0'),
(8, '2', '3', '0'),
(9, '3', '3', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rental`
--

CREATE TABLE `Rental` (
  `ID` int(11) NOT NULL,
  `MachineID` varchar(255) NOT NULL,
  `RentalID` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `EndTime` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Rental`
--

INSERT INTO `Rental` (`ID`, `MachineID`, `RentalID`, `Date`, `Time`, `EndTime`) VALUES
(1, '1', '1', '2019-06-21', '8', '00000000'),
(2, '1', '1', '2019-06-21', '12', '00000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL DEFAULT 'noname',
  `Dni` varchar(255) NOT NULL DEFAULT '000000',
  `Credito` varchar(255) NOT NULL DEFAULT 'nope',
  `Status` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Users`
--

INSERT INTO `Users` (`id`, `User`, `Pass`, `Nombre`, `Dni`, `Credito`, `Status`) VALUES
(1, '34', '34', 'Example', '000000', 'nope', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Maquinolas`
--
ALTER TABLE `Maquinolas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Rental`
--
ALTER TABLE `Rental`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Maquinolas`
--
ALTER TABLE `Maquinolas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `Rental`
--
ALTER TABLE `Rental`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
