-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 04:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `uname` varchar(20) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` int(250) NOT NULL,
  `buy_status` tinyint(1) NOT NULL,
  `completed_order_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`uname`, `pid`, `pname`, `price`, `buy_status`, `completed_order_status`) VALUES
('john', '3', 'Galaxy S11', 6000, 0, 0),
('john', '4', 'Mi 5', 15000, 0, 0),
('john', '4', 'Mi 5', 15000, 0, 0),
('john', '12', 'Acer Nitro 5', 60000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Buy_Price` varchar(40) NOT NULL,
  `Sell_Price` varchar(40) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `Buy_Price`, `Sell_Price`, `image`) VALUES
(1, 'Lux', '50', '100', 'Lux-Rose-Vitamin-E-Soap-150gm.png'),
(2, 'Iphone', '1200', '1500', 'Apple-iPhone-11-Pro.jpg'),
(3, 'Galaxy S11', '5000', '6000', 'download.jpg'),
(4, 'Mi 5', '10000', '15000', 'download (1).jpg'),
(6, 'Mi 6', '15000', '19000', 'xiaomi-redmi-7-3.jpg'),
(7, 'mi 7', '20000', '25000', 'mi7.jpg'),
(8, 'Huwaei p30', '40000', '50000', '51zDfRUUhHL._AC_SX466_.jpg'),
(9, 'Huwaei p40', '45000', '55000', 'huawei-p40-pro-plus.jpg'),
(10, 'Huwaei p50', '45000', '55000', 'black.png'),
(11, 'Samsung A50', '20000', '30000', 'download (2).jpg'),
(12, 'Acer Nitro 5', '50000', '60000', 'Nitro5_AN515-56_Bl_Bk_modelpreview.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `uname` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `paddress` varchar(300) NOT NULL,
  `peraddress` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uname`, `name`, `gender`, `city`, `paddress`, `peraddress`, `phone`, `password`, `email`) VALUES
('john', 'John Nash', 'Male', 'mymensingh', 'New Senpara', 'Rangpur', '01623498722', 'eab7c169c851f1462a140448a299d8a6', 'john@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
