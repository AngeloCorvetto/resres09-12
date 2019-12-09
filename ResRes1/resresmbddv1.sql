-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2019 a las 19:01:11
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `resresmbddv1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Nombre` varchar(30) NOT NULL,
  `Clave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Nombre`, `Clave`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('resres', 'b0bd7560790c13b656fd58e17e35143e'),
('savitur', '5dfe7eb1cb19e487f0fd780bf55a6597');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `NIT` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `NombreCompleto` varchar(70) NOT NULL,
  `Apellido` varchar(70) NOT NULL,
  `Clave` text NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `CodigoEstado` varchar(30) NOT NULL,
  `Nombre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`CodigoEstado`, `Nombre`) VALUES
('C0', 'Pendiente'),
('C1', 'Aceptado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `Codigo` int(11) NOT NULL,
  `Opc1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`Codigo`, `Opc1`) VALUES
(1, '13:00'),
(6, '13:35'),
(10, '18:00'),
(11, '18:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `CodigoReserva` int(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `CantPersonas` int(255) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `Horario` varchar(255) NOT NULL,
  `Admin` varchar(255) NOT NULL,
  `CodigoEstado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`CodigoReserva`, `Nombre`, `Apellido`, `Correo`, `Telefono`, `CantPersonas`, `Fecha`, `Horario`, `Admin`, `CodigoEstado`) VALUES
(2, '13:30', '13:50', '13:30', '13:30', 13, '2019-07-14', '13:30', 'Admin', 'C1'),
(3, 'bluperto', 'ramirez', 'bluperto@ramones.com', '9999888', 2, '2019-07-26', '', 'Admin', 'C0'),
(4, 'aaa', 'aaaaa', 'aaa', '2134234', 2, '2019-07-12', '13:00', 'Admin', 'C0'),
(7, 'angelo', 'asd', 'asd', 'asd', 0, '2019-07-14', '13:00', 'Admin', 'C0'),
(8, 'Alonso', 'Sepulveda', 'ramon@ramones.com', '22334477', 2, '2019-07-18', '18:00', 'Admin', 'C1'),
(9, 'savitur', 'mirana', 'adfsga', '3456t', 2, '2019-07-26', '18:15', 'Admin', 'C0'),
(10, 'ramon', 'serrano', 'bluperto@ramones.com', '9999888', 2, '2019-07-19', '13:00', 'Admin', 'C0'),
(11, 'ramon', 'm,nb', 'ramon123', '22334477', 2, '2019-07-19', '18:00', 'Admin', 'C0'),
(12, 'ramon', 'Gonzales', 'ramon@ramones.com', '585786', 2, '2019-07-20', '13:00', 'Admin', 'C0'),
(13, 'bluperto', 'm,nb', 'aaa', '9999888', 2, '2019-07-27', '18:00', 'Admin', 'C0'),
(14, 'dfeew', 'rtwere', 'aaa', '1234', 2, '2019-07-20', '18:00', 'Admin', 'C0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurants`
--

CREATE TABLE `restaurants` (
  `CodigoRestaurant` int(11) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `DireccionRepertorio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `restaurants`
--

INSERT INTO `restaurants` (`CodigoRestaurant`, `Imagen`, `Nombre`, `Descripcion`, `DireccionRepertorio`) VALUES
(1, '', 'Kitcheng', 'Probando', 'mesa-2personas.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`NIT`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`CodigoEstado`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`CodigoReserva`);

--
-- Indices de la tabla `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`CodigoRestaurant`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `CodigoReserva` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `CodigoRestaurant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
