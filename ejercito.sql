-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2020 a las 03:17:02
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejercito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `batallas`
--

CREATE TABLE `batallas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombrec` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `resultado` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `id` int(11) NOT NULL,
  `nombre_ejercito` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `civilizacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_unidad` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `puntos` int(11) NOT NULL,
  `monedas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id`, `nombre_ejercito`, `civilizacion`, `nombre_unidad`, `puntos`, `monedas`) VALUES
(4363, 'Popular de Liberación', 'chino', 'piquero', 5, 1000),
(4364, 'Popular de Liberación', 'chino', 'piquero', 5, 1000),
(4365, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4366, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4367, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4368, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4369, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4370, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4371, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4372, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4373, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4374, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4375, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4376, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4377, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4378, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4379, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4380, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4381, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4382, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4383, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4384, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4385, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4386, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4387, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4388, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4389, 'Popular de Liberación', 'chino', 'arquero', 10, 1000),
(4390, 'Popular de Liberación', 'chino', 'caballero', 20, 1000),
(4391, 'Popular de Liberación', 'chino', 'caballero', 20, 1000),
(4392, 'Fuerzas Armadas', 'ingles', 'piquero', 5, 1000),
(4393, 'Fuerzas Armadas', 'ingles', 'arquero', 10, 1000),
(4394, 'Fuerzas Armadas', 'ingles', 'caballero', 20, 1000),
(4395, 'Fuerzas Armadas', 'ingles', 'piquero', 5, 1000),
(4396, 'Fuerzas Armadas', 'ingles', 'arquero', 10, 1000),
(4397, 'Fuerzas Armadas', 'ingles', 'caballero', 20, 1000),
(4398, 'Fuerzas Armadas', 'ingles', 'piquero', 5, 1000),
(4399, 'Fuerzas Armadas', 'ingles', 'arquero', 10, 1000),
(4400, 'Fuerzas Armadas', 'ingles', 'caballero', 20, 1000),
(4401, 'Fuerzas Armadas', 'ingles', 'piquero', 5, 1000),
(4402, 'Fuerzas Armadas', 'ingles', 'arquero', 10, 1000),
(4403, 'Fuerzas Armadas', 'ingles', 'caballero', 20, 1000),
(4404, 'Fuerzas Armadas', 'ingles', 'piquero', 5, 1000),
(4405, 'Fuerzas Armadas', 'ingles', 'arquero', 10, 1000),
(4406, 'Fuerzas Armadas', 'ingles', 'caballero', 20, 1000),
(4407, 'Fuerzas Armadas', 'ingles', 'piquero', 5, 1000),
(4408, 'Fuerzas Armadas', 'ingles', 'arquero', 10, 1000),
(4409, 'Fuerzas Armadas', 'ingles', 'caballero', 20, 1000),
(4410, 'Fuerzas Armadas', 'ingles', 'piquero', 5, 1000),
(4411, 'Fuerzas Armadas', 'ingles', 'arquero', 10, 1000),
(4412, 'Fuerzas Armadas', 'ingles', 'caballero', 20, 1000),
(4413, 'Fuerzas Armadas', 'ingles', 'piquero', 5, 1000),
(4414, 'Fuerzas Armadas', 'ingles', 'arquero', 10, 1000),
(4415, 'Fuerzas Armadas', 'ingles', 'caballero', 20, 1000),
(4416, 'Fuerzas Armadas', 'ingles', 'piquero', 5, 1000),
(4417, 'Fuerzas Armadas', 'ingles', 'arquero', 10, 1000),
(4418, 'Fuerzas Armadas', 'ingles', 'caballero', 20, 1000),
(4419, 'Fuerzas Armadas', 'ingles', 'piquero', 5, 1000),
(4420, 'Fuerzas Armadas', 'ingles', 'arquero', 10, 1000),
(4421, 'Fuerzas Armadas', 'ingles', 'caballero', 20, 1000),
(4422, 'bárbaros', 'bizantinos', 'piquero', 5, 1000),
(4423, 'bárbaros', 'bizantinos', 'piquero', 5, 1000),
(4424, 'bárbaros', 'bizantinos', 'piquero', 5, 1000),
(4425, 'bárbaros', 'bizantinos', 'piquero', 5, 1000),
(4426, 'bárbaros', 'bizantinos', 'piquero', 5, 1000),
(4427, 'bárbaros', 'bizantinos', 'arquero', 10, 1000),
(4428, 'bárbaros', 'bizantinos', 'arquero', 10, 1000),
(4429, 'bárbaros', 'bizantinos', 'arquero', 10, 1000),
(4430, 'bárbaros', 'bizantinos', 'arquero', 10, 1000),
(4431, 'bárbaros', 'bizantinos', 'arquero', 10, 1000),
(4432, 'bárbaros', 'bizantinos', 'arquero', 10, 1000),
(4433, 'bárbaros', 'bizantinos', 'arquero', 10, 1000),
(4434, 'bárbaros', 'bizantinos', 'arquero', 10, 1000),
(4435, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4436, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4437, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4438, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4439, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4440, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4441, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4442, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4443, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4444, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4445, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4446, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4447, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4448, 'bárbaros', 'bizantinos', 'caballero', 20, 1000),
(4449, 'bárbaros', 'bizantinos', 'caballero', 20, 1000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `batallas`
--
ALTER TABLE `batallas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `batallas`
--
ALTER TABLE `batallas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4450;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
