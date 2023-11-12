-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 02:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko-olahraga`
--

-- --------------------------------------------------------

--
-- Table structure for table `sports_equipments`
--

CREATE TABLE `sports_equipments` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports_equipments`
--

INSERT INTO `sports_equipments` (`product_id`, `product_name`, `brand`, `description`, `category`, `sports`, `gender`, `stock`, `price`) VALUES
(1, 'Air Jordan 1', 'Nike', 'Sepatu Air Jordan High ukuran 43', 'Sepatu Sneakers', 'Lifestyle', 'Unisex', 5, 1200000),
(3, 'Yonex ARCSABER 11', 'Yonex', 'Raket Badminton Yonex', 'Raket', 'Badminton', 'Unisex', 4, 2450000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sports_equipments`
--
ALTER TABLE `sports_equipments`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sports_equipments`
--
ALTER TABLE `sports_equipments`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
