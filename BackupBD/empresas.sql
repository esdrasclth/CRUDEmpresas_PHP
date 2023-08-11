-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql211.byetcluster.com
-- Tiempo de generación: 11-08-2023 a las 01:09:27
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_34722935_CRUDEmpresasProjects`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `RTN` varchar(15) NOT NULL,
  `NombreEmpresa` varchar(150) NOT NULL,
  `Gerente` varchar(150) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `PaginaWEB` varchar(250) DEFAULT NULL,
  `Comentarios` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`RTN`, `NombreEmpresa`, `Gerente`, `Telefono`, `PaginaWEB`, `Comentarios`) VALUES
('06000001401', 'Amazon.com, Inc.', 'Andy Jassy', '+1-888-280-4331', 'www.amazon.com', ' Gran empresa de comercio electronico y servicios en la nube. '),
('110119990012', 'Google LLC', 'Sundar Pichai', '+1-650-253-0000', 'www.google.com', ' Empresa de tecnologia conocida por su motor de busqueda. '),
('150219990010', 'Facebook, Inc.', 'Mark Zuckerberg', '+1-650-543-4800', 'www.facebook.com', ' Red social y empresa de tecnologia. '),
('070219930010', 'Tesla, Inc.', 'Elon Musk', '+1-650-681-5000', 'www.tesla.com', ' Fabricante de vehiculos electricos y tecnologia de energia. '),
('08000123456', 'Microsoft Corporation', 'Satya Nadella', '+1-425-882-8080', 'www.microsoft.com', 'Empresa lider en software y tecnologia.'),
('09001111013', 'The Home Depot, Inc.', 'Craig Menear', '+1-770-433-8211', 'www.homedepot.com', 'Cadena de tiendas de mejoras para el hogar.'),
('26001111013', 'Uber Technologies, Inc.', 'Dara Khosrowshahi', '+1-866-576-1039', 'www.uber.com', 'Empresa de transporte compartido y servicios de entrega.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`RTN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
