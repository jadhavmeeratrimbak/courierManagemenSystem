-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 05:12 AM
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
-- Table structure for table `charges_request_from_admin`
--

CREATE TABLE `charges_request_from_admin` (
  `CHAR_ID` int(11) NOT NULL,
  `SHOP_ID` int(11) NOT NULL,
  `PRO_ID` int(11) NOT NULL,
  `CHARGES` int(11) NOT NULL,
  `STATUS` varchar(20) NOT NULL
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
  `BOY_EXPERIENCE` varchar(100) NOT NULL,
  `BOY_UNAME` varchar(100) NOT NULL,
  `BOY_PASS` varchar(50) NOT NULL,
  `PHOTO` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_boy`
--

INSERT INTO `courier_boy` (`BOY_ID`, `BOY_NAME`, `BOY_CONTACT`, `BOY_EMAIL`, `BOY_ADHAR_NO`, `BOY_ADDRESS`, `BOY_EDUCTOIN`, `BOY_EXPERIENCE`, `BOY_UNAME`, `BOY_PASS`, `PHOTO`) VALUES
(14, 'santosh shinde', 8888776655, 'santosh@gmail.com', 22334455667788, 'pune', '10th', 'yes', 'cb1', 'cb1', 'upload/1_cus.png'),
(15, 'vishal rathod', 8888986756, 'vishal123@gmail.com', 34543454345445, 'latur', '12th', '1year', 'vishal', 'vishal1', 'upload/15_cus.png'),
(16, 'Ashish', 7824848668, 'ashu345@gmail.com', 78675645342356, 'latur', '12th', 'no', 'ashu', 'ashu1', 'upload/16_cus.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `CUS_NAME` varchar(100) NOT NULL,
  `WHICH_SHOP` int(11) NOT NULL,
  `CUS_CONTACT` bigint(20) NOT NULL,
  `CUS_EMAIL` varchar(50) NOT NULL,
  `CUS_ADDRESS` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `CUS_NAME`, `WHICH_SHOP`, `CUS_CONTACT`, `CUS_EMAIL`, `CUS_ADDRESS`, `USERNAME`, `PASSWORD`) VALUES
(8, 'suresh jagtap', 1, 7867564534, 'suresh21@gmail.com', 'vaibhav nagar, latur', 'suresh', 'suresh1'),
(9, 'mahesh survanshi', 1, 9878674567, 'mahesh23@gmail.com', 'old ausa road,latur', 'mahesh', 'mahesh1'),
(10, 'priya kamble', 1, 7859654534, 'priya@gmail.com', 'prakash nagar,latur', 'priya', 'priya1'),
(11, 'omprash chodari', 1, 7865453456, 'om@gmail.com', 'om nagar,latur', 'om', 'om1'),
(12, 'Ram jadhav', 1, 7864454354, 'ram@gmail.com', 'sham nagar,latur', 'ram', 'ram1'),
(13, 'sonali patil', 31, 9765346788, 'sonu@gmail.com', 'nandi stop', 'sp', 'sp123'),
(14, 'yogita mane', 31, 7788996655, 'yogita@gmil.com', 'umrga', 'yogi1', 'ym123'),
(15, 'rutuja aute', 31, 8877665544, 'rutu@gmail.com', 'pune', 'rutu', 'rutu123'),
(19, 'pragati dhaware', 33, 8866543447, 'pragati@gmail.com', 'khadgaon,latur', 'pragati', 'pragati1'),
(20, 'arpita wagh', 33, 9177553337, 'arpita@gmail.com', 'vaibhav ganesh mandir,latur', 'arpita', 'arpita1'),
(21, 'pranita majge', 33, 7766565657, 'pranita@gmail. com', '5no,latur', 'pranita', 'pranita1'),
(22, 'shubham patil', 34, 9766565475, 'shubham@gmail.com', 'moti nagar  latur', 'shubham', 'shubham1'),
(23, 'shradha shete', 34, 6775567877, 'shradha@gmail.com', 'wale nagar,latur', 'shradha', 'shradha1'),
(24, 'vaishnavi patil', 34, 8877665533, 'vaishu@gmail.com', 'pune', 'vaishu', 'vaishu1'),
(25, 'dhanu', 32, 4455667788, 'dhanu@gmail.com', 'latur', 'dhanu', '123'),
(26, 'Anita surwase', 36, 7867564534, 'anita@gmail.com', 'khadgoan road, latur', 'cu1', 'cu1'),
(27, 'punam', 32, 6677889955, 'punam@gmail.com', 'latur', 'punam', 'p123'),
(28, 'pragati', 32, 7788994455, 'pragati@gmail.com', 'mumbai', 'pragati', 'pragati1');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_form`
--

CREATE TABLE `enquiry_form` (
  `ID` int(100) NOT NULL,
  `SHOP_TYPE` varchar(100) NOT NULL,
  `SHOP_NAME` varchar(100) NOT NULL,
  `OWNER` varchar(100) NOT NULL,
  `OWNER_ADDRESS` varchar(100) NOT NULL,
  `SHOP_ADDRESS` varchar(100) NOT NULL,
  `CONTACT` int(11) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `EMAIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_form`
--

INSERT INTO `enquiry_form` (`ID`, `SHOP_TYPE`, `SHOP_NAME`, `OWNER`, `OWNER_ADDRESS`, `SHOP_ADDRESS`, `CONTACT`, `CITY`, `USERNAME`, `PASSWORD`, `EMAIL`) VALUES
(1, '3', 'pratu', 'patil', 'latur', 'latur', 2147483647, 'latur', 'co', 'c1', 'a@gmail.com'),
(2, '3', 'pratu1', 'bajaj', 'pune', 'pune', 2147483647, 'pune', 'bajaj', '13', 'b@gmail.com'),
(3, '10', 'bajaj', 'bajaj', 'latur', 'latur', 2147483647, 'latur', 'bajaj', 'bajaj1', 'bajaj@gmail.com'),
(4, '11', 'dhage', 'dhage', 'latur', 'latur', 2147483647, 'latur', 'dhage', 'dhage1', 'dhage@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `ID` int(11) NOT NULL,
  `PRODUCT` varchar(100) NOT NULL,
  `CUSTOMER` varchar(100) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `SHOP_ID` int(11) NOT NULL,
  `SEND1` varchar(4) NOT NULL,
  `ACCEPT1` varchar(10) NOT NULL,
  `KM` int(11) NOT NULL,
  `GRAND_TOTAL` int(11) NOT NULL,
  `per_km` int(11) NOT NULL,
  `DADDRESS` varchar(200) NOT NULL,
  `DDATE` date NOT NULL,
  `work_assign_id` int(11) NOT NULL,
  `boy_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`ID`, `PRODUCT`, `CUSTOMER`, `QUANTITY`, `SHOP_ID`, `SEND1`, `ACCEPT1`, `KM`, `GRAND_TOTAL`, `per_km`, `DADDRESS`, `DDATE`, `work_assign_id`, `boy_status`) VALUES
(1, '20', '26', 2, 32, 'yes', 'Accepted', 4, 640, 80, '7777', '2020-03-20', 14, ''),
(2, '22', '26', 1, 32, 'yes', 'Accepted', 77, 1771, 23, 'nnnn', '2020-03-27', 15, 'Delivered'),
(3, '32', '28', 2, 32, 'yes', 'Accepted', 10, 1600, 80, 'kk', '2020-03-25', 14, 'Dispatched');

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
  `SHOP_CITY` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `SHOP_EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`SHOP_ID`, `SHOP_TYPE`, `SHOP_NAME`, `SHOP_OWNER`, `OWNER_ADDRESS`, `SHOP_ADDRESS`, `SHOP_CONTACT`, `SHOP_CITY`, `USERNAME`, `PASSWORD`, `SHOP_EMAIL`) VALUES
(32, '10', 'omsai furniture', 'omprakash shinde', 'golai,latur', 'golai,latur', 8888567656, 'latur', 'shop1', 'shop1', 'om@gmail.com'),
(33, '11', 'memshab cosmatic', 'paware', 'nadi stop,latur', 'nadi stop,latur', 9518785645, 'latur', 'paware', 'paware1', 'p123@gmail.com'),
(35, '13', 'pari cloth', 'raju kale', 'latur', 'latur', 7898675667, 'latur', 'kale', 'kale1', 'kale234@gmail.com'),
(36, '13', 'Abhinav cloths', 'Abhi jadhav', 'latur', 'latur', 9934254556, 'latur', 'abhi', 'abhi1', 'abhi456@gmail.com'),
(37, '11', 'swara cosmatics', 'swara shinde', 'latur', 'latur', 8766534300, 'latur', 'swara', 'swara1', 'swara456@gmail.com'),
(38, '12', 'ajay foot', 'ajay swami', 'latur', 'latur', 9113882998, 'latur', 'ajay', 'ajay1', 'ajay67@gmail.com');

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
(10, 'furniture'),
(11, 'cosmatics'),
(12, 'footware'),
(13, 'cloth');

-- --------------------------------------------------------

--
-- Table structure for table `sh_product`
--

CREATE TABLE `sh_product` (
  `ID` int(11) NOT NULL,
  `PRODUCT_TYPE` varchar(100) NOT NULL,
  `WHICH_SHOP` int(11) NOT NULL,
  `CHARGES` int(11) NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sh_product`
--

INSERT INTO `sh_product` (`ID`, `PRODUCT_TYPE`, `WHICH_SHOP`, `CHARGES`, `STATUS`) VALUES
(12, 'Panjabi dress', 1, 0, 'pending'),
(13, 'sadi', 31, 10, 'accepted'),
(14, 'punjabi', 31, 6, 'pending'),
(15, 'kurti', 31, 0, 'pending'),
(16, 'dress', 31, 0, 'pending'),
(17, 'tshirt', 31, 0, 'pending'),
(18, 'sofa', 32, 2, 'accepted'),
(20, 'table', 32, 80, 'accepted'),
(21, 'chair', 32, 70, 'accepted'),
(22, 'dinner table', 32, 23, 'accepted'),
(23, 'foundation', 33, 0, 'pending'),
(24, 'lipstick', 33, 0, 'pending'),
(25, 'facewash', 33, 0, 'pending'),
(26, 'ring', 33, 0, 'pending'),
(27, 'kolhapuri', 34, 0, 'pending'),
(28, 'sandle', 34, 0, 'pending'),
(29, 'hil sandle', 34, 0, 'pending'),
(30, 'genis', 36, 0, 'pending'),
(31, 'cotton dress', 36, 0, 'pending'),
(32, 'small Chair', 32, 80, 'accepted');

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
(6, '10', 'Shivshi', 'MH2020'),
(7, '12', 'nana tampo', 'MH2343'),
(8, '14', 'Atul auto', 'MH5656'),
(9, '10', 'raj', 'MH8978');

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
(10, 'Truck'),
(11, 'Bicycle'),
(12, 'Tampo'),
(13, 'Van'),
(14, 'Auto');

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
-- Indexes for table `charges_request_from_admin`
--
ALTER TABLE `charges_request_from_admin`
  ADD PRIMARY KEY (`CHAR_ID`);

--
-- Indexes for table `courier_boy`
--
ALTER TABLE `courier_boy`
  ADD PRIMARY KEY (`BOY_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enquiry_form`
--
ALTER TABLE `enquiry_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `sh_product`
--
ALTER TABLE `sh_product`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `charges_request_from_admin`
--
ALTER TABLE `charges_request_from_admin`
  MODIFY `CHAR_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courier_boy`
--
ALTER TABLE `courier_boy`
  MODIFY `BOY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `enquiry_form`
--
ALTER TABLE `enquiry_form`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `SHOP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `shop_type`
--
ALTER TABLE `shop_type`
  MODIFY `SHOP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `sh_product`
--
ALTER TABLE `sh_product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `VC_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `VT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
