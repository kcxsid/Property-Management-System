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
-- Database: `reser`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ReservationID` int(255) NOT NULL,
  `PropertyID` int(11) DEFAULT NULL,
  `ManagerID` int(11) DEFAULT NULL,
  `customerID` int(255) NOT NULL,
  `CheckInDate` date DEFAULT NULL,
  `CheckOutDate` date DEFAULT NULL,
  `SpecialRequirements` varchar(100) DEFAULT NULL,
  `Status` varchar(30) DEFAULT NULL,
  `creditCardNumber` varchar(255) NOT NULL,
  `ExpiryDate` varchar(255) NOT NULL
) ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ReservationID`, `PropertyID`, `ManagerID`, `customerID`, `CheckInDate`, `CheckOutDate`, `SpecialRequirements`, `Status`, `creditCardNumber`, `ExpiryDate`) VALUES
(52, 1, 2, 32, '2021-05-24', '2021-05-28', '1; 24-28', 'Pending', '$2y$10$4JOtZ0gbVAiv12NB9Y7SM.stjWuAbsU6NemzuT9qHKtowHY1qPGoW', '01/2023\r\n'),
(53, 2, 2, 32, '2021-05-25', '2021-05-29', '1234567809876543', 'Pending', '$2y$10$fB7oWoAvRfUcbsPRY5.3RudpWWACVocTvmS3a12dIzPTdmk.n20c2', '02/2026'),
(54, 3, 2, 32, '2021-05-23', '2021-06-05', '3; 23 - 5', 'Pending', '$2y$10$/gVjrkt0JeP3K8xzsA1qj.nPpS7zW3z.lEDOft5aZqITzeYr8gVMy', '01/2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ReservationID`),
  ADD KEY `PropertyID` (`PropertyID`),
  ADD KEY `ManagerID` (`ManagerID`),
  ADD KEY `customerID` (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ReservationID` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`PropertyID`) REFERENCES `properties`.`propertyinfo` (`propertyID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`ManagerID`) REFERENCES `managerdb`.`managerinfo` (`managerid`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`customerID`) REFERENCES `registration`.`registerinfo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
