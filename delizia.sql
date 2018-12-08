-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2018 a las 04:14:10
-- Versión del servidor: 10.1.34-MariaDB
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
CREATE DATABASE `delizia`;
--

-- -------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumo`
--

CREATE TABLE `consumo` (
  `id_cons` int(11) NOT NULL,
  `descript` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `total_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `consumo`
--

INSERT INTO `consumo` (`id_cons`, `descript`, `total_cost`) VALUES
(1, '0', 500),
(2, '0', 1000),
(3, '0', 70),
(4, '0', 200),
(5, '0', 1000),
(6, '0', 0),
(7, '0', 0),
(8, '0', 0),
(9, '0', 300),
(10, '0', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id_eat` int(100) NOT NULL,
  `name` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `description` text COLLATE latin1_spanish_ci NOT NULL,
  `cost` int(100) NOT NULL,
  `category` enum('desayuno','almuerzo','cena','bebida','postre') COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id_eat`, `name`, `description`, `cost`, `category`) VALUES
(1, 'Chapín', 'Huevos revueltos con salsa, frijoles, crema y pan tostado...', 25, 'desayuno'),
(2, 'Deslizia Chapín', 'Huevos revueltos, frijoles volteados, platanos, crema y chismol.', 29, 'desayuno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations`
--

CREATE TABLE `reservations` (
  `id_rev` int(100) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `num_person` int(2) DEFAULT NULL,
  `consumo_asigned` int(100) DEFAULT NULL,
  `table_asigned` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `reservations`
--

INSERT INTO `reservations` (`id_rev`, `date`, `name`, `num_person`, `consumo_asigned`, `table_asigned`) VALUES
(1, '2018-11-14', 'Diego', 4, 1, 5),
(2, '2018-11-14', 'Andres', 2, 2, 1),
(3, '2018-11-14', 'Andres', 4, 3, 9),
(4, '2018-11-14', 'Juan', 4, 4, 20),
(5, '2018-11-14', 'Pedro', 6, 5, 18),
(6, '2018-11-14', 'Juan Pablo Segundo', 6, 6, 17),
(7, '2018-11-14', 'Juan Domingez', 5, 7, 12),
(8, '2018-11-14', 'Michael Jackson', 1, 8, 3),
(9, '2018-11-15', 'Sebastian Diaz', 6, 9, 10),
(10, '2018-11-15', 'Juan Barrrios', 1, 10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tables`
--

CREATE TABLE `tables` (
  `id_table` int(5) NOT NULL,
  `capacity` int(2) DEFAULT NULL,
  `available` enum('0','1') COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tables`
--

INSERT INTO `tables` (`id_table`, `capacity`, `available`) VALUES
(1, 2, '0'),
(2, 2, '1'),
(3, 2, '0'),
(4, 2, '0'),
(5, 2, '0'),
(6, 4, '0'),
(7, 4, '0'),
(8, 4, '0'),
(9, 4, '0'),
(10, 4, '1'),
(11, 6, '0'),
(12, 6, '0'),
(13, 6, '0'),
(14, 6, '0'),
(15, 6, '0'),
(16, 6, '0'),
(17, 6, '0'),
(18, 6, '0'),
(19, 6, '0'),
(20, 6, '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consumo`
--
ALTER TABLE `consumo`
  ADD PRIMARY KEY (`id_cons`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_eat`);

--
-- Indices de la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_rev`),
  ADD KEY `consumo_asing` (`consumo_asigned`,`table_asigned`),
  ADD KEY `asignarMesa` (`table_asigned`);

--
-- Indices de la tabla `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id_table`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id_eat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id_rev` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consumo`
--
ALTER TABLE `consumo`
  ADD CONSTRAINT `consumo_ibfk_1` FOREIGN KEY (`id_cons`) REFERENCES `reservations` (`id_rev`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `asignarMesa` FOREIGN KEY (`table_asigned`) REFERENCES `tables` (`id_table`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
