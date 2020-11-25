-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 06:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(255) NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `phone`, `firstname`, `lastname`, `password`, `role`, `assigned_to`, `token`, `created_at`) VALUES
(6, 'olaseinder@gmail.com', '', 'Oladipupo', 'Olaseinde', '$2y$10$SOAoW9y8mXQrr4QjKiYmeuEzrAdRT5q/uUNvB9AUL2SHEzHVkYzGO', 'mentor', 0, '8cc4e0c6b6f20339f2f0054723980082', '2020-11-25 13:44:40'),
(7, 'nwakwyevictor@gmail.com', '', 'VICTOR', 'NWAKWUE', '$2y$10$TrRKhQr4dZ3MJoWUs7ubausXMScOMs5GBIyPw9OSklNBdiIfnytdq', 'mentor', 0, 'adfe6dfbaace0a15f4fe7dec40537db2', '2020-11-25 14:00:13'),
(8, 'jamesobasi@gmail.com', '', 'James', 'Obasi', '$2y$10$pAPZTxY4/WudbxNVCz03BOGCeu/eUOa2Omnzz9su.uELu4QiXRm4.', 'mentee', 6, 'e6911d04ed9303c51c50329677ad26bf', '2020-11-25 14:10:31'),
(9, 'lindantara@gmail.com', '', 'Linda', 'Anttara', '$2y$10$X5V.R125xh8o1c/pNCEKo.Helsd8vq87N4utvPuIl0nY9Yv8IVdpy', 'mentee', 7, '92da09eb146597baffe20a3392e78cbd', '2020-11-25 14:12:39'),
(13, 'mercypeters@gmail.com', '', 'Mercy', 'Peters', '$2y$10$42reio88v3Nb1wWQTx8mmuDlCNpO1gBqy85tRmUrqE2PlW/9EaYlm', 'mentee', 6, 'dcc95ad2a3d4b468296ecb31cd583a12', '2020-11-25 17:00:15'),
(14, 'admedbashiru@gmail.com', '', 'Admed', 'Bashiru', '$2y$10$wuNgfwSObBhi1XCBDn9BIeUEzTjGEPnuMBR/EenGtG2JjD4kJjvt6', 'mentor', 6, 'c691d29d41e17c1f59fcb0b63084e3ea', '2020-11-25 17:13:20'),
(16, 'jenniferokpara@gmail.com', '', 'Jennifer', 'Okpara', '$2y$10$DEb3CUE9vyfQxPQflHwoH.dlafOaCfeJp3fTc1KmPmyy0Vow2yR1q', 'mentor', 6, '702964e1c43b26a42782c77b3eeb6f2e', '2020-11-25 17:16:35'),
(17, 'masonmount@gmail.com', '', 'Mason', 'Mount', '$2y$10$XS4/VcdEZcR58AMQXe4d0OPN9pMYYVTINFCpw1kLfX2MOdw3T2dVO', 'mentor', 6, '1ccf42525322a1838b2d6273bf3df8d6', '2020-11-25 17:17:15'),
(18, 'oliviergiroud@gmail.com', '', 'Olivier', 'Giroud', '$2y$10$zDNQ.GOFbWsRv29q2bY2eOADsSrAv5YrC1CrzR0MaeiLeyVqh0IrS', 'mentor', 6, '1094c455e26ce9177a213dc5c761f8c1', '2020-11-25 17:18:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
