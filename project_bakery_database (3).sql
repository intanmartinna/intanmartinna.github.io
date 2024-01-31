-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 03:10 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_bakery_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `quantity`) VALUES
(32, 0),
(36, 1),
(39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(100) NOT NULL,
  `categoryName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(101, 'cake'),
(102, 'pastry');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNum` varchar(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phoneNum`, `subject`, `note`) VALUES
(4, 'husna', 'husna@gmail.com', '0125264894', 'Button deleted', 'Button deleted not function.'),
(5, 'huda', 'nurhudaeieliana@gmail.com', '0195864274', 'Add to cart', 'Cannot check out to proceed the payment'),
(6, 'aqilah', 'aqilah@gmail.com', '0122659741', 'login', 'i have register my account but still cannot login because wrong password.'),
(7, 'INTAN NUR MARTINNA BINTI BASRI', 'intan12@gmail.com', '0184072976', 'Log in', 'Can register cannot log in.'),
(11, 'haifa', 'haifa@gmail.com', '0125265896', 'Cannot login', 'at register.php'),
(12, 'intan', 'intan45@gmail.com', '0125264894', 'login', ' zxjkgkj');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phoneNum` varchar(100) NOT NULL,
  `addresID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `deliveryID` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `purchaseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LoginID` int(100) NOT NULL,
  `EmailUser` varchar(100) NOT NULL,
  `PasswordUser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `online_pay`
--

CREATE TABLE `online_pay` (
  `paymentID` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `deliveryID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordering`
--

CREATE TABLE `ordering` (
  `orderID` int(100) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `payment` varchar(30) DEFAULT NULL,
  `item` decimal(10,2) DEFAULT NULL,
  `status` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordering`
--

INSERT INTO `ordering` (`orderID`, `fullname`, `phone`, `email`, `payment`, `item`, `status`) VALUES
(35, 'AMIRUL AKMAL', '0184072976', 'intanmantinna75@gmail.com', 'Cash', '60.90', 'pick up'),
(36, 'AMIRUL AKMAL', '0125264894', 'intan123@gmail.com', 'Cash', '60.90', 'In Progress'),
(47, 'intan', '', 'intan123@gmail.com', 'Online Payment', '79.00', 'delivered'),
(48, 'alip', '', 'aliff@gmail.com', 'Online Payment', '79.00', 'Payment');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `creditcardnumber` int(255) NOT NULL,
  `expmonth` int(255) NOT NULL,
  `expyear` varchar(255) NOT NULL,
  `zipcvv` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `fullname`, `address`, `city`, `state`, `zip`, `creditcardnumber`, `expmonth`, `expyear`, `zipcvv`) VALUES
(19, 'NUR HUDA', '211', 'balik pulau', 'Selangor', '16200', 2147483647, 12, '2026', '111'),
(20, 'intan', '391', 'balik pulau', 'penang', '11010', 2147483647, 12, '2026', '110'),
(22, 'hazz', '110', 'santoi', 'penang', '11201', 2147483647, 10, '2023', '882'),
(24, 'saka', '118', 'sungai', 'Selangor', '33101', 2147483647, 10, '2013', '225'),
(25, '', '', '', '', '', 0, 0, '', ''),
(35, 'intan', '62', 'balik pulau', 'penang', '11010', 354120, 41, '53210', '212'),
(36, 'atifah', '65', 'balik pulau', 'penang', '11010', 2147483647, 23, '51', '325');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `category`) VALUES
(30, 'Yellow Cake', '60.90', 'yellowCakes.jpg', '101'),
(31, 'White Donut', '4.00', 'whiteDonut.jpg', '102'),
(33, 'Tiramisu', '112.00', 'tiramisu.jpg', '101'),
(34, 'Sweet Cake', '108.00', 'SweetCake.jpg', '101'),
(35, 'Sky Cake', '80.00', 'skyCake.jpg', '101'),
(36, 'Sausage Cheese', '6.00', 'sausagecheese.jpg', '102'),
(37, 'Sausage Bun', '5.20', 'sausagebun.jpg', '102'),
(38, 'Red Velvet', '119.00', 'Redvelvet.jpg', '101'),
(39, 'Rainbow Cake', '73.00', 'rainbowmille.jpg', '101'),
(42, 'Heart Cookies', '6.90', 'HeartCookies.jpg', '102'),
(43, 'Garlic Sausage', '5.00', 'garlicsausage.jpg', '102'),
(44, 'Egg Chicken', '7.90', 'EggChicken.jpg', '102'),
(46, 'Blueberry Danish', '6.30', 'blueberryDanish.jpg', '102'),
(47, 'Lemon Cake', '67.00', 'lemon.jpg', '101'),
(48, 'White Cake', '97.50', 'WhiteCake2.jpg', '101'),
(50, 'Oreo Cake', '85.80', 'Oreocake.jpg', '101'),
(52, 'Belgium', '53.00', 'Belgium.jpg', '102'),
(53, 'Blueberry Danish', '15.90', 'blueberryDanish.jpg', '102'),
(54, 'Brownies', '65.00', 'Brownies.jpg', '101'),
(55, 'Chocolate Cake', '79.00', 'ChocolateCake.jpg', '101'),
(56, 'Flower Cake', '72.00', 'flower.jpg', '101'),
(57, 'Mango Cake', '98.00', 'mango_cake.jpg', '101'),
(58, 'Strudel ', '9.00', 'dessert.jpg', '102'),
(59, 'cinamon', '9.90', 'cinamon.jpg', '102'),
(60, 'Coklat Banana', '8.60', 'coklatbanana.jpg', '102'),
(64, 'choco', '23.00', 'ChocolateCake.jpg', '101');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseID` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `pastryID` varchar(100) NOT NULL,
  `customerID` varchar(100) NOT NULL,
  `cakeID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `RegID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`RegID`, `name`, `email`, `password`, `confirm_password`) VALUES
(2, 'intan123', 'intan123@gmail.com', '46a7357b0b816cb9dd56d70d2a385cfd', ''),
(11, 'intan', 'intanmantinna57@gmail.com', '72b32a1f754ba1c09b3695e0cb6cde7f', ''),
(18, 'intan', 'intanmantinna75@gmail.com', 'dc954aaf0e567d2710dff705d9e671c3', ''),
(19, 'test', 'intan123@gmail.com', '331b184847bb1808123473d76c45540b', ''),
(20, 'intan', 'intan12@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', ''),
(21, 'intan', 'intan12@gmail.com', '6add84506c86a658bc85038f91e35ce7', ''),
(22, 'test', 'test1234@mmm', '3fd5c2a0df1ce9dc01f0698adc57c72b', ''),
(23, 'test', 'test1234@mmm', '8ce87b8ec346ff4c80635f667d1592ae', ''),
(24, 'intan', 'intan456@gmail.com', 'bad4ce7fa4bcebdc88332770a5da7685', ''),
(25, 'intan', 'intanmantinna75@gmail.com', '6add84506c86a658bc85038f91e35ce7', ''),
(26, 'Najwa', 'najwa@gmail.com', '4b8086124f48523d75f69dc4096b427d', ''),
(27, 'intan', 'intan123@gmail.com', '25f9e794323b453885f5181f1b624d0b', ''),
(28, 'atifah', 'atifah@gmail.com', '25d55ad283aa400af464c76d713c07ad', ''),
(32, 'aliff', 'aliff@gmail.com', '25d55ad283aa400af464c76d713c07ad', '');

-- --------------------------------------------------------

--
-- Table structure for table `register_admin`
--

CREATE TABLE `register_admin` (
  `regAdminID` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_admin`
--

INSERT INTO `register_admin` (`regAdminID`, `name`, `email`, `password`, `confirm_password`) VALUES
(7, 'INTAN NUR MARTINNA BINTI BASRI', 'intan123@gmail.com', '3eda04d8b718281111f2ac389dd18bac', ''),
(11, 'intan', 'intan123@gmail.com', '25d55ad283aa400af464c76d713c07ad', ''),
(13, 'intan', 'intan55@gmail.com', '25d55ad283aa400af464c76d713c07ad', ''),
(14, 'huda', 'nurhuda@gmail.com', '03afa3a0953dbfa58ccdae8982af6d5d', ''),
(15, 'kami', 'hina@gmail.com', '25d55ad283aa400af464c76d713c07ad', ''),
(16, 'atifah', 'atifah@gmail.com', '25d55ad283aa400af464c76d713c07ad', ''),
(17, 'huda', 'nurhudaeieliana@gmail.com', '25d55ad283aa400af464c76d713c07ad', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` int(100) NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusId` int(20) NOT NULL,
  `statusName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusId`, `statusName`) VALUES
(110, 'payment'),
(111, 'In Progress'),
(112, 'delivered'),
(113, 'pick up');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`deliveryID`),
  ADD UNIQUE KEY `purcahseID` (`purchaseID`),
  ADD UNIQUE KEY `purchaseID` (`purchaseID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`LoginID`);

--
-- Indexes for table `online_pay`
--
ALTER TABLE `online_pay`
  ADD PRIMARY KEY (`paymentID`),
  ADD UNIQUE KEY `deliveryID` (`deliveryID`);

--
-- Indexes for table `ordering`
--
ALTER TABLE `ordering`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deliveryID` (`address`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseID`),
  ADD UNIQUE KEY `pastryID` (`pastryID`),
  ADD UNIQUE KEY `customerID` (`customerID`),
  ADD UNIQUE KEY `cakeID` (`cakeID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`RegID`);

--
-- Indexes for table `register_admin`
--
ALTER TABLE `register_admin`
  ADD PRIMARY KEY (`regAdminID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `deliveryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `LoginID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `online_pay`
--
ALTER TABLE `online_pay`
  MODIFY `paymentID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordering`
--
ALTER TABLE `ordering`
  MODIFY `orderID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `RegID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `register_admin`
--
ALTER TABLE `register_admin`
  MODIFY `regAdminID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
