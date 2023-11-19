-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 11:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('zonzon', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `category` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `product_image`, `category`) VALUES
(17, 'Macaron 3pcs', '8.00', 'uploads/macaron3pcs.jpg', 'macarons'),
(19, 'Macaron 6pcs', '15.00', 'uploads/macaronNew.jpg', 'macarons'),
(20, 'Chocolate Macaron 8pcs', '20.00', 'uploads/macaronChoc.png', 'macarons'),
(22, 'Mango Sticky Rice', '12.00', 'uploads/sticky.png', 'Thai Dessert'),
(24, 'Rainbow Cake (Slice)', '15.00', 'uploads/rainbowCake.jpg', 'cakes'),
(25, 'Tiramisu Cake (Slice)', '15.00', 'uploads/tiramisuCake.png', 'cakes'),
(26, 'Green Tea Cake (Slice)', '15.00', 'uploads/greenteaCake.png', 'Cakes'),
(27, 'Brownie Cookies (6pcs)', '18.00', 'uploads/browniecookies.png', 'Cookies'),
(28, 'Choco Mousse Cake (Slice)', '15.00', 'uploads/mousse.png', 'Cakes'),
(29, 'Coconut Ice Cream', '10.00', 'uploads/coconut.png', 'Thai Dessert'),
(30, 'Oreo Crepe Cake (Slice)', '15.00', 'uploads/oreoCake.png', 'Cakes'),
(31, 'Red Velvet Cookies (6pcs)', '18.00', 'uploads/redvelvet.png', 'Cookies'),
(32, 'Coconut Pudding Pancakes', '10.00', 'uploads/coconutPudding.png', 'Thai Dessert'),
(33, 'Strawberry Cheesecake (Slice)', '15.00', 'uploads/cheeseCake.png', 'Cakes'),
(34, 'Mix Flavours Special (12pcs)', '25.00', 'uploads/mixflavour.png', 'Macarons');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`name`, `email`, `message`) VALUES
('Nur Syahirah', 'n.syahirah@gmail.com', 'Test message!'),
('Nur Syazwani', 'waniSyaz@gmail.com', 'Hye!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('Wani', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
