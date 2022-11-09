-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2022 at 07:24 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `category` int NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `audio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `description`, `image`, `audio`) VALUES
(1, 'one', 1, 1, ' o', ' uploads/download.png', ''),
(2, 'two', 2, 2, 'twooo', ' uploads/1.jpg', ''),
(3, 'ss', 22, 0, ' sd', 'uploads/1.pptx', ''),
(4, 'sa', 2, 0, ' sad', 'uploads/3.jpg', ''),
(5, 'sa', 2, 0, ' sad', 'uploads/3.jpg', ''),
(6, 'sa', 2, 0, ' sad', 'uploads/3.jpg', ''),
(7, 'seven', 7, 0, ' ss', ' uploads/download.jpg', ''),
(8, 'ss', 56456, 0, '  sd', '', ''),
(9, 'ss', 5403, 0, '  sd', '', ''),
(10, 'ss', 5403, 0, '  sd', 'C:UsersAhmedAppDataLocalTempphp33A4.tmp', ''),
(11, 'tea', 155, 0, '  sadas', 'C:UsersAhmedAppDataLocalTempphp6F09.tmp', ''),
(14, 'x', 0, 0, ' dfssdf', 'C:UsersAhmedAppDataLocalTempphp5D6F.tmp', ''),
(16, 'nnnnnnnn', 0, 0, 'mmmmm', ' uploads/4.jpg', ''),
(17, 'audio', 4, 4, ' qwe', 'uploads/19-48-37-847_200x200 (1).jpg', ''),
(18, 'dsd', 23, 2, ' asd', 'uploads/10-30-11-397_200x200.jpg', ''),
(19, 'hds', 52, 12, ' wq', 'uploads/09-28-04-865_200x200.jpg', 'audio-636be1c7ecef72.05343976.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
