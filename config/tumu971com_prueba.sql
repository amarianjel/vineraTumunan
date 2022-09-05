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
