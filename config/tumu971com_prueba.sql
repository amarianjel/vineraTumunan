-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-08-2022 a las 22:20:18
-- Versión del servidor: 8.0.30
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tumu971com_prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int NOT NULL,
  `categoria` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci COMMENT='Catwegorias';

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(2, 'Syrah'),
(3, 'Rosé'),
(4, 'Cabernet');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int NOT NULL,
  `fecha` datetime NOT NULL,
  `status` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `id_cliente` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `id_transaccion` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `medio_pago` varchar(2) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `fecha`, `status`, `email`, `id_cliente`, `total`, `id_transaccion`, `medio_pago`) VALUES
(1, '2022-07-30 06:02:30', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '20990.00', '4V5591195K075394K', ''),
(2, '2022-07-30 06:14:36', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '31980.00', '9B9499630X524020T', ''),
(3, '2022-07-30 06:16:12', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '209900.00', '5F7510370U219801A', ''),
(4, '2022-07-30 06:19:37', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '209900.00', '4RF70404NH3951648', ''),
(5, '2022-07-30 06:21:03', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '209900.00', '0RX83791SS295082F', ''),
(6, '2022-07-30 06:25:00', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '20990.00', '62J59295W00727022', ''),
(7, '2022-07-30 06:25:57', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '207870.00', '94M84636FG924315D', ''),
(8, '2022-07-30 06:44:04', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '20990.00', '1M894891HW055162T', ''),
(9, '2022-07-30 06:49:52', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '31980.00', '1SX83423G9479420M', ''),
(10, '2022-07-30 06:52:10', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '62970.00', '5XS35230B9942890J', ''),
(11, '2022-07-30 07:04:44', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '20990.00', '82258171GK278902N', ''),
(12, '2022-07-30 07:07:51', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '16990.00', '93D70274UG128282H', ''),
(13, '2022-07-30 07:14:00', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '15990.00', '4FE35452T05492713', ''),
(14, '2022-07-30 07:16:03', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '33980.00', '19C17636BY1842137', ''),
(15, '2022-07-30 07:19:26', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '16990.00', '5YJ6440053027744L', ''),
(16, '2022-07-30 07:23:07', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '15990.00', '91M64811XY152935L', ''),
(17, '2022-07-30 07:40:36', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '16990.00', '2XB84564G0381743K', ''),
(18, '2022-07-31 03:54:24', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '20990.00', '3XF147018K122381L', ''),
(19, '2022-08-02 03:43:12', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '27.66', '87J877642X641040S', ''),
(20, '2022-08-02 03:50:37', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '23.19', '2VD24909GJ944982A', ''),
(21, '2022-08-02 05:09:30', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '46.38', '1E412150U07290639', ''),
(22, '2022-08-02 05:12:14', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '16988.73', '8GH64353UE567190Y', ''),
(23, '2022-08-02 05:15:42', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '15984.07', '10H73103L1054743L', ''),
(24, '2022-08-02 05:20:53', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '15984.07', '4R6844446U943574R', ''),
(25, '2022-08-02 05:25:27', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '15984.07', '4FW26617YL6633510', ''),
(26, '2022-08-04 02:35:59', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '33825.19', '1ER21316CP7385235', ''),
(27, '2022-08-04 02:39:58', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '33825.19', '7H323000BK7698423', ''),
(28, '2022-08-04 02:43:05', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '33825.19', '0SG228093R363670A', ''),
(29, '2022-08-04 02:45:36', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '16984.37', '70T67671BS719921Y', ''),
(30, '2022-08-04 02:49:37', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17836.73', '9S968188A3576562J', ''),
(31, '2022-08-04 02:52:09', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '16984.37', '1DR031824U1165811', ''),
(32, '2022-08-04 02:56:05', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '16984.37', '047094018S515344V', ''),
(33, '2022-08-04 03:04:59', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17836.73', '9BV09632LP826845E', ''),
(34, '2022-08-04 03:07:42', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17836.73', '6HE80481S5383424J', ''),
(35, '2022-08-04 03:20:34', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17836.73', '9BC320339C426330H', ''),
(36, '2022-08-05 17:56:28', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17834.14', '4HU522174C4080014', ''),
(37, '2022-08-05 18:13:53', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17834.14', '5M633025EV449792G', ''),
(38, '2022-08-05 19:21:20', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '16984.47', '8B9217342F869935L', ''),
(39, '2022-08-05 19:29:52', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '16984.47', '9HF84799J88213646', ''),
(40, '2022-08-05 20:16:25', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17834.14', '0H994239SC972724F', ''),
(41, '2022-08-05 20:33:56', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '16984.47', '0M650232L4661392Y', ''),
(42, '2022-08-05 20:40:26', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '16984.47', '1R239408Y5803394W', ''),
(43, '2022-08-17 03:55:12', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17839.77', '98A264369D6954635', ''),
(44, '2022-08-17 04:44:50', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17839.77', '24C65403M4974182U', ''),
(45, '2022-08-17 04:51:56', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17839.77', '75R67753B3919093J', ''),
(46, '2022-08-17 04:56:33', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17839.77', '19A420128U471111H', ''),
(47, '2022-08-17 05:14:30', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17839.77', '76L654921F960393K', ''),
(48, '2022-08-17 05:22:10', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17839.77', '1F608296G8744321E', ''),
(49, '2022-08-17 05:24:57', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17839.77', '3DA079401X013545F', ''),
(50, '2022-08-17 05:36:14', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17839.77', '5R694106B5246374M', ''),
(51, '2022-08-17 05:38:42', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17839.77', '6ST93655UN908264Y', ''),
(52, '2022-08-17 05:41:24', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17839.77', '27498548JJ0930607', ''),
(53, '2022-08-17 05:45:15', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17839.77', '9TV08581WJ283214X', ''),
(54, '2022-08-17 05:49:34', 'COMPLETED', 'sb-sz7od19667026@personal.example.com', '2RCGUGN6FWAX8', '17839.77', '5DK65546W0303501T', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE `detalle_compra` (
  `id` int NOT NULL,
  `id_compra` int NOT NULL,
  `id_producto` int NOT NULL,
  `nombre` varchar(120) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_compra`
--

INSERT INTO `detalle_compra` (`id`, `id_compra`, `id_producto`, `nombre`, `precio`, `cantidad`) VALUES
(1, 1, 1, 'Vino Tumuñan 1', '20990.00', 1),
(2, 2, 2, 'Vino Tumuñan 2', '15990.00', 2),
(3, 3, 1, 'Vino Tumuñan 1', '20990.00', 10),
(4, 4, 1, 'Vino Tumuñan 1', '20990.00', 10),
(5, 5, 1, 'Vino Tumuñan 1', '20990.00', 10),
(6, 6, 1, 'Vino Tumuñan 1', '20990.00', 1),
(7, 7, 2, 'Vino Tumuñan 2', '15990.00', 13),
(8, 8, 1, 'Vino Tumuñan 1', '20990.00', 1),
(9, 9, 2, 'Vino Tumuñan 2', '15990.00', 2),
(10, 10, 1, 'Vino Tumuñan 1', '20990.00', 3),
(11, 11, 1, 'Vino Tumuñan 1', '20990.00', 1),
(12, 12, 3, 'Vino tumuñan 3', '16990.00', 1),
(13, 13, 2, 'Vino Tumuñan 2', '15990.00', 1),
(14, 14, 3, 'Vino tumuñan 3', '16990.00', 2),
(15, 15, 3, 'Vino tumuñan 3', '16990.00', 1),
(16, 16, 2, 'Vino Tumuñan 2', '15990.00', 1),
(17, 17, 3, 'Vino tumuñan 3', '16990.00', 1),
(18, 18, 1, 'Vino Tumuñan 1', '20990.00', 1),
(19, 19, 1, 'Vino Tumuñan 1', '20990.00', 1),
(20, 20, 1, 'Vino Tumuñan 1', '20990.00', 1),
(21, 21, 1, 'Vino Tumuñan 1', '20990.00', 2),
(22, 22, 3, 'Vino tumuñan 3', '16990.00', 1),
(23, 23, 2, 'Vino Tumuñan 2', '15990.00', 1),
(24, 24, 2, 'Vino Tumuñan 2', '15990.00', 1),
(25, 25, 2, 'Vino Tumuñan 2', '15990.00', 1),
(26, 26, 1, 'Vino Tumuñan 1', '17841.50', 1),
(27, 26, 2, 'Vino Tumuñan 2', '15990.00', 1),
(28, 27, 1, 'Vino Tumuñan 1', '17841.50', 1),
(29, 27, 2, 'Vino Tumuñan 2', '15990.00', 1),
(30, 28, 1, 'Vino Tumuñan 1', '17841.50', 1),
(31, 28, 2, 'Vino Tumuñan 2', '15990.00', 1),
(32, 29, 3, 'Vino tumuñan 3', '16990.00', 1),
(33, 30, 1, 'Vino Tumuñan 1', '17841.50', 1),
(34, 31, 3, 'Vino tumuñan 3', '16990.00', 1),
(35, 32, 3, 'Vino tumuñan 3', '16990.00', 1),
(36, 33, 1, 'Vino Tumuñan 1', '17841.50', 1),
(37, 34, 1, 'Vino Tumuñan 1', '17841.50', 1),
(38, 35, 1, 'Vino Tumuñan 1', '17841.50', 1),
(39, 36, 1, 'Vino Tumuñan 1', '17841.50', 1),
(40, 37, 1, 'Vino Tumuñan 1', '17841.50', 1),
(41, 38, 3, 'Vino tumuñan 3', '16990.00', 1),
(42, 39, 3, 'Vino tumuñan 3', '16990.00', 1),
(43, 40, 1, 'Vino Tumuñan 1', '17841.50', 1),
(44, 41, 3, 'Vino tumuñan 3', '16990.00', 1),
(45, 42, 3, 'Vino tumuñan 3', '16990.00', 1),
(46, 43, 1, 'Vino Tumuñan 1', '17841.50', 1),
(47, 44, 1, 'Vino Tumuñan 1', '17841.50', 1),
(48, 45, 1, 'Vino Tumuñan 1', '17841.50', 1),
(49, 46, 1, 'Vino Tumuñan 1', '17841.50', 1),
(50, 47, 1, 'Vino Tumuñan 1', '17841.50', 1),
(51, 48, 1, 'Vino Tumuñan 1', '17841.50', 1),
(52, 49, 1, 'Vino Tumuñan 1', '17841.50', 1),
(53, 50, 1, 'Vino Tumuñan 1', '17841.50', 1),
(54, 51, 1, 'Vino Tumuñan 1', '17841.50', 1),
(55, 52, 1, 'Vino Tumuñan 1', '17841.50', 1),
(56, 53, 1, 'Viña Tumuñan', '17841.50', 1),
(57, 54, 1, 'Viña Tumuñan', '17841.50', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int NOT NULL,
  `nombre` varchar(120) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `precio` int NOT NULL,
  `descuento` tinyint NOT NULL DEFAULT '0',
  `stock` int NOT NULL,
  `activo` tinyint NOT NULL,
  `fecha_alta` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_categoria` int NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `descuento`, `stock`, `activo`, `fecha_alta`, `id_categoria`, `imagen`) VALUES
(2, 'Rosé 2019', 'Nuestra Rosa es del 2019. Es 100% Vabernet Sauvignon de la sierra y tiene un color rosa claro. Degustarás notas cítricas, pomelo y minerales. Perfecto para un día caluroso en la terraza o para maidar con marisco/pescado', 1, 0, 0, 1, '2022-08-21 22:36:37', 3, '20220822020105.jpg'),
(3, 'Rosé 2020', 'Nuestra Rose es de 2020. Es 100% Cabernet Sauvignon de la sierra y tiene un color rosa claro. Degustarás notas cítricas, pomelo y minerales. Perfecto para un día caluroso en la terraza o para maridar con marisco / pescado.', 1, 0, 1, 1, '2022-08-21 22:41:24', 3, '20220822020054.jpg'),
(4, 'Cabernet Sauvignon 2018', 'Este vino potente y expresivo tiene un color rubí oscuro con reflejos violáceos, aroma de frutos negros claros y cuerpo. En la boca, hermosos taninos sedosos, cuerpo medio a pleno, fruta limpia y un final largo. Una verdaadera expresión de nuestro terruño de montaña y fruta orgánica recolectada a mano.', 1, 0, 1, 1, '2022-08-21 22:46:15', 1, '20220822020043.jpg'),
(5, 'Syrah 2017', 'Un vino de peso medio con un refrescante equilibrio ácido, sabores especiados y taninos. Notas tostadas de roble complementan la fruta y aportan profundidad al paladar.', 1, 0, 1, 1, '2022-08-21 22:46:15', 2, '20220822020032.jpg'),
(6, 'Syrah 2018', 'Audaz, especiado, de cuerpo medio con sabores de cereza negra.', 1, 0, 1, 1, '2022-08-21 22:46:15', 2, '20220822020008.jpg'),
(42, 'Cabernet Sauvignon 2018', 'Este vino potente y expresivo tiene un color rubí oscuro con reflejos violáceos, aroma de frutos negros claros y cuerpo. En la boca, hermosos taninos sedosos, cuerpo medio a pleno, fruta limpia y un final largo. Una verdaadera expresión de nuestro terruño de montaña y fruta orgánica recolectada a mano.', 1, 0, 1, 1, '2022-08-22 21:47:35', 4, '20220822214735.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `clave`, `imagen`) VALUES
(1, 'admin', 'Will', 'ceeb48c20df6e66a88cd6a0488924fbb', '20220819215031.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
