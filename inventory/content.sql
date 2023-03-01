-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 18:41:39
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventory`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content`
--

CREATE TABLE `content` (
  `itemNUM` int(250) NOT NULL,
  `UPC` varchar(25) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `Department` varchar(25) NOT NULL,
  `Quantity` varchar(6) NOT NULL,
  `Last_Edited` varchar(15) NOT NULL,
  `Buying_Price` varchar(20) NOT NULL,
  `Selling_Price` varchar(20) NOT NULL,
  `Supplier_Name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `content`
--

INSERT INTO `content` (`itemNUM`, `UPC`, `Description`, `Department`, `Quantity`, `Last_Edited`, `Buying_Price`, `Selling_Price`, `Supplier_Name`) VALUES
(1, '183222', 'Busch Light', 'Cerveza Lata', '2,573', '2021-10-15', '$1,749.64', '$2,315.70', 'B. Fernandez'),
(2, '7437092002', 'Caja Gasolina Parcha', 'Cerveza Lata', '12', '2438753', '$45.36', '$64.92', 'Ballester hnos. inc.'),
(3, '186360050197', 'Collective Jam Mash', 'Cerveza Lata', '7', '2021-10-14', '$19.25', '$27.93', 'Ballester Hermanos'),
(4, '878053', 'Coors Light 10oz', 'Cerveza Lata', '1,367', '2021-10-15', '$1,175.62', '$1,531.04', 'V. Suarez'),
(5, '041827003324', 'Harpoon Rec League', 'Cerveza Lata', '6', '2021-10-15', '$10.20', '$25.38', 'Ballester Hermanos'),
(6, '743709200066', 'Gasolina Tu Madras', 'Cerveza Lata', '18', '2021-10-15', '$16.56', '$25.38', 'Puerto Rico Supply'),
(7, '743709200172', 'Gasolina Sangría 200ml', 'Cerveza Lata', '64', '2021-10-15', '$51.20', '$90.24', 'Puerto Rico Supply'),
(8, '743709200219', 'Gasolina Parcha', 'Cerveza Lata', '59', '2021-10-10', '$54.28', '$83.19', 'Pepsi Co.'),
(9, '743709200219', 'Parcha', 'Cerveza', '10', '2021-10-10', '10', '10', 'Pepsi Co.'),
(10, '123456789', 'Placeholder', 'Placeholder', 'Placeh', 'Placeholder', 'Placeholder', 'Placeholder', 'The Coca Cola Co.'),
(11, 'Placeholder', 'Placeholder', 'Placeholder', 'Placeh', 'Placeholder', 'Placeholder', 'Placeholder', 'V. Suarez & Corp'),
(12, 'Placeholder', 'Placeholder', 'Placeholder', 'Placeh', 'Placeholder', 'Placeholder', 'Placeholder', 'Pepsi Co.'),
(13, 'Placeholder', 'Placeholder', 'Placeholder', 'Placeh', 'Placeholder', 'Placeholder', 'Placeholder', 'V. Suarez & Corp'),
(14, 'Placeholder', 'Placeholder', 'Placeholder', 'Placeh', 'Placeholder', 'Placeholder', 'Placeholder', 'V. Suarez & Corp'),
(15, 'Placeholder', 'Placeholder', 'Placeholder', 'Placeh', 'Placeholder', 'Placeholder', 'Placeholder', 'Ballester hnos. inc.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`itemNUM`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `content`
--
ALTER TABLE `content`
  MODIFY `itemNUM` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
