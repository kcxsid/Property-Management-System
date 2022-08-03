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
-- Database: `properties`
--

-- --------------------------------------------------------

--
-- Table structure for table `ratingsinfo`
--

CREATE TABLE `ratingsinfo` (
  `id` int(255) NOT NULL,
  `propertyID` int(255) NOT NULL,
  `value` int(255) NOT NULL,
  `experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratingsinfo`
--

INSERT INTO `ratingsinfo` (`id`, `propertyID`, `value`, `experience`) VALUES
(1, 1, 5, 'test feedback for database check'),
(2, 1, 3, 'Could be better!'),
(3, 1, 1, 'test 1 feedback'),
(4, 1, 2, 'test entry for 2'),
(5, 1, 4, 'Test Rating 4, Property 1'),
(6, 1, 4, 'Rated 4/5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ratingsinfo`
--
ALTER TABLE `ratingsinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratingsinfo_ibfk_1` (`propertyID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ratingsinfo`
--
ALTER TABLE `ratingsinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratingsinfo`
--
ALTER TABLE `ratingsinfo`
  ADD CONSTRAINT `ratingsinfo_ibfk_1` FOREIGN KEY (`propertyID`) REFERENCES `propertyinfo` (`propertyID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
