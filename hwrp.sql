-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 02:59 PM
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
  `adminUsername` varchar(20) NOT NULL,
  `adminPassword` varchar(20) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `adminPhone` int(12) NOT NULL,
  `adminAddress` varchar(40) NOT NULL,
  `adminEmail` varchar(30) NOT NULL,
  `adminStatus` enum('Admin') NOT NULL DEFAULT 'Admin'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `cusAddress` varchar(250) NOT NULL,
  `cusEmail` varchar(30) NOT NULL,
  `cusStatus` enum('customer') NOT NULL DEFAULT 'customer',
  `adminID` int(30) NOT NULL,
  `techID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cusID`, `cusUsername`, `cusPassword`, `cusName`, `cusPhone`, `cusAddress`, `cusEmail`, `cusStatus`, `adminID`, `techID`) VALUES
(1, 'Ilham025', '111111', 'อิลฮัม ตุยง', '0837287292', '199 ม.3  ต.เขาตูม  อ.ยะรัง จ.ปัตตานี', 'ang111@gmail.com', 'customer', 1, 1),
(3, 'Nona4560', '1111', 'นอร์นา  นานี', '0982323333', '212 ต.บ้านนา อ.จะนะ จ.สงขลา 90130', 'ty@gmail.com', 'customer', 1, 0),
(5, 'haya', '123456', 'รัสมี แข', '0892351022', '159/87 ท่าเรือ', 'ha@gmail.com', 'customer', 1, 0),
(6, 'Han4151', '415978', 'โนรีฮัน   ฮะ', '0828249468', '61/5 ม.8 ต.บ้านนา', 'kinah.120415@gmail.com', 'customer', 1, 0),
(15, 'koko', '111111', 'อิบติซาม  ยิ้มยิ้ม', '0828249468', '61/5 ม.8 ต.บ้านนา', 'kinah.120415@gmail.com', 'customer', 1, 0),
(17, 'Sunee12', '112233', 'สุนีย์   เกษม', '0828249468', '61/5 ม.8 ต.บ้านนา   อ.จะนะ   จ.สงขลา', 'kinah.120415@gmail.com', 'customer', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `infor_inform`
--

CREATE TABLE `infor_inform` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `main` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `descrip` varchar(200) NOT NULL,
  `hdate` date NOT NULL,
  `ntime` time NOT NULL,
  `cusID` int(100) NOT NULL,
  `techID` int(70) NOT NULL,
  `status` enum('รอการยืนยัน','กำลังดำเนินการ','ซ่อมเสร็จ','ยกเลิก') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infor_inform`
--

INSERT INTO `infor_inform` (`id`, `date`, `main`, `sub`, `descrip`, `hdate`, `ntime`, `cusID`, `techID`, `status`) VALUES
(1, '2020-03-08 15:23:34', '  การไฟฟ้า', 'สายไฟ', 'มันรั่ว', '2020-03-05', '13:34:00', 1, 1, 'กำลังดำเนินการ'),
(2, '2020-03-08 15:27:18', '  การไฟฟ้า', 'หม้อแปลง', 'หม้อแตก', '2020-03-12', '22:57:00', 1, 2, 'กำลังดำเนินการ'),
(5, '2020-03-11 10:25:26', '  การไฟฟ้า', 'สายไฟ', 'ไอ้ต้าว เหม็นรักแร้', '2020-04-04', '20:33:00', 3, 1, 'กำลังดำเนินการ'),
(6, '2020-03-15 05:37:41', 'ระบบน้ำและประปา', 'ซิ้งค์', 'fgjhk', '2020-03-04', '12:30:00', 1, 2, 'กำลังดำเนินการ'),
(7, '2020-03-18 17:08:06', '  การไฟฟ้า', 'หม้อแปลง', '123456789', '2020-03-28', '23:11:00', 1, 1, 'ซ่อมเสร็จ'),
(8, '2020-03-19 02:32:55', 'เครื่องใช้ไฟฟ้า', 'พัดลม', 'ggggggggggggggg', '2020-03-10', '12:13:00', 1, 1, 'กำลังดำเนินการ'),
(9, '2020-04-04 16:17:00', '  การไฟฟ้า', 'สายไฟ', 'xsceghed', '2020-04-15', '14:00:00', 3, 2, 'กำลังดำเนินการ'),
(10, '2020-04-13 04:47:32', '  การไฟฟ้า', 'สายไฟ', 'สวยไฟรั่ว', '2020-04-22', '08:00:00', 1, 1, 'รอการยืนยัน'),
(11, '2020-04-14 01:19:02', 'ระบบน้ำและประปา', 'ซิ้งค์', 'แตกหัก', '2020-04-24', '08:11:00', 1, 1, 'รอการยืนยัน'),
(12, '2020-04-15 17:52:35', 'รีโนเวทบ้าน', 'กระเบื้อง', 'ต้องการต่อเติมบ้าน', '2020-04-24', '08:30:00', 3, 5, 'กำลังดำเนินการ'),
(13, '2020-04-21 12:16:34', 'ระบบน้ำและประปา', 'ท่อ', 'เสีย', '2020-04-18', '22:59:00', 15, 0, 'รอการยืนยัน');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(50) NOT NULL,
  `topic_n` varchar(100) NOT NULL,
  `info_n` varchar(100) NOT NULL,
  `date_n` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `topic_n`, `info_n`, `date_n`, `adminID`) VALUES
(1, 'Admin', '    รู้ดี ต่อความรู้สึก  very', '2020-04-21 12:31:01', 1),
(2, 'ข่าวประชาสัมพันธ์', 'โปรโมชั่น  20/20/2020', '2020-03-26 14:58:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cusID` int(20) NOT NULL,
  `adminID` int(20) NOT NULL,
  `status` enum('รออนุมัติ','ได้รับแล้ว','ยังไม่ได้รับ') NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report_tech`
--

CREATE TABLE `report_tech` (
  `id_re` int(20) NOT NULL,
  `date_re` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `detail_re` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price_re` int(20) NOT NULL,
  `adminID` int(20) NOT NULL,
  `cusID` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `techID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_tech`
--

INSERT INTO `report_tech` (`id_re`, `date_re`, `detail_re`, `price_re`, `adminID`, `cusID`, `id`, `techID`) VALUES
(1, '2020-04-19 08:52:48', 'ซ่อมตามที่เสียจ่ะ', 200, 0, 1, 1, 1),
(2, '2020-04-19 08:53:12', 'ซ่อมเรีบบร้อยแล้วน่าาา', 500, 0, 3, 5, 1),
(3, '2020-04-21 02:25:59', 'ggggg', 200, 0, 1, 0, 2),
(4, '2020-04-21 02:26:15', 'cc', 200, 0, 3, 0, 1),
(5, '2020-04-21 02:33:00', 'jj', 200, 0, 1, 0, 1),
(6, '2020-04-21 02:39:39', 'ภภ', 500, 0, 1, 0, 1),
(7, '2020-04-21 02:40:54', 'นน', 200, 0, 1, 0, 1),
(8, '2020-04-21 02:42:22', 'gg', 500, 0, 1, 1, 1),
(9, '2020-04-21 12:09:07', 'โอเคแล้วๆ', 200, 0, 3, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(10) NOT NULL,
  `date_c` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `detail_review` varchar(100) NOT NULL,
  `cusID` int(10) NOT NULL,
  `adminID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `date_c`, `detail_review`, `cusID`, `adminID`) VALUES
(1, '2020-03-02 08:38:13', 'dffgf', 0, 0),
(2, '2020-03-02 09:09:04', 'หไกดำำดไก', 1, 0),
(3, '2020-03-02 09:13:09', 'อยากจะบ้าตายยยยยยยยยยยยยยยย', 3, 0),
(4, '2020-03-02 09:32:12', 'ฮาาาาาาาาาาาาาาาาา', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_sv` int(100) NOT NULL,
  `title_sv` varchar(100) NOT NULL,
  `info_sv` varchar(100) NOT NULL,
  `price_sv` int(100) NOT NULL,
  `note_sv` varchar(200) NOT NULL,
  `img_sv` varchar(255) DEFAULT NULL,
  `adminID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_types`
--

CREATE TABLE `sub_types` (
  `id_sub` int(10) NOT NULL,
  `name_sub` varchar(50) NOT NULL,
  `id_tech` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_types`
--

INSERT INTO `sub_types` (`id_sub`, `name_sub`, `id_tech`) VALUES
(1, 'หม้อแปลง', 1),
(2, 'สายไฟ', 1),
(3, 'มอเตอร์', 1),
(4, 'หลอดไฟ', 1),
(5, 'ท่อ', 2),
(6, 'ถังน้ำ', 2),
(7, 'ซิ้งค์', 2),
(8, 'ก๊อกน้ำ', 2),
(9, 'เตารีด', 3),
(10, 'เครื่องซักผ้า', 3),
(11, 'พัดลม', 3),
(12, 'โทรทัศน์', 3),
(13, 'ตุ้เย็น', 3),
(14, 'หลังคา', 4),
(15, 'เพดาน', 4),
(16, 'ผนัง', 4),
(17, 'กระเบื้อง', 4);

-- --------------------------------------------------------

--
-- Table structure for table `technicain`
--

CREATE TABLE `technicain` (
  `techID` int(11) NOT NULL,
  `techUsername` varchar(20) NOT NULL,
  `techPassword` varchar(20) NOT NULL,
  `techName` varchar(100) NOT NULL,
  `techPhone` int(12) NOT NULL,
  `techAddress` varchar(40) NOT NULL,
  `techEmail` varchar(30) NOT NULL,
  `techStatus` enum('technician') NOT NULL DEFAULT 'technician',
  `adminID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technicain`
--

INSERT INTO `technicain` (`techID`, `techUsername`, `techPassword`, `techName`, `techPhone`, `techAddress`, `techEmail`, `techStatus`, `adminID`) VALUES
(1, 'koko', '1111', 'นิฮุสนี นิอุมา', 8367243, '185/15 ม. 1 ต.เจ๊ะเห', 'nikhusnee1003@gmail.com', 'technician', 1),
(2, 'misk12', '1111', 'มิสกะหฺ์ กาเซ็ง', 8367243, '18 ม. 1 ต.เจ๊ะเห', 'misk1003@gmail.com', 'technician', 1),
(4, 'Da1122', '1122', 'อภิสิทธ์ ดอเลาะ', 965844441, '121 ต.ตาบา อ.นารา จ.นาาาา 90130', 'suneekasem4@gmail.com', 'technician', 1),
(5, 'nik', 'nik', 'นิฮุสนี', 2147483647, '61/5 ม.8 ต.บ้านนา', 'kinah.120415@gmail.com', 'technician', 1),
(6, 'Alifand11', '1234', 'Alifandee kamin', 828249468, '61/5 ม.8 ต.บ้านนา อ.จะนะ  จ.สงขลา', 'kinah.120415@gmail.com', 'technician', 1),
(7, 'saki11', '1212', 'ปารีนา  ประชารัฐ', 828249468, '61/5 ม.8 ต.บ้านนา ต.บ้านนา ', 'kinah.120415@gmail.com', 'technician', 0),
(16, 'Apisit01', '1111', 'Apisit  Tohgem', 828249468, '61/5 ม.8 ต.บ้านนา', 'kinah.120415@gmail.com', 'technician', 1);

-- --------------------------------------------------------

--
-- Table structure for table `typestech`
--

CREATE TABLE `typestech` (
  `id_tech` int(10) NOT NULL,
  `name_types` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typestech`
--

INSERT INTO `typestech` (`id_tech`, `name_types`) VALUES
(1, '  การไฟฟ้า'),
(2, 'ระบบน้ำและประปา'),
(3, 'เครื่องใช้ไฟฟ้า'),
(4, 'รีโนเวทบ้าน');

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `report_tech`
--
ALTER TABLE `report_tech`
  ADD PRIMARY KEY (`id_re`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_sv`);

--
-- Indexes for table `sub_types`
--
ALTER TABLE `sub_types`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `technicain`
--
ALTER TABLE `technicain`
  ADD PRIMARY KEY (`techID`);

--
-- Indexes for table `typestech`
--
ALTER TABLE `typestech`
  ADD PRIMARY KEY (`id_tech`);

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
  MODIFY `cusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `infor_inform`
--
ALTER TABLE `infor_inform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_tech`
--
ALTER TABLE `report_tech`
  MODIFY `id_re` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_sv` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_types`
--
ALTER TABLE `sub_types`
  MODIFY `id_sub` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `technicain`
--
ALTER TABLE `technicain`
  MODIFY `techID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `typestech`
--
ALTER TABLE `typestech`
  MODIFY `id_tech` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
