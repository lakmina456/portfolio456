-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 01:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ID`, `Username`, `Title`, `Description`, `Image`) VALUES
(1, 'isuru', 'Work1', 'Work1', 'img/1.jpg'),
(2, 'isuru', 'Work2', 'Work2', 'img/2.jpg'),
(3, 'isuru', 'Work3', 'Work3', 'img/3.jpg'),
(4, 'isuru', 'Work4', 'Work4', 'img/4.jpg'),
(5, 'isuru', 'Work5', 'Work5', 'img/5.jpg'),
(6, 'isuru', 'Work6', 'Work6', 'img/6.jpg'),
(7, 'isuru', 'Work7', 'Work7', 'img/7.jpg'),
(8, 'isuru', 'Work8', 'Work8', 'img/8.jpg'),
(9, 'isuru', 'Work9', 'Work9', 'img/9.jpg'),
(10, 'isuru', 'Work10', 'Work10', 'img/10.jpg'),
(11, 'isuru', 'Work11', 'Work11', 'img/11.jpg'),
(12, 'isuru', 'Work12', 'Work12', 'img/12.jpg'),
(13, 'isuru', 'Work13', 'Work13', 'img/13.jpg'),
(14, 'isuru', 'Work14', 'Work14', 'img/14.jpg'),
(15, 'isuru', 'Work15', 'Work15', 'img/15.jpg'),
(16, 'isuru', 'Work16', 'Work16', 'img/16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`) VALUES
(1, 'isuru', '$2y$10$kAvKh4ycRv3GtWa7GBcKHejyPw8Fin.FYj7mFFPfYJ7QdsqS1oilK'),
(2, 'user', '$2y$10$24NWZI0RO7//IqomFqzP3O5XxV1Hd.rCf66yJmWJ0dsrN05Knd08G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
