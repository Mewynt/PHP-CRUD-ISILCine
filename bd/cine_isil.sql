-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 03:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cine_isil`
--
CREATE DATABASE IF NOT EXISTS `cine_isil` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cine_isil`;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `premios` int(11) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `duracion` time(2) NOT NULL,
  `genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `titulo`, `calificacion`, `premios`, `fechaCreacion`, `duracion`, `genero`) VALUES
(1, 'TITANIC', 10, 11, '1998-01-23', '03:14:00.00', 'Romance, drama, accion'),
(2, 'Braveheart', 9, 5, '1995-05-19', '02:58:00.00', 'accion, guerra, drama'),
(3, 'The Wolf of Wall Street', 7, 0, '2014-01-23', '03:00:00.00', 'comedia, thriller'),
(4, 'The Godfather I', 9, 3, '1972-03-14', '02:55:00.00', 'mafia, accion, suspenso'),
(5, 'The Ring', 8, 0, '2003-05-13', '01:55:00.00', 'terror, suspenso'),
(6, 'Harry Potter and the Philosopher\'s Stone', 7, 0, '2001-11-16', '02:32:00.00', 'accion, misterio, fantasia'),
(7, 'Steve Jobs: The Man in the Machine', 10, 0, '2015-09-04', '02:08:00.00', 'documental'),
(8, 'CODA', 8, 3, '2021-08-13', '01:51:00.00', 'musical, drama, romance'),
(9, '12 YEARS OF SLAVERY', 7, 3, '2014-02-12', '02:14:00.00', 'drama, accion'),
(10, 'LIGHT OF MOON', 9, 2, '2016-02-09', '01:48:00.00', 'romance, drama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
