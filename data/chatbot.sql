-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2023 a las 04:26:58
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chatbot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatbot`
--

CREATE TABLE `chatbot` (
  `chat_id` int(11) NOT NULL,
  `chat_query` varchar(500) NOT NULL,
  `chat_rep` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `chatbot`
--

INSERT INTO `chatbot` (`chat_id`, `chat_query`, `chat_rep`) VALUES
(1, 'Que tal?', 'Todo bien y tu?'),
(2, 'Hola', 'Hola, soy tu asistente virtual'),
(3, 'asdasd', 'asdasfasf xd'),
(4, 'Muestrame los productos que tienes', 'Claro, de que categoría? \r\nTenemos de las categorias: <br> <br> <a href=\"../pages/construccion.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Ferretería y construcción</a> <br> <br> <a href=\"../pages/decohogar.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Decohogar</a> <br> <br> <a href=\"../pages/tecnologia.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Tecnología</a>'),
(5, 'Muéstrame las categorías ', 'Tenemos las categorias:  <br> <br> <a href=\"../pages/construccion.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Ferretería y construcción</a> <br> <br> <a href=\"../pages/decohogar.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Decohogar</a> <br> <br> <a href=\"../pages/tecnologia.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Tecnología</a>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_dni` int(7) NOT NULL,
  `user_correo` varchar(200) NOT NULL,
  `user_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_dni`, `user_correo`, `user_pass`) VALUES
(3, 'Franco', 74848949, 'franco@gmail.com', 'piscoya123'),
(5, 'Hernesto', 1234566, 'hernesto@gmail.com', 'hernesto123'),
(7, 'Ricardo', 987654, 'ricardo@gmail.com', 'ricardo123'),
(10, 'Maria', 1029384, 'maria@gmail.com', 'maria123'),
(13, 'Jorge', 6789123, 'jorge@gmail.com', 'jorge123'),
(14, 'Job', 192844, 'job@gmail.com', 'job123'),
(45, 'Juan', 73062313, 'juan@gmail.com', 'juan123'),
(46, 'Leo', 123124125, 'leo@gmail.com', 'leo123'),
(47, 'Leito', 1251256, 'leito@gmail.com', 'leito123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
