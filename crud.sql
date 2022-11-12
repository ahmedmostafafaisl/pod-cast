-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2022 at 03:34 PM
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
  `category` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `audio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `description`, `image`, `audio`) VALUES
(1, 'one', 1, ' اسلاميات', ' 111', ' uploads/04-26-16-554_200x200.jpg', 'audio-636fb291732627.26320669.mp3'),
(2, 'two', 2, ' لغات', 'twooo', ' uploads/18-11-49-224_200x200.jpg', 'audio-636fb6d42defb4.02769843.mp3'),
(3, 'Three', 3, ' رياضة', ' sd', ' uploads/08-10-48-631_200x200.jpg', 'audio-636fb21ba2fb36.87511524.mp3'),
(4, 'Four', 4, ' تاريخ', ' ff', ' uploads/09-43-21-459_200x200.jpg', ''),
(5, 'five', 5, ' تقني', ' sad', ' uploads/10-34-59-670_200x200.jpg', ''),
(6, 'sa', 2, ' حصريات', ' sad', ' uploads/14-30-37-977_200x200.jpg', ''),
(7, 'seven', 7, ' اسلاميات', ' ss', ' uploads/musicstudy-1200x800.webp', ''),
(8, 'ss', 56456, ' اسلاميات', '  sd', ' uploads/04-36-59-560_200x200.jpg', ''),
(9, 'kora', 5403, ' رياضة', 'sports', ' uploads/14-43-14-304_200x200.jpg', ''),
(10, 'ss', 5403, ' لغات', '  sd', ' uploads/04-36-59-560_200x200.jpg', ''),
(11, 'tea', 155, ' تاريخ', '  sadas', ' uploads/10-34-59-670_200x200.jpg', ''),
(14, 'x', 0, '9', ' dfssdf', ' uploads/16-48-56-842_200x200.jpg', ''),
(16, 'nnnnnnnn', 0, '0', 'mmmmm', ' uploads/4.jpg', ''),
(17, 'audio', 4, '4', ' qwe', 'uploads/19-48-37-847_200x200 (1).jpg', ''),
(18, 'dsd', 23, '2', ' asd', 'uploads/10-30-11-397_200x200.jpg', ''),
(19, 'hds', 52, '12', ' wq', 'uploads/09-28-04-865_200x200.jpg', 'audio-636be1c7ecef72.05343976.mp3'),
(20, 'd', 15, ' حصريات', ' ww', ' uploads/16-48-56-842_200x200.jpg', ''),
(21, 'd', 15, ' ', ' ww', 'uploads/14-43-14-304_200x200.jpg', 'audio-636edab53cb561.67072244.mp3'),
(22, 'song', 44, ' حصريات', ' fcvhv', ' uploads/17-44-23-399_200x200.jpg', 'audio-636fb6b2393cd8.33259551.mp3'),
(23, 'islam', 12, ' اسلاميات', ' asd', 'uploads/14-43-14-304_200x200.jpg', 'audio-636f9537d12c74.64622230.mp3'),
(24, 'sport', 33, ' رياضة', ' ad', 'uploads/19-48-37-847_200x200 (1).jpg', 'audio-636f95ea64f015.72246121.mp3'),
(25, 'history', 123, ' تاريخ', ' hhh', 'uploads/19-32-35-334_200x200.jpg', 'audio-636f9f5fcf2fc9.06465976.mp3'),
(26, 'sdf', 223, ' تاريخ', ' tttttttttttt', ' uploads/09-28-04-865_200x200.jpg', ''),
(27, '5555', 4444, ' تاريخ', ' ssss', 'uploads/3.jpg', 'audio-636fa0270f7322.66006309.mp3'),
(28, 'lang', 4332, ' لغات', ' sdfdfs', 'uploads/2.jpg', 'audio-636fa06ad80bc2.93789510.mp3'),
(29, 'ddd', 456, ' لغات', ' qqwqw', 'uploads/16-41-49-34_200x200.jpg', 'audio-636fa1630ca3c1.33808800.mp3'),
(30, 'sport', 213, ' رياضة', ' das', 'uploads/23-13-29-354_200x200.jpg', 'audio-636fa95630da86.53699594.mp3'),
(31, 'his', 11, ' تاريخ', ' qwe', 'uploads/11-06-26-621_200x200.jpg', 'audio-636fa9c2d7b737.99808235.mp3'),
(32, 'hasryat', 89, ' اسلاميات', ' dsf', 'uploads/18-11-49-224_200x200.jpg', 'audio-636faa48d87507.22817900.mp3'),
(33, 'hasryat', 89, ' حصريات', ' dsf', 'uploads/18-11-49-224_200x200.jpg', 'audio-636faa5840b806.47548047.mp3'),
(34, 'fin', 32, ' حصريات', ' sdf', 'uploads/11-06-26-621_200x200.jpg', 'audio-636fac1b20af92.37733777.mp3'),
(35, 'tech', 84, ' تقني', ' fi', 'uploads/10-30-11-397_200x200.jpg', 'audio-636facbd966c72.49050730.mp3'),
(36, 'asf', 11, ' تقني', ' qwe', 'uploads/18-11-49-224_200x200.jpg', 'audio-636fad4caef766.31769181.mp3'),
(37, 'asm', 3, ' اسلاميات', ' de', 'uploads/19-32-35-334_200x200.jpg', 'audio-636faeee43e709.40270550.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `First_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text,
  `avatar` text,
  `phone` varchar(255) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` varchar(25) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `First_name`, `last_name`, `email`, `password`, `avatar`, `phone`, `age`, `created_at`, `updated_at`, `role`) VALUES
(1, 'salem', 'eslam', 'salem@gmail.com', 'As123456', './images/user/1668023805.jpeg', '01245784523', 25, '2022-11-09 19:56:45', '2022-11-09 21:56:45', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
