-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 02:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `purchaseditems`
--

CREATE TABLE `purchaseditems` (
  `sellerid` int(11) NOT NULL,
  `buyerid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `who` varchar(20) NOT NULL,
  `mode` varchar(20) NOT NULL,
  `cardno` bigint(20) NOT NULL,
  `cvv` int(11) NOT NULL,
  `image` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `addid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchaseditems`
--

INSERT INTO `purchaseditems` (`sellerid`, `buyerid`, `price`, `who`, `mode`, `cardno`, `cvv`, `image`, `description`, `addid`) VALUES
(30, 1, 250000, 'company', 'card', 444498651478, 222, 'images/sell/car.jpg', 'car with working condition', 0),
(2, 1, 42000, 'user', 'card', 1245789635, 255, 'images/sell/compouter1.jpg', 'computer with all equipments', 0),
(0, 1, 0, '', 'card', 1245789635, 255, '', '', 0),
(2, 1, 15000, 'user', 'cod', 0, 0, 'images/sell/computer.jpg', 'computer with monitor', 0),
(2, 1, 450, 'user', 'card', 123456789, 125, 'images/sell/pan.webp', 'a pan for dosa', 0),
(0, 1, 0, '', 'card', 123456789, 232, '', '', 0),
(0, 1, 0, '', 'card', 123456789, 232, '', '', 0),
(2, 1, 500, 'user', 'card', 4244, 44, 'images/sell/pan.webp', 'a pan for dosa', 0),
(2, 1, 550, 'user', 'cod', 0, 0, 'images/sell/pan.webp', 'a computer with all equipments', 0),
(5, 3, 50000, 'user', 'cod', 0, 0, 'images/sell/51V8ObWrpKL._AC_SX679_.jpg', 'Iphone X new product ', 26);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `category` text NOT NULL,
  `itemname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`category`, `itemname`) VALUES
('ELECTRONICS', 'a pan of cost 2000');

-- --------------------------------------------------------

--
-- Table structure for table `sellingitems`
--

CREATE TABLE `sellingitems` (
  `sellerid` int(11) NOT NULL,
  `price` int(100) NOT NULL,
  `description` longtext NOT NULL,
  `image` text NOT NULL,
  `category` text NOT NULL,
  `addid` int(11) NOT NULL,
  `who` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellingitems`
--

INSERT INTO `sellingitems` (`sellerid`, `price`, `description`, `image`, `category`, `addid`, `who`) VALUES
(5, 10000, ' New Microwave oven ', 'images/sell/Large-940x620r.jpg', 'kitchenaccessories', 27, 'user'),
(5, 10000, ' New Microwave oven ', 'images/sell/Large-940x620r.jpg', 'kitchenaccessories', 28, 'user'),
(32, 899, 'Dresses', 'images/sell/Boutique-business.jpg', 'clothes', 38, 'company');

-- --------------------------------------------------------

--
-- Table structure for table `ssidetails`
--

CREATE TABLE `ssidetails` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phnumber` bigint(10) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ssidetails`
--

INSERT INTO `ssidetails` (`id`, `name`, `place`, `email`, `password`, `phnumber`, `companyname`, `image`) VALUES
(30, 'Durga', 'banglore', 'dd@gmail.com', '1234', 9885542320, 'DD Retails', 'images/compouter1.jpg'),
(31, 'chalapathi', 'hyderabad', 'chalapathibatchu@gmail.com', '123', 9885546730, 'Pharma Company', 'images/img1.jpg\r\n'),
(32, 'priya', 'hyderabad', 'priyachirithoti@gmail.com', '12345', 9490361877, 'priya botiques', 'images/Boutique-business.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `name` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phnumber` bigint(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`name`, `place`, `email`, `password`, `phnumber`, `id`) VALUES
('sowmya', 'guntur', 'krishnasowmyab@gmail.com', '7013', 7013193531, 3),
('priya', 'guntur', 'priyachirithoti@gmail.com', '2530', 9490361877, 5);

-- --------------------------------------------------------

--
-- Table structure for table `wishlistitems`
--

CREATE TABLE `wishlistitems` (
  `userid` int(11) NOT NULL,
  `sellerid` int(11) NOT NULL,
  `addid` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `who` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sellingitems`
--
ALTER TABLE `sellingitems`
  ADD KEY `addid` (`addid`);

--
-- Indexes for table `ssidetails`
--
ALTER TABLE `ssidetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellingitems`
--
ALTER TABLE `sellingitems`
  MODIFY `addid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `ssidetails`
--
ALTER TABLE `ssidetails`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
