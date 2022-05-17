-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2022 a las 06:14:32
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vinia_tumunian`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `productId` int(11) NOT NULL,
  `productName` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `productCode` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `imageUrl` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`productId`, `productName`, `productCode`, `stock`, `price`, `description`, `imageUrl`, `estado`) VALUES
(1, 'Vino cabernet', 'VN-01', 10, 15000, 'Vino cabernet reserva del año 2018', 'https://lavinoteca.vteximg.com.br/arquivos/ids/160737-1000-1000/4559_1.jpg?v=637649138103770000', 'activo'),
(3, 'vino tumuñan', 'vn-02', 20, 10000, 'muy rico', '', 'activo'),
(4, 'vino tumuñan', 'vn-03', 20, 10000, 'De panini', '', 'activo'),
(6, 'Vino blanco xd', 'VN-003', 10, 10000, 'VINO BLANCO CHILLAN', '', 'desactivado'),
(7, 'Miel', 'M-01', 4, 10, 'Miel de la viña tumuñan', '', 'activo'),
(8, 'Vino especial', 'VN-04', 12, 40000, 'Vino especial reserva 2016', '', 'activo'),
(9, 'Vino reserva 2013', 'VN-05', 21, 23133, 'vino de reserva del año 2013', '', 'activo'),


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
