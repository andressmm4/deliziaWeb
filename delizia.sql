-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2018 a las 03:47:04
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
-- Base de datos: `delizia`
--

-- --------------------------------------------------------

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
(1, '1', 50);

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
  `table_asigned` int(11) NOT NULL,
  `fact` enum('0','1') COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `reservations`
--

INSERT INTO `reservations` (`id_rev`, `date`, `name`, `num_person`, `consumo_asigned`, `table_asigned`, `fact`) VALUES
(1, '2018-12-14', 'Andres Montenegro', 2, 1, 1, '0');

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
(1, 2, '1'),
(2, 2, '0'),
(3, 2, '0'),
(4, 2, '0'),
(5, 2, '0'),
(6, 4, '0'),
(7, 4, '0'),
(8, 4, '0'),
(9, 4, '0'),
(10, 4, '0'),
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `lastname` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `tel` int(9) NOT NULL,
  `category` enum('1','2','3') CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `user` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`name`, `lastname`, `email`, `tel`, `category`, `user`, `password`) VALUES
('Andres', 'Montenegro', 'andress.mm4@gmail.com', 31634911, '1', 'andres', '123');

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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`tel`);

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
  MODIFY `id_rev` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consumo`
--
ALTER TABLE `consumo`
  ADD CONSTRAINT `consumo_ibfk_1` FOREIGN KEY (`id_cons`) REFERENCES `reservations` (`id_rev`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
