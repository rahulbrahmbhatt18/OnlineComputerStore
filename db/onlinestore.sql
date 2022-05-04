-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 01, 2022 at 02:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `appears_in`
--

CREATE TABLE `appears_in` (
  `BID` int(10) NOT NULL,
  `PID` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `PriceSold` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `CID` int(10) NOT NULL,
  `BID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `PID` int(10) NOT NULL,
  `CPUType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE `credit_card` (
  `CCNumber` varchar(16) NOT NULL,
  `SecNumber` int(3) NOT NULL,
  `OwnerName` varchar(50) NOT NULL,
  `CCType` varchar(20) NOT NULL,
  `BillAddress` text NOT NULL,
  `ExpDate` varchar(10) NOT NULL,
  `StoredCardCID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`CCNumber`, `SecNumber`, `OwnerName`, `CCType`, `BillAddress`, `ExpDate`, `StoredCardCID`) VALUES
('1234567890123456', 321, 'Rajan Brahmbhatt', 'Visa', '323 MLK Blvd', '01-2023', 3516326);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(10) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `FName`, `LName`, `Email`, `Address`, `Phone`, `Status`) VALUES
(3516326, 'Rajan', 'Brahmbhatt', 'rajan1508@gmail.com', '323 MLK Blvd', '1234567890', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `PID` int(10) NOT NULL,
  `BType` varchar(30) NOT NULL,
  `Weight` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UID` int(10) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UID`, `FName`, `LName`, `Email`, `Password`) VALUES
(1, 'Rahul', 'Brahmbhatt', 'rahulrb1811@gmail.com', 'abc'),
(3516326, 'Rajan', 'Brahmbhatt', 'rajan1508@gmail.com', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `offer_product`
--

CREATE TABLE `offer_product` (
  `PID` int(10) NOT NULL,
  `OfferPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE `printer` (
  `PID` int(10) NOT NULL,
  `PrinterType` varchar(30) NOT NULL,
  `Resolution` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PID` int(10) NOT NULL,
  `PType` varchar(20) NOT NULL,
  `PName` varchar(20) NOT NULL,
  `PPrice` float NOT NULL,
  `Description` text NOT NULL,
  `PQuantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `CID` int(10) NOT NULL,
  `SAName` varchar(30) NOT NULL,
  `RecepientName` varchar(50) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `SNumber` varchar(20) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Zip` varchar(10) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`CID`, `SAName`, `RecepientName`, `Street`, `SNumber`, `City`, `Zip`, `State`, `Country`) VALUES
(3516326, 'Work', 'Rahul', '323 MLK Blvd', '323', 'Newark', '07102', 'NJ', 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `silver_and_above`
--

CREATE TABLE `silver_and_above` (
  `CID` int(10) NOT NULL,
  `CreditLine` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `BID` int(10) NOT NULL,
  `CCNumber` varchar(16) NOT NULL,
  `CID` int(10) NOT NULL,
  `SAName` varchar(30) NOT NULL,
  `TDate` date NOT NULL,
  `TTag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appears_in`
--
ALTER TABLE `appears_in`
  ADD KEY `BID` (`BID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`BID`),
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD PRIMARY KEY (`CCNumber`),
  ADD KEY `StoredCardCID` (`StoredCardCID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `offer_product`
--
ALTER TABLE `offer_product`
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `printer`
--
ALTER TABLE `printer`
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`CID`,`SAName`);

--
-- Indexes for table `silver_and_above`
--
ALTER TABLE `silver_and_above`
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD KEY `BID` (`BID`),
  ADD KEY `CCNumber` (`CCNumber`),
  ADD KEY `CID` (`CID`),
  ADD KEY `SAName` (`SAName`),
  ADD KEY `transaction_ibfk_3` (`CID`,`SAName`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appears_in`
--
ALTER TABLE `appears_in`
  ADD CONSTRAINT `appears_in_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `basket` (`BID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `appears_in_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE;

--
-- Constraints for table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `customer` (`CID`) ON UPDATE CASCADE;

--
-- Constraints for table `computer`
--
ALTER TABLE `computer`
  ADD CONSTRAINT `computer_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE;

--
-- Constraints for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD CONSTRAINT `credit_card_ibfk_1` FOREIGN KEY (`StoredCardCID`) REFERENCES `customer` (`CID`) ON UPDATE CASCADE;

--
-- Constraints for table `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `laptop_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE;

--
-- Constraints for table `offer_product`
--
ALTER TABLE `offer_product`
  ADD CONSTRAINT `offer_product_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE;

--
-- Constraints for table `printer`
--
ALTER TABLE `printer`
  ADD CONSTRAINT `printer_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE;

--
-- Constraints for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD CONSTRAINT `shipping_address_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `customer` (`CID`) ON UPDATE CASCADE;

--
-- Constraints for table `silver_and_above`
--
ALTER TABLE `silver_and_above`
  ADD CONSTRAINT `silver_and_above_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `customer` (`CID`) ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `basket` (`BID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`CCNumber`) REFERENCES `credit_card` (`CCNumber`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`CID`,`SAName`) REFERENCES `shipping_address` (`CID`, `SAName`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
