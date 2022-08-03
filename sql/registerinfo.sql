-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 09:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registerinfo`
--

CREATE TABLE `registerinfo` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerinfo`
--

INSERT INTO `registerinfo` (`id`, `email`, `password`, `name`, `phone`, `address`, `dob`) VALUES
(29, 'sid@gmail.com', '$2y$10$ADHixw5KzybMZaKc/XOanOOtGINR4j76Coyh2wh8OkZEFcDwJvf2a', 'Sid', '+91 99999 88888', 'Home address', '2000-12-12'),
(32, 'test@gmail.com', '$2y$10$cheGpNyHG1OTCxiv/WISDOfT.bjY/xXZQU9IyTCgf.rHjsH5hX2V6', 'Test', '+91 00000 11111', 'Test address', '1995-02-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registerinfo`
--
ALTER TABLE `registerinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registerinfo`
--
ALTER TABLE `registerinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
