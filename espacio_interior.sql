-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2023 a las 00:02:12
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `espacio_interior`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_contacto`
--

CREATE TABLE `formulario_contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telefono` int(15) NOT NULL,
  `asunto` varchar(20) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  `fecha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario_contacto`
--

INSERT INTO `formulario_contacto` (`id`, `nombre`, `email`, `telefono`, `asunto`, `mensaje`, `fecha`) VALUES
(1, 'Juan José', 'juanjose@juamjose.co', 123456789, 'compra', 'Esto es una prueba para comprobar el funcionamiento del formulario', '14'),
(7, 'Daniel', 'daniel@daniel.com', 987654321, 'compra1', 'Esto es una prueba de q funciona correctamente el formulario', '14'),
(8, 'Laura', 'laura@laura.com', 123789456, 'presupuesto', 'Esto es una prueba del funcionamiento del formulario', '14/04/23'),
(9, 'José', 'jose@jose.com', 456789123, 'Comentario de venta', 'Esto es una prueba del trato recibido en la compra', '14/04/23'),
(10, 'José', 'jose@jose.com', 456789123, 'Comentario de venta', 'Esto es una prueba del trato recibido en la compra', '14/04/23'),
(11, 'José', 'jose@jose.com', 456789123, 'Comentario de venta', 'Esto es una prueba del trato recibido en la compra', '14/04/23'),
(12, 'prueba1', 'prueba1@prueba1.com', 111111111, 'prueba1', 'Prueba1', '17/04/23'),
(13, 'prueba2', 'prueba2@prueba.com', 222222222, 'prueba2', 'prueba2', '17/04/23'),
(14, 'prueba1', 'prueba1@prueba1.com', 111111111, 'prueba1', 'Prueba1', '17/04/23'),
(15, 'prueba3', 'prueba3@prueba.com', 444444444, 'prueba3', 'prueba3', '17/04/23'),
(16, 'prueba3', 'prueba3@prueba.com', 444444444, 'prueba3', 'prueba3', '17/04/23'),
(17, 'prueba1', 'prueba1@prueba1.com', 456789123, 'prueba1', 'prueba1', '17/04/23'),
(18, 'prueba1', 'prueba1@prueba1.com', 456789123, 'prueba1', 'prueba1', '17/04/23'),
(19, 'prueba1', 'prueba1@prueba1.com', 456789123, 'prueba1', 'prueba1', '17/04/23'),
(20, 'Juan José', 'prueba1@prueba1.com', 456789123, 'compra1', 'asasas', '17/04/23'),
(21, 'José', 'daniel@daniel.com', 123456789, 'compra1', 'asa', '17/04/23'),
(22, 'prueba1', 'juanjose@juamjose.co', 123456789, 'compra1', 'asas', '17/04/23'),
(23, 'prueba1', 'prueba1@prueba1.com', 456789123, 'prueba1', 'jhj', '17/04/23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario_contacto`
--
ALTER TABLE `formulario_contacto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario_contacto`
--
ALTER TABLE `formulario_contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
