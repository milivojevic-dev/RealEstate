-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 23, 2020 at 02:32 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `the_list`
--

DROP TABLE IF EXISTS `the_list`;
CREATE TABLE IF NOT EXISTS `the_list` (
  `id_real_estate` int(255) NOT NULL,
  `name_real_estate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `room_number` int(2) NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `animals` tinyint(1) NOT NULL,
  `smoking` tinyint(1) NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(10) NOT NULL,
  `balcony` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(30) NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_real_estate`),
  KEY `user_id` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `the_list`
--

INSERT INTO `the_list` (`id_real_estate`, `name_real_estate`, `room_number`, `address`, `city`, `country`, `animals`, `smoking`, `price`, `size`, `balcony`, `date`, `id_user`, `phone`, `image`) VALUES
(1, 'Apartment in center', 2, 'Petra Drapsina 25', 'Subotica', 'Srbija', 0, 1, '130e', 55, 1, '2020-08-18', 1, '38162/1234567', 'apartment.jpg'),
(2, 'House with yard', 3, 'Arsenija Carnojevica 25', 'Beograd', 'Srbija', 1, 1, '140e', 90, 0, '2020-08-13', 2, '38165/1357924', 'yard-house.jpg'),
(3, 'House in mountain', 5, 'Jovan Jovanovic Zmaj 30a', 'Zlatibor', 'Srbija', 0, 0, '290e', 52, 0, '2020-08-15', 1, '38161/1534569', 'mountain-house.jpg'),
(4, 'House in village', 2, 'Janka Jankovica 92', 'Sombor', 'Srbija', 0, 0, '100e', 90, 0, '2020-08-13', 2, '38166/2912384', 'village-house.jpg'),
(5, 'Apartment on the outskirts of the city', 3, 'Cara Lazara 3', 'Nis', 'Srbija', 1, 1, '180e', 68, 1, '2020-06-15', 2, '381621222567', 'outskirt-apartment.jpg'),
(6, 'Penthouse', 4, 'Kizura Istvana 35', 'Uzice', 'Srbija', 0, 1, '350e', 100, 1, '2020-08-12', 1, '38166/2984384', 'penthouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(30) NOT NULL,
  `username` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(42) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_birth` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `age` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `first_name`, `last_name`, `date_birth`, `gender`, `email`, `age`, `contact`) VALUES
(1, 'ivanam', 'd41d8cd98f00b204e9800998ecf8427e', 'Ivana', 'Milivojevic', '1997-07-19', 1, 'milivojevic@gmail.com', '23', '381662233445'),
(2, 'jovanaj', 'd41d8cd98f00b204e9800998ecf8423t', 'Jovana', 'Jovanic', '1988-01-05', 1, 'checking@gmail.com', '30', '381692853945'),
(3, 'nikolicm', 'd41d8cd98f00b2f4e98js5nuf842k3j9', 'Marko', 'Nikolic', '1992-12-31', 1, 'test@gmail.com', '17', '381648748012');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `the_list`
--
ALTER TABLE `the_list`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
