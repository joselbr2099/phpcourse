-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-07-2020 a las 01:37:55
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(10) DEFAULT NULL,
  `paterno` varchar(10) DEFAULT NULL,
  `materno` varchar(10) DEFAULT NULL,
  `ci` int(10) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`id`, `nombre`, `paterno`, `materno`, `ci`, `correo`) VALUES
(5, 'andres', 'andres', 'jojs', 44535, 'vv@mail.u'),
(6, 'gato', 'martin', 'fernando', 3345345, 'gato@mail.ru'),
(7, 'jose', 'luis', 'ralde', 3345, 'gg@asdf.ry'),
(8, 'sadfs', 'asdfsdaf', 'sdsdg', 456546, 'ggg@asdf.ry'),
(9, 'sadfs', 'asdfsdaf', 'sdsdg', 456546, 'ggdfg@asdf.ry'),
(10, 'sadfs', 'asdfsdaf', 'sdsdg', 456546, 'gdfgdfg@asdf.ry'),
(11, 'mojo', 'martinez', 'romero', 334535, 'romero@gmail.com'),
(12, 'jose', 'jose', 'jose', 234234, 'jose@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password`
--

CREATE TABLE `password` (
  `id` int(200) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `paswd` varchar(500) DEFAULT NULL,
  `cuenta` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `password`
--

INSERT INTO `password` (`id`, `usuario`, `paswd`, `cuenta`) VALUES
(1, 'gato@mail.ru', '70b783251225354e883a5bef3c011843', 6),
(2, 'gg@asdf.ry', '1798c7d9bd5a5d637ead47154f0d36e3', 7),
(3, 'gdfgdfg@asdf.ry', '1eaa8bb195869a23f081acbb5bf08527', 10),
(4, 'romero@gmail.com', '15fa672549a3c6bb57af22fbb5bc73ba', 11),
(5, 'romero@gmail.com', '15fa672549a3c6bb57af22fbb5bc73ba', 11),
(6, 'romero@gmail.com', '1798c7d9bd5a5d637ead47154f0d36e3', 11),
(7, 'jose@gmail.com', '662eaa47199461d01a623884080934ab', 12),
(8, 'jose@gmail.com', '662eaa47199461d01a623884080934ab', 12);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `password`
--
ALTER TABLE `password`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
