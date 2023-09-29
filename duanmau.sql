-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2023 at 03:21 AM
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
-- Database: `duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `name_user` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL,
  `creaeDate` date NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `type`) VALUES
(9, 'Iphone', 'iphone'),
(11, 'SamSung', 'samsung'),
(12, 'Xiaomi', 'xiaomi'),
(13, 'Oppo', 'oppo');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_pr` int NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `content`, `id_pr`, `id_user`) VALUES
(32, 'xin chao cac ban', 8, 11),
(33, 'toi ten la tao\r\n', 8, 11),
(34, 'nhismdeptraihehe\r\n', 8, 13),
(35, 'nesws', 8, 13),
(36, 'xin chao cac ban', 9, 11),
(37, 'toi ten la tao\r\n', 9, 11),
(38, 'hehehe\r\n', 10, 11),
(39, 'hahahahaha', 10, 11),
(40, 'xin chao tuiin la anh 3 báo\r\n', 8, 14),
(41, 'Xin chào tôi là anh ba báo', 9, 14),
(42, 'Dự án này dễ vãi ò', 10, 14),
(43, 'Chất vãi l', 10, 14),
(44, 'đây là comment', 11, 14),
(45, 'xin chao cac b', 12, 14),
(46, 'xin chao cac anh e', 8, 14),
(47, 'xin chao anh em', 8, 14),
(48, 'hahaha', 8, 14),
(49, 'ahhaha', 8, 14),
(50, 'hahaha', 8, 14);

-- --------------------------------------------------------

--
-- Table structure for table `manage_login`
--

CREATE TABLE `manage_login` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` tinyint NOT NULL DEFAULT '0',
  `password_mahoa` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_login`
--

INSERT INTO `manage_login` (`id`, `name`, `username`, `password`, `email`, `role`, `password_mahoa`) VALUES
(11, 'Anh nhism', 'admin2', '$2y$10$CWOhP5b0VgqpWP.UHpvsseWHYBFB29ovBz6w6W.ei3ZZ77JrlNRoK', '', 0, '12345'),
(13, 'nhism10', 'nhism1709', '$2y$10$SPr16yGqzLx2v/e4g1uzL.WRmqxY8NsBf0xxaTyDhvNih5JzfSyxG', 'phudh30417@fpt.edu.vn', 0, '2002'),
(14, 'Anh Ba Báo', 'anhba', '$2y$10$7gRzg2w3Yy8JaTA6zk2QROYXCFHRlB.rnOPXxeb3BjnVB4FdSIlGi', 'phudh30417@fpt.edu.vn', 0, '2001'),
(15, NULL, 'admin', '$2y$10$dcuGzSoXYxFzeN7qzFQR8.F0j7Gjh8s5Q3BBGMJmNM6q.KgSjqClK', '', 1, '2002');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `detail` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `price` float(10,0) NOT NULL DEFAULT '0',
  `view` int NOT NULL DEFAULT '0',
  `id_cate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `detail`, `quantity`, `price`, `view`, `id_cate`) VALUES
(8, 'Iphone 8', '8.jpg', 'News', 12, 120000, 104, 9),
(9, 'Iphone 11', 'iphone11.jpg', 'News', 20, 140000, 90, 9),
(10, 'Iphone 11 ProMax', 'iphone11prm.jpg', 'News', 20, 150000, 80, 9),
(11, 'Iphone 12', '12.jpg', 'News', 20, 180000, 70, 9),
(12, 'Iphone 12 ProMax', '12prm.jpg', 'News', 20, 190000, 60, 9),
(13, 'Iphone 13', '13.jpg', 'News', 20, 200000, 50, 9),
(14, 'Iphone 13 ProMax', '13prm.jpg', 'News\r\n', 13, 220000, 50, 9),
(15, 'SamSung S21 5G', 's21 5g.jpg', 'News', 50, 150000, 30, 11),
(16, 'SamSung S21 5G Plus', 's21 5g plus.jpg', 'News', 50, 160000, 41, 11),
(17, 'SamSung S22 5G', 's22.jpg', 'News', 14, 160000, 20, 11),
(18, 'SamSung S22 5G Plus', 's22utral.jpg', 'news', 50, 170000, 10, 11),
(19, 'SamSung S23 5G', 's23.jpg', 'News', 50, 2000000, 5, 11),
(20, 'SamSung S23 5G Plus', 's23utral.jpg', 'News\r\n', 50, 230000, 0, 11),
(21, 'Xiaomi 11', 'xiaomi11.jpg', 'News\r\n', 15, 120000, 0, 12),
(22, 'Xiaomi 11 Lite', 'xiaomi11lite.jpg', 'News', 70, 130000, 0, 12),
(23, 'Xiaomi 12', 'xiaomi12.jpg', 'News', 16, 160000, 0, 12),
(24, 'Xiaomi 12 Lite', 'xiaomi12lite.jpg', 'News', 70, 170000, 0, 12),
(25, 'Xiaomi 13', 'xiaomi13.jpg', 'News\r\n', 17, 200000, 0, 12),
(26, 'Xiaomi 13 ProMax', 'xiaomi13pro.jpg', 'News', 70, 210000, 0, 12),
(27, 'Oppo A54', 'oppo-a54.jpg', 'News', 1000, 1000000, 0, 13),
(28, 'Oppo A55', 'oppo-a55.jpg', 'News', 100, 120000, 0, 13),
(29, 'Oppo A57 ', 'oppo-a57.jpg', 'news', 100, 130000, 0, 13),
(30, 'Oppo A77s', 'oppo-a77s.jpg', 'News', 100, 190000, 0, 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_lg` int NOT NULL,
  `id_pr` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fb_pr` (`id_pr`),
  ADD KEY `fk_fb_user` (`id_user`);

--
-- Indexes for table `manage_login`
--
ALTER TABLE `manage_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pr` (`id_cate`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_lg` (`id_lg`),
  ADD KEY `fk_user_prd` (`id_pr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `manage_login`
--
ALTER TABLE `manage_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_fb_pr` FOREIGN KEY (`id_pr`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_fb_user` FOREIGN KEY (`id_user`) REFERENCES `manage_login` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_pr` FOREIGN KEY (`id_cate`) REFERENCES `categories` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_lg` FOREIGN KEY (`id_lg`) REFERENCES `manage_login` (`id`),
  ADD CONSTRAINT `fk_user_prd` FOREIGN KEY (`id_pr`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
