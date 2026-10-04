-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2026 at 03:35 AM
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
-- Database: `pos_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Rowgene Zuckerberg', 'rowgene@example.com', '09171234567', '2026-09-30 09:31:37'),
(2, 'Helen Cruz', 'helen@example.com', '09181234567', '2026-09-30 09:31:37'),
(3, 'Sean Baldwin', 'sean@example.com', '09191234567', '2026-09-30 09:31:37'),
(4, 'Wilduard Netangyahu', 'wilduard@example.com', '09201234567', '2026-09-30 09:31:37'),
(5, 'Jeremiah Xinpingfu', 'jeremiah@example.com', '09211234567', '2026-09-30 09:31:37'),
(6, 'Maria Santos', 'maria@example.com', '091725678991', '2026-10-03 12:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `created_at`, `avatar`, `password`) VALUES
(1, 'rowgene.admin', 'Rowgene Zuckerberg', '2026-09-30 09:31:37', NULL, '$2y$10$ngtkkhJjihrd87DTm2oMauEAjenLoO7nobX4.zyms4cSyimeAk5g2'),
(2, 'helen.staff', 'Helen Cruz', '2026-09-30 09:31:37', NULL, '$2y$10$ngtkkhJjihrd87DTm2oMauEAjenLoO7nobX4.zyms4cSyimeAk5g2'),
(3, 'sean.staff', 'Sean Baldwin', '2026-09-30 09:31:37', NULL, '$2y$10$ngtkkhJjihrd87DTm2oMauEAjenLoO7nobX4.zyms4cSyimeAk5g2'),
(4, 'wilduard.manager', 'Wilduard Netangyahu', '2026-09-30 09:31:37', '1791040486_73baf8e947056bd4f38e.jpg', '$2y$10$ngtkkhJjihrd87DTm2oMauEAjenLoO7nobX4.zyms4cSyimeAk5g2'),
(5, 'jeremiah.staff', 'Jeremiah Xinpingfu', '2026-09-30 09:31:37', '1791040468_ed106d344c47a657533e.png', '$2y$10$ngtkkhJjihrd87DTm2oMauEAjenLoO7nobX4.zyms4cSyimeAk5g2'),
(6, 'Icenberg', 'Isaiah Jeremiah Ironhill', '2026-10-03 00:35:37', '1791040517_0770ffb9774a55b49680.png', '$2y$10$ngtkkhJjihrd87DTm2oMauEAjenLoO7nobX4.zyms4cSyimeAk5g2'),
(7, 'Ice Aranas', '123ice', '2026-10-03 12:11:58', NULL, '$2y$10$ngtkkhJjihrd87DTm2oMauEAjenLoO7nobX4.zyms4cSyimeAk5g2'),
(8, 'Keith', 'Rockhenge', '2026-10-03 15:18:37', NULL, '$2y$10$ngtkkhJjihrd87DTm2oMauEAjenLoO7nobX4.zyms4cSyimeAk5g2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
