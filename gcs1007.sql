-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 06:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcs1007`
--

-- --------------------------------------------------------

--
-- Table structure for table `accs`
--

CREATE TABLE `accs` (
  `UserID` int(11) NOT NULL,
  `UserPhone` varchar(55) NOT NULL,
  `UserAddress` varchar(80) NOT NULL,
  `userType` varchar(15) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `CityID` int(11) NOT NULL,
  `CounID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accs`
--

INSERT INTO `accs` (`UserID`, `UserPhone`, `UserAddress`, `userType`, `email`, `password`, `LastName`, `Gender`, `FirstName`, `CityID`, `CounID`) VALUES
(1, '0931309518', '20 cong hoa', '1', 'admin2208@admin2208', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Thành', 'Male', 'Hứa Tuấn', 1, 1),
(2, '0931309518', '20 cong hoa', '0', 'user2208@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Thành', 'Male', 'Hứa Tuấn', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `CartID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDetails` varchar(500) DEFAULT NULL,
  `productImage` varchar(30) DEFAULT NULL,
  `catID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catID` int(11) NOT NULL,
  `catName` varchar(100) NOT NULL,
  `catDescriptions` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catID`, `catName`, `catDescriptions`) VALUES
(1, 'Kid', NULL),
(2, 'Jacket', NULL),
(3, 'Sweater', NULL),
(4, 'Pant', NULL),
(5, 'Belt', NULL),
(6, 'an', 'a11');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `CityID` int(11) NOT NULL,
  `CityName` varchar(255) NOT NULL,
  `CounID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`CityID`, `CityName`, `CounID`) VALUES
(1, 'Hồ Chí Minh', 1),
(2, 'Hà Nội', 1),
(3, 'Hải Phòng', 1),
(4, 'Đà Nẵng', 1),
(5, 'Chongqing', 2),
(6, 'Shanghai', 2),
(7, 'Beijing', 2),
(8, 'New York', 3),
(9, 'Los Angeles', 3),
(10, 'Chicago', 3),
(11, 'Tokyo', 4),
(12, 'Kyoto', 4),
(13, 'Nagoya', 4),
(14, 'Seoul', 5),
(15, 'Incheon', 5),
(16, 'Busan', 5),
(17, 'Daegu', 5);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `CounID` int(11) NOT NULL,
  `CounName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`CounID`, `CounName`) VALUES
(1, 'VietNam'),
(2, 'China'),
(3, 'America'),
(4, 'Japan'),
(5, 'Korea');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDetails` varchar(500) DEFAULT NULL,
  `productImage` varchar(30) DEFAULT NULL,
  `catID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `productName`, `productPrice`, `productDetails`, `productImage`, `catID`, `UserID`, `quantity`, `status`) VALUES
(2, 'Summer Cap', 30, 'updating ...', 'kid2.jpg', 1, 1, 1, 'Order has been confirm'),
(3, 'Summer Cap', 30, 'updating ...', 'kid2.jpg', 1, 2, 1, 'Processing'),
(4, 'Summer Cap', 30, 'updating ...', 'kid2.jpg', 1, 2, 1, 'Processing'),
(5, 'Summer Cap', 30, 'updating ...', 'kid2.jpg', 1, 2, 1, 'Processing'),
(6, 'School Collection', 20, 'updating ...', 'kid1.jpg', 1, 1, 1, 'Processing'),
(7, 'Summer Cap', 30, 'updating ...', 'kid2.jpg', 1, 1, 1, 'Processing'),
(8, 'School Collection', 20, 'updating ...', 'kid1.jpg', 1, 1, 1, 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `PaymentID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDetails` varchar(500) DEFAULT NULL,
  `productImage` varchar(30) DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `CartID` int(11) NOT NULL,
  `catID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'on',
  `productName` varchar(50) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDetails` varchar(500) DEFAULT NULL,
  `productImage` varchar(30) DEFAULT NULL,
  `catID` int(11) NOT NULL,
  `search` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `Status`, `productName`, `productPrice`, `productDetails`, `productImage`, `catID`, `search`) VALUES
(1, 'on', 'School Collection', 20, 'updating ...', 'kid1.jpg', 1, ''),
(2, 'on', 'Summer Cap', 30, 'updating ...', 'kid2.jpg', 1, ''),
(3, 'on', 'Classic', 20, 'updating ...', 'kid3.jpg', 1, ''),
(4, 'on', 'White Blue Vibe', 50, 'updating ...', 'kid4.jpg', 1, ''),
(5, 'on', 'Summer Vibe Jacket', 50, 'updating ...', 'jacket1.jpg', 2, ''),
(6, 'on', 'Pink Blone Jacket', 60, 'updating ...', 'jacket2.jpg', 2, ''),
(7, 'on', 'Chess Jacket', 80, 'updating ...', 'jacket3.jpg', 2, ''),
(8, 'on', 'Blank Jacket', 40, 'updating ...', 'jacket4.jpg', 2, ''),
(9, 'on', 'Tan Sweater', 20, 'updating ...', 'sweater1.jpg', 3, ''),
(10, 'on', 'Brown Korea Sweater', 30, 'updating ...', 'sweater2.jpg', 3, ''),
(11, 'on', 'Deep Green Sweater', 50, 'updating ...', 'sweater3.jpg', 3, ''),
(12, 'on', 'Blue Sky Sweater', 60, 'updating ...', 'sweater4.jpg', 3, ''),
(13, 'on', 'Camo Pant', 100, 'updating ...', 'pant1.jpg', 4, ''),
(14, 'on', 'Box Pant', 50, 'updating ...', 'pant2.jpg', 4, ''),
(15, 'on', 'Box Pant Version 2', 80, 'updating ...', 'pant3.jpg', 4, ''),
(16, 'on', 'HipHop Pant', 60, 'updating ...', 'pant4.jpg', 4, ''),
(17, 'on', 'Black Leather Belt', 100, 'updating ...', 'belt1.jpg', 5, ''),
(18, 'on', 'Brown Leather Belt', 50, 'updating ...', 'belt2.jpg', 5, ''),
(19, 'on', 'Rock Leather Belt', 80, 'updating ...', 'belt3.jpg', 5, ''),
(20, 'on', 'OldSkool belt', 60, 'updating ...', 'belt4.jpg', 5, ''),
(21, 'on', 'shirt', 123, 'ád', '1.jpg', 1, NULL),
(22, 'on', 'pants', 123, 'ád', '2.jpg', 4, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accs`
--
ALTER TABLE `accs`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `fk_CityID` (`CityID`),
  ADD KEY `fk_CounID` (`CounID`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`CartID`),
  ADD KEY `fk_productID` (`productID`),
  ADD KEY `fk_catID1` (`catID`),
  ADD KEY `fk_UserID` (`UserID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catID`),
  ADD UNIQUE KEY `catName` (`catName`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`CityID`),
  ADD KEY `fk_CounID1` (`CounID`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`CounID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `fk_UserID1` (`UserID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `fk_UserID2` (`UserID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `fk_catID` (`catID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accs`
--
ALTER TABLE `accs`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `CityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `CounID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accs`
--
ALTER TABLE `accs`
  ADD CONSTRAINT `fk_CityID` FOREIGN KEY (`CityID`) REFERENCES `cities` (`CityID`),
  ADD CONSTRAINT `fk_CounID` FOREIGN KEY (`CounID`) REFERENCES `countries` (`CounID`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `fk_UserID` FOREIGN KEY (`UserID`) REFERENCES `accs` (`UserID`),
  ADD CONSTRAINT `fk_catID1` FOREIGN KEY (`catID`) REFERENCES `categories` (`catID`),
  ADD CONSTRAINT `fk_productID` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `fk_CounID1` FOREIGN KEY (`CounID`) REFERENCES `countries` (`CounID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_UserID1` FOREIGN KEY (`UserID`) REFERENCES `accs` (`UserID`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_UserID2` FOREIGN KEY (`UserID`) REFERENCES `accs` (`UserID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_catID` FOREIGN KEY (`catID`) REFERENCES `categories` (`catID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
