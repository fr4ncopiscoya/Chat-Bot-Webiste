-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2023 a las 06:16:24
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
(1, 'Que tal?', 'Yo no tengo sentimientos, soy creado por software, pero dime, como estás tu?'),
(2, 'Hola ! Hola ? Hola! Hola?', 'Hey ! Que tal !? '),
(3, 'asdasd', 'asdasfasf xd'),
(4, 'Muestrame los productos que tienes', 'Claro, de que categoría? \r\nTenemos de las categorias: <br> <br> <a href=\"../pages/construccion.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Ferretería y construcción</a> <br> <br> <a href=\"../pages/decohogar.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Decohogar</a> <br> <br> <a href=\"../pages/tecnologia.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Tecnología</a> \r\n<br> <br>\r\n\r\nQue producto estás buscando específicamente?'),
(5, 'Muéstrame las categorías ', 'Tenemos las categorias:  <br> <br> <a href=\"../pages/construccion.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Ferretería y construcción</a> <br> <br> <a href=\"../pages/decohogar.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Decohogar</a> <br> <br> <a href=\"../pages/tecnologia.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Tecnología</a>'),
(9, 'A que se dedican?', 'Somos una empresa dedicada a la venta de suministros o materiales de construcción, tales como tornillería, herramientas, pinturas, herrajes, etc.'),
(10, 'Bien Mal Todo bien Todo mal', 'Ok, no me importa'),
(11, 'Que eres? Quien eres?', 'Soy un chatbot creado por software y estoy diseñado para ayudarte en tu busqueda de hoy'),
(12, 'Me vas a ayudar? Me vas a ayudar ? Me vas ayudar ? Me vas ayudar?', 'Depende...'),
(13, 'De que? De que ?', 'De si vas a comprar algo o no xd'),
(14, 'aeaaaaaaaa', 'xddd'),
(15, 'Si, quiero comprar algo', 'Ahora si pues... Hace rato era, mucho hablas'),
(16, 'Muebles Mueble Sillas Silla Espejo Ropero Escritorio', 'Ese producto lo puedes encontrar en la categoría <br> <br> <a href=\"../pages/decohogar.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Decohogar</a> <br> <br>'),
(17, 'Cemento Ladrillos Alicate Entornilladora Martillo Taladro ', 'Ese producto lo puedes encontrar en <br> <br> <a href=\"../pages/construccion.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Ferretería y construcción</a> <br> <br>'),
(18, 'Cocina Lavadora Foco led ', 'Ese producto lo puedes encontrar en <br> <br> <a href=\"../pages/tecnologia.php\" class=\"agregar-carrito btn-3\" data-id=\"1\">Tecnología</a> \r\n<br> <br>'),
(19, 'Muchas gracias Gracias por tu ayuda', 'De nada, pero a la próxima compre algo al menos'),
(20, 'Y tú ? Y tú? Y tu? Y tu ?', 'Yo no tengo tengo sentimientos oe'),
(21, 'Cual es tu producto mas vendido? Producto mas vendido? Producto mas vendido ? Cual es tu producto mas vendido ? Producto mas vendido Cual es el mas vendido? Cual es el mas vendido ? Cual es el producto mas vendido ? Cual es el producto mas vendido?', 'Este producto está siendo el mas vendido. Aprovecha y llevalo ya ! <br> \r\n<div class=\"ofert-1\">\r\n            <img src=\"../img/tala.png\" alt=\"\">\r\n            <div class=\"product-txt\">\r\n                <h3>Taladro Electrico</h3>\r\n                <p>Precio: $. 500</p>\r\n\r\n                <a href=\"#\" class=\"agregar-carrito btn-3\" data-id=\"1\">Agregar</a>\r\n            </div>\r\n        </div>\r\n               '),
(22, 'Tienes algunas ofertas? Tienes algunas ofertas ? Tienes algunos productos en oferta? Tienes algunos productos en oferta ? Tienes productos en oferta ? Tienes productos en oferta? Muestrame los productos en oferta', 'Si claro, tenemos productos en oferta por tiempo limitado <br> <br>\r\n<a href=\"../pages/index.php#lista-1\" class=\"agregar-carrito btn-3\" data-id=\"1\">Ofertas !</a>\r\n<br> <br>\r\nAprovecha las ofertas por tiempo limitado antes que se acabe el tiempo y se agoten !');

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
(47, 'Leito', 1251256, 'leito@gmail.com', 'leito123'),
(49, 'Julia', 9080892, 'julia@gmail.com', 'julia123'),
(50, 'Jhonatan', 12345566, 'jhonatan@gmail.com', 'jhonatan123');

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
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
