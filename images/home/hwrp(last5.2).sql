-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 12:14 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hwrp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminUsername` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminPassword` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminPhone` int(12) NOT NULL,
  `adminAddress` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminEmail` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminStatus` enum('Admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminUsername`, `adminPassword`, `adminName`, `adminPhone`, `adminAddress`, `adminEmail`, `adminStatus`) VALUES
(1, 'admin', 'admin', 'admin admin', 828249468, '61/5 ม.8 ต.บ้านนา อ.จะนะ จ.สงขลา 90130', 'sakinahhh@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cusID` int(11) NOT NULL,
  `cusUsername` varchar(20) NOT NULL,
  `cusPassword` varchar(20) NOT NULL,
  `cusName` varchar(100) NOT NULL,
  `cusPhone` varchar(12) NOT NULL,
  `cusAddress` varchar(40) NOT NULL,
  `cusEmail` varchar(30) NOT NULL,
  `cusStatus` enum('customer') NOT NULL DEFAULT 'customer',
  `adminID` int(30) NOT NULL,
  `techID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cusID`, `cusUsername`, `cusPassword`, `cusName`, `cusPhone`, `cusAddress`, `cusEmail`, `cusStatus`, `adminID`, `techID`) VALUES
(2, 'Han4151', '1234', 'Nurihan Ha', '0897564125', '1872/5', 'han123@gmail.com', 'customer', 1, 0),
(3, 'Ta', 'Nureeta', 'Nureeta Yayor', '0828249468', '61/5 ม.8 ต.บ้านนา', 'kinah.120415@gmail.com', 'customer', 1, 0),
(12, 'koko', '111', 'Nikhusni Nikuma', '0896547211', '123/7 ', 'nik1003@gmail.com', 'customer', 0, 0),
(14, 'Ilham', '1122', 'Ilham bassam', '0980468880', '187 Yarsng Pattani', 'ilham38@gmail.com', 'customer', 1, 0),
(16, 'Miskah1995', '1122', 'Miskah  Ka', '088888888', '189 Yala ', 'miskah1122@gmail.com', 'customer', 1, 0),
(17, 'ty', '333', 'tylas yuan', '0236959698', 'yaha yala', 'ty@gmail.com', 'customer', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `infor_inform`
--

CREATE TABLE `infor_inform` (
  `id` int(11) NOT NULL,
  `equipment` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `descrip` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hdate` date NOT NULL,
  `ntime` time NOT NULL,
  `cusID` int(100) NOT NULL,
  `techID` int(70) NOT NULL,
  `status` enum('wait_confirm','checked','claim','cannot','chang','cancle') COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `types` enum('Electrician','Plumber','Electrical_appliances','Home_renuvate') COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `infor_inform`
--

INSERT INTO `infor_inform` (`id`, `equipment`, `descrip`, `hdate`, `ntime`, `cusID`, `techID`, `status`, `types`) VALUES
(1, 'เพดาน', 'แตก หัก', '2020-02-02', '00:00:00', 2, 1, 'checked', 'Electrician'),
(2, 'ไฟ', 'ไฟเปิดไม่ติด', '2020-02-02', '00:00:00', 3, 1, 'checked', ''),
(3, 'ewew', 'tyu', '2020-02-07', '11:00:00', 3, 1, 'checked', ''),
(4, 'ytytyt', 'ttttt', '2020-02-14', '11:11:00', 2, 1, 'checked', ''),
(5, 'data', 'fank', '2020-02-20', '00:01:00', 3, 1, 'checked', ''),
(8, 'you', 'you', '2020-02-28', '00:00:11', 3, 1, 'checked', ''),
(9, 'rrrrrrrrrr', 'rrr', '2020-02-14', '00:01:11', 2, 1, 'checked', ''),
(12, 'rrytrgef', 'dgfgrgre', '2020-02-20', '11:22:22', 2, 1, 'checked', ''),
(14, 'à¸«à¸¡à¹‰à¸­à¹€à¸ªà¸µà¸¢', 'à¹„à¸Ÿà¹à¸•à¸', '2020-02-27', '11:11:11', 3, 4, 'wait_confirm', ''),
(15, 'à¸—à¹ˆà¸­à¹€à¸ªà¸µà¸¢', 'à¹€à¸ªà¸µà¸¢à¸«à¸²à¸¢', '2020-02-28', '01:11:11', 2, 0, 'wait_confirm', ''),
(16, 'à¸«à¸¡à¹‰à¸­à¹à¸›à¸¥à¸‡', 'à¸£à¸°à¹€à¸šà¸´à¸”', '2020-02-28', '11:11:11', 2, 4, 'checked', ''),
(17, 'ddddd', 'ddddd', '2020-02-21', '111:11:11', 3, 0, 'wait_confirm', ''),
(18, 'à¹à¸šà¸•', 'à¹€à¸ªà¸·à¹ˆà¸­à¸¡', '2020-02-20', '11:11:11', 3, 0, 'wait_confirm', ''),
(19, 'Ang', 'Ang', '2020-02-20', '111:11:11', 3, 1, 'checked', ''),
(20, 'Nik', 'Niki', '2020-02-28', '111:11:11', 3, 4, 'checked', 'Electrical_appliances'),
(21, 'à¸•à¹ˆà¸­à¹€à¸•à¸´à¸¡à¸«à¹‰à¸­à¸‡à¸™à¹‰à¸³', 'à¹ƒà¸«à¸¡à¹ˆ', '2020-02-15', '01:11:11', 16, 3, 'checked', ''),
(22, 'à¸«à¸¥à¸±à¸‡à¸„à¸²à¸£à¹ˆà¸§à¸‡', 'à¸à¸™à¸•à¸', '2020-02-27', '111:11:11', 16, 0, 'wait_confirm', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(50) NOT NULL,
  `topic_n` varchar(100) NOT NULL,
  `info_n` varchar(100) NOT NULL,
  `date_n` varchar(50) NOT NULL,
  `adminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `RID` int(100) NOT NULL,
  `Cusername` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Ntime` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `CID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `technicain`
--

CREATE TABLE `technicain` (
  `techID` int(11) NOT NULL,
  `techUsername` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `techPassword` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `techName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `techPhone` int(12) NOT NULL,
  `techAddress` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `techEmail` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `techStatus` enum('technician') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'technician',
  `tech_Types` enum('Electrician','Plumber','Electrical_appliances','Home_renuvate') COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technicain`
--

INSERT INTO `technicain` (`techID`, `techUsername`, `techPassword`, `techName`, `techPhone`, `techAddress`, `techEmail`, `techStatus`, `tech_Types`, `adminID`) VALUES
(1, 'Apisit01', '111', 'Apisit  Tohgem', 922685411, '178 ต.บ้านนา อ.จะนะ จ.สงขลา', 'Aaapisit@gmail.com', 'technician', 'Plumber', 1),
(3, 'saki', '1212', 'zaza Yoooo', 828249468, '61/5 à¸¡.8 à¸•.à¸šà¹‰à¸²à¸™à¸™à¸²', 'kinah.120415@gmail.com', 'technician', 'Home_renuvate', 1),
(4, 'Yoki', '123', 'Yokiya Tata', 85855552, '189', 'Aaiooit@gmail.com', 'technician', 'Electrical_appliances', 1),
(6, 'Yokima', '1234', 'Koni yanya', 85855552, '189', 'Aoit@gmail.com', 'technician', 'Electrician', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(100) NOT NULL,
  `Username` int(8) NOT NULL,
  `Uname` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Uphone` int(10) NOT NULL,
  `Uaddress` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Utype` enum('Admin','technician') COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Upassword` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cusID`);

--
-- Indexes for table `infor_inform`
--
ALTER TABLE `infor_inform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `technicain`
--
ALTER TABLE `technicain`
  ADD PRIMARY KEY (`techID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `infor_inform`
--
ALTER TABLE `infor_inform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `technicain`
--
ALTER TABLE `technicain`
  MODIFY `techID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
