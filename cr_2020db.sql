-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 05:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr_2020db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `UNAME` varchar(100) NOT NULL,
  `PASS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `UNAME`, `PASS`) VALUES
(1, 'cr2020', '123');

-- --------------------------------------------------------

--
-- Table structure for table `charges_request`
--

CREATE TABLE `charges_request` (
  `REQ_ID` int(11) NOT NULL,
  `SHOP_SELECT` varchar(100) NOT NULL,
  `PRODUCT` varchar(100) NOT NULL,
  `CHARGES_PER_KM` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courier_boy`
--

CREATE TABLE `courier_boy` (
  `BOY_ID` int(11) NOT NULL,
  `BOY_NAME` varchar(100) NOT NULL,
  `BOY_CONTACT` bigint(20) NOT NULL,
  `BOY_EMAIL` varchar(100) NOT NULL,
  `BOY_ADHAR_NO` bigint(20) NOT NULL,
  `BOY_ADDRESS` varchar(100) NOT NULL,
  `BOY_EDUCTOIN` varchar(100) NOT NULL,
  `BOY_EXPERIENCE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_boy`
--

INSERT INTO `courier_boy` (`BOY_ID`, `BOY_NAME`, `BOY_CONTACT`, `BOY_EMAIL`, `BOY_ADHAR_NO`, `BOY_ADDRESS`, `BOY_EDUCTOIN`, `BOY_EXPERIENCE`) VALUES
(1, 'pratu', 4655683521, 'p@gmail.com', 5485734548845, '0', 'poly', 'no'),
(2, 'mam', 0, '', 0, '', '', ''),
(3, 'dhanu', 546878984, 'dhanu@gmail.com', 0, '', '', ''),
(4, 'dhanu', 54689638, 'dhanu@gmailcom', 52986398976836, 'pune', 'poly', 'yes'),
(5, '', 0, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `SHOP_ID` int(11) NOT NULL,
  `SHOP_TYPE` varchar(100) NOT NULL,
  `SHOP_NAME` varchar(100) NOT NULL,
  `SHOP_OWNER` varchar(100) NOT NULL,
  `OWNER_ADDRESS` varchar(100) NOT NULL,
  `SHOP_ADDRESS` varchar(100) NOT NULL,
  `SHOP_CONTACT` bigint(20) NOT NULL,
  `SHOP_EMAIL` varchar(100) NOT NULL,
  `SHOP_CITY` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`SHOP_ID`, `SHOP_TYPE`, `SHOP_NAME`, `SHOP_OWNER`, `OWNER_ADDRESS`, `SHOP_ADDRESS`, `SHOP_CONTACT`, `SHOP_EMAIL`, `SHOP_CITY`) VALUES
(1, '2', 'Pratik Musmade ', 'bajaj', 'latur', 'ausa road', 9568423204, 'pratikmusmadessjgod@gmail.com', 'latur'),
(2, '3', 'shivsahi', 'punam', 'latur', 'barshi road', 9854623015, 'd@gmail.com', 'latur');

-- --------------------------------------------------------

--
-- Table structure for table `shop_type`
--

CREATE TABLE `shop_type` (
  `SHOP_ID` int(11) NOT NULL,
  `SHOP_TYPE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_type`
--

INSERT INTO `shop_type` (`SHOP_ID`, `SHOP_TYPE`) VALUES
(1, ''),
(2, 'cloths'),
(3, 'furniture');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `VC_ID` int(5) NOT NULL,
  `VC_TYPE` varchar(100) NOT NULL,
  `VC_NAME` varchar(11) NOT NULL,
  `VC_NUMBER` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`VC_ID`, `VC_TYPE`, `VC_NAME`, `VC_NUMBER`) VALUES
(1, '', 'shivsahi', '0'),
(2, '', 'shivsahi', 'MH245008'),
(3, '', 'Pratik Musm', 'MH245008'),
(4, '3', 'shivsahi', 'MH245008');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `VT_ID` int(11) NOT NULL,
  `VT_TYPE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`VT_ID`, `VT_TYPE`) VALUES
(1, 'Truck'),
(2, 'auto'),
(3, 'tampo'),
(4, 'bike'),
(5, 'bicycle'),
(6, 'auto'),
(7, 'tampo'),
(8, 'TT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `charges_request`
--
ALTER TABLE `charges_request`
  ADD PRIMARY KEY (`REQ_ID`);

--
-- Indexes for table `courier_boy`
--
ALTER TABLE `courier_boy`
  ADD PRIMARY KEY (`BOY_ID`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`SHOP_ID`);

--
-- Indexes for table `shop_type`
--
ALTER TABLE `shop_type`
  ADD PRIMARY KEY (`SHOP_ID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`VC_ID`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`VT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `charges_request`
--
ALTER TABLE `charges_request`
  MODIFY `REQ_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courier_boy`
--
ALTER TABLE `courier_boy`
  MODIFY `BOY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `SHOP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shop_type`
--
ALTER TABLE `shop_type`
  MODIFY `SHOP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `VC_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `VT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
