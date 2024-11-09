-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 05:17 PM
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
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `Artist_ID` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Birthplace` varchar(255) NOT NULL,
  `Style_Of_Art` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `G_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`Artist_ID`, `Gender`, `Birthplace`, `Style_Of_Art`, `Age`, `Name`, `G_Name`) VALUES
(0, 'Female', 'London', 'Vintage Art', 29, 'Emma Watson', 'gname'),
(1, 'Male', 'Karur', 'Modern Art', 25, 'Arvind', ''),
(4, 'Male', 'New York', 'Modern Art', 19, 'Rohit M', 'gname');

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `Artwork_ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Type_Of_Art` varchar(255) NOT NULL,
  `Prices` decimal(10,2) NOT NULL,
  `YIWM` year(4) DEFAULT NULL,
  `G_Name` varchar(255) DEFAULT NULL,
  `A_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`Artwork_ID`, `Title`, `Type_Of_Art`, `Prices`, `YIWM`, `G_Name`, `A_ID`) VALUES
(13, 'Aurora', 'Modern Art', 560.00, '0000', 'Red Rose', 0),
(14, 'Black And White House', 'Vintage Art', 259.00, '0000', 'Castle Pic', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `art` text NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `phone`, `email`, `artist`, `art`, `message`) VALUES
(1, 'ABISHEK S', '08248969617', 'abishekcs170604@gmail.com', 'Arvind', 'Modern art', 'Your art is very nice');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `TADS` varchar(15) DEFAULT NULL,
  `G_Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_ID`, `Name`, `Address`, `TADS`, `G_Name`) VALUES
(1, 'ABISHEK S', '14, Ram Nagar, Kamarajapuram West, Karur', '8248969617', 'Red Rose'),
(2, 'Kavinesh S', '14, Ram Nagar, Kamarajapuram West, Erode', '9900887867', 'Castle Pic');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Gallery_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Gallery_ID`, `Name`, `Place`) VALUES
(1, 'Red Rose', 'Japan'),
(2, 'Castle Pic', 'Rome');

-- --------------------------------------------------------

--
-- Table structure for table `like_artist`
--

CREATE TABLE `like_artist` (
  `Like_ID` int(11) NOT NULL,
  `C_ID` int(11) DEFAULT NULL,
  `C_Name` varchar(255) DEFAULT NULL,
  `A_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `like_artist`
--

INSERT INTO `like_artist` (`Like_ID`, `C_ID`, `C_Name`, `A_ID`) VALUES
(1, 1, 'Abishek', 1),
(2, 1, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`Artist_ID`);

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`Artwork_ID`),
  ADD KEY `G_Name` (`G_Name`),
  ADD KEY `A_ID` (`A_ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_ID`),
  ADD KEY `G_Name` (`G_Name`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Gallery_ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `like_artist`
--
ALTER TABLE `like_artist`
  ADD PRIMARY KEY (`Like_ID`),
  ADD KEY `C_ID` (`C_ID`),
  ADD KEY `A_ID` (`A_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `Artwork_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Gallery_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `like_artist`
--
ALTER TABLE `like_artist`
  MODIFY `Like_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artwork`
--
ALTER TABLE `artwork`
  ADD CONSTRAINT `artwork_ibfk_1` FOREIGN KEY (`G_Name`) REFERENCES `gallery` (`Name`),
  ADD CONSTRAINT `artwork_ibfk_2` FOREIGN KEY (`A_ID`) REFERENCES `artist` (`Artist_ID`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`G_Name`) REFERENCES `gallery` (`Name`);

--
-- Constraints for table `like_artist`
--
ALTER TABLE `like_artist`
  ADD CONSTRAINT `like_artist_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customers` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `like_artist_ibfk_2` FOREIGN KEY (`A_ID`) REFERENCES `artist` (`Artist_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
