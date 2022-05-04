-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 03, 2022 at 10:50 PM
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
  `PriceSold` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appears_in`
--

INSERT INTO `appears_in` (`BID`, `PID`, `Quantity`, `PriceSold`) VALUES
(2, 1000001, 1, 659),
(2, 2000005, 2, 1498),
(3, 1000001, 1, 659),
(3, 1000008, 1, 1399),
(3, 2000003, 1, 273.99),
(4, 1000001, 1, 659),
(4, 2000001, 2, 159.98),
(6, 1000001, 2, 1318),
(6, 1000003, 3, 779.97),
(7, 1000001, 1, 659),
(7, 1000004, 1, 539.99),
(7, 1000007, 1, 769),
(88820, 1000001, 3, 1977),
(88820, 1000002, 2, 1039.98),
(2989545, 1000002, 1, 519.99),
(2989545, 1000003, 1, 259.99),
(2989545, 1000004, 1, 539.99),
(2989545, 1000007, 1, 769),
(2989545, 2000001, 3, 239.97),
(2989545, 3000004, 3, 197.97),
(3858242, 1000001, 3, 1977),
(3858242, 1000002, 1, 519.99),
(3858242, 1000003, 1, 259.99),
(3858242, 1000004, 1, 539.99),
(3858242, 1000005, 3, 1259.97),
(4588049, 1000002, 1, 519.99),
(4588049, 1000005, 1, 419.99),
(4986881, 1000001, 2, 1318),
(4986881, 1000003, 1, 259.99),
(4986881, 1000005, 1, 419.99),
(4986881, 1000007, 1, 769),
(4986881, 1000008, 1, 1399),
(4986881, 2000005, 1, 749),
(5519700, 1000001, 1, 659),
(5519700, 1000002, 1, 519.99),
(5519700, 1000003, 1, 259.99),
(5814335, 1000001, 1, 659),
(5814335, 1000002, 2, 1039.98),
(6290222, 1000001, 1, 659),
(6290222, 2000001, 1, 79.99),
(8763210, 1000001, 1, 659),
(8763210, 1000005, 1, 419.99),
(8763210, 1000006, 1, 279),
(8763210, 1000008, 1, 1399),
(8763210, 2000001, 1, 79.99),
(9328068, 1000002, 2, 1039.98),
(9328068, 1000004, 3, 1619.97),
(9328068, 1000007, 3, 2307);

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `CID` int(10) NOT NULL,
  `BID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`CID`, `BID`) VALUES
(1143039, 6290222),
(2862786, 5519700),
(3516326, 1),
(3516326, 2),
(3516326, 3),
(3516326, 4),
(3516326, 6),
(3516326, 7),
(4018856, 88820),
(4299656, 3858242),
(4636927, 2989545),
(6186783, 9328068),
(6719461, 4588049),
(7164808, 5814335),
(8155009, 8763210),
(9004895, 4986881);

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `PID` int(10) NOT NULL,
  `CPUType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`PID`, `CPUType`) VALUES
(1000001, 'Core i5'),
(1000002, 'Intel Core i5-4th Generation'),
(1000003, 'Intel Core i5-2500 3.30GHz'),
(1000004, 'Intel Core i5-6500 3.2GHz '),
(1000005, 'Intel Core i5-4570 3.4GHz'),
(1000006, '11th Gen Intel® Core i3-1115G4'),
(1000007, 'Intel Core i5-11400H Processor'),
(1000008, 'Intel Core i7-11800H');

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
('0987654321234567', 98, 'Shawn', 'American Express', 'Toronto', '08-2025', 4299656),
('1234567890123456', 321, 'Rajan Brahmbhatt', 'Visa', '323 MLK Blvd', '01-2023', 3516326),
('3690146325789456', 321, 'RR', 'MasterCard', '123 RR Dr', '05-23', 6719461),
('3692581473214567', 321, 'JB', 'Visa', '123 JB Land', '02-2028', 4636927),
('3697410215891364', 987, 'TC', 'Visa', '123 TC Parkway', '08-2025', 9004895),
('3971824563126457', 369, 'MJ', 'Visa', 'Newark', '07-25', 1143039),
('56456123', 54564, 'rahul', 'visa', 'sadfdfs', '09-2026', 4018856),
('6543210987654321', 123, 'RB', 'Visa', 'New York', '05-2023', 3516326),
('7946138520369852', 321, 'NM', 'Visa', 'Jburg', '07-26', 2862786),
('9631874532145698', 989, 'Rahul Brahmbhatt', 'Visa', '709 Summit Ave', '05-2023', 8155009),
('9658741236985', 321, 'AB', 'Visa', 'Brooklyn', '08-27', 6186783),
('9876543210231', 321, 'CR7', 'Visa', 'Man', '05-2023', 7164808);

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
(1143039, 'Michael', 'Jordan', 'mj@gmail.com', 'Grove', '6663336663', 'Regular'),
(2862786, 'Nelson', 'Mandela', 'nm@gmail.com', 'Proteas', '9812374650', 'Regular'),
(3516326, 'Rajan', 'Brahmbhatt', 'rajan1508@gmail.com', '323 MLK Blvd', '1234567890', 'Regular'),
(4018856, 'rahul', 'walia', 'rahul', '43', '844456', 'Regular'),
(4299656, 'Shawn', 'Mendes', 'shawn@mendes.com', 'Toronto', '9873214560', 'Regular'),
(4636927, 'Justin', 'Bieber', 'jb@gmail.com', '123 JB Land', '1223448639', 'Regular'),
(6186783, 'Ana', 'Baker', 'ab@gmail.com', 'Broad St', '9653214578', 'Regular'),
(6719461, 'Ryan', 'Reynolds', 'rr@gmail.com', '123 RR Dr', '9991112223', 'Regular'),
(7164808, 'Cristiano', 'Ronaldo', 'cr7@gmail.com', '123  Man Utd', '9876543210', 'Regular'),
(8155009, 'Rahul', 'Brahmbhatt', 'rahulrb1811@gmail.com', '709 Summit Ave', '8562783897', 'Regular'),
(9004895, 'Tom', 'Cruise', 'tc@gmail.com', '123 TC Parkway', '9998887776', 'Regular');

--
-- Triggers `customer`
--
DELIMITER $$
CREATE TRIGGER `AFTERINSERT` AFTER INSERT ON `customer` FOR EACH ROW BEGIN
IF (NEW.Status="Gold" OR NEW.Status="Platinum")
THEN
UPDATE `product`
       RIGHT JOIN offer_product
       ON product.PID = offer_product.PID
       SET product.PPrice=offer_product.OfferPrice;
ELSE
UPDATE `product`
       RIGHT JOIN product2
       ON product.PID = product2.PID
SET product.PPrice = product2.PPrice;
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `AFTERUPDATE` AFTER UPDATE ON `customer` FOR EACH ROW BEGIN
IF (NEW.Status="Gold" OR NEW.Status="Platinum")
THEN
UPDATE `product`
       RIGHT JOIN offer_product
       ON product.PID = offer_product.PID
       SET product.PPrice=offer_product.OfferPrice;
ELSE
UPDATE `product`
       RIGHT JOIN product2
       ON product.PID = product2.PID
SET product.PPrice = product2.PPrice;
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `CREDITINSERT` AFTER INSERT ON `customer` FOR EACH ROW BEGIN
IF NEW.Status="Silver"
THEN
INSERT INTO silver_and_above VALUES
(NEW.CID,"5000");
ELSEIF NEW.Status="Gold"
THEN
INSERT INTO silver_and_above VALUES
(NEW.CID,"8000");
ELSEIF NEW.Status="Platinum"
THEN
INSERT INTO silver_and_above VALUES
(NEW.CID,"10000");
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `CREDITUPDATE` AFTER UPDATE ON `customer` FOR EACH ROW BEGIN
IF NEW.Status='Silver'
THEN
UPDATE silver_and_above
SET CreditLine="5000" where CID=NEW.CID;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `PID` int(10) NOT NULL,
  `BTime` varchar(30) NOT NULL,
  `Weight` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`PID`, `BTime`, `Weight`) VALUES
(1000006, '10', 4),
(1000007, '20', 5),
(1000008, '15', 5.5);

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
(1143039, 'Michael', 'Jordan', 'mj@gmail.com', 'abc'),
(2862786, 'Nelson', 'Mandela', 'nm@gmail.com', 'abc'),
(3516326, 'Rajan', 'Brahmbhatt', 'rajan1508@gmail.com', 'abc1234'),
(4018856, 'rahul', 'walia', 'rahul', '12345'),
(4299656, 'Shawn', 'Mendes', 'shawn@mendes.com', 'abc'),
(4636927, 'Justin', 'Bieber', 'jb@gmail.com', 'abc'),
(6186783, 'Ana', 'Baker', 'ab@gmail.com', 'abc'),
(6719461, 'Ryan', 'Reynolds', 'rr@gmail.com', 'abc'),
(7164808, 'Cristiano', 'Ronaldo', 'cr7@gmail.com', 'abc1234'),
(8155009, 'Rahul', 'Brahmbhatt', 'rahulrb1811@gmail.com', 'abc1234'),
(9004895, 'Tom', 'Cruise', 'tc@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `offer_product`
--

CREATE TABLE `offer_product` (
  `PID` int(10) NOT NULL,
  `OfferPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offer_product`
--

INSERT INTO `offer_product` (`PID`, `OfferPrice`) VALUES
(1000001, 10),
(1000002, 20),
(1000003, 30),
(1000004, 40),
(1000005, 50),
(1000006, 60),
(1000007, 70),
(1000008, 80),
(2000001, 90),
(2000002, 100),
(2000003, 110),
(2000004, 120),
(2000005, 130),
(3000001, 140),
(3000002, 150),
(3000003, 160),
(3000004, 170);

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE `printer` (
  `PID` int(10) NOT NULL,
  `PrinterType` varchar(40) NOT NULL,
  `Resolution` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `printer`
--

INSERT INTO `printer` (`PID`, `PrinterType`, `Resolution`) VALUES
(2000001, 'All-in-One Color Inkjet Printer', '77.40 x 13.70 x 14.80 Inches'),
(2000002, 'Eco Tank printer', '13.70 x 14.80 x 7.00 Inches'),
(2000003, 'All-in-one printer', '21.50 x 18.70 x 18.40 Inches'),
(2000004, 'All-in-One Color Inkjet Printer', '15.86 x 15.86 x 5.55 Inches'),
(2000005, 'All-in-One Laser Printer', '16.50 x 16.60 x 13.20 Inches');

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

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `PType`, `PName`, `PPrice`, `Description`, `PQuantity`) VALUES
(1000001, 'Computer', 'DELL OptiPlex 3280', 659, 'Processor More Info\r\n10th Gen Intel® Core™ i5-10500T (12 MB cache, 6 cores, 12 threads, 2.30 to 3.80 GHz Turbo, 35W)\r\nOperating System\r\n(Dell Technologies recommends Windows 11 Pro for business)\r\nWindows 10 Pro (Windows 11 Pro license included), English, French, Spanish\r\nMemory\r\n8 GB, 1 x 8 GB, DDR4', 7),
(1000002, 'Computer', 'HP 800 G1 SFF', 519.99, 'Originally designed for heavy use in the corporate environment, this HP Gaming computer has been Renewed with higher quality components than you\'ll find in typical off the shelf retail models. Perfect for business, home, and school, this computer has been professionally refurbished by SJ Computers.', 9),
(1000003, 'Computer', 'HP Elite SF Computer', 259.99, 'HP Elite SFF Computer Desktop PC, Intel Core i5 3.3GHz, 16GB Ram, 1TB Hard Drive, Wireless Keyboard & Mouse, Wifi | Bluetooth, New Dual 19\" FHD Monitor, BTO 1080p Webcam, Windows 10 (Renewed) ', 3),
(1000004, 'Computer', 'HP 600 G2 SFF', 539.99, 'Originally designed for heavy use in the corporate environment, this HP computer has been Renewed with higher quality components than you\'ll find in typical off the shelf retail models. Perfect for business, home, and school, this computer has been professionally refurbished by SJ Computers. Every component is tested for full functionality to ensure years of ongoing performance and reliability.', 9),
(1000005, 'Computer', 'HP 800 G1 Ultra', 419.99, 'HP EliteDesk 800 G1 Desktop Ultra-Small Form Computer PC\r\nIntel Core i5 4th Generation Processor\r\nPOWERFUL PROCESSOR - Configured with Intel’s top-of-the-line Core i5 series processor so you can expect lightning fast, reliable, and consistent performance for an exceptional PC experience.', 15),
(1000006, 'Laptop', 'Gateway 15.6\" Ultra ', 279, 'Introducing the Gateway 15.6” Ultra Slim Notebook\r\n\r\nThe 15.6” Ultra Slim Notebook from Gateway is the ultimate portable notebook that brings crystal-clear picture for all of your tasks. It is the ideal way to get the best audio for on-the-go entertainment. ', 10),
(1000007, 'Laptop', 'Acer Nitro 5', 769, 'Mytrix sells computers with professional upgrades and customization. The manufacturer box will be opened by our professional engineers for customizing and testing. Factory defects & blemishes are significantly reduced by our in-depth inspection & testing. We offer 12 months Warranty, please feel free to contact us if you need any support from our team.', 4),
(1000008, 'Laptop', 'Acer Predator Helios', 1399, 'Acer Predator Helios 300 Gaming Laptop, 11th Gen Intel Core i7-11800H, Overclockable NVIDIA GeForce RTX 3060 Laptop GPU, 15.6\" Full HD IPS 144Hz Display, 16GB DDR4, 512GB PCIe Gen 4 SSD, 1TB 7200RPM Hard Drive, Thunderbolt 4, RGB Backlit Keyboard, PH315-54-731M\r\nThe Helios 300 is equipped with everything you need to take the fight to every battlefield. ', 10),
(2000001, 'Printer', 'Epson XP-5100 ', 79.99, 'Packed with convenient features, the Expression Home XP-5100 Small-in-One printer is perfect for your family’s everyday printing needs. Save time and paper with fast print speeds and auto 2-sided printing. Plus, easily create personalized projects right from your own desktop. ', 15),
(2000002, 'Printer', 'Epson Ecotan ET-2803', 199.99, 'Discover a New Type of Printing Experience. Your family needs a printer that’s fast, affordable, and easy to use. That’s why we developed the Eco Tank ET-2803 – an innovative cartridge-free solution that uses high-capacity, easily refillable ink tanks. ', 14),
(2000003, 'Printer', 'Canon Maxify MB2720', 273.99, 'Designed to meet the needs of businesses with one to four users, this wireless printer produces bold, colorful prints to keep your business operating efficiently. MAXIFY ink tanks deliver a high page yield from one set of XL ink tanks, and the Dual Resistant High Density (DRHD) ink system produces laser sharp text that is resistant to smudges and highlighters. ', 8),
(2000004, 'Printer', 'HP DeskJet 3772', 89, 'Save space and get the printing power you need with the HP DeskJet 3772, the world’s smallest all-in-one for your home. This printer delivers reliable wireless printing, copying and scanning, plus HP Scroll Scan: a versatile, easy scanning experience for a variety of media, from plain paper to photos and receipts. ', 20),
(2000005, 'Printer', 'HP Color Pro M283fdw', 749, 'Get extraordinary, wireless performance and fast multifunction versatility with the HP Color LaserJet Pro M283fdw Wireless All-in-One Laser Printer. This color laser printer lets you easily print and scan from your mobile device with HP Smart, HP\'s best-in-class mobile print app; plus, automate repetitive tasks and organize documents 50% faster with exclusive office features in the HP Smart app. ', 9),
(3000001, 'Accessories', 'Cheflaud Ergo Alumin', 24.77, 'Why Choosing Our Cheflaud Laptop Stand? \r\nNon-slip mat: The top surface is equipped with rubber pads, which can stably fix the laptop in place and maximize the protection of the device from scratches and sliding. ', 12),
(3000002, 'Accessories', 'Insten 7 Port High S', 8.99, 'Computer connectivity is a must and with Insten\'s Black High Speed USB 2.0 Hub you will never have to worry about having enough ports again. Featuring 7 ports and a compact design this high speed hub with On / Off switch and LEDs is small enough for all your travel needs while maintaining the connectivity needs you require.', 25),
(3000003, 'Accessories', 'Greyghost Wireless K', 28.73, 'Product Description: \r\n1. This ultra-slim keyboard has the perfect size and is ideal for carrying on the go. \r\n2. These low-profile keys are similar to a laptop keyboard, so it is easy and natural to just jump right in and start using \r\nFeatures for Keyboard: \r\n1. Perfect size of an average laptop keyboard \r\n2. Slim and compact design is more suitable for carrying \r\n', 20),
(3000004, 'Accessories', 'Dual Monitor Stand R', 65.99, 'Our upgraded dual monitor stand with multi-functional slot and two drawers, it will have more spacious storage to organize/solve your desk problem. Just put the monitor on stand, it could provide you comfortable viewing angles and sitting position to relieve your eye strain and your back & neck pain.', 15);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `CHECKSTATUS` AFTER INSERT ON `product` FOR EACH ROW BEGIN
INSERT INTO product2 VALUES
(NEW.PID,NEW.PType,NEW.PName,NEW.PPrice,NEW.Description,NEW.PQuantity);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE `product2` (
  `PID` int(10) NOT NULL,
  `PType` varchar(20) NOT NULL,
  `PName` varchar(20) NOT NULL,
  `PPrice` float NOT NULL,
  `Description` text NOT NULL,
  `PQuantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`PID`, `PType`, `PName`, `PPrice`, `Description`, `PQuantity`) VALUES
(1000001, 'Computer', 'DELL OptiPlex 3280', 659, 'Processor More Info\r\n10th Gen Intel® Core™ i5-10500T (12 MB cache, 6 cores, 12 threads, 2.30 to 3.80 GHz Turbo, 35W)\r\nOperating System\r\n(Dell Technologies recommends Windows 11 Pro for business)\r\nWindows 10 Pro (Windows 11 Pro license included), English, French, Spanish\r\nMemory\r\n8 GB, 1 x 8 GB, DDR4', 7),
(1000002, 'Computer', 'HP 800 G1 SFF', 519.99, 'Originally designed for heavy use in the corporate environment, this HP Gaming computer has been Renewed with higher quality components than you\'ll find in typical off the shelf retail models. Perfect for business, home, and school, this computer has been professionally refurbished by SJ Computers.', 9),
(1000003, 'Computer', 'HP Elite SF Computer', 259.99, 'HP Elite SFF Computer Desktop PC, Intel Core i5 3.3GHz, 16GB Ram, 1TB Hard Drive, Wireless Keyboard & Mouse, Wifi | Bluetooth, New Dual 19\" FHD Monitor, BTO 1080p Webcam, Windows 10 (Renewed) ', 3),
(1000004, 'Computer', 'HP 600 G2 SFF', 539.99, 'Originally designed for heavy use in the corporate environment, this HP computer has been Renewed with higher quality components than you\'ll find in typical off the shelf retail models. Perfect for business, home, and school, this computer has been professionally refurbished by SJ Computers. Every component is tested for full functionality to ensure years of ongoing performance and reliability.', 9),
(1000005, 'Computer', 'HP 800 G1 Ultra', 419.99, 'HP EliteDesk 800 G1 Desktop Ultra-Small Form Computer PC\r\nIntel Core i5 4th Generation Processor\r\nPOWERFUL PROCESSOR - Configured with Intel’s top-of-the-line Core i5 series processor so you can expect lightning fast, reliable, and consistent performance for an exceptional PC experience.', 15),
(1000006, 'Laptop', 'Gateway 15.6\" Ultra ', 279, 'Introducing the Gateway 15.6” Ultra Slim Notebook\r\n\r\nThe 15.6” Ultra Slim Notebook from Gateway is the ultimate portable notebook that brings crystal-clear picture for all of your tasks. It is the ideal way to get the best audio for on-the-go entertainment.', 10),
(1000007, 'Laptop', 'Acer Nitro 5', 769, 'Mytrix sells computers with professional upgrades and customization. The manufacturer box will be opened by our professional engineers for customizing and testing. Factory defects & blemishes are significantly reduced by our in-depth inspection & testing. We offer 12 months Warranty, please feel free to contact us if you need any support from our team.', 4),
(1000008, 'Laptop', 'Acer Predator Helios', 1399, 'Acer Predator Helios 300 Gaming Laptop, 11th Gen Intel Core i7-11800H, Overclockable NVIDIA GeForce RTX 3060 Laptop GPU, 15.6\" Full HD IPS 144Hz Display, 16GB DDR4, 512GB PCIe Gen 4 SSD, 1TB 7200RPM Hard Drive, Thunderbolt 4, RGB Backlit Keyboard, PH315-54-731M\r\nThe Helios 300 is equipped with everything you need to take the fight to every battlefield.', 10),
(2000001, 'Printer', 'Epson XP-5100 ', 79.99, 'Packed with convenient features, the Expression Home XP-5100 Small-in-One printer is perfect for your family’s everyday printing needs. Save time and paper with fast print speeds and auto 2-sided printing. Plus, easily create personalized projects right from your own desktop.', 15),
(2000002, 'Printer', 'Epson Ecotan ET-2803', 199.99, 'Discover a New Type of Printing Experience. Your family needs a printer that’s fast, affordable, and easy to use. That’s why we developed the Eco Tank ET-2803 – an innovative cartridge-free solution that uses high-capacity, easily refillable ink tanks.', 14),
(2000003, 'Printer', 'Canon Maxify MB2720', 273.99, 'Designed to meet the needs of businesses with one to four users, this wireless printer produces bold, colorful prints to keep your business operating efficiently. MAXIFY ink tanks deliver a high page yield from one set of XL ink tanks, and the Dual Resistant High Density (DRHD) ink system produces laser sharp text that is resistant to smudges and highlighters. ', 8),
(2000004, 'Printer', 'HP DeskJet 3772', 89, 'Save space and get the printing power you need with the HP DeskJet 3772, the world’s smallest all-in-one for your home. This printer delivers reliable wireless printing, copying and scanning, plus HP Scroll Scan: a versatile, easy scanning experience for a variety of media, from plain paper to photos and receipts.', 20),
(2000005, 'Printer', 'HP Color Pro M283fdw', 749, 'Get extraordinary, wireless performance and fast multifunction versatility with the HP Color LaserJet Pro M283fdw Wireless All-in-One Laser Printer. This color laser printer lets you easily print and scan from your mobile device with HP Smart, HP\'s best-in-class mobile print app; plus, automate repetitive tasks and organize documents 50% faster with exclusive office features in the HP Smart app.', 9),
(3000001, 'Accessories', 'Cheflaud Ergo Alumin', 24.77, 'Why Choosing Our Cheflaud Laptop Stand? \r\nNon-slip mat: The top surface is equipped with rubber pads, which can stably fix the laptop in place and maximize the protection of the device from scratches and sliding. ', 12),
(3000002, 'Accessories', 'Insten 7 Port High S', 8.99, 'Computer connectivity is a must and with Insten\'s Black High Speed USB 2.0 Hub you will never have to worry about having enough ports again. Featuring 7 ports and a compact design this high speed hub with On / Off switch and LEDs is small enough for all your travel needs while maintaining the connectivity needs you require.', 25),
(3000003, 'Accessories', 'Greyghost Wireless K', 28.73, 'Product Description: \r\n1. This ultra-slim keyboard has the perfect size and is ideal for carrying on the go. \r\n2. These low-profile keys are similar to a laptop keyboard, so it is easy and natural to just jump right in and start using \r\nFeatures for Keyboard: \r\n1. Perfect size of an average laptop keyboard \r\n2. Slim and compact design is more suitable for carrying ', 20),
(3000004, 'Accessories', 'Dual Monitor Stand R', 65.99, 'Our upgraded dual monitor stand with multi-functional slot and two drawers, it will have more spacious storage to organize/solve your desk problem. Just put the monitor on stand, it could provide you comfortable viewing angles and sitting position to relieve your eye strain and your back & neck pain.', 15);

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
(1143039, 'Office', 'Michael', 'Grove', '69', 'Newark', '07102', 'NJ', 'United States'),
(2862786, 'Home', 'Nelson', 'Proteas', '56', 'Jburg', '078965', 'Jburg', 'South Africa'),
(3516326, 'Home', 'RB', '101 JFK Blvd', '101', 'New York', '10001', 'NY', 'United States'),
(3516326, 'Work', 'Rahul B', '323 MLK Blvd', '323', 'Newark', '07102', 'NJ', 'United States'),
(4018856, 'work', 'rahul', '43', 'dfgk', 'sdf', '25554', 'dsjf', 'sdlnf'),
(4299656, 'Other', 'Shawn', 'Toronto', '1', 'Toronto', '987654', 'ON', 'Canada'),
(4636927, 'Home', 'Justin', '123 JB Land', '123', 'LA', '230145', 'CA', 'United States'),
(6186783, 'Work', 'Ana', 'Broad St', '36', 'Brooklyn', '10002', 'NY', 'United States'),
(6719461, 'Home', 'Ryan', '123 RR Dr', '123', 'Manhattan', '10002', 'NY', 'United States'),
(7164808, 'Home', 'Cristiano', '123  Man Utd', '123', 'Man', '087410', 'NJ', 'US'),
(8155009, 'Home', 'Rahul', '709 Summit Ave', '709', 'Jersey City', '07306', 'NJ', 'United States'),
(9004895, 'Home', 'Tom', '123 TC Parkway', '123', 'Chicago', '369852', 'IL', 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `silver_and_above`
--

CREATE TABLE `silver_and_above` (
  `CID` int(10) NOT NULL,
  `CreditLine` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `silver_and_above`
--

INSERT INTO `silver_and_above` (`CID`, `CreditLine`) VALUES
(6186783, '1000');

-- --------------------------------------------------------

--
-- Stand-in structure for view `statlog`
-- (See below for the actual view)
--
CREATE TABLE `statlog` (
`BID` int(10)
,`PID` int(10)
,`Quantity` int(10)
,`PriceSold` float
,`TDate` text
);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `BID` int(10) NOT NULL,
  `CCNumber` varchar(16) NOT NULL,
  `CID` int(10) NOT NULL,
  `SAName` varchar(30) NOT NULL,
  `TDate` text NOT NULL,
  `TTag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`BID`, `CCNumber`, `CID`, `SAName`, `TDate`, `TTag`) VALUES
(2, '1234567890123456', 3516326, 'Work', '05/02/2022', 'Order Placed'),
(3, '1234567890123456', 3516326, 'Work', '04/22/2022', 'Delivered'),
(4, '1234567890123456', 3516326, 'Work', '04/27/2022', 'Order Placed'),
(6, '1234567890123456', 3516326, 'Work', '05/02/2022', 'Order Placed'),
(7, '1234567890123456', 3516326, 'Work', '05/02/2022', 'Order Placed'),
(88820, '56456123', 4018856, 'work', '05/02/2022', 'Order Placed'),
(2989545, '3692581473214567', 4636927, 'Home', '05/03/2022', 'Order Placed'),
(3858242, '0987654321234567', 4299656, 'Other', '05/03/2022', 'Order Placed'),
(4588049, '3690146325789456', 6719461, 'Home', '05/03/2022', 'Order Placed'),
(4986881, '3697410215891364', 9004895, 'Home', '05/03/2022', 'Order Placed'),
(5519700, '7946138520369852', 2862786, 'Home', '05/03/2022', 'Order Placed'),
(5814335, '9876543210231', 7164808, 'Home', '05/03/2022', 'Order Placed'),
(6290222, '3971824563126457', 1143039, 'Office', '05/03/2022', 'Order Placed'),
(8763210, '9631874532145698', 8155009, 'Home', '05/03/2022', 'Order Placed'),
(9328068, '9658741236985', 6186783, 'Work', '05/03/2022', 'Order Placed');

-- --------------------------------------------------------

--
-- Stand-in structure for view `transactionlogs`
-- (See below for the actual view)
--
CREATE TABLE `transactionlogs` (
`BID` int(10)
,`TotalTransactionPrice` double
,`TDate` text
);

-- --------------------------------------------------------

--
-- Structure for view `statlog`
--
DROP TABLE IF EXISTS `statlog`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `statlog`  AS SELECT `a`.`BID` AS `BID`, `a`.`PID` AS `PID`, `a`.`Quantity` AS `Quantity`, `a`.`PriceSold` AS `PriceSold`, `t`.`TDate` AS `TDate` FROM (`appears_in` `a` join `transaction` `t`) WHERE `a`.`BID` = `t`.`BID``BID`  ;

-- --------------------------------------------------------

--
-- Structure for view `transactionlogs`
--
DROP TABLE IF EXISTS `transactionlogs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `transactionlogs`  AS   (select `a`.`BID` AS `BID`,sum(`a`.`PriceSold`) AS `TotalTransactionPrice`,`t`.`TDate` AS `TDate` from (`appears_in` `a` join `transaction` `t`) where `a`.`BID` = `t`.`BID` group by `a`.`BID`)  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appears_in`
--
ALTER TABLE `appears_in`
  ADD PRIMARY KEY (`BID`,`PID`),
  ADD KEY `PID` (`PID`),
  ADD KEY `BID` (`BID`);

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
  ADD PRIMARY KEY (`PID`),
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
  ADD PRIMARY KEY (`PID`),
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
  ADD PRIMARY KEY (`PID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `printer`
--
ALTER TABLE `printer`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`CID`,`SAName`),
  ADD KEY `CID` (`CID`),
  ADD KEY `SAName` (`SAName`);

--
-- Indexes for table `silver_and_above`
--
ALTER TABLE `silver_and_above`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`BID`,`CCNumber`,`CID`,`SAName`),
  ADD KEY `BID` (`BID`),
  ADD KEY `CCNumber` (`CCNumber`),
  ADD KEY `CID` (`CID`),
  ADD KEY `SAName` (`SAName`),
  ADD KEY `CID_2` (`CID`,`SAName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appears_in`
--
ALTER TABLE `appears_in`
  MODIFY `BID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9576349;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `BID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9576349;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `BID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9576349;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appears_in`
--
ALTER TABLE `appears_in`
  ADD CONSTRAINT `appears_in_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `appears_in_ibfk_3` FOREIGN KEY (`BID`) REFERENCES `basket` (`BID`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`CCNumber`) REFERENCES `credit_card` (`CCNumber`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`CID`,`SAName`) REFERENCES `shipping_address` (`CID`, `SAName`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_4` FOREIGN KEY (`BID`) REFERENCES `basket` (`BID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
