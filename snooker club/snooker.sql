-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 04:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snooker`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `memid` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `category` char(2) DEFAULT NULL,
  `amount` bigint(10) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`memid`, `username`, `email`, `category`, `amount`, `duration`) VALUES
(1, 'abhi', 'abhi123@gmail.com', 'A', 5000, '12months'),
(2, 'bhanu', 'bhanu123@gmail.com', 'A', 5000, '12months'),
(3, 'naga123', 'naga123@gmail.com', 'B', 3000, '6months');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `memid` int(10) NOT NULL,
  `tableno` int(5) NOT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`memid`, `tableno`, `time`, `date`) VALUES
(1, 23, '16:41:00', '2023-07-11'),
(1, 3, '18:00:00', '2023-07-11'),
(2, 5, '20:00:00', '2023-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `FName` varchar(100) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FName`, `LName`, `username`, `email`, `password`) VALUES
('abhi', 'rohith', 'abhi', 'abhi123@gmail.com', 'abhi123'),
('sai', 'kaarthik', 'sk', 'sk123@gmail.com', 'sk123'),
('guru', 'prasad', 'guru', 'guru143@gmail.com', 'guru123'),
('bhanu', 'teja', 'bhanu', 'bhanu123@gmail.com', 'bhanu143'),
('naga', 'akshai', 'naga123', 'naga123@gmail.com', 'naga123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`memid`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD KEY `fk_ck` (`memid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `memid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tables`
--
ALTER TABLE `tables`
  ADD CONSTRAINT `fk_ck` FOREIGN KEY (`memid`) REFERENCES `membership` (`memid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
